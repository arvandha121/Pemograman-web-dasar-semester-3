<?php 

    include("koneksi.php");

    //-- Cek tombol daftar telah ditekan atau belum
    if(isset($_POST['simpan'])){

        //-- Ambil data dari form daftar
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];

        //-- Buat query
        $sql = "INSERT INTO calon_peserta(nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama','$alamat','$jk','$agama','$sekolah')";
        $query = mysqli_query($connect, $sql);

        //-- Jika query berhasil
        if($query){
            //header('Location: editBiodata.php?status-sukses');
            echo "<meta http-equiv='refresh' content='0; url=editBiodata.php?status-sukses'>";

        }else{
            //header('Location: editBiodata.php?status-gagal');
            echo "<meta http-equiv='refresh' content='0; url=editBiodata.php?status-gagal'>";
        }
    }else{
        die("");
    }

?>