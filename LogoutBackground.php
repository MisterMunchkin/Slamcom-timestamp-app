<?php
    include("DBconnect.php");
    date_default_timezone_set("Asia/Manila");
    session_start();

    $_SESSION['LogoutTime'] = date('Y-m-d H:i:s');

    $logintime = $_SESSION['LoginTime'];
    $userid = $_SESSION['userID'];
    $logouttime = $_SESSION['LogoutTime'];

   // $hoursAchieved = date_diff($logintime, $logouttime);
    //$start = DateTime::createFormFormat('Y-m-d H:i:s');
    //$end = DateTime::createFormFormat('Y-m-d H:i:s');
  // $start = date_create_from_format('Y-m-d H:i:s', $logintime);
 //  $end = date_create_from_format('Y-m-d H:i:s', $logouttime);
    $start = new DateTime($logintime);
    $end = new DateTime($logouttime);

   $interval = $end->diff($start);


   
   $time = sprintf(
        '%d:%02d:%02d',
        ($interval->d * 24) + $interval->h,
        $interval->i,
        $interval->s
   );

    $sql = "INSERT INTO `timetable`(`timeIn`, `timeOut`,`HoursMade` ,`userID`) 
            VALUES ('$logintime','$logouttime','$time','$userid')";
    
    if(mysqli_query($conn,$sql)){
        session_destroy();
        header("Location: LoginOrSignup.php");
    }
    mysqli_close($conn);
?>
