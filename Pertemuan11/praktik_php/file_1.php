<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $myFile = "testFile.txt";
        $fh = fopen($myFile, 'r');
        $theData = fgets($fh);
        fclose($fh);
        echo $theData;
    ?>
</body>
</html>