<?php

$a='test_cases/11.txt';
$b='test_cases/11_.txt';
$ans=files_are_equal($a,$b);

if($ans){
  echo "congratulation!!!! your answer is correct.";
}
else{
echo "Sorry!! your ans is not correct.";
}


function files_are_equal($a, $b)
{
  // Check if filesize is different
  if(filesize($a) !== filesize($b))
      return 0;

  // Check if content is different
  $ah = fopen($a, 'rb');
  $bh = fopen($b, 'rb');

  $result = 1;
  while(!feof($ah))
  {
    if(fread($ah, 8192) != fread($bh, 8192))
    {
      $result = 0;
      break;
    }
  }

  fclose($ah);
  fclose($bh);

  return $result;
}

?>