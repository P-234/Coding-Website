<?php

$host='localhost';
$user='root';
$pass='';
$db='user';

$connection=new mysqli($host,$user,$pass,$db);
if(!$connection){
    echo"Not connected";
}
else{

    // echo "connected";
}


?>