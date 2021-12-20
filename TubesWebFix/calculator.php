<?php 

    include'koneksi.php';
    session_start();

    
    // session_start();
    // if(isset($_SESSION['cek'])){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Javascript Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
    integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
    .nopadding{
        padding: 0px;
    }
    .btn_font{
        font-size: 30px;
    }
</style>
</head>
<body style="background: #269aff;">
   <!-- Navbar -->
   <nav class="navbar navbar-light bg-primary">
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
        <!-- Nama dan Nim  -->
        <?php if($_SESSION['id_Level'] == '1'){
        echo "Nama " . $_SESSION['Username'] ;
        echo " | ";
        echo "Nim ". $_SESSION['Nim']  ;
    } elseif($_SESSION['id_Level'] == '2') {
        echo "Nama " . $_SESSION['Username'] ;
        echo " | ";
        echo "Nim". $_SESSION['Nim'] ;
    } ?>
    </nav>
    <!-- Akhir Navbar -->
    <div class="container" style="padding: 30px;border: 1px solid grey;margin-top: 50px;background: whitesmoke;    box-shadow: 5px 5px #525252;    border-radius: 10px;">
        <div class="row">
         <p align="left" id="info"><b>DEG</b></p>
            <div class="col-lg-12 nopadding">
            <input type="text" name="calculation" id="calculation" class="form-control" style="padding: 10px;font-size: 30px;height: 80px;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 nopadding">
                <button id="log" class="btn btn-success btn-block btn_font" onclick="calc_log('')"> log</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="sin" class="btn btn-success btn-block btn_font" onclick="calc_sin()">sin</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="cos" class="btn btn-success btn-block btn_font" onclick="calc_cos()">cos </button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="tan" class="btn btn-success btn-block btn_font" onclick='calc_tan()'>tan </button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="pi" class="btn btn-success btn-block btn_font" onclick="calc_pi()">&pi; </button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="Rad" class="btn btn-success btn-block btn_font" onclick='calc_rad()'>Rand</button>
            </div>

        </div>
        <div class="row">
            <div class="col-md-2 nopadding">
                <button id="xy" class="btn btn-success btn-block btn_font" onclick="calc_sqrt()"> &#8730;</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="x!" class="btn btn-success btn-block btn_font" onclick="UserClickButton('2')">x!</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="yx" class="btn btn-success btn-block btn_font" onclick="UserClickButton('3')">y<sup>x</sup></button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="x3" class="btn btn-success btn-block btn_font" onclick='UserClickButton("+")'>x <sup>3</sup></button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="EXP" class="btn btn-success btn-block btn_font" onclick="calc_exp()">EXP</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="Deg" class="btn btn-success btn-block btn_font" onclick='calc_deg()'>Deg</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2 nopadding">
                <button id="(" class="btn btn-success btn-block btn_font" onclick="UserClickButton('(')">(</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id=")" class="btn btn-success btn-block btn_font" onclick="UserClickButton(')')">)</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="1/x" class="btn btn-success btn-block btn_font" onclick="UserClickButton('3')">1/x</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="x2" class="btn btn-success btn-block btn_font" onclick='UserClickButton("+")'>x <sup>2</sup></button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="!n" class="btn btn-success btn-block btn_font" onclick="calc_fact()">!n</button>
            </div>
            <div class="col-md-2 nopadding">
                <button id="x!" class="btn btn-success btn-block btn_font" onclick='UserClickButton("+")'>x!</button>
            </div>
        </div>
    <div class="row">
        <div class="col-md-3 nopadding">
            <button id="one" class="btn btn-info btn-block btn_font" onclick="UserClickButton('1')">1</button>
        </div>
        <div class="col-md-3 nopadding">
            <button id="two" class="btn btn-info btn-block btn_font" onclick="UserClickButton('2')">2</button>
        </div>
        <div class="col-md-3 nopadding">
            <button id="three" class="btn btn-info btn-block btn_font" onclick="UserClickButton('3')">3</button>
        </div>
        <div class="col-md-3 nopadding">
            <button id="add" class="btn btn-warning btn-block btn_font" onclick='UserClickButton("+")'>+</button>
        </div>
    </div>
        <div class="row">
            <div class="col-md-3 nopadding">
                <button id="four" class="btn btn-info btn-block btn_font" onclick='UserClickButton("4")'>4</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="five" class="btn btn-info btn-block btn_font" onclick='UserClickButton("5")'>5</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="six" class="btn btn-info btn-block btn_font" onclick='UserClickButton("6")'>6</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="minus" class="btn btn-warning btn-block btn_font" onclick='UserClickButton("-")'>-</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 nopadding">
                <button id="seven" class="btn btn-info btn-block btn_font" onclick='UserClickButton("7")'>7</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="eight" class="btn btn-info btn-block btn_font" onclick='UserClickButton("8")'>8</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="nine" class="btn btn-info btn-block btn_font" onclick='UserClickButton("9")'>9</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="multiply" class="btn btn-warning btn-block btn_font" onclick='UserClickButton("*")'>*</button>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 nopadding">
                <button id="dot" class="btn btn-info btn-block btn_font" onclick='UserClickButton(".")'>.</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="zero" class="btn btn-info btn-block btn_font" onclick='UserClickButton("0")'>0</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="equal" class="btn btn-info btn-block btn_font" onclick='CalculateValue()'>=</button>
            </div>
            <div class="col-md-3 nopadding">
                <button id="divide" class="btn btn-warning btn-block btn_font" onclick='UserClickButton("/")'>/</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 nopadding">
                <button class="btn btn-danger  btn-block" onclick="ClearData()">CLEAR</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <h2>History Log</h2>
            </div>
            <div class="col-lg-12" id="history_log">

            </div>
        </div>
    </div>

<script src="assets/js/main.js"></script>
</body>
</html>