<?php
    include "connect.php";

    session_start();

    $flag = $_SESSION['flag'];

    if ($flag === 'c'){

    if (isset($_POST['BID']) && isset($_POST['feedback']))
    {
        $fb = $_POST['feedback'];
        $bid = $_POST['BID'];

        $sql = "SELECT b_id FROM book WHERE b_id = '$bid'  ";
        $result = $conn->query($sql);

        if ($result->num_rows === 0) 
        {
            echo '<script>
            alert(" Please Enter a valid Book ID!");
            window.location.href = "homepage1.php";
            </script>';

        }else{
            $row = $result->fetch_assoc();
            $bookid = $row['b_id'];
            $submit_feedback = "INSERT INTO book (b_id, feedback) VALUES ('$bookid','$fb') ON DUPLICATE KEY UPDATE feedback = VALUES(feedback)";
            
             if ( $conn->query($submit_feedback)){
            echo '<script>
            alert("Thanks for your valueable feedback!");
            window.location.href = "homepage1.php";
            </script>';
        } else {
            echo '<script>
            alert("there must be something wrong ! ");
            window.location.href = "homepage1.php";
            </script>' ;
        }
        }
    } 
}else{
    echo '<script>
    alert("You have to login as a Customer to add your valueable feedback !");
    window.location.href = "c_log.html";
    </script>';
}
?>