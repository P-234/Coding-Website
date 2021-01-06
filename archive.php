<?php

session_start();

if (!isset($_SESSION["un"])) {
    header("Location:login.php");
}

if (isset($_SESSION['un'])) {
    $usernamee = $_SESSION['un'];
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <!-- <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/vlab.css"> -->
    <script src="js/vendor/jquery-1.12.0.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7/js/bootstrap.js"></script>
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>





</head>

<body>
    <?php
    require_once('header.php'); ?>

    <br><br>

    <div class="container">

        <?php



        require_once('contest.php');

        $sql = "select * from Code";
        $result = $connection1->query($sql);
        // echo "in php";
        while ($row = mysqli_fetch_array($result)) {

            // echo"<br><form action=\"challenges.php\" method=\"POST\">";
            // echo"<div id=\"rcorners2\">";
            // echo "<ul id=b><li><a style=\"font-family: Arial, Helvetica, sans-serif; font-weight: 700; font-size: 16px; color: #39424e;\">PROJECTeuler</a></li>
            //     <li id=b><a style=\"font-family: Arial, Helvetica, sans-serif; font-weight: 400; font-size: 16px; color: #39424e;\">Sep 28th 2019, 9:30 pm IST</a></li>
            //     <li><a href=\"#details\">View Details</a></li>
            //     <li style=\"float:right\"></li><button class=\"button button4\">Enter</button></li>
            //   </ul>
            // <div>";


            echo "<br><form action=\"challenges.php?user=$usernamee/$row[title]\" method=\"POST\"><div class=\"container\" style=\"padding:10px ; width:90%; height:20% ; border:3px solid black; border-radius: 25px;\">";
            echo "<label style=\"padding-left:30px; font-size:25px ;text-decoration:underline\" >$row[title]</label><br>";
            echo "<label style=\"padding-left:30px; font-size:15px ;text-decoration:underline\" >Description: $row[desc]</label><br>";
            echo "<input type=\"hidden\" value=$row[id] name=\"id\">";
            echo "<div style=\"float:right; padding-right:30px;\"><button style=\"background-color: #4CAF50; color:white;  border-radius:15px; border:2px solid black\">View Challenge</button></div></form>";
            echo "</div><br><br>";
        }
        ?>


    </div>


</body>

</html>