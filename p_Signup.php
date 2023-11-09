<?php
class ProviderSignupHandler {
    private $hostname;
    private $username;
    private $password;
    private $database;
    private $conn;

    public function __construct($hostname, $username, $password, $database) {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;

        $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function processRegistration($provider_data) {
        // Extract provider data
        $p_name = $provider_data['UID'];
        $contact_no = $provider_data['number'];
        $email_id = $provider_data['email'];
        $country = $provider_data['country'];
        $add_state = $provider_data['state'];
        $city = $provider_data['c_name'];
        $dist = $provider_data['district'];
        $pin = $provider_data['p_code'];
        $h_num = $provider_data['h_num'];
        $services = $provider_data['services'];
        $p_password = $provider_data['password'];
        $fees = $provider_data['fees'];

        // Hash the password
        $hashedPassword = password_hash($p_password, PASSWORD_DEFAULT);

        // Insert address data into the 'addresss' table
        $address_query = "INSERT INTO addresss (country, add_state, city, dist, pin, house_no) VALUES ('$country', '$add_state', '$city', '$dist', '$pin', '$h_num')";
        if ($this->conn->query($address_query) === TRUE) {
            $add_id = $this->conn->insert_id; // Get the auto-generated add_id
        } else {
            echo "Error inserting address: " . $this->conn->error;
            return;
        }

        // Assuming $services is the user's selected service
        $services_query = "SELECT s_id FROM services WHERE s_name = '$services'";
        $services_result = $this->conn->query($services_query);

        if ($services_result->num_rows > 0) {
            $row = $services_result->fetch_assoc();
            $s_id = $row['s_id'];
        } else {
            echo "Service not found in the 'services' table.";
            return;
        }

        // Insert data into the 'sprovider' table
        $sprovider_query = "INSERT INTO sprovider (p_password, p_name, contact_no, email_id, add_id, s_id , fees) VALUES ('$hashedPassword','$p_name', '$contact_no', '$email_id', '$add_id', '$s_id' , '$fees')";
        if ($this->conn->query($sprovider_query) === TRUE) {
            echo '<script>
            alert("Registration successful!");
            window.location.href = "p_log.html";
            </script>';
        } else {
            echo '<script>
            alert("Error inserting sprovider. Please try again ");
            window.location.href = "p_log.html";
            </script>' . $this->conn->error;
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

if (isset($_POST['UID']) && isset($_POST['number']) && isset($_POST['services']) && isset($_POST['fees']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['state']) && isset($_POST['c_name']) && isset($_POST['h_num']) && isset($_POST['district']) && isset($_POST['p_code']) && isset($_POST['password'])) {
    $hostname = 'localhost';  // Change this to your database server hostname
    $username = 'root';       // Change this to your database username
    $password = '';           // Change this to your database password
    $database = 'homeservice'; // Change this to your database name

    $provider_data = $_POST;

    $signupHandler = new ProviderSignupHandler($hostname, $username, $password, $database);
    $signupHandler->processRegistration($provider_data);
    $signupHandler->closeConnection();
}
?>
