<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "prakwebdb";

    $connect = mysqli_connect($hostname, $username, $password, $database);

    $sql = "CREATE TABLE user2(
        id int(11) PRIMARY KEY auto_increment,
        username varchar(50) not null,
        password varchar(50) not null
    )";

    echo "<br>";

    if(mysqli_query($connect, $sql)){
        echo "Tabel user berhasil dibuat";
    }
    else{
        echo "Tabel user gagal dibuat <br>".mysqli_error($connect);
    }

    mysqli_close($connect);
?>