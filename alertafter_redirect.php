<?php


echo "started";
session_start();
$_SESSION['output']=$_POST['output'];
//echo "<script>location.lo</script>";
echo "hello";
header("Location:login.php");
echo "<script>windows.alert($_POST[output]);</script>";


?>