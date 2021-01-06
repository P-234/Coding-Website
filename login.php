<?php

session_start();

if(isset($_SESSION["un"]))
{
  header("Location:home.php");
}

?>


<!DOCTYPE html>
<html>
<head>
  
    
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sign In</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
         <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <script src="bootstrap-3.3.7/js/bootstrap.min.js" </script>
        <script src="bootstrap-3.3.7/js/bootstrap.js" </script>
        <script src="js/jquery.nivo.slider.js" type="text/javascript"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">








</head>
<body>
<div class="main">
<?php

require_once("header.php");

?>
<div class="container">
<div class="col-sm-8">
<div class="form-group log">
<form action="loginprocess.php" name="f1" method="POST">

<label for="username" style="font-size:25px ;font-family:arial">Username</label>
<input type="text" name="un" class="form-control form-control-lg" placeholder="Enter Username" required><br>
<label for="password" style="font-size:25px ;font-family:arial">Password</label>
<input type="password" class="form-control form-control-lg"  name="ps" placeholder="Enter Password" required><br>

<button type="submit" class="btn btn-success">Sign In</button><br><br>
  

</form>
</div>
</div>

<div class="col-sm-4">

</div>
</div>
<br><br><br><br>

<div class="container">
<div class="row">
<div class="col-sm-9">
<?php

if(isset($_GET['value']))
{
   
   echo "<div style=\"margin-left:300px;\" class=\"alert alert-danger\">
  <strong>Sign in Failed!</strong>  Wrong Username And Password
   </div><br>";
    
}






?>
</div>
<div class="col-sm-3">
</div>
</div>
</div><br><br><br>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>


