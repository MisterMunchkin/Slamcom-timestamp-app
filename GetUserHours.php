<?php
    if($_POST){
        include("DBconnect.php");

        $userID = mysqli_real_escape_string($conn, $_POST['userID']);

        $sql = "SELECT * FROM `timetable` WHERE `userID` = '$userID'";

        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result) > 0){
            $x = 0;
            $data_array = array();

            while($row = mysqli_fetch_assoc($result)){
                /*
                $data_array[$x]['timeIn'] = $row['timeIn'];
                $data_array[$x]['timeOut'] = $row['timeOut'];

                echo json_encode( array('timeIn' => $data_array[$x]['timeIn'],
                                        'timeOut' => $data_array[$x]['timeOut']
                                                            ));

                $x++;
                */
                $data_array[] = array(
                    'timeIn' => $row['timeIn'],
                    'timeOut' => $row['timeOut']
                );
            }
            $json = json_encode($data_array);
            echo $json;
        }
    }
?>