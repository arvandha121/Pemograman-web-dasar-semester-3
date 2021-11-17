<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String1</title>
</head>
<body>
    <?php 
        // Untuk mengetahui panjang string
        echo strlen("hello world!");
        echo "<br>";
        // Untuk mengetahui jumlah kata di dalam string
        echo str_word_count("hello world!");
        echo "<br>";
        // Untuk membalik urutan string
        echo strrev("hello world!");
        echo "<br>";
        // Mengubah huruf menjadi huruf capital
        echo strtoupper("hello world!");
        echo "<br>";
        // Mengubah huruf menjadi huruf kecil (lowercase)
        echo strtolower("hello world!");
        echo "<br>";
        // Mengubah huruf awal dari sebua kata dengan huruf besar
        echo ucwords("hello world!");
    ?>
</body>
</html>