<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array7</title>
</head>
<body>
    <h2>Sorting Array</h2>
    <?php 
        $numbers = array(8,4,1,9,23,54,17,30);
        sort($numbers);

        $arrLength = count($numbers);
        for($x=0; $x<$arrLength; $x++){
            echo $numbers[$x]."<br>";
        }
    ?>
    <br><br>
    <h2>Sorting Array</h2>
    <?php 
        $numbers = array(8,4,1,9,23,54,17,30);
        rsort($numbers);

        $arrLength = count($numbers);
        for($x=0; $x<$arrLength; $x++){
            echo $numbers[$x]."<br>";
        }
    ?>
</body>
</html>