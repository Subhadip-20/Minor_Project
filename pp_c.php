<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="pp_c.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf-autotable/3.5.13/jspdf.plugin.autotable.min.js"></script>
    <?php
    session_start();
    ?>
    <style>
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            color: black;
        }

        .modal-content {
            background-color: #fff;
            width: 60%;
            max-width: 1200px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
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
    </header>
    
    <?php
    // session_start();
// Establish a database connection (you need to provide database credentials here)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "homeservice";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the provider ID from the URL parameter
$p_id = $_GET['p_id'];
$c_id = $_SESSION['id_c'];

// Retrieve provider details including the image, service name, and address
$sql = "SELECT sp.p_name, sp.s_id,sp.contact_no, sp.fees, sp.email_id, sp.image1, sp.add_id, s.s_name, a.country, a.add_state, a.city, a.dist, a.pin, a.house_no 
        FROM sprovider sp
        JOIN services s ON sp.s_id = s.s_id
        JOIN addresss a ON sp.add_id = a.add_id
        WHERE sp.p_id = $p_id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $p_name = $row['p_name'];
    $s_id = $row['s_id'];
    $fees = $row['fees'];
    $s_name = $row['s_name'];
    $country = $row['country'];
    $add_state = $row['add_state'];
    $city = $row['city'];
    $dist = $row['dist'];
    $pin = $row['pin'];
    $email = $row['email_id'];
    $house_no = $row['house_no'];
    $contact=$row['contact_no'];

    // Retrieve the image data
    $imageData = $row['image1'];

    // Display the provider's details in the specified format
    echo '<div class="profile-container">';
    echo '<div class="profile-info">';
    
    // Display the image
    if (!empty($imageData)) {
        $base64Image = base64_encode($imageData);
        $imageSrc = 'data:image/png;base64,' . $base64Image;
        echo '<img id="profile-photo" src="' . $imageSrc . '" alt="Provider Image">';
    } else {
        // Display a default profile image
        echo '<img id="profile-photo" src="images/default_profile_image.png" alt="Default Profile Image">';
    }

    echo '</div>';
    echo '<div class="profile-details">';
    echo "<h1><b>Name :</b> $p_name</h1>";
    echo "<p><b>Service :</b> $s_name</p>";
    echo "<p><b>Fees :</b>    Rs. $fees</p>";
    echo "<p><b>Email :</b>   $email</p>";
    echo "<p><b>Address     :</b> $house_no, $dist, $city, $add_state, $country - $pin</p>";
    echo '</div>';
    echo '</div>';

    // Add more details as needed
} else {
    echo "Provider not found.";
}

// Close the database connection
// $conn->close();
?>

    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!-- <div class="about" style="display: inline-block; position: relative; bottom: 100px; font-size: 25px;">
                
                <label style="margin-left: 500px;" for="fees">
                <b> </b>
                </label>
            </div> -->
<button style="
    position: relative;
    bottom: 60px; 
    left: 50%;
    transform: translateX(-50%);
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
    background-color: #3498db;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 120px" id="book-now-button"><b>Book Now</b></button>

<!-- Modal for booking -->
<div id="booking-modal" class="modal">
    <div class="modal-content" style=" height: 50%;">
    <?php  
        if(isset($_SESSION['useremail_c'])){
        echo '<p id="text">Do you want to book this service?</p>' ;
        echo '<button id="proceed-to-pay-button">Proceed to Pay</button>';
    }else{
        echo '<p id="text">Opps....</p>';
        echo '<p id="text">You must be logged in as a customer to book this service..</p>';
        echo '<a href="c_log.html"  ><button id="open-login-popup-button">Login as Customer</button></a>';
        }
        ?>
    </div>
</div>

