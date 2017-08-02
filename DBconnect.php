<?php
  $conn = new mysqli("localhost","root","","slamcom");

  if(!$conn){
    die("Connection failed: ".$conn->connection_error);
  }
?>
