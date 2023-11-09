<?php
    session_start();
       
    if (!isset($_SESSION['useremail_p'])) {
        // Redirect to the home page
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
</head>
<body>
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
    
    <div class="cover-photo">
        <img src="images\body.jpg" alt="Cover Photo">
    </div>
    <div class="profile-info">
        <img id="profile-photo" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" alt="example placeholder" />
        <form action="pp_upload.php" method="POST" enctype="multipart/form-data" id="imageForm">
        <div class="choose-button">
            <label for="customFile1">Choose file</label>
            <input type="file"name="image" class="form-control d-none" id="customFile1" onchange="submitForm()">
        </div>
</form>
    </div>
    <div class="profile-details">
        <h1>Your Name</h1>
        <p><b>Email :</b> your.email@example.com</p>
        <p><b>Address :</b> Your Address</p>
    </div>
    <script>
        function submitForm() {
            document.getElementById('imageForm').submit();
        }
    </script>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <div class="about" style="display: inline-block; position: relative; bottom: 50px; font-size: 25px;">
                <label style="margin-left: 250px;" for="rating">
                <b>Rating : </b>
                </label>
                <label style="margin-left: 500px;" for="fees">
                <b>Fees : </b>
                </label>
            </div>
    <script src="pp.js"></script>
</body>
</html>