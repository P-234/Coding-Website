<?php
$u=0;
if(isset($_SESSION['un'])){
  $username=$_SESSION['un'];
  $u=1;
}

?>
<!-- 
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/style.css">
        <!-- <link rel="icon" type="image/png" href="img/ruet.png"> -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <script src="js/vendor/jquery-1.12.0.min.js"></script>

<style>

ul{
    
    direction:rtl;
    text-align: right;
    list-style-type: none;
    margin: 0;
    display:inline-block;
}
li{
  float: left;
    display:inline-block;
    /* border:1px solid black; */
    padding:0 10px 0 10px;
    /* margin:0 10px 0 10px; */
}
</style>


    <title>Competitive coding website</title>
  </head>
  <body>

  <div class="main" >

  <div class="row">
  <div class="col-sm-12">
  <nav class="navbar navbar-inverse navbar-fixed-top nbar">
    <div class="navbar-header" style="width:40% ; height:100px;">
      <a class="navbar-brand lspace" href="home.php">Online_compiler</a>
    </div>
    <ul class="nav navbar-nav" style="inline-height:80px,  width">
      <!-- <li class="space"><a href="compiler.php"><i class="fa fa-code ispace"></i>Compiler</a></li>
      <li class="space"><a href="archive.php"><i class="fa fa-archive ispace"></i>Problem Archive</a></li>
      <li class="space"><a href="contest.php"><i class="fa fa-cogs ispace"></i>Contests</a></li>
     -->

    <?php
     if($u==1){
       echo "<li class=\"space\"><a class=\"fa fa-code ispace\" href=\"index.php\">Home</a> </li>";
      echo " <li><a href=\"#details\">View Details</a></li>";
     }
     else{
     // echo "<li class=\"space\"><a class=\"fa fa-code ispace\" href=\"index.php\">Home </a>  </li>";
     echo " <li><a href=\"#details\">View Details</a></li>";
     echo " <li><a href=\"#details\">View Details</a></li>";
     }
     ?>
      <?php
      echo"<li class=\"space\"><a class=\"fa fa-code ispace\" href=\"listcontest.php\">Contest </a>
      </li>";
      ?>
      
        <?php
        if($u==1){
          echo "<li class=\"space\"><a class=\"fa fa-code ispace\" href=\"profile.php?user=$username\">$username</a></li>";
         echo"<li class=\"space\"><a class=\"fa fa-code ispace\" href=\"Logout.php\">Log Out</a></li>";
        }        
         else{
          echo"<li class=\"space\"><a class=\"fa fa-code ispace\" href=\"login.php\">Login</a>\"</li>";
      echo"<li class=\"space\"><a class=\"fa fa-code ispace\" href=\"sign.php\">Sign up</a>\"</li>";
         }
      ?>
    
    </ul>
  </nav>
  </div>
  </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html> -->