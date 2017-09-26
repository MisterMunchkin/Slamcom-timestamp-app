<?php
  include("../AdminServer/DBconnect.php");
  $sql = "SELECT * FROM `Team` WHERE 1";

  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){
      $data_array = array();
      $dataArray = array();
      while($row = mysqli_fetch_array($result)){

          /*echo '<tr id='.$row['TeamID'].'>
                  <td>'.$row['TeamID'].'</td>
                  <td>'.$row['TeamName'].'</td>
                  <td>'.$row['TeamDesc'].'</td>

                  <td><button id="delTeambutton" type="button" class="btn btn-sm btn-danger">Delete</button>
                      <button id="editTeambutton" type="button" class="btn btn-sm btn-warning">Edit</button></td>

                  </tr>';*/
      }//how am I gonna pass the buttons

  }else{
    echo "no data";
  }

?>
