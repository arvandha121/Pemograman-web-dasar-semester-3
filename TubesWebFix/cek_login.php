<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$user	= isset($_POST['Username']) ? $_POST['Username'] : "";
$pass	= isset($_POST['Password']) ? MD5($_POST['Password']) : "";
$_SESSION['Username'] = "";
$_SESSION['id_Level'] = "";
$_SESSION['Nim'] = "";

			
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect,"SELECT * FROM user where Username='$user' AND Password='$pass'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['id_Level'] == "1"){
 
		// buat session login dan username
		$_SESSION['Username'] = $user;
		$_SESSION['id_Level'] = "1";
		$_SESSION['Nim'] = $data['Nim'];
		// alihkan ke halaman dashboard admin
        //header("location:admin.php?user=$cek");
        echo "<script>alert('Anda berhasil Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=admin.php?user=$cek'>";
 
	// cek jika user login sebagai guest
	}else if($data['id_Level'] == "2"){
		// buat session login dan username
		$_SESSION['Username'] = $user;
		$_SESSION['id_Level'] = "2";
		$_SESSION['Nim'] = $data['Nim'];
		// alihkan ke halaman
        //header("location:guest.php?user=$cek");
        echo "<script>alert('Anda berhasil Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=guest.php?user=$cek'>";
 
 
	}else{
 
		// alihkan ke halaman login kembali
		//header("location:index.php?pesan=gagal");
		echo "<script>alert('Anda gagal Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?user=$cek'>";
	}	
}else{
	//header("location:index.php?pesan=gagal");
	echo "<script>alert('Anda gagal Log In');</script>";
	echo "<meta http-equiv='refresh' content='0; url=index.php?pesan=gagal'>";
}
 
?>

<!-- 
    //     echo "<script>alert('Anda berhasil Log In');</script>";
    //     echo "<meta http-equiv='refresh' content='0; url=guest.php?user=$sesi'>";
    // }
    // else
    // {
    //     echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    //     echo "<script>alert('Anda Gagal Log In');</script>";
    // } -->