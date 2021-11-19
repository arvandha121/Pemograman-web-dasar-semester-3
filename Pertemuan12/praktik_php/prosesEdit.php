<?php 
    include "koneksi.php";

    $id = $_POST['id'];
    $nama = $_POST['name'];
    $harga= $_POST['price'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp_foto,'image/'.$foto);


    $query = "UPDATE product SET product_name='$nama', harga='$harga',foto='$foto'
    WHERE id='$id'";
    $result = mysqli_query($connect, $query);

    if($result){
        echo "Berhasil update data";
?>
    <a href="homeCRUD.php">Lihat Data</a>
<?php
    }
    else{
        echo "Gagal update data". mysqli_error($connect);
    }
?>