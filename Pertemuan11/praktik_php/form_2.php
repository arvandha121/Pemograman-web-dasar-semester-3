<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: #FF0000;
        }
    </style>
</head>
<body>
    <?php 
        //ambil nilai variabel error
        if(isset($_GET['error'])){
            $error = $_GET['error'];
        }
        else{
            $error = "";
        }

        //siapkan pesan kesalahan
        $pesan = "";
        if($error == "variabel_belum_diset"){
            $pesan = "Anda harus mengakses halaman ini dari form_2.php";
        }
        else if($error == "nama_kosong"){
            $pesan = "Nama harus diisi";
        }
        else if($pesan == "email_kosong"){
            $pesan = "Email harus diisi";
        }

        //Siapkan isian form jika terjadi kesalahan
        if(isset($_GET["nama"]) AND isset($_GET["email"]) AND isset($_GET["komentar"])){
            $nama = $_GET["nama"];
            $email = $_GET["email"];
            $komentar = $_GET["komentar"];
        }
        else{
            $nama = "";
            $email = "";
            $komentar = "";
        }
    ?>

    <span class="error">
        <?php echo $pesan; ?>
    </span>

    <table>
        <form action="prosesForm_2.php" method="get">
            <tr>
                <td>Nama :</td>
                <td>
                    <input type="text" name="nama" value="<?php echo $nama; ?>">
                </td>
            </tr>
            <tr>
                <td>Email :</td>
                <td>
                    <input type="text" name="email" value="<?php echo $email; ?>">
                </td>
            </tr>
            <tr>
                <td>Komentar :</td>
                <td>
                    <textarea name="komentar" id="" cols="40" rows="5"><?php echo $komentar; ?></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit"name="kirim" value="Kirim">
                </td>
            </tr>
        </form>
    </table>
</body>
</html>