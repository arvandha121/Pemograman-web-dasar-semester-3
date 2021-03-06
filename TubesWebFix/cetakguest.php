<?php 

include("koneksi.php");

//-- Jika tidak ada string id didalam query
if(!isset($_GET['id'])){
    header('Location: list.php');
}

//-- Ambil id dari query string
$id = $_GET['id'];

//-- Buat query ambil dari database
$sql = "SELECT * FROM calon_peserta WHERE id=$id";
$query = mysqli_query($connect, $sql);
$siswa = mysqli_fetch_assoc($query);

//-- Jika data yang diedit tidak ditemukan
if(mysqli_num_rows($query) < 1){
    die("data tidak ditemukan.....");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Form Peserta</title>
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        @media print{
            .btn{
                display: none;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="row-xxl-4">
        <div class="col-xxl-4">
            <nav class="navbar navbar-expand-xl navbar-dark bg-primary shadow fixed-top">
                <div class="container">
                    <a class="navbar-brand" style="font-weight: bold" href="#">NAVBAR</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="guest.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active disabled" href="lihatBiodata.php">Calon Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true" href="daftar.php" tabindex="-1">Daftar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- Form Detail -->
    <div class="container" style="margin-top: 8.5rem; margin-bottom: ">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                        <header>
                            <h3 style="margin-bottom: 1rem"><strong>Formulir Detail Peserta</strong></h3>
                        </header>
                            <fieldset>
                                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>">
                                <table class="table table-bordered mt-3">
                                    <tr>
                                        <td><strong> Id Peserta : </strong></td>
                                        <td><?php echo $siswa['id'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong> Nama : </strong></td>
                                        <td><?php echo $siswa['nama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong> Alamat : </strong></td>
                                        <td><?php echo $siswa['alamat'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong> Jenis Kelamin : </strong></td>
                                        <td><?php echo $siswa['jenis_kelamin'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong> Agama : </strong></td>
                                        <td><?php echo $siswa['agama'] ?></td>
                                    </tr>
                                    <tr>
                                        <td><strong> Asal Sekolah : </strong></td>
                                        <td><?php echo $siswa['sekolah_asal'] ?></td>
                                    </tr>
                                </table>
                                <div class="mb-3 float-end">
                                        <a style="color: white; text-decoration: none;" href="lihatBiodata.php"><button type="button" class="btn btn-success ml-1">Kembali</button></a>
                                    </div>
                            </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Form Detail -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center fixed-bottom">
        <p><b>??Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>
<script>
	window.print();
</script>