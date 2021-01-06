<?php
$u = 0;
if (isset($_SESSION['un'])) {
  $username = $_SESSION['un'];
  $u = 1;
}
if (isset($_POST['logout'])) {
  session_reset();
  session_destroy();
  echo "<script>location.href='index.php';</script>";
}

?>



<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Baloo Bhai 2', cursive;
      font-weight: bold;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #333;
    }

    li {
      float: left;
    }

    li a {
      display: block;
      color: white;
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 20px;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      margin: 2px;
      padding: 12px;
    }

    /* li a:hover:not(.active) {
      background-color: yellow;
    }

    .active {
      background-color: #4CAF50;
    } */

    .input[type="submit"] {
      font-family: 'Baloo Bhai 2', cursive;
      font-size: 17px;
      padding: 10px 17px;
      margin-left: 10px;
      background-color: black;
      color: white;
      /* border:none; */
      border-radius: 25px;
      cursor: pointer;
      font-weight: bold;
    }


    li a:hover,
    li a.active {
      text-decoration: underline;
      color: #cab4b4;
    }
  </style>
</head>


<body>

  <ul>
    <li><a href="#home">Online Compiler</a></li>
    <!-- <li><a href="#home">Home</a></li> -->
    <!-- <li><a href="#news">News</a></li> -->
    <!-- <li><a href="#contact">Contact</a></li> -->
    <!-- <li style="float:right"><a class="active" href="#about">About</a></li> -->

    <?php
    if ($u == 1) {
      echo "<li><a href=\"index.php\" class=\"active\">Home</a> </li>";
      //  echo " <li><a href=\"#details\">View Details</a></li>";
    } else {
      echo "<li><a href=\"index.php\">Home </a>  </li>";
      // echo " <li><a href=\"#details\">View Details</a></li>";
      // echo " <li><a href=\"#details\">View Details</a></li>";
    }
    ?>
    <?php
    echo "<li><a href=\"listcontest.php\">Contest </a>
      </li>";
    ?>

    <?php
    if ($u == 1) {
      $usernameuppercase=ucfirst($username);
      echo "<li><a href=\"profile.php?user=$username\">$usernameuppercase</a></li>";
      echo "<li><a href=\"Logout.php\"><form method=\"post\"><input type=\"submit\" name =\"logout\" value=\"LogOut\" style=\"    text-decoration: none;
      background: none;
      border: none;
  \"></form></a></li>";
    } else {
      echo "<li><a href=\"login.php\">Login</a></li>";
      echo "<li><a href=\"sign.php\">Sign up</a></li>";
    }
    ?>
  </ul>

</body>

</html>