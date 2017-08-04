<?php
    include("DBconnect.php");
    date_default_timezone_set("Asia/Manila");
    session_start();

    $_SESSION['LogoutTime'] = date('Y-m-d H:i:s');

    $logintime = $_SESSION['LoginTime'];
    $userid = $_SESSION['userID'];
    $logouttime = $_SESSION['LogoutTime'];

    $sql = "INSERT INTO `timetable`(`timeIn`, `timeOut`, `userID`) 
            VALUES ('$logintime','$logouttime','$userid')";
    
    if(mysqli_query($conn,$sql)){
        session_destroy();
        header("Location: LoginOrSignup.php");
    }
    mysqli_close($conn);
?>
