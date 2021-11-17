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
        if(isset($_GET["myname"]) AND isset($_GET["myaddress"])){
            echo "Selamat Datang ". $_GET["myname"] ." !! <br>";
            echo "Dari ". $_GET["myaddress"];
        }
        else{
            echo "Anda harus mengakses halaman ini dari form_1.php";
        }
    ?>
</body>
</html>