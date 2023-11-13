<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
          Your Profile
      </title>
      <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans&display=swap" rel="stylesheet"> 
      <link href="try.css" rel="stylesheet">
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
    $id = $_SESSION['id_p'];

    $sql = "SELECT sprovider.p_name, services.s_name, sprovider.email_id,sprovider.fees, sprovider.contact_no,a.country,a.add_state, a.city, a.dist, a.pin, a.house_no, sprovider.image1
    FROM sprovider
    JOIN services ON sprovider.s_id = services.s_id
    JOIN addresss a ON sprovider.add_id = a.add_id
    WHERE sprovider.p_id = $id";

$result = mysqli_query($conn, $sql);

if ($result) {
    // Fetch the data
    $row = mysqli_fetch_assoc($result);
    echo '<div class="profile-info">';
    echo '<img id="profile-photo" src="data:image/jpeg;base64,'.base64_encode($row['image1']).'" alt="Provider Image" />';
    echo '<form action="pp_upload.php" method="POST" enctype="multipart/form-data" id="imageForm">';
    echo '<div class="choose-button">';
    echo '<label for="customFile1">Choose file</label>';
    echo '<input type="file" name="image" class="form-control d-none" id="customFile1" onchange="submitForm()">';
    echo '</div>';
    echo '</form>';
    echo '</div>';

    echo '<div class="profile-details">';
    echo '<h1><b>Name :</b> ' . $row['p_name'] . '</h1>';
    echo '<p><b>Contact No :</b> ' . $row['contact_no'] . '</p>';
    echo '<p><b>Email :</b> ' . $row['email_id'] . '</p>';
    echo '<p><b>Servive Name :</b> ' . $row['s_name'] . '</p>';
    
    echo '<p><b>Address :</b> ' . $row['house_no'] . ', ' . $row['dist'] . ', ' . $row['city'] . ', ' . $row['add_state'] . ', ' . $row['country'] . ' - ' . $row['pin'] . '</p>';
    echo '<p><b>Fees :</b> ' . $row['fees'] . '</p>';
    echo '</div>';
} else {
    echo "Error: " . mysqli_error($conn);
}
 
    ?>


</section>

    <script>
        function submitForm() {
            document.getElementById('imageForm').submit();
        }
    </script>
    <script src="pp.js"></script>
     

    </body>
</html>