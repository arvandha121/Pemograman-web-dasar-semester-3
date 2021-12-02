<?php 
    $hostname = "localhost";
    $user = "root";
    $pass = "";
    $database = "prakwebdb";

    $connect = mysqli_connect($hostname, $user, $pass, $database);

    $username = $_POST['username'];
    $password = MD5($_POST['password']);

    $sql = "SELECT * FROM user WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($connect, $sql);
    $cek = mysqli_num_rows($result);

    if($cek > 0){
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['status'] = 'login';
        ?>
        Anda Berhasil Login, silahkan menuju
        <a href="homeSession.php">Halaman HOME</a><?php
    }
    else{
        ?>
        Gagal Login, silahkan login lagi
        <a href="sessionLoginFrom.html">Halaman Login</a><?php
        echo mysqli_connect_error($connect);
    }
?>