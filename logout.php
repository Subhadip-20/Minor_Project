<?php
session_start();


$flag = $_SESSION['flag'];

if ($flag === 'p'){
        session_destroy();
        header("Location:homepage.php");
}else{
        session_destroy();
        header("Location:homepage.php");

}



?>