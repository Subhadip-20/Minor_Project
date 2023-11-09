<?php
// Database configuration
$hostname = "localhost";
$username = "root";
$password = "";
$database = "homeservice";

// Create a database connection
$connection = new mysqli($hostname, $username, $password, $database);

// Check for a successful connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Get the p_id from the URL (validate and sanitize this input)
$p_id = 5;

// Prepare and execute a query to retrieve the image data
$sql = "SELECT image1 FROM sprovider WHERE p_id = ?";
$stmt = $connection->prepare($sql);

// Check if the query preparation was successful
if ($stmt) {
    $stmt->bind_param("i", $p_id);
    $stmt->execute();
    $stmt->store_result();

    // Check if a record with the specified p_id exists
    if ($stmt->num_rows > 0) {
        // Bind the result
        $stmt->bind_result($imageData);
        $stmt->fetch();

        // Set the appropriate content type header for the image (adjust the content type based on your image format)
        header('Content-Type: image/jpeg');

        // Output the image data
        echo $imageData;
    } else {
        // If no record with the specified p_id is found, you can display a default image or an error message
        echo "Image not found";
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Handle query preparation error
    echo "Query preparation failed";
}

// Close the database connection
$connection->close();
?>
