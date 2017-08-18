<?php
    if($_POST){
        include("DBconnect.php");
        session_start();
        /*
        $startYear = $_POST["startYear"];
        $startMonth = $_POST["startMonth"];
        $startDay = $_POST["startDay"];

        $endYear = $_POST["endYear"];
        $endMonth = $_POST["endMonth"];
        $endDay = $_POST["endDay"];
*/      
        $startDate = $_POST["startDate"];
        $endDate = $_POST["endDate"];
        $userID = $_SESSION["employeeID"];
/*
        $sql = "SELECT * FROM `timetable`
        WHERE `userID` = '$userID' 
        AND YEAR(`timeIn`) = 2017 
        AND MONTH(`timeIn`) = '$month'";
*/      
        $sql = "SELECT * 
                FROM `timetable` 
                WHERE `userID` = '$userID' AND `timeIn` BETWEEN '$startDate' AND '$endDate'";
        $x = 0;
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $data_array = array();

            while($row = mysqli_fetch_array($result)){
                $x++;

            /* echo '<tr id='.$row[0].'>
                        <td>'.$x.'</td>
                        <td>'.$row[0].'</td>
                        <td>'.$row[1].'</td>
                        <td>'.$row[2].'</td>
                        <td>'.$row[3].'</td>
                        </tr>';
                }*/
                $data_array[] = array(
                    'timeIn' => $row['timeIn'],
                    'timeOut' => $row['timeOut'],
                    'numberOfHours' => $row['HoursMade']
                );
            }
            $json = json_encode($data_array);
            echo $json;
        }
        
    }else{
        echo "something went wrong";
    }
?>