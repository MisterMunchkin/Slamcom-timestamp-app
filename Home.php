
<?php
include("loginVerification.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body>

<div class="container">
  <div class="jumbotron">


    <?php
        $firstname = $_SESSION['firstname'];
        $lastname = $_SESSION['lastname'];
        $userID = $_SESSION['userID'];

        echo "<h1> Welcome, $firstname</h1>";
    ?>

    <div class="demo" data-bg-img-url="clock-face20.png">

    </div>

    <p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobile-first projects on the web.</p>
    <a class="btn btn-primary btn-lg" href="LogoutBackground.php" role="button">Log Out</a>
  </div>
  <p>This is some text.</p>
  <p>This is another text.</p>
</div>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

  <script src="jquery.canvasClock.js"></script>

  <script type="text/javascript">
    jQuery(document).ready(function(){
      jQuery('.canvas-clock').canvasClock({
        brandName: 'jQueryScript',
        showSecondHand: true,
        showMinuteHand: true,
        showHourHand: true
      });
    });
  </script>

</body>
</html>
