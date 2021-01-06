<?php

require_once('config.php');

$username=$_POST['uname'];
$pass=$_POST['password'];
//$pass=md5($pass);
$email=$_POST['email'];
$status=$_POST['status'];

$sql="insert into user(name,pass,email,status) values('$username','$pass','$email','$status')";

$result=$connection->query($sql);

// $row=mysqli_fetch_array($result);


if($result){
    header("Location:login.php");
}
else{
    echo "Failed<br>";
}



?>