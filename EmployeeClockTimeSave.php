<?php

    ini_set('session.gc_maxlifetime', 36000);
    session_set_cookie_params(36000);
    session_start();


    date_default_timezone_set("Asia/Manila");
    if($_POST){
      include("DBconnect.php");

      $userID = mysqli_real_escape_string($conn, $_POST['userID']);
      $timeIn = mysqli_real_escape_string($conn, $_POST['timeIn']);
      $timeOut = mysqli_real_escape_string($conn, $_POST['timeOut']);
      $teamID = mysqli_real_escape_string($conn, $_POST['teamID']);
      $selectedDay = mysqli_real_escape_string($conn, $_POST['selectedDay']);

      echo "'$timeIn'";
      echo "'$timeOut'";
      $start = new DateTime($timeIn);
      $end = new DateTime($timeOut);

      $interval = $end->diff($start);

      $time = sprintf(
        '%d:%02d:%02d',
        ($interval->d * 24) + $interval->h,
        $interval->i,
        $interval->s
      );

      $sql = "INSERT INTO `timetable`(`timeIn`, `timeOut`,`HoursMade` ,`userID`)
              VALUES ('$timeIn','$timeOut','$time','$userID')";

      if(mysqli_query($conn,$sql)){
        if($selectedDay == "Monday"){
          include("DayOfTheScheduling/MondaySchedule.php");
        }

      //  echo "success";

/*
          $_SESSION['userID'] = array();
          $_SESSION['LoginTime'] = array();

          $_SESSION['userID'][] = $userID;
          $_SESSION['LoginTime'][] = date('Y-m-d h:i:s a');
*/
/*
          if(password_verify($password, $row['password'])){
              $_SESSION['userID'] = $row['userID'];
              $_SESSION['firstname'] = $row['firstname'];
              $_SESSION['lastname'] = $row['lastname'];
             // $_SESSION['email'] = $row['email'];


              $_SESSION['LoginValid'] = true;
              $_SESSION['LoginTime'] = date('Y-m-d h:i:s a');

              header("Location: Home.php");
          }else{
              //echo "password does not exist";
              header("Location: LoginOrSignup.php?err");
          }*/
      }else{

      // header("Location: LoginOrSignup.php");
          echo "failed";
      }
    }
?>
