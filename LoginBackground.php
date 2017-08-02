<?php
    session_start();

    r
    date_default_timezone_set("Asia/Manila");
    include("DBconnect.php");

    $email = mysqli_real_escape_string($conn, $_POST['txt_loginEmail']);
    $password = mysqli_real_escape_string($conn, $_POST['txt_loginPassword']);

    $sql = "SELECT `userID`, `firstname`, `lastname`, `emailadd`, `password`
            FROM `user`
            WHERE `emailadd` = '$email' AND `password` = '$password'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);

        $_SESSION['userID'] = $row['userID'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        

        if($row['emailadd'] == "slamcom.vjay@gmail.com"){

            $_SESSION['AdminLoginValid'] = true;
            header("Location: AdminHome.php");

        }else{

            $_SESSION['LoginValid'] = true;
            $_SESSION['LoginTime'] = date('Y-m-d H:i:s');

            header("Location: Home.php");
        }
    }else{
        echo "email and pass does not exist";
    }
?>
