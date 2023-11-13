<?php
    session_start();
       
    if (!isset($_SESSION['useremail_c'])) {
        // Redirect to the login page or show an error message.
        header("Location:homepage.php");
        
    }
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Profile</title>
    <link rel="stylesheet" type="text/css" href="cp.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> 
</head>
<body>
<section>
  </div>
     <div class="leaf">
     <div>  <img src="http://www.pngmart.com/files/1/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></img></div>
      <div><img src="http://www.pngmart.com/files/1/Autumn-Fall-Leaves-Pictures-Collage-PNG.png" height="75px" width="75px"></img></div>
      <div>  <img src="http://www.pngmart.com/files/1/Autumn-Fall-Leaves-Clip-Art-PNG.png" height="75px" width="75px" ></img></div>
      <div><img  src="http://www.pngmart.com/files/1/Green-Leaves-PNG-File.png" height="75px" width="75px"></img></div>
       <div> <img src="http://www.pngmart.com/files/1/Transparent-Autumn-Leaves-Falling-PNG.png" height="75px" width="75px"></img></div>
     <div>   <img src="http://www.pngmart.com/files/1/Realistic-Autumn-Fall-Leaves-PNG.png" height="75px" width="75px"></div>
     <div><img src="http://www.pngmart.com/files/1/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></div>
            
     </div>
     
     <div class="leaf leaf1">
     <div>  <img src="http://www.pngmart.com/files/1/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></img></div>
      <div><img src="http://www.pngmart.com/files/1/Autumn-Fall-Leaves-Pictures-Collage-PNG.png" height="75px" width="75px"></img></div>
      <div>  <img src="http://www.pngmart.com/files/1/Autumn-Fall-Leaves-Clip-Art-PNG.png" height="75px" width="75px" ></img></div>
      <div><img  src="http://www.pngmart.com/files/1/Green-Leaves-PNG-File.png" height="75px" width="75px"></img></div>
       <div> <img src="http://www.pngmart.com/files/1/Transparent-Autumn-Leaves-Falling-PNG.png" height="75px" width="75px"></img></div>
     <div>   <img src="http://www.pngmart.com/files/1/Realistic-Autumn-Fall-Leaves-PNG.png" height="75px" width="75px"></div>
     <div><img src="http://www.pngmart.com/files/1/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></div>
            
     </div>
     
     <div class="leaf leaf2">
     <div>  <img src="http://www.pngmart.com/files/1/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></img></div>
      <div><img src="http://www.pngmart.com/files/1/Autumn-Fall-Leaves-Pictures-Collage-PNG.png" height="75px" width="75px"></img></div>
      <div>  <img src="http://www.pngmart.com/files/1/Autumn-Fall-Leaves-Clip-Art-PNG.png" height="75px" width="75px" ></img></div>
      <div><img  src="http://www.pngmart.com/files/1/Green-Leaves-PNG-File.png" height="75px" width="75px"></img></div>

       <div> <img src="http://www.pngmart.com/files/1/Transparent-Autumn-Leaves-Falling-PNG.png" height="75px" width="75px"></img></div>
     <div>   <img src="http://www.pngmart.com/files/1/Realistic-Autumn-Fall-Leaves-PNG.png" height="75px" width="75px"></div>
     <div><img src="http://www.pngmart.com/files/1/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></div>
            
     </div>
     <header>
        <div class="top-left">
            <a href="homepage1.php" id="home-button" class="nav-button">Home</a>
        </div>
        <p id="logo"><h1>Home Solution</h1></p>
        <div class="top-right">
        <form action="logout.php" method="POST">
            <button type="submit" name="logout_c"  id="logout-button" class="nav-button">Log Out</button></form>
        </div>
    </header>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "homeservice";
    
    $conn = new mysqli($servername, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
        $id = $_SESSION['id_c'];
        $sql = "SELECT c.c_name, c.email_id, c.contact_no, a.country, a.add_state, a.city, a.dist, a.pin, a.house_no, c.image1
        FROM customer c
        JOIN addresss a ON c.add_id = a.add_id
        WHERE c.c_id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    // Fetch the data
    $row = mysqli_fetch_assoc($result);

    // Display the information with the specified styling
    echo '<div class="profile-info">';
    echo '<img id="profile-photo" src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" alt="Customer Image" />';
    echo '<form action="upload.php" method="POST" enctype="multipart/form-data" id="imageForm">';
    echo '<div class="choose-button">';
    echo '<label for="customFile1">Choose file</label>';
    echo '<input type="file" name="image" class="form-control d-none" id="customFile1" onchange="submitForm()">';
    echo '</div>';
    echo '</form>';
    echo '</div>';
    
    echo '<div class="profile-details">';
    echo '<h1><b>Name :</b> ' . $row['c_name'] . '</h1>';
    echo '<p><b>Email :</b> ' . $row['email_id'] . '</p>';
    echo '<p><b>Address :</b> ' . $row['house_no'] . ', ' . $row['dist'] . ', ' . $row['city'] . ', ' . $row['add_state'] . ', ' . $row['country'] . ' - ' . $row['pin'] . '</p>';
    echo '</div>';
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);

        
    ?>
   </section>
    <script>
        function submitForm() {
            document.getElementById('imageForm').submit();
        }
    </script>
    <script src="cp.js"></script>
</body>
</html