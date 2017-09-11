<?php
    if($_POST){
        include("DBconnect.php");


        $json = $_POST["schedule"];
        $TeamID = $_POST["TeamID"];
        $schedule = json_decode($json,true);


        $count = count($schedule);
    
        $days = array();
        $timeIn = array();
        $timeOut = array();

        for($x = 0;$x < $count;$x++){
            $obj = $schedule[$x];

            if(count($obj["periods"]) > 0){
                $days[$x] = 1;
                $timeobj = $obj["periods"][0];

                $timeIn[$x] = $timeobj[0];
                $timeOut[$x] = $timeobj[1];
            }else{
                $days[$x] = 0;
                $timeIn[$x] = null;
                $timeOut[$x] = null;
            }
        }
        $sql = "SELECT * FROM `userschedule` WHERE `TeamID` = '$TeamID'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){ //updates users schedule if team sched already exists
            $sql = "UPDATE `userschedule` SET
            `MondayShift`='$days[0]',`mondayTimeIn`='$timeIn[0]',`mondayTimeOut`='$timeOut[0]',
            `TuesdayShift`='$days[1]',`tuesdayTimeIn`='$timeIn[1]',`tuesdayTimeOut`='$timeOut[1]',
            `WednesdayShift`='$days[2]',`wednesdayTimeIn`='$timeIn[2]',`wednesdayTimeOut`='$timeOut[2]',
            `ThursdayShift`='$days[3]',`thursdayTimeIn`='$timeIn[3]',`thursdayTimeOut`='$timeOut[3]',
            `FridayShift`='$days[4]',`fridayTimeIn`='$timeIn[4]',`fridayTimeOut`='$timeOut[4]',
            `SaturdayShift`='$days[5]',`saturdayTimeIn`='$timeIn[5]',`saturdayTimeOut`='$timeOut[5]',
            `SundayShift`='$days[6]',`sundayTimeIn`='$timeIn[6]',`sundayTimeOut`='$timeOut[6]',
            `TeamID`='$TeamID' WHERE `TeamID` = '$TeamID'";
        }else{
            $sql = "INSERT INTO `userschedule`(`MondayShift`, `mondayTimeIn`, `mondayTimeOut`,
                `TuesdayShift`, `tuesdayTimeIn`, `tuesdayTimeOut`,
                `WednesdayShift`, `wednesdayTimeIn`, `wednesdayTimeOut`,
                 `ThursdayShift`, `thursdayTimeIn`, `thursdayTimeOut`,
                 `FridayShift`, `fridayTimeIn`, `fridayTimeOut`,
                 `SaturdayShift`, `saturdayTimeIn`, `saturdayTimeOut`,
                 `SundayShift`, `sundayTimeIn`, `sundayTimeOut`, `TeamID`)
                 VALUES ('$days[0]','$timeIn[0]','$timeOut[0]','$days[1]','$timeIn[1]',
                     '$timeOut[1]','$days[2]','$timeIn[2]','$timeOut[2]','$days[3]',
                     '$timeIn[3]','$timeOut[3]','$days[4]','$timeIn[4]','$timeOut[4]',
                     '$days[5]','$timeIn[5]','$timeOut[5]','$days[6]','$timeIn[6]',
                     '$timeOut[6]','$TeamID')";
        }

        if(mysqli_query($conn, $sql)){
            echo "team schedule successful";
        }else{
            echo "team schedule error";
        }
    }else{
        echo "something went wrong";
    }
?>
