<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Product</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <table>
        <tr>
            <th> Id </th>
            <th> Nama Product </th>
            <th> Harga </th>
            <th> Foto </th>
        </tr>
        <?php 
            include "koneksi.php";

            $query = "SELECT * FROM product";
            $result = mysqli_query($connect, $query);

            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
        ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['harga'] ?></td>
                <td><?php echo $row['foto'] ?></td>
            </tr>
        <?php 
                }
            }
            else{
                echo "0 result";
            }
        ?>
    </table>
</body>
</html>