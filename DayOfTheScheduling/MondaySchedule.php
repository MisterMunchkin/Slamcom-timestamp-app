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

  if($employeeTimeIn > $mondayTimeIn){//check if late
    //late
  //  echo "entered late if";
    $intervalLate = $mondayTimeIn->diff($employeeTimeIn);

    $timeLate = sprintf(
      '%d:%02d:%02d',
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

    $timeOvertime = sprintf(
      '%d:%02d:%02d',
        ($intervalOvertime->d * 24) + $intervalOvertime->h,
        $intervalOvertime->i,
        $intervalOvertime->s
    );
  }

  $monthlySql = "SELECT * FROM `totalhourspermonth` WHERE `userID` = '$userID'";

  $monthlyResult = mysqli_query($conn, $monthlySql);

  // if negative then late
  if(mysqli_num_rows($monthlyResult) > 0){
    //user table exist just update existing
    $monthlyRows = mysqli_fetch_array($monthlyResult);
    $updatedTotalLate = new DateInterval('PT0H0M');// = strtotime("0:00:00");
    $updatedTotalOvertime = new DateInterval('PT0H0M'); //= strtotime("0:00:00");
    $updatedTotalHours = new DateInterval('PT0H0M'); //= strtotime("0:00:00");

    if($timeLate != "0:00:00"){
      //$monthlyRows["TotalLate"] += $timeLate;
    //  $updatedTotalLate = (String) strtotime($monthlyRows["TotalLate"]) + strtotime($timeLate);
        $updatedTotalLate = $intervalLate;//strtotime($timeLate);
    }
    if($timeOvertime != "0:00:00"){
      //$updatedTotalOvertime = (String) strtotime($monthlyRows["TotalOvertime"]) +
        //    strtotime($timeOvertime);
        $updatedTotalOvertime = $intervalOvertime;//strtotime($timeOvertime);
        //echo "$updatedTotalOvertime";
    }
    //$temp = $monthlyRows["TotalOvertime"];
    //echo "'$updatedTotalOvertime'.'$temp'";
    $updatedTotalHours = $interval;
    //$updatedTotalOvertime += strtotime($monthlyRows["TotalOvertime"]);
    $OvertimeArray = array(
      "hours" => substr($monthlyRows["TotalOvertime"],0,1),
      "minutes" => substr($monthlyRows["TotalOvertime"],2,2)
    );
    $LateArray = array(
      "hours" => substr($monthlyRows["TotalLate"],0,1),
      "minutes" => substr($monthlyRows["TotalLate"],2,2)
    );
    $TotalHoursArray = array(
      "hours" => substr($monthlyRows["TotalHours"],0,1),
      "minutes" =>substr($monthlyRows["TotalHours"],2,2)
    );

    $oldOvertime = new DateInterval('PT'.$OvertimeArray["hours"].'H'.
                                    $OvertimeArray["minutes"].'M');
    $oldLate = new DateInterval('PT'.$LateArray["hours"].'H'.
                                        $LateArray["minutes"].'M');
    $oldTotalHours = new DateInterval('PT'.$TotalHoursArray["hours"].'H'.
                                          $TotalHoursArray["minutes"].'M');
    //echo "'$updatedTotalOvertime'";
    //$updatedTotalOvertime = date
    $FinalOvertime = new DateTime("0:00:00");
    $FinalTotalHours = new DateTime("0:00:00");
    $FinalLate = new DateTime("0:00:00");

    $FinalOvertime->add($oldOvertime);
    $FinalOvertimeInterval = $FinalOvertime->add($updatedTotalOvertime);

    $FinalTotalHours->add($oldTotalHours);
    $FinalTotalHoursInterval = $FinalTotalHours->add($updatedTotalHours);

    $FinalLate->add($oldLate);
    $FinalLateInterval = $FinalLate->add($updatedTotalLate);

  //  echo $FinalLateInterval->format("h:i:s")." ".$FinalTotalHoursInterval->format("h:i:s");
/*
    $stringformatLate = sprintf(
      '%d:%02d:%02d',
      $FinalLateInterval->h,
      $FinalLateInterval->i,
      $FinalLateInterval->s
    );
    $stringformatOvertime = sprintf(
      '%d:%02d:%02d',
      $FinalOvertimeInterval->h,
      $FinalOvertimeInterval->i,
      $FinalOvertimeInterval->s
    );
    $stringformatTotalHours = sprintf(
      '%d:%02d:%02d',
      $FinalTotalHoursInterval->h,
      $FinalTotalHoursInterval->i,
      $FinalTotalHoursInterval->s
    );*/
    /*
    $stringformatLate = sprintf(
      '%d:%02d:%02d',
      ($updatedTotalLate->d * 24) + $updatedTotalLate->h,
      $updatedTotalLate->i,
      $updatedTotalLate->s
    );
    $stringformatOvertime = sprintf(
      '%d:%02d:%02d',
      ($updatedTotalOvertime->d * 24) + $updatedTotalOvertime->h,
      $updatedTotalOvertime->i,
      $updatedTotalOvertime->s
    );
    $stringformatTotalHours = sprintf(
      '%d:%02d:%02d',
      ($updatedTotalHours->d *24) + $updatedTotalHours->h,
      $updatedTotalHours->i,
      $updatedTotalHours->s
    );*/
  //  $stringformatLate = date('H:i:s', $updatedTotalLate);
  //  $stringformatOvertime = date('H:i:s', $updatedTotalOvertime);
  //  $stringTotalHours = date('H:i:s', $updatedTotalHours);
  $stringformatLate = $FinalLateInterval->format("h:i:s");
  $stringformatTotalHours = $FinalTotalHoursInterval->format("h:i:s");
  $stringformatOvertime = $FinalOvertimeInterval->format("h:i:s");

  $updateMonthlysql = "UPDATE `totalhourspermonth`
  SET `TotalLate`='$stringformatLate',`TotalHours`='$stringformatTotalHours',
  `TotalOvertime`='$stringformatOvertime'
   WHERE `userID` = '$userID'";
/*
    $updateMonthlysql = "UPDATE `totalhourspermonth`
    SET `TotalLate`='$stringformatLate',`TotalHours`='$stringformatTotalHours',
    `TotalOvertime`='$stringformatOvertime'
     WHERE `userID` = '$userID'";*/

     if(mysqli_query($conn,$updateMonthlysql)){
       echo "monday update success";
     }else{
       echo "monday update fail";
     }

  }else{// insert works, but update doesnt yet
    //insert new table since no table exist
    //$formatTimeLate = strtotime($timeLate);
    //$formatOvertime = strtotime($timeOvertime);
    //$formatTotalHours = strtotime($time);

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
