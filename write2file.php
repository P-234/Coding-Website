<?php 
$text1 = $_POST['value1'];
echo $text1;
echo "file";
$filename ="111112.txt";
//exec("chmod 777 $filename");
$file = fopen( $filename, "w" );
//$map = $_POST['iteration_no'];
fwrite( $file, $text1);
fclose( $file );

?>