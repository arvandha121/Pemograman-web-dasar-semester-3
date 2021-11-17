<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array8</title>
</head>
<body>
    <h2>Sorting Array</h2>
    <?php 
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17",
        );
        asort($age);

        foreach($age as $name => $value){
            echo "name = ".$name.", age = ".$value."<br>";
        }
    ?>
</body>
</html>

<!-- ================================================================================== -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array8</title>
</head>
<body>
    <h2>Sorting Array</h2>
    <?php 
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17",
        );
        echo"<b>== dengan rsort ==</b><br>";
        rsort($age);
        foreach($age as $name => $value){
            echo "name = ".$name.", age = ".$value."<br>";
        }
    ?>
    <?php 
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17",
        );
        echo"<br><b>== dengan ksort ==</b><br>";
        ksort($age);
        foreach($age as $name => $value){
            echo "name = ".$name.", age = ".$value."<br>";
        }
    ?>
    <?php 
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17",
        );
        echo"<br><b>== dengan asort ==</b><br>";
        asort($age);
        foreach($age as $name => $value){
            echo "name = ".$name.", age = ".$value."<br>";
        }
    ?>
    <?php 
        $age = array(
            "Joe" => "29",
            "Elsa" => "27",
            "Kevin" => "32",
            "Nick" => "24",
            "Olaf" => "9",
            "Ana" => "17",
        );
        echo"<br><b>== dengan krsort ==</b><br>";
        krsort($age);
        foreach($age as $name => $value){
            echo "name = ".$name.", age = ".$value."<br>";
        }
    ?>
</body>
</html>