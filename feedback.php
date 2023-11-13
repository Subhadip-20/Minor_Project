<?php
    session_start();

    include "connect.php";
    // echo"hello";

    if (isset($_POST['OrderId']) && isset($_POST['CustomerName']) && isset($_POST['feedback']))
    {
        $cid=$_SESSION['id_c'];
        $bid=$_POST['OrderId'];
        $fb=$_POST['feedback'];
        $sql="SELECT b_id FROM book WHERE c_id =  $cid";
        $result=$conn->query($sql);
        $row = $result->fetch_assoc();
        $db_bid = $row['b_id'];

        if($bid === $db_bid)
        {
            $sql1= "UPDATE `book` SET `feedback` = '$fb' WHERE `book`.`b_id` = $db_bid;";
            if($conn->query($sql1)=== true)
            {
                echo"<script> alert('feedback submitted');window.location.href='homepage1.php';</script>";
            }
            else{
                echo"<script> alert('feedback not submitted');window.location.href='homepage1.php';</script>";
            }
            
        }
    }
?>