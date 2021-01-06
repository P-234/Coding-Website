<?php

session_start();

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
    <?php
    require_once('header.php');
    ?>
    <br><br>

    <div class="row" style="margin-left:10px">
<div class="col-sm-8">
<div class="form-group log">
<form action="setcontest.php" name="f1" method="POST">

<?php
// require_once('contest.php');

// $sql="select contestname from contest";

// $result=$connection1->query($sql);

echo "<label for=\"contestname\">Contest Name: </label>
<input type=\"text\" name=\"contestname\" class=\"form-control\" placeholder=\"Enter Contest name\" required><br>";

// if(isset($_POST['contestname'])){

//     $contestname=$_POST['contestname'];
//     while($row=mysqli_fetch_array($result)){
//         echo "$row[contesname]";
//         if($row['contestname']==$contestname){
//             echo "<script language=\"javascript\"><windows.alert(\" contest name already have change the contest name\");<script>>";

//             $contestname="";
//         break;

//         }
//     }


// }
?>

<!-- <label for="starttime">Start Time</label>
<input type="date" name="starttime" class="form-control"  required>
<label for="starttime1">at</label>
<input type="time" name="starttime1" class="form-control"  required> -->

<label for="starttime">Start Time</label>
 <input type="datetime-local" name="starttime" requried><br><br>

 <label for="endtime">End Time</label>
 <input type="datetime-local" name="endtime" requried><br><br>



<!-- <label for="endtime">End Time</label>
<input type="date" name="endtime" class="form-control"  required>
<label for="endtime1">at</label>
<input type="time" name="endtime1" class="form-control"  required> -->

<!-- 
 <label for="ta">Enter Contest Start Time</label>
<input type="text" name="ct" class="form-control"><br><br>-->

<!-- 
 <div class="input-group date form_datetime col-md-5" data-date="2017-06-15T05:25:07Z" data-date-format=" yyyy-mm-dd hh:ii " data-link-field="dtp_input1">
                    <input type='text' name="ct" class="form-control" readonly class="form_datetime" />

                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div><br><br>

<label for="ta">Enter Contest End Time</label>
<input type="text" name="ce" class="form-control"><br><br>-->

<!-- 
 <div class="input-group date form_datetime1 col-md-5" data-date="2017-06-15T05:25:07Z" data-date-format=" yyyy-mm-dd hh:ii " data-link-field="dtp_input1">
                    <input type='text' name="ce" class="form-control" readonly class="form_datetime1" />

                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
          <span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div><br><br>
<br><br>
 --> 



<label for="Organizationtype">Organization Type: </label>
<input type="text" name="Organizationtype" class="form-control" placeholder="Enter Organization type" required><br>

<label for="Organizationname">Organization Name: </label>
<input type="text" name="Organizationname" class="form-control" placeholder="Enter Organization name" required><br>


<button type="submit" class="btn btn-success">Create</button><br><br><br><br><br><br>

</form>
</div>
</div>


    </body>
    </html>
