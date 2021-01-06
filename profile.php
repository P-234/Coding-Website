<?php

session_start();
require_once("config.php");

if (!isset($_SESSION["un"])) {
  header("Location:login.php");
}

if (isset($_SESSION['un'])) {
  $username = $_SESSION['un'];
}

if (isset($_GET['user'])) {
  $data = $_GET['user'];
}


?>


<!DOCTYPE html>
<html>

<head>


  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Profile</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="js/vendor/jquery-1.12.0.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
  <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
  <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>




</head>
<style>
  .info {
    font-size: 20px;
  }
</style>

<body>
  <div class="main">
    <?php

    include("header.php");

    ?>



    <div class="row log">
      <div class="col-sm-10">
        <?php

        if (isset($_GET['user'])) {

          $username = $data;
        }



        ?>
        <div class="">
        <?php
        $usernameuppercase=ucfirst($username);?>
          <h3 style="text-align:center;"><?php echo "$usernameuppercase's  Profile"; ?></h3>
        </div>
      </div>

      <div class="col-sm-1">

      </div>

      <div class="col-sm-1">

      </div>

    </div>

    <?php

    $sql = "SELECT * FROM user WHERE name='$username'";
    $send = $connection->query($sql);
    $row = mysqli_fetch_array($send);


    ?>


    <div class="row cspace">
      <div class="col-sm-2">
      </div>
      <div class="col-sm-6 pbs">

        <div class="ym" style="background:#d9edf7;">
          <div class="pc" style="font-size:21px">Information</div>


          <table class="table">
            <tr class="info">
              <td>Name : <?php echo "$row[name]"; ?></td>
            </tr>
            <tr class="info">
              <td>Email : <?php echo "$row[email]"; ?></td>
            </tr>
            <tr class="info">
              <td>Occupation : <?php echo "$row[status]"; ?></td>
            </tr>
            <?php

            if ($data == $_SESSION['un']) {
              echo "<tr class=\"info\"><td><a href=\"edit.php?name=$username\">Edit Profile</a></td></tr>";
            }

            ?>

          </table>
        </div>

        <?php

        if ($data == $_SESSION['un']  && $_SESSION['un'] == $data) {
          echo " 
          <div class=\"ym\">
    <div class=\"pc\" style=\"font-size:21px;\">Dashboard</div>
  
   
   <ul class=\"nav nav-pills nav-stacked\">
    <li role=\"presentation\" class=\"active\"><a href=\"createcontest.php\">Create Contest </a></li>
    <li role=\"presentation\"><a href=\"setcontestproblem.php\">Create Lab Question</a></li>
    <li role=\"presentation\"><a href=\"setproblem.php\">Create Practice Question</a></li>
    <li role=\"presentation\"><a href=\"allsubmission.php?name=$username\">My Submission</a></li>
  </ul></div>";
        } else if ($row['name'] == 'teacher') {
          echo " 
          <div class=\"ym\">
    <div class=\"pc\">Dashboard</div>
  
   
   <ul class=\"nav nav-pills nav-stacked\">
    <li role=\"presentation\" class=\"active\"><a href=\"setcontest.php\">Create Contest </a></li>
    <li role=\"presentation\"><a href=\"setcontestproblem.php\">Create Lab Question</a></li>
    <li role=\"presentation\"><a href=\"setproblem.php\">Create Practice Question</a></li>
    <li role=\"presentation\"><a href=\"allsubmission.php?name=$username\">My Submission</a></li>
    </ul></div>";
        }
        ?>
      </div>
    </div>
    <br><br><br>



</body>

</html>