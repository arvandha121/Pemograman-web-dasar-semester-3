<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "prakwebdb";

    $connect = mysqli_connect($hostname, $username, $password, $database);
    
    $sql = "INSERT INTO user VALUES(
        2, 'nauvan', MD5(12345)
    )";
    
    if(mysqli_query($connect, $sql)){
        echo "insert data user berhasil dibuat";
    }else{
        echo "insert data user gagal dibuat <br>".mysqli_error($connect);
    }

    mysqli_close($connect);
?>