<?php
// Database connection information
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'homeservice';

// Establish a database connection
$connection = new mysqli($host, $username, $password, $database);

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

if (isset($_FILES['image'])) {
    $p_id = 5; // Replace with your actual s_id (e.g., retrieved from session)
    $image = $_FILES['image']['tmp_name'];

    // Read the image file
    $imgData = file_get_contents($image);

    // Escape the binary image data to prevent SQL injection
    $imgData = $connection->real_escape_string($imgData);
   

    // Insert or update the image in the database
    $sql = "INSERT INTO sprovider (p_id, image1) VALUES ('$p_id', '$imgData')
            ON DUPLICATE KEY UPDATE image1 = VALUES(image1)";
            
    
    if ($connection->query($sql) === TRUE) {
        echo "Image uploaded and saved to the database successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
else{
    echo"if not working";
}

$connection->close();
?>