<!-- Modal for payment -->
<div id="payment-modal" class="modal">
    <div class="modal-content">
    <div class="invoice">
        <div class="invoice-header">
            <h1>Invoice</h1>
        </div>
        <div class="invoice-details">
            <div class="customer-info">
                <?php

                $sql = "SELECT c_name,email_id,contact_no FROM customer WHERE c_id = '$c_id' ";
                $result1 = $conn->query($sql);

            if ($result1->num_rows > 0){
                $row1 = $result1->fetch_assoc();
                $c_name=$row1['c_name'];
                $c_email=$row1['email_id'];
                $c_contact=$row1['contact_no'];
            }
                echo'<h2>Customer Information</h2>';
                echo "<b>Name :</b> $c_name<br>";
                echo "<b>Email :</b> $c_email<br>";
                echo "<b>Phone :</b> $c_contact<br>";
                ?>
                <!-- <h2>Customer Information</h2>
                <p>Name: John Doe</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: +1 123-456-7890</p> -->
            </div>
            <div class="provider-info">
                <?php
                    echo'<h2>Provider Information</h2>';
                    echo "<b>Name :</b> $p_name<br>";
                    echo "<b>Email :</b> $email<br>";
                    echo "<b>Phone :</b> $contact<br>";
                ?>
                <!-- <h2>Customer Information</h2>
                <p>Name: Lux Doe</p>
                <p>Email: john.doe@example.com</p>
                <p>Phone: +1 123-456-7890</p> -->
            </div>
            <div class="order-info">
            <?php
                    echo'<h2>Order Information</h2>';
                    echo "<b>Service Name :</b> $s_name<br>";
                    echo "<b>Fees :</b> $fees<br>";
                    // echo "<h1><b>Phone :</b> $contact</h1>"
                ?>
                <!-- <h2>Order Information</h2>
                <p>Order ID: #123456</p>
                <p>Order Date: 2023-11-06</p> -->
            </div>
        </div>
        <div class="invoice-table">
            <table>
                <thead>
                    <tr>
                        <th>Service</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $originalNumber = $fees; // Replace 100 with your original number
                        $percentageIncrease = 18;
                        
                        $increasedNumber = $originalNumber + ($originalNumber * ($percentageIncrease / 100));

                        echo "<td> $s_name</td>";
                        echo "<td> $fees </td>";
                        echo "<td> $increasedNumber </td>";

                        ?>
                        <!-- <td>Service 1</td>
                        <td>$50.00</td>
                        <td>$100.00</td> -->
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="invoice-total">
            <?php
            echo "<p>Total: $increasedNumber </p>";
            ?>
            <!-- <p>Total: $190.00</p> -->
        </div>
    </div>
    <button id="generatePdfButton">Generate PDF</button>
    </div>
</div>
</section>
<?php
$book_query= "INSERT INTO book (c_id, p_id) VALUES ('$c_id','$p_id')";
$conn->query($book_query);
$b_id=$conn->insert_id;

date_default_timezone_set('Asia/Kolkata');

// Get the current time
$currentDate = date('Y-m-d');

?>
<script>
    var providerName = "<?php echo $p_name; ?>";
    var customerName = "<?php echo $c_name; ?>";
    var providerEmail = "<?php echo $email; ?>";
    var customerEmail = "<?php echo $c_email; ?>";
    var providerNumber = "<?php echo $contact; ?>";
    var customerNumber = "<?php echo $c_contact; ?>";
    var serviceName = "<?php echo $s_name; ?>";
    var serviceFees = "<?php echo $fees; ?>";
    var bookId = "<?php echo $b_id; ?> ";
    var total1 = "<?php echo $increasedNumber; ?>";
    var date = "<?php echo $currentDate; ?>";
    window.jsPDF = window.jspdf.jsPDF;
        // Function to generate and download the PDF invoice
        // Function to generate and download the PDF invoice
function generatePDF() {
    const pdf = new jsPDF();

    // Create a data array for your table
    const data = [
        ["Service", "Price", "Total"],
        [serviceName, serviceFees, total1]
    ];

    // Add content to the PDF (invoice details)
    pdf.setFontSize(20);
    var textWidth = pdf.getStringUnitWidth("Invoice") * 20; // Assuming 20 is the font size

// Calculate the X position for centering
var xPosition = (pdf.internal.pageSize.width - textWidth) / 2;

// Draw the centered text
pdf.text("Invoice", xPosition, 10);

    // Customize and add content as needed
    pdf.setFontSize(12);
    pdf.text("Customer Information:-", 10, 20);
    pdf.text("Name : "+customerName , 10, 30);
    pdf.text("Email : "+customerEmail , 10, 40);
    pdf.text("Phone : "+customerNumber , 10, 50);

    pdf.text("Provider Information:-", 130, 20);
    pdf.text("Name : "+providerName , 130, 30);
    pdf.text("Email : "+providerEmail , 130, 40);
    pdf.text("Phone : "+providerNumber , 130, 50);

    pdf.text("Order Information :-", 10, 70);
    pdf.text("Order ID : "+bookId , 10, 80);
    pdf.text("Order Date :"+date , 10, 90);

    pdf.text("Invoice Details:-", 10, 110);
    // Create the table using the autoTable plugin
    pdf.autoTable({
        startY: 120,
        head: [["Service", "Price", "Total"]],
        body: [
            [serviceName, "Rs. "+serviceFees, "Rs. "+total1]
            // You can add more rows here as needed
        ]
    });

    // Calculate the total
    const total = total1;

    // Add the total
    pdf.text(`Total: Rs. `+ total1, 10, pdf.autoTable.previous.finalY + 10);

    // Save the PDF with a specific name (e.g., invoice.pdf)
    pdf.save("invoice.pdf");
}
// Function to display the alert message
    function showAlert() {
        // Retrieve the provider's name from PHP
        // var providerName = "<?php echo $p_name; ?>";

        // Construct the alert message
        var alertMessage = "Thanks for booking " + providerName + " . You can share your experience with us through our Contact Us page.";

        // Display the alert
        alert(alertMessage);
    }

    // Attach an event listener to the "Generate PDF" button
    document.getElementById("generatePdfButton").addEventListener("click", function () {
        generatePDF(); // Call the existing PDF generation function
        showAlert(); // Call the alert function
    });

        
    </script>


    <script src="pp_c.js"></script>
</body>
</html>