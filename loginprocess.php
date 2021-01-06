<?php
session_start();
require_once('config.php');


$username=$_POST['un'];
$pass=$_POST['ps'];

$sql="select * from user where name='$username' and pass='$pass'";

$result=$connection->query($sql);

$row=mysqli_fetch_array($result);

if(!empty($row))
{
	

if($username==$row['name'] && $row['pass']==$pass)
{
   
   
       $_SESSION=array();

       $_SESSION['un']=$row['name'];
        $_SESSION['ps']=$row['pass'];

        header("Location:home.php");


}
else
{
     header("Location:login.php?value=fail");
     //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
     //echo("Wrong Username And Password");
     echo '<script language="javascript">';
     echo 'alert("Wrong Username And Password")';
      echo '</script>';
}


}
else
{
 header("Location:login.php?value=fail");
 //echo "<script>window.alert(\"Wrong Username And Password\");</script>";
// echo("Wrong Username And Password");
  echo '<script language="javascript">';
     echo 'alert("Wrong Username And Password")';
      echo '</script>';
}



?>