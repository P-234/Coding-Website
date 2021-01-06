<?php


if ($fh = fopen('problem_statement/7048-bubbleSort.txt', 'r')) {
    while (!feof($fh)) {
        $line = fgets($fh);
        echo $line;
        echo "<br>";
    }
    fclose($fh);
}
?>