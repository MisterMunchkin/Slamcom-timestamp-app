<?php
    if($_POST){//this is used to preload the schedule in the team tab
        include("DBconnect.php");

        $TeamID = $_POST["TeamID"];

        $sql = "SELECT * FROM `userschedule` WHERE `TeamID` = '$TeamID'";

        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){ //updates users schedule if team sched already exists
            $data_array = array();

            while($row = mysqli_fetch_array($result)){
            
                $data_array[] = array(


                );
            }
        }


    }else{
        echo "something went wrong";
    }
?>
