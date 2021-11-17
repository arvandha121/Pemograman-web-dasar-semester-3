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
        if(isset($_GET["nama"]) AND isset($_GET["email"])){
            $nama = $_GET["nama"];
            $email = $_GET["email"];
            $komentar = $_GET["komentar"];
            $isi_form = "$nama = $nama & $email = $email & $komentar = $komentar";
        }
        else{
            header("Location:form_2.php?error=variabel_belum_diset");
        }

        if(empty($nama)){
            header("Location:form_2.php?error=nama_kosong".$isi_form);
        }
        else if(empty($email)){
            header("Location:form_2.php?error=email_kosong".$isi_form);
        }
        else{
            echo "Nama: $nama <br> Email: $email <br> Komentar: $komentar";
        }
    ?>
</body>
</html>