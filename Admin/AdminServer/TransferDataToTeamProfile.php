<?php
    session_start();
    if($_POST){
        $_SESSION["ProfileTeamID"] = $_POST["TeamID"];

        echo "cookie success";
    }else{
        echo "post error";
    }
?>
