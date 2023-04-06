<?php
require "koneksi.php";

$sql = "SELECT transaksi.id_transaksi, transaksi.kuantitas, transaksi.harga, transaksi.total_pembayaran, customer.id_customer, customer.nama, buku.id_buku, buku.judul FROM customer INNER JOIN transaksi on customer.id_customer = transaksi.id_customer INNER JOIN buku on buku.id_buku = transaksi.id_buku ORDER BY id_transaksi";

$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .i {
          width: 50%;
          margin: auto;
          border-collapse: collapse;
        }
        th, td {
          border: 1px solid  black;
        }
        
  
        </style>
</head>
<body>
    <h2 class="">data transasi toko</h2>
    <a href = "insertform_transaksi.php" class="btn">tambah data transaksi</a>
   <table class="i">
     <tr>
        <th>id transaksi</th>
        <th>nama pelanggan</th>
        <th>nama buku</th>
        <th>jumlah</th>
        <th>harga</th>
        <th>total harga</th>
        <th>aksi</th>
     </tr>
     <?php while ($row = mysqli_fetch_array($result)):
        $total_pembayaran = $row['kuantitas']*$row['harga']
        ?>
    <tr>
    <td><?= $row['id_transaksi']?></td>
    <td><?= $row['nama']?></td>
    <td><?= $row['judul']?></td>
    <td><?= $row['kuantitas']?></td>
    <td><?= $row['harga']?></td>
    <td><?= $row['total_pembayaran']?></td>
    <td>
        <a href = "editform_transaksi.php?id_transaksi= <?=$row['id_transaksi']?>" class="btn">edit<a>
        <a href = "delete_transaksi.php?id_transaksi= <?=$row['id_transaksi']?>" class="btn">hapus<a>
    </td>
    </tr>
  <?php endwhile ?>
     </table>
</body>
</html>