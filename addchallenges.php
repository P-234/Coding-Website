<?php

session_start();
//require_once("config.php");

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
        <!-- <script src="js/vendor/modernizr-2.8.3.min.js"></script> -->

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Contest has been Created</h1>
    <?php
//     require_once('header.php');
//     require_once('contest.php');

//     $sql="select * from contest";
//     $result=$connection1->query($sql);
//    // echo "in php";
//     while($row=mysqli_fetch_array($result)){
//         echo"<br><form action=\"challenges.php\" method=\"POST\"><div class=\"container\" style=\"padding:10px ; width:80%; height:20% ; border:5px solid black\">";
//         echo"<label style=\"padding-right:30em\" >$row[contestname]</label>";
//         echo "<input type=\"hidden\" value=$row[contestname] name=\"contestname\">";
//         echo"<label style=\"padding-right:10em\">$row[starttime]</label>";
//         echo"<button type=\"submit\">View Challenges</button></form>";
//         echo"</div><br><br>";
//        // echo "in while";


//     }
//echo "out while";
    ?>






    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

