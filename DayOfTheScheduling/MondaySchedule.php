<?php

  $mondaySql = "SELECT `MondayShift`, `mondayTimeIn`, `mondayTimeOut`
                FROM `userschedule`
                WHERE `TeamID` = '$teamID'";

  $result = mysqli_query($conn, $mondaySql);
  $row = mysqli_fetch_array($result);

  $mondayTimeIn = new DateTime($row["mondayTimeIn"]);
//  echo "'.$mondayTimeIn.'";
  $employeeTimeIn = new DateTime($timeIn);
  //echo " '.$employeeTimeIn.'";

  $timeLate = "0:00:00";//to initialize if no
  $timeOvertime = "0:00:00";

  $intervalLate = new DateInterval('PT0H0M');
  $intervalOvertime = new DateInterval('PT0H0M');
  $lateFlag = 0;
  $overtimeFlag = 0;
  if($employeeTimeIn > $mondayTimeIn){//check if late
    //late
  //  echo "entered late if";
    $intervalLate = $mondayTimeIn->diff($employeeTimeIn);
    $lateFlag = 1;

    $timeLate = sprintf(
      '%02d:%02d:%02d',
      ($intervalLate->d *24) + $intervalLate->h,
      $intervalLate->i,
      $intervalLate->s
    );

  }
  $mondayTimeOut = new DateTime($row["mondayTimeOut"]);
  $employeeTimeOut = new DateTime($timeOut);

  if($employeeTimeOut > $mondayTimeOut){
  //  echo "entered overtime if";
    $intervalOvertime = $employeeTimeOut->diff($mondayTimeOut);
    $overtimeFlag = 1;
    $timeOvertime = sprintf(
      '%02d:%02d:%02d',
        ($intervalOvertime->d * 24) + $intervalOvertime->h,
        $intervalOvertime->i,
        $intervalOvertime->s
    );
  }

  $monthlySql = "SELECT * FROM `totalhourspermonth` WHERE `userID` = '$userID'";

  $monthlyResult = mysqli_query($conn, $monthlySql);

  // if negative then late
  if(mysqli_num_rows($monthlyResult) > 0){
  //late works, but somethings wrong with overtime and total hours
  //https://stackoverflow.com/questions/20519925/calculate-time-elapsed-in-php-spans-over-24-hours

    $row = mysqli_fetch_array($monthlyResult);

    //$monthlyLate = new DateTime($row["TotalLate"]);
    //$monthlyOvertime = new DateTime($row["TotalOvertime"]);
    //$monthlyTotalHours = new DateTime($row["TotalHours"]);

    //$interval = $monthlyTotalHours->add($interval);
    //$TotalHoursString = $interval->format("H:i:s");
    $times = array($time, $row["TotalHours"]);
    $TotalHoursString = addTimes($times);

    if($lateFlag == 1){
      $times = array($timeLate,$row["TotalLate"]);
      $TotalLateString = addTimes($times);
    }

    if($overtimeFlag == 1){
      $times = array($timeOvertime, $row["TotalOvertime"]);
      $TotalOvertimeString = addTimes($times);
    }

    $updateMonthlysql = "UPDATE `totalhourspermonth`
    SET `TotalLate`='$TotalLateString',`TotalHours`='$TotalHoursString',
    `TotalOvertime`='$TotalOvertimeString'
     WHERE `userID` = '$userID'";

     if(mysqli_query($conn, $updateMonthlysql)){
       echo "monday update success";
     }else{
       echo "monday update failed";
     }
  }else{

    $insertMonthlysql = "INSERT INTO `totalhourspermonth`(`TotalLate`,
       `TotalHours`, `TotalOvertime`, `userID`)
       VALUES ('$timeLate','$time','$timeOvertime','$userID')";

     if(mysqli_query($conn,$insertMonthlysql)){
       echo "monday insert success";
     }else{
       echo "monday insert fail";
     }
  }


?>
