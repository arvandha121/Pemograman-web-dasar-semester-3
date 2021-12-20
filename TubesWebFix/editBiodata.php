<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Pendaftaran</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                        <a class="nav-link " aria-current="page" href="admin.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Calon Peserta</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-disabled="true" href="tambah.php" tabindex="-1">Daftar</a>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Akhir Navbar -->

    <!-- tabel -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 style="margin: 5rem 0rem 1rem 1rem; font-family: Times New Roman"><strong>Peserta yang sudah mendaftar :</strong></h1>
                <br>
                <div class="mb-3">
                    <nav>
                        <a style="margin-left: 1rem; text-decoration: none;" href="tambah.php?tambah-daftar-baru">
                            <button type="button" class="btn btn-primary">Tambah Baru</button>
                        </a>
                    </nav>
                </div>
                <div class="mb-3">
                <div class="card" style="width: 100%;">
                    <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr class="bg-secondary">
                                <th scope="col" style="color: white">No.</th>
                                <th scope="col" style="color: white">Nama</th>
                                <th scope="col" style="color: white">Alamat</th>
                                <th scope="col" style="color: white">Jenis Kelamin</th>
                                <th scope="col" style="color: white">Agama</th>
                                <th scope="col" style="color: white">Sekolah Asal</th>
                                <th scope="col" style="color: white" class="ml-1">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                            
                                $sql = "SELECT * FROM calon_peserta";
                                $query = mysqli_query($connect, $sql);
                                $nomor = 1;

                                while($siswa = mysqli_fetch_array($query)){
                                    echo "<tr>";

                                    echo "<td>" . $nomor . "</td>";
                                    echo "<td>" . $siswa['nama'] . "</td>";
                                    echo "<td>" . $siswa['alamat'] . "</td>";
                                    echo "<td>" . $siswa['jenis_kelamin'] . "</td>";
                                    echo "<td>" . $siswa['agama'] . "</td>";
                                    echo "<td>" . $siswa['sekolah_asal'] . "</td>";

                                    echo "<td>";
                                    echo "<a style='text-decoration: none;' href=' cetakadmin.php?id=" .$siswa['id']. " '><button type='button' class='btn btn-info ml-1'>Print</button></?a>";
                                    echo "<a style='text-decoration: none; : none;' href='edit.php?id=" .$siswa['id']. " '><button type='button' class='btn btn-warning ml-1'>Edit</button></?a>";?>
                                    <a style="pointer-events:;" href="hapus.php?id=<?php echo $siswa['id']; ?>" onclick = "return confirm ('Apakah Anda Yakin Akan Menghapus Data Ini?')"><button type="button" class="btn btn-danger">Hapus</button></a>
                                    <?php echo "</td>";

                                    echo "</tr>";?><?php $nomor++;
                                }
                            
                            ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
                <div>
                    <p style="margin-bottom: 5rem">
                        Total: <?php echo mysqli_num_rows($query) ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir tabel -->

    <!-- Footer -->
    <footer class="bg-primary text-white text-center fixed-bottom">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>