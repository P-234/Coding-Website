<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>

    <form method="post" enctype="multipart/form-data">
        <label>Title</label>
        <input type="text" name="title"><br><br><br>
        <label>Description</label>
        <input type="text" name="descs"><br><br><br>
        <label>File Upload</label>
        <input type="file" name="file" /><br><br><br>
        <label>Test case File Upload</label>

        <input type="file" name="testfile" /><br><br><br>
        <input type="submit" name="submit">


    </form>

</body>

</html>

<?php
$localhost = "localhost"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "user";  #database name

#connection string
$conn = mysqli_connect($localhost, $dbusername, $dbpassword, $dbname);

if(!$conn){
    echo "connection failed";
}
// include_once "config.php";

if (isset($_POST["submit"])) {
    #retrieve file title
    $title = $_POST["title"];
    $descs = $_POST["descs"];

    #file name with a random number so that similar dont get replaced
    $pname = rand(1000, 100000) . "-" . $_FILES["file"]["name"];
    $testpname = rand(1000, 100000) . "-" . $_FILES["testfile"]["name"];

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
    $testtname = $_FILES["testfile"]["tmp_name"];

    #upload directory path
    $uploads_dir = 'problem_statement';
    $testuploads_dir = 'test_cases';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir . '/' . $pname);
    move_uploaded_file($testtname, $testuploads_dir . '/' . $testpname);

    #sql query to insert into database
    $sql = "INSERT into Code(`title`,`desc`,`file`,`testcase`) VALUES('$title','$descs','$pname','$testpname')";
// $result=$conn->query($sql);
    if (mysqli_query($conn, $sql) ){
        echo "File Successfully uploaded";
    } else {
        echo $sql;
        echo "Error";
    }
}


?>