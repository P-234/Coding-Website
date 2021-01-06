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


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="icon" type="image/png" href="img/ruet.png"> -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="js/vendor/jquery-1.12.0.min.js"></script>




    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"> </script> -->


</head>

<body>
    <?php
    require_once('header.php'); ?>

    <br><br>

    <?php
    require_once('contest.php');
    ?>
    <?php
    $id = $_POST['id'];
    //echo $id;
    $sql = "select * from  Code where id='$id'";
    $result = $connection1->query($sql);

    $row = mysqli_fetch_array($result);
    $Answerfilepath = "test_cases/$row[testcase]";
    ?>
    <div class="main">






        <div class="row cspace" style="margin-top:4px;">
            <div class="col-sm-8">
                <div class="form-group">

                    <div class="row log" style="padding:50px;margin-top:-75px;">
                        <div class="col-sm-10">
                            <div class="">
                                <h3 style="text-align:center; font-weight:bold;font-size:35px"><?php echo "$row[title]"; ?></h3>
                            </div>
                        </div>

                        <div class="col-sm-1">

                        </div>

                        <div class="col-sm-1">

                        </div>

                    </div>

                    <div class="container" style="width:800px;">
                        <h4>Description:
                            <?php
                            $filepath = "problem_statement/$row[file]";


                            if ($fh = fopen("$filepath", 'r')) {
                                while (!feof($fh)) {
                                    $line = fgets($fh);
                                    echo $line;
                                    echo "<br>";
                                }
                                fclose($fh);
                            }


                            ?> </h4>
                    </div>
                    <form action="compile.php" id="form" name="f2" method="POST">
                        <label for="lang">Choose Language</label>

                        <select class="form-control" name="language">
                            <option value="c">C</option>
                            <option value="cpp">C++</option>
                            <!-- <option value="cpp11">C++11</option> -->
                            <option value="java">Java</option>


                        </select><br><br>

                        <label for="ta">Write Your Code</label>
                        <textarea class="form-control" name="code" rows="25" cols="50"></textarea><br><br>
                        <label for="in">Enter Your Input</label>
                        <textarea class="form-control" name="input" rows="10" cols="50"></textarea><br><br>
                        <input type="submit" id="st" class="btn btn-success" value="Run Code"><br><br><br>

                    </form>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $("#st").click(function() {
                                $("#div").html("Loading ......");
                            });
                        });
                    </script>

                    <script>
                        //wait for page load to initialize script
                        $(document).ready(function() {
                            //listen for form submission
                            $('form').on('submit', function(e) {
                                //prevent form from submitting and leaving page
                                e.preventDefault();
                                // AJAX 
                                $.ajax({
                                    type: "POST", //type of submit
                                    cache: false, //important or else you might get wrong data returned to you
                                    url: "compile.php", //destination
                                    datatype: "html", //expected data format from process.php
                                    data: $('form').serialize(), //target your form's data and serialize for a POST
                                    success: function(result) { // data is the var which holds the output of your process.php

                                        // locate the div with #result and fill it with returned data from process.php
                                        $('#div').html(result);
                                        callSubmit();
                                    }
                                });
                            });
                        });
                    </script>

                    <label for="out">Output</label>
                    <textarea id='div' class="form-control" placeholder="Output" name="output" rows="10" cols="50" readonly></textarea><br><br>


                    <!--<script>
"use strict";
function submitForm(oFormElement)
{
var xhr = new XMLHttpRequest();
var display=document.getElementById('div');
xhr.onload = function(){ display.innerHTML=xhr.responseText; }
xhr.open (oFormElement.method, oFormElement.action, true);
xhr.send (new FormData (oFormElement));
return false;
}
</script>-->
                    <!--<label for="out">Output</label>
<textarea id='div' class="form-control" name="output" rows="10" cols="50"></textarea><br><br>-->

                    <!-- 


</div>
</div>

<div class="col-sm-4">


</div>
</div>
</div>
<br><br><br>
<div class="area">
<div class="well foot">
<div class="row area">
<div class="col-sm-3">
BEGIN: Powered by Supercounters.com -->
                    <!-- 
<center><script type="text/javascript" src="http://widget.supercounters.com/online_i.js"></script><script type="text/javascript">sc_online_i(1360839,"ffffff","e61c1c");</script><br><noscript><a href="http://www.supercounters.com/">Free Online Counter</a></noscript>
</center>
END: Powered by Supercounters.com -->
                    <!-- 
</div>

<div class="col-sm-5">


<div class="fm">




<div class="col-sm-4">

<?php
//date_default_timezone_set("Asia/Dhaka");
//$t=date("H:i:s");
//echo"<b>Server Time:  $t</b>";

?> -->
                    <br>

                    <form method="POST">
                        <!-- <input type="hidden" name="submitcode1" value="12"> -->
                        <input type="submit" name="submitcode" onclick="submitcode1()" />
                        <br><br><br>
                        <script>
                            function submitcode1() {
                                console.log("start checking");

                                var check = "<?php comparefile(); ?>";
                                console.log(check);
                                if (check == "1") {
                                    alert("Congratuaition!!! your code has successfully submitted");
                                    console.log("Congratuaition!!! your code has successfully submitted");
                                } else {
                                    alert("Sorry Your code is not correct");
                                    console.log("Sorry Your code is not correct");
                                }
                                console.log("hello");
                                //     exec("rm *.txt");
                            }


                            function callSubmit() {
                                var dataset = {
                                    "value1": document.getElementById('div').value
                                };
                                console.log(dataset);
                                $.ajax({
                                    url: 'write2file.php',
                                    type: 'POST',
                                    data: dataset,
                                    success: function() {
                                        //  alert('Success');
                                    }
                                });
                            }
                        </script>
                        <?php
                        function comparefile()
                        {
                            exec("chmod 777 *.txt");
                            // $a = $Answerfilepath;
                            $a = "test_cases/93808-Add_5_no_answer.txt";
                            // 93808-Add_5_no_answer.txt';
                            $b = '111112.txt';
                            $check = 0;

                            // Check if filesize is different
                            if (filesize($a) !== filesize($b))
                                $check = 0;

                            // Check if content is different
                            $ah = fopen($a, 'rb');
                            $bh = fopen($b, 'rb');

                            $check = 1;
                            while (!feof($ah)) {
                                if (fread($ah, 8192) != fread($bh, 8192)) {
                                    $check = 0;
                                    break;
                                }
                            }

                            fclose($ah);
                            fclose($bh);

                            echo $check;
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>