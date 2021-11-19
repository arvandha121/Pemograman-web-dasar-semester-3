<?php 
    include "koneksi.php";

    $id= $_POST['id'];
    $nama = $_POST['name'];
    $harga = $_POST['price'];
    $foto = $_FILES['foto']['name'];
    $tmp_foto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($tmp_foto,'image/'.$foto);
    $sql = "INSERT INTO product(id,product_name,harga,foto)
    VALUES('$id','$nama', '$harga','$foto')";
    
    if(mysqli_query($connect,$sql)){
        echo "Data berhasil ditambahkan";
    }
    else{
        echo "Data gagal ditambahkan <br>" . mysqli_error($connect);
    }
    
    mysqli_close($connect);
?>
    