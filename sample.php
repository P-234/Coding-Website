<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <input type="submit" name="submitcode1" />
        <br><br><br>
        <?php
        if (isset($_POST["submitcode1"])) {
            $a = 'test_cases/11.txt';
            $b = 'test_cases/11_.txt';

            // Check if filesize is different
            if (filesize($a) !== filesize($b))
                return 0;

            // Check if content is different
            $ah = fopen($a, 'rb');
            $bh = fopen($b, 'rb');

            $result = 1;
            while (!feof($ah)) {
                if (fread($ah, 8192) != fread($bh, 8192)) {
                    $result = 0;
                    break;
                }
            }

            fclose($ah);
            fclose($bh);

            if ($result) {
                echo "congratulation!!!! your answer is correct.";
            } else {
                echo "Sorry!! your ans is not correct.";
            }
        }
        ?>
    </form>

</body>

</html>