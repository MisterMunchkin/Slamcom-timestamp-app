<?php

  $mondaySql = "SELECT `MondayShift`, `mondayTimeIn`, `mondayTimeOut`
                FROM `userschedule`
                WHERE `TeamID` = '$teamID'";

  $result = mysqli_query($conn, $mondaySql);
  $row = mysqli_fetch_array($result);

  $mondayTimeIn = new DateTime($row["mondayTimeIn"]);
  $employeeTimeIn = new DateTime($timeIn);

  $monthlySql = "SELECT * FROM `totalhourspermonth` WHERE `userID` = '$userID'";

  $monthlyResult = mysqli_query($conn, $monthlySql);


  if($employeeTimeIn < $mondayTimeIn){
    //late
    $interval = $mondayTimeIn->diff($employeeTimeIn);

    $time = sprintf(
      '%d:%02d:%02d',
      ($interval->d *24) + $interval->h,
      $inteval->i,
      $interval->s
    );

  }
  // if negative then late
  if(mysqli_num_rows($monthylResult) > 0){
    //user table exist just update existing
  }else{
    //insert new table since no table exist
  }


?>
