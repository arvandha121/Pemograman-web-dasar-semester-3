<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- css -->
    <style>
        body{
            background-color: #0d6efd;
        }
        h6{
            color: white;
        }
        form {
            font-family: roboto;
            background-color: rgb(255, 255, 255, 0.7);
            width: 500px;
            margin: 150px auto;
            padding: 30px;
            text-align: left;
            color: #2d2d2d;
            box-shadow: 2px 2px 7px #393939;
            font-weight: bold;
        }
        .container form input{
            border-radius: 5rem;
        }
        .container form label{
            font-size: 20px;
        }
        .container form #button{
            margin: 1rem 0rem 1rem 150px;
            border-radius: 100px;
            width: 120px;
            font-family: arial;
        }
    </style>
</head>
<body>
    <h6>
        <?php 
            include 'koneksi.php';
        ?>
    </h6>
    <!-- Login -->
    <div class="container col-xxl-4">
        <div class="row-xxl-4">
            <div class="col-xxl-4">
                <form action="cek_login.php" method="post">
                    <div class="row">
                        <div class="col">
                            <h1 class="header text-center">Login</h1>
                            <?php 
	                    if(isset($_GET['pesan'])){
		                if($_GET['pesan']=="gagal"){
		            	echo "<div class='alert alert-danger'>Username dan Password tidak sesuai !</div>";
		                }
	                  }
	                    ?>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label>Username</label>
                        <input class="form-control" type="text" name="Username" placeholder="masukkan username">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" type="password" name="Password" placeholder="masukkan password">
                    </div>
                    <button id="button" type="submit" name="submit" value="LOGIN" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Login -->
    
    <!-- Footer -->
    <footer class="text-white text-center fixed-bottom">
        <p><b>©Copyright Information 2021</b></p>
    </footer>
    <!-- Akhir Footer -->
</body>
</html>