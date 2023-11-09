<?php
     include "p_login.php";
     include "c_login.php";

     session_start();
       
     $flag = $_SESSION['flag'];
 
     if ($flag === 'p'){
            header("Location:pp.php");
     }else{
            header("Location:cp.php");
         
     }

     

?>