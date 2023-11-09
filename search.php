<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            font-size: 24px;
            margin: 20px 0;
        }

        .provider-list {
            display: flex;
            flex-direction: column; 
            align-items: flex-start; 
        }

        .provider {
            display: flex; 
            align-items: center;
            width: 800px;
            margin: 10px;
            padding: 10px;
            background: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            text-align: left;
            position: relative; 
        }

        .provider img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
        }

        .provider-info {
            flex: 1; 
            margin-left: 10px; 
        }

        .provider-info h2 {
            font-size: 18px;
            margin: 0;
        }

        .rating {
            color: #FFD700; 
            font-size: 16px;
            margin: 5px 0;
        }

        .fees {
            font-size: 14px;
            color: #333; 
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%); 
        }

        .fees {
            font-size: 14px;
            color: #333; 
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%); 
        }
    </style>
 
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "homeservice";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET['search_query'])) {
    $service_name = $_GET['search_query'];

// Search for services with names similar to the entered search term (case-insensitive)
$sql = "SELECT s_id, s_name FROM services WHERE LOWER(s_name) LIKE '%" . strtolower($service_name) . "%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Search results for : $service_name </h2>";
    echo "<div class='providers-container'>";
    while ($row = $result->fetch_assoc()) {
        $s_id = $row['s_id'];
        $s_name = $row['s_name'];
        
        // Retrieve provider details (including fees) for the service
        $sql_providers = "SELECT p_id, p_name, fees, image1 FROM sprovider WHERE s_id = $s_id";
        $result_providers = $conn->query($sql_providers);

        echo "<div class='service'>";
        echo "<h3 class='service-name'>$s_name:</h3>";
        echo "<div class='providers'>";
        while ($provider_row = $result_providers->fetch_assoc()) {
            $p_id = $provider_row['p_id'];
            $p_name = $provider_row['p_name'];
            $fees = $provider_row['fees'];
            $imageData= $provider_row['image1'];
            echo '<div class="provider">';
            if (!empty($imageData)) {
                $base64Image = base64_encode($imageData);
                $imageSrc = 'data:image/png;base64,' . $base64Image;
                echo '<img id="profile-photo" src="' . $imageSrc . '" alt="Provider Image">';
            } else {
                // Display a default profile image
                echo '<img id="profile-photo" src="images/default_profile_image.png" alt="Default Profile Image">';
            }
            echo '<div class="provider-info">';
            echo "<h2 class='provider-name'><a href='pp_c.php?p_id=$p_id'>$p_name</a></h2>";
            echo '<div class="fees">Fees: Rs. ' . $fees . '</div>';
            echo '</div>';
            echo '</div>';
        }
        echo "</div>";
        echo "</div>";
    }
    echo "</div>";
} else {
    echo "No matching services found.";
}
}
// Close the database connection
$conn->close();
?>
</body>
</html>