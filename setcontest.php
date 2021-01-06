<?php

session_start();
require_once('contest.php');

//echo "hello111111";

$contestname=$_POST['contestname'];
$u=0;
$c=1;
if($c){
    $sql="select contestname from contest";

$result=$connection1->query($sql);

   // echo "in if <br>";

    while($row=mysqli_fetch_array($result)){
        echo $row['contestname']. " contest name<br>";
        echo $contestname." added value<br>";

        if($row['contestname']==$contestname){
            echo '<script>alert(" contest name already have change the contest name")<script>';
            
                echo"not done"; 
            $u1=1;
        break;
           // header("Location:createcontest.php");
    
        }}
    }

//echo "<br>value of u ".$u;

    if($u==1){
        header("Location:profile.php");
    }
        else{

    
//echo "<br> in data base";

$contestname=$_POST['contestname'];
$starttime = $_POST['starttime'];
//$starttime1= $_POST['starttime1'];
$endtime = $_POST['endtime'];
//$endtime1 = $_POST['endtime1'];
$Organizationtype = $_POST['Organizationtype'];
$Organizationname = $_POST['Organizationname'];

$_SESSION['cn']=$contestname;

$sql="insert into contest(contestname,starttime,endtime,organizationtype,organizationname) values('$contestname','$starttime','$endtime','$Organizationtype','$Organizationname')";
//echo "=---------------------1111111111";
$result=$connection1->query($sql);
//echo "1111111111";
if($result){
//echo "hello1";
    
//    echo "<div style=\"margin-left:250px;\" class=\"alert alert-success\">
//    <strong>Your Contest Has Been added! Go To Your <a href=\"addchallenges.php?contest=\"$contestname\">$contestname</a></strong>
//     </div><br><br><br><br>";

echo '<script>alert("Your Contest Has Been added! Go To Your ")</script>';

     header("Location:addchallenges.php?contest=$contestname");
//echo "<h1>hello3<h1>";

}
else{

    echo "in else setcontest";

   // header("Location:createcontest.php?contest=$contestname");

}}
?>