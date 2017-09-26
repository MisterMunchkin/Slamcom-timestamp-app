<?php
    include("DBconnect.php");
    $query = 'SELECT `userID`, `firstname`, `lastname`, `emailaddress` FROM `adminusers` WHERE `Active` = 1';

    $result = mysqli_query($conn,$query);
    if($result){
      /*$columns = array(
        0 => 'userID',
        1 => 'firstname',
        2 => 'lastname',
        3 => 'emailaddress'
      );*/
      $dataArray = array();
      while($row = mysqli_fetch_array($result)){

          $dataArray[] = array(
            "userID" => $row["userID"],
            "firstname" => $row["firstname"],
            "lastname" => $row["lastname"],
            "emailaddress" => $row["emailaddress"],
            "edit/delete" => "<button id='delbutton' type='button' class='btn btn-sm btn-danger'>Delete</button>
                <button id='editbutton' type='button' class='btn btn-sm btn-warning'>Edit</button>"

          );

      }
      $json = json_encode($dataArray);
      echo $json;
    }else{
      echo "no data";
    }
?>
