<?php
class SignupHandler {
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

    public function processRegistration($user_data) {
        // Extract user data
        $name = $user_data['UID'];
        $contact = $user_data['number'];
        $email = $user_data['email'];
        $password = $user_data['password'];
        $country = $user_data['country'];
        $state = $user_data['state'];
        $city = $user_data['c_name'];
        $dist = $user_data['district'];
        $pin = $user_data['p_code'];
        $houseNo = $user_data['h_num'];

        // Begin a transaction to ensure data consistency
        mysqli_autocommit($this->conn, false);
        $success = true;

        // Insert the address data into the "addresss" table
        $addressQuery = "INSERT INTO addresss (country, add_state, city, dist, pin, house_no) VALUES ('$country', '$state', '$city', '$dist', '$pin', '$houseNo')";
        if (!mysqli_query($this->conn, $addressQuery)) {
            $success = false;
        }

        // Get the auto-generated address ID
        $addressId = mysqli_insert_id($this->conn);

        // Hash the password
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Insert the customer data into the "customer" table with the address ID as a foreign key
        $customerQuery = "INSERT INTO customer (c_password, c_name, contact_no, email_id, add_id) VALUES ('$hashedPassword', '$name', '$contact', '$email', '$addressId')";
        if (!mysqli_query($this->conn, $customerQuery)) {
            $success = false;
        }

        // Commit or rollback the transaction based on success
        if ($success) {
            mysqli_commit($this->conn);
            echo '<script>
            alert("Account created successfully. Please login kindly !");
            window.location.href = "c_log.html";
        </script>';
        } else {
            mysqli_rollback($this->conn);
            echo '<script>
            alert("Registration failed. Please try again !");
            window.location.href = "c_log.html";
        </script>';
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

if (isset($_POST['UID']) && isset($_POST['number']) && isset($_POST['email']) && isset($_POST['country']) && isset($_POST['state']) && isset($_POST['c_name']) && isset($_POST['h_num']) && isset($_POST['district']) && isset($_POST['p_code']) && isset($_POST['password'])) {
    $hostname = 'localhost';  // Change this to your database server hostname
    $username = 'root';       // Change this to your database username
    $password = '';           // Change this to your database password
    $database = 'homeservice'; // Change this to your database name

    $user_data = $_POST;

    $signupHandler = new SignupHandler($hostname, $username, $password, $database);
    $signupHandler->processRegistration($user_data);
    $signupHandler->closeConnection();
}
?>
