<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan 5 Nested Loop PHP</title>
</head>
<body>
    <?php 
        for($i=0; $i<5; $i++){
            for($j=0; $j<10; $j++){
                echo "Ini perulangan ke ($i, $j)<br>";
            }
        }
    ?>
</body>
</html>