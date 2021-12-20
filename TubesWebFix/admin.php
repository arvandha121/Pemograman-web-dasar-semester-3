<?php 

    include'koneksi.php';
    //session_start();

    
    // session_start();
    // if(isset($_SESSION['cek'])){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        center{
            margin-top: 7rem;
        }
        center a{
            text-decoration: none;
        }
        center a input{
            font-size: 25px;
            height: 70px;
            width: 250px;
        }
        nav span{
            color: white;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-light bg-primary text-light">
        <div class="container-fluid">
            <span style="font-weight: bold;" class="navbar-brand mb-0 h1 text-light">Navbar</span>
            <span id="tanggalwaktu"></span>
                <script>
                    var tw = new Date();
                    if (tw.getTimezoneOffset() == 0)(a = tw.getTime() + (7 * 60 * 60 * 1000))
                    else(a = tw.getTime());
                    tw.setTime(a);
                    var tahun = tw.getFullYear();
                    var hari = tw.getDay();
                    var bulan = tw.getMonth();
                    var tanggal = tw.getDate();
                    var hariarray = new Array("Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jum'at,", "Sabtu,");
                    var bulanarray = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
                    document.getElementById("tanggalwaktu").innerHTML = hariarray[hari] + " " + tanggal + " " + bulanarray[bulan] + " " + tahun + " | " + ((tw.getHours() < 10) ? "0" : "") + tw.getHours() + ":" + ((tw.getMinutes() < 10) ? "0" : "") + tw.getMinutes() + (" WIB ");
                </script>
        </div>

    </nav>
    <!-- Akhir Navbar -->
    <div class="container">
        <div class="row">
            <div class="col">
                <center>
                    <h2 class="mb-4">Selamat Datang Admin</h2>
                    <a href="editBiodata.php">
                        <input type="submit" class="btn btn-primary" value="Edit Biodata">
                    </a>
                    <br><br>
                    <a href="calculatoradmin.php">
                        <input type="submit" class="btn btn-warning" value="kalkulator">
                    </a>
                    <br><br>
                    <a href="index.php?AdminLogout">
                        <input type="submit" class="btn btn-danger" value="Logout">
                    </a>
                </center>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-white bg-primary text-center fixed-bottom">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>
<?php
// }
?>