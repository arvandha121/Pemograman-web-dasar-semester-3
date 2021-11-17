<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan 4 Do While PHP</title>
</head>
<body>
    <?php 
        $number = 5;
        $factorial = 1;

        do{
            $factorial *= $number;
            $number = $number - 1;
        }while($number > 0);
            echo $factorial;
    ?>
</body>
</html>