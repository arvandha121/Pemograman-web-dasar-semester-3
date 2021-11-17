<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Konversi Tipe Data</h2>
    <?php 
        $a = 10.5;
        $b = "9 kucing";
        echo $a;
        echo "<br>".(integer) $a;
        echo "<br>". $b;
        echo "<br>".(integer) $b;
    ?>
</body>
</html>