<?php
    session_start();

    
    date_default_timezone_set("Asia/Manila");
    include("DBconnect.php");

    $email = mysqli_real_escape_string($conn, $_POST['txt_loginEmail']);
    $password = mysqli_real_escape_string($conn, $_POST['txt_loginPassword']);


    $sql = "SELECT `userID`, `firstname`, `lastname`, `emailadd`, `password`
            FROM `user`
            WHERE `emailadd` = '$email'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_assoc($result);

        if(password_verify($password, $row['password'])){
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['firstname'] = $row['firstname'];
            $_SESSION['lastname'] = $row['lastname'];
            $_SESSION['email'] = $row['email'];
            

            if($row['emailadd'] == "dalmiet@gmail.com"){ //ASK sir if its better to make user input own ID so we 
            //can keep track of who gets admin permissions.

                $_SESSION['AdminLoginValid'] = true;
                header("Location: AdminHomePage.php");

            }else{

                $_SESSION['LoginValid'] = true;
                $_SESSION['LoginTime'] = date('Y-m-d H:i:s');

                header("Location: Home.php");
            }
        }else{
            //echo "password does not exist";
            header("Location: LoginOrSignup.php?err");
        }
    }else{
     
       // header("Location: LoginOrSignup.php");
        header("Location: LoginOrSignup.php?err");
    }
?>
