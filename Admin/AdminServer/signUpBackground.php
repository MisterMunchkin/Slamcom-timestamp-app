<?php
    if($_POST){
        session_start();


        include("DBconnect.php");
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $emailaddress = mysqli_real_escape_string($conn, $_POST['emailadd']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $teamselected = mysqli_real_escape_string($conn,$_POST['teamselected']);
        //add user existence verification
         $sql = "SELECT `userID`, `firstname`, `lastname`, `emailadd`, `password`
            FROM `user`
            WHERE `emailadd` = '$emailaddress'";

        $result = mysqli_query($conn,$sql);

        if(mysqli_num_rows($result) > 0){
           // $_SESSION['userAlreadyExistErr'] = "the user already exists!"; //not working
            //use ?err or something
            //header("Location: LoginOrSignup.php?EmailalreadyExist");
            echo "user already exists";
        }else{
            $teamsql = "SELECT `TeamID` FROM `team` WHERE `TeamName` = '$teamselected'";

            $teamresult = mysqli_query($conn,$teamsql);

            $teamrow = mysqli_fetch_assoc($teamresult);
            
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO `user`(`firstname`, `lastname`, `emailadd`, `password`)
            VALUES ('$firstname','$lastname','$emailaddress','$hash')";

            if(mysqli_query($conn,$sql)){
                echo "you have been added successfully!";
                header("Location: LoginOrSignup.php");
            }else{
                echo "oh noes, something went wrong!";
            }


        }
        mysqli_close($conn);
    }else{
        echo "POST error";
    }
?>
