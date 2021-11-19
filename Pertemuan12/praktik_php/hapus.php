<?php 

    include("koneksi.php");

    //-- Ambil id dari query string
    $id = $_GET['id'];

    //-- Buat query hapus
    $query = "DELETE FROM product WHERE id=$id";
    $result = mysqli_query($connect, $query);

    //-- Mengecek query berhasil terhapus
    if($result){
        echo "Data berhasil dihapus";
?>
    <a href="homeCRUD.php">Lihat Data</a>
<?php
    }
    else{
        echo "Data gagal dihapus". mysqli_error($connect);
    }
?>