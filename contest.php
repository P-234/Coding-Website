<?php

$host='localhost';
$username='root';
$password='';
$db='user';


$connection1=new mysqli($host,$username,$password,$db);


if(!$connection1){
    echo "Contest has no connection";
}
else{
   // echo "contest connection done";
}
?>