<?php 
    $hostname = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($hostname, $username, $password);

    if($connect){
        echo "Berhasil login database localhost";
    }
    else{
        echo "Gagal login database localhost".mysqli_connect_error();
    }
?>