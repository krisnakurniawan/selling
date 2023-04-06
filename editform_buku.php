<?php 
require "koneksi.php";

$id_buku = $_GET["id_buku"];
$sql = "SELECT * FROM buku WHERE id_buku = '$id_buku'";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_array($result)){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>krisna</title>
</head>
<body>
    <h2>edit data buku</h2>
    <form action="edit_buku.php" method="POST">
        
        <input type="hidden" id="id_buku" name ="id_buku" value="<?=$row['id_buku']?>"/>
        <br>
        <label for ="judul">Judul Buku</label>
        <input type="text" id="judul" name ="judul" value="<?=$row['judul']?>"/>
        <br>
        <label for ="penulis">penulis</label>
        <input type="text" id="penulis" name ="penulis"value="<?=$row['penulis']?>"/>
        <br>
        <label for ="penerbit">penerbit</label>
        <input type="text" id="penerbit" name ="penerbit" value="<?=$row['penerbit']?>"/>
        <br>
        <label for ="tahun">tahun</label>
        <input type="date" id="tahun" name ="tahun" value="<?=$row['tahun']?>"/>
        <br>
        <label for ="harga">harga</label>
        <input type="number" id="harga" name ="harga" value="<?=$row['harga']?>"/>
        <br>
        <br>
        <input type="submit" value="ubah"/>
       
    </form>
    <?php } ?>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     