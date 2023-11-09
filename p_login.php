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
        $sql = "SELECT p_id, p_password FROM sprovider WHERE email_id = '$user_email' LIMIT 1";

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
                $_SESSION['id_p'] = $row['p_id'];
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
        echo "
            <style>
        .animated-background {
            background: #4e54c8;
            background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8);
            width: 100%;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 998; /* Ensure it's behind the modal (z-index: 999) */
        }

        .context {
            
            position: absolute;
            
        }

        .area {
            width: 100%;
            height: 100vh;
        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 25s linear infinite;
            bottom: -150px;
        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }

        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }

        @keyframes animate {
            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
        }

        /* Styles for the modal */
        .modal {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 999;
        }

        .modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            text-align: center;
        }

        .modal button {
            margin-top: 10px;
            background: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
    <div class='animated-background'>
        <div class='context'>
        <div class='modal'>
        <div class='modal-content'>
            <p>$message</p>
            <button onclick=\"closeModal('$location')\">OK</button>
        </div>
    </div>
        </div>

        <div class='area'>
            <ul class='circles'>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>
        </div>
    </div>

           
            
            <script>
                function closeModal(redirectLocation) {
                    var modal = document.querySelector('.modal');
                    if (modal) {
                        modal.style.display = 'none';
                    }
                    if (redirectLocation) {
                        window.location.href = redirectLocation;
                    }
                }
            </script>";
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
