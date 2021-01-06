<?php

session_start();

if(!isset($_SESSION["un"]))
{
  header("Location:login.php");
}

if(isset($_SESSION['un']))
{
  $username=$_SESSION['un'];
}

?>


<!doctype html>
<html lang="en">
  <head>
      <style>

.pb
{
	border:1px solid gray;
	padding:6px;
	border-radius:5px;
	margin-bottom:10px;
	text-decoration: none;
	max-width:1000px;
	text-align: center;
	background-color: #449D44;
	color:white;
	box-shadow: 2px 2px 2px 2px gray;
    font-style: bold;
    


}

          </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="utf-8">
        <!-- <meta http-equiv="x-ua-compatible" content="ie=edge"> -->
    <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="css/bootstrap.min.css">
         <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">

        
         <!-- <link rel="stylesheet" href="css/style.css"> -->
     <!-- <link rel="stylesheet" href="css/vlab.css">  -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

    <title>Competitive Coding Website</title>
  </head>
  <body>
    <?php
    require_once('header.php');
    ?>
    <br><br>
<div class="row cspace2 slideanim">
<div class="col-sm-7"> 

<div id="services" class="container-fluid text-center" >
  <h2>SERVICES</h2>
  <h4>What we offer</h4>
  <br>
  <div class="row slideanim">
    <div class="col-sm-6">
      <a href="compiler.php"><span class="fa fa-code logo-small"></span>
      <h4>Compiler</h4>
      <p>Our Virtual Lab Supports C/C++ And Java Compiler</p>
      </a>
    </div>
    <div class="col-sm-6">
       <a href="archive.php"><span class="fa fa-archive logo-small"></span>
      <h4>Lab Practice</h4>
      <p>Our Virtual Lab Provides Practice Problems Of CSE Labs</p>
      </a>
    </div>
    </div>
    <br><br><br><br>
  <div class="row slideanim">
    <div class="col-sm-6">
       <a href="listcontest.php"><span class="fa fa-cogs logo-small"></span>
      <h4>Contest</h4>
      <p>Our Virtual Lab Judges Codes And Gives Perfect Result</p>
      </a>
    </div>
    <div class="col-sm-6">
       <a href="profile.php?user=<?php echo"$username" ?>"><span class="fa fa-check-square logo-small"></span>
      <h4>Profile</h4>
      <p>User can manage profile </p>
      </a>
    </div>
  </div>




</div>
</div><br><br><br>

<div class="col-sm-5">
    <div style="margin-left:30px" class="pb">Recent And Upcoming Labs</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>