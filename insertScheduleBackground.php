<?php
    if($_POST){
        include("DBconnect.php");
        session_start();
  
        $userID = $_SESSION["employeeID"];
 
        
    }else{
        echo "something went wrong";
    }
?>