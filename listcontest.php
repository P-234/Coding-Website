<?php

session_start();
//require_once("config.php");

if (!isset($_SESSION["un"])) {
  header("Location:login.php");
}

if (isset($_SESSION['un'])) {
  $username = $_SESSION['un'];
}

?>

<!doctype html>
<html lang="en">

<head>
  <style>
    .pb {
      border: 1px solid gray;
      padding: 6px;
      border-radius: 5px;
      margin-bottom: 10px;
      text-decoration: none;
      max-width: 1000px;
      text-align: center;
      background-color: #449D44;
      color: white;
      box-shadow: 2px 2px 2px 2px gray;
      font-style: bold;



    }

    #rcorners2 {
      border-radius: 25px;
      border: 2px solid grey;
      padding: 20px;
      width: 700px;
      height: 50px;

    }

    ul #b {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;

    }

    li #b {
      float: left;
      padding: 14px 16px;
    }



    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 10px;
      margin-left: 100px;
      text-align: center;
      text-decoration: none;

      font-size: 16px;

      cursor: pointer;
    }

    .button4 {
      border-radius: 12px;
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

  <title>List of contest</title>
</head>

<body>

  <script src="jquery-3.3.1.min.js"></script>
  <script src="TimeCircles/TimeCircles.js"></script>
  <link rel="stylesheet" type="text/css" href="TimeCircles/TimeCircles.css">


  <script>
    $(function() {
      $("#count-down").TimeCircles();
    });
  </script>
  <?php


  require_once('header.php');
  require_once('contest.php');

  $sql = "select * from contest";
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


    echo "<br><form action=\"challenges.php\" method=\"POST\"><div class=\"container\" style=\"padding:10px ; width:90%; height:20% ; border:3px solid black; border-radius: 25px;\">";
    echo "<label style=\"padding-left:30px; font-size:25px ;text-decoration:underline\" >$row[contestname]</label>";
    echo "<input type=\"hidden\" value=$row[contestname] name=\"contestname\">";
  ?>
  <?php $date = date_create($row['starttime']);
    $date1 = date_format($date, "Y");
    $mydate = getdate(date('U'));

    if ($mydate['year'] > $date1) {
      echo "<label id=\"qw\" style=\"padding-left:20em; font-size:15px; text-align:center\">Expired</label>";
      echo "<div style=\"float:right; padding-right:30px;\"><button style=\"background-color: blue; color:white;  border-radius:15px; border:2px solid blue\">Virtualization test</button></div></form>";
      echo "</div><br><br>";
    } else {
      echo "<label id=\"qw\" style=\"padding-left:20em; font-size:15px; text-align:center\">" . date_format($date, "d/m/Y H:i:s") . "</label>";

      // echo"<label style=\"padding-right:10em\">$row[starttime]</label>";
      echo "<div style=\"float:right; padding-right:30px;\"><button style=\"background-color: #4CAF50; color:white;  border-radius:15px; border:2px solid black\">View Challenges</button></div></form>";
      echo "</div><br><br>";
    }
  }
  ?>
  <?php $date = date_create($row['starttime']);  ?>

  <script>
    var countDownDate = new Date(<?php echo date_format($date, "Y/m/d H:i:s") ?>).getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

      // Get today's date and time
      var now = new Date().getTime();


      // Find the distance between now and the count down date
      var distance = countDownDate - now;


      // Time calculations for days, hours, minutes and seconds
      var days = Math.floor(distance / (1000 * 60 * 60 * 24));
      var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      var seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Display the result in the element with id="demo"
      document.getElementById("demo").innerHTML = days + "d " + hours + "h " +
        minutes + "m " + seconds + "s ";

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>