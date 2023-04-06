<?php 
require "koneksi.php";

$id_customer = $_GET["id_customer"];
$sql = "SELECT * FROM customer WHERE id_customer = '$id_customer'";
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
    <h2>edit data Customer</h2>
    <form action="edit_customer.php" method="POST">
        
        <input type="hidden" id="id_customer" name ="id_customer" value="<?=$row['id_customer']?>"/>
        <br>
        <label for ="nama">Nama Customer</label>
        <input type="text" id="nama" name ="nama" value="<?=$row['nama']?>"/>
        <br>
        <label for ="no_hp">No Hp</label>
        <input type="number" id="no_hp" name ="no_hp"value="<?=$row['no_hp']?>"/>
        <br>
        <label for ="email">Email</label>
        <input type="text" id="email" name ="email" value="<?=$row['email']?>"/>
        <br>
        <input type="submit" value="ubah"/>
       
    </form>
    <?php } ?>
</body>
</html>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                     