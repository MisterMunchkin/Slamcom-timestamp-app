<?php
    if($_POST){
        include("DBconnect.php");
        session_start();
  
        $startDate = $_POST["startDate"];
        $endDate = $_POST["endDate"];
        $userID = $_SESSION["employeeID"];
 
        $sql = "SELECT * 
                FROM `timetable` 
                WHERE `userID` = '$userID' AND `timeIn` BETWEEN '$startDate' AND '$endDate'";
        $x = 0;
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $data_array = array();
           $totalHours = strtotime(0);
            while($row = mysqli_fetch_array($result)){
                $x++;


                $totalHours += strtotime($row['HoursMade']);
                $data_array[] = array(
                    'timeIn' => $row['timeIn'],
                    'timeOut' => $row['timeOut'],
                    'numberOfHours' => $row['HoursMade'],
                    'totalHours' => $totalHours
                );
            }
            $json = json_encode($data_array);
            echo $json;
        }
        
    }else{
        echo "something went wrong";
    }
?>