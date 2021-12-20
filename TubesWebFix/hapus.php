<?php 

    include("koneksi.php");

    if(isset($_GET['id'])){

        //-- Ambil id dari query string
        $id = $_GET['id'];

        //-- Buat query hapus
        $sql = "DELETE FROM calon_peserta WHERE id=$id";
        $query = mysqli_query($connect, $sql);

        //-- Mengecek query berhasil terhapus
        if($query){
            //header('Location: editBiodata.php');
            echo "<meta http-equiv='refresh' content='0; url=editBiodata.php'>";
        }else{
            die("gagal menghapus.....");
        }
    }else{
        die("akses dilarang......");
    }

?>