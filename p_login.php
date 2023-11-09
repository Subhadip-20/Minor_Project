<?php

class ProviderLoginHandler {
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

    public function processLogin($user_email, $user_password) {
        // Prepare the SQL query to fetch data based on the provided email
        $sql = "SELECT p_password FROM sprovider WHERE email_id = '$user_email' LIMIT 1";

        // Execute the query
        $result = $this->conn->query($sql);

        if (!$result) {
            die("Query failed: " . $this->conn->error);
        }

        // Check if a matching row is found
        if ($result->num_rows === 1) {
            // Fetch the hashed password from the result
            $row = $result->fetch_assoc();
            $hashed_password = $row['p_password'];

            // Verify the provided password against the hashed password
            if (password_verify($user_password, $hashed_password)) {

                $_SESSION['useremail_p'] = $user_email;
                $_SESSION['flag']= "p";
                $_SESSION['user_authenticated'] = true;

                if (!isset($_SESSION['useremail_p'])) {
                    // Redirect to the login page 
                    header("Location:p_log.html");
                    
                }

                $this->redirect("homepage1.php", "Thanks for logging in!");
            } else {
                $this->redirect("p_log.html", "Login failed. Check your credentials and retry!!!");
            }
        } else {
            $this->redirect("p_log.html", "Email not found. Please register.");
        }
    }

    private function redirect($location, $message) {
        echo "<script>alert('$message');window.location.href='$location';</script>";
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

if (isset($_POST['UID']) && isset($_POST['password'])) {
    $hostname = 'localhost';  // Change this to your database server hostname
    $username = 'root';       // Change this to your database username
    $password = '';           // Change this to your database password
    $database = 'homeservice'; // Change this to your database name

    session_start();

    $user_email = $_POST['UID'];
    $user_password = $_POST['password'];

    $loginHandler = new ProviderLoginHandler($hostname, $username, $password, $database);
    $loginHandler->processLogin($user_email, $user_password);
    $loginHandler->closeConnection();
}
?>
