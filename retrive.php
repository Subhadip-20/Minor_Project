<?php
// Establish a database connection (same as in your upload script)
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'homeservice';
$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get the currently logged-in user's ID (replace this with your actual user authentication logic)
$c_id = 2;

// Query to fetch the profile picture data for the user
$query = "SELECT image1 FROM customer WHERE c_id = $c_id";
$result = $connection->query($query);

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['image1'];

    // Display the profile picture
    echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Profile Picture">';
} else {
    // If the user doesn't have a profile picture, you can display a default image or a message.
    echo '<img src="default-profile-image.jpg" alt="Default Profile Picture">';
}

$connection->close();
?>
