<?php
  include("DBconnect.php");
  $query = 'SELECT `userID`, `firstname`, `lastname`, `emailadd` FROM `user` WHERE `active` = 0';

  $result = mysqli_query($conn,$query);

  
  while($row = mysqli_fetch_array($result)){

      echo '<tr id='.$row[0].'>
              <td>'.$row[0].'</td>
              <td>'.$row[1].'</td>
              <td>'.$row[2].'</td>
              <td>'.$row[3].'</td>
              <td><button id="resurrectButton" type="button" class="btn btn-sm btn-primary">Resurrect</button></td>

              </tr>';
  }
?>
