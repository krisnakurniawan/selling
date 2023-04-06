<?php 
require 'koneksi.php';
$sql = "SELECT * FROM buku";
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
          border: 1px solid black;
        }
        </style>
</head>
<body>
   <table>
     <tr>
        <th>id_buku</th>
        <th>judul</th>
        <th>penulis</th>
        <th>penerbit</th>
        <th>tahun</th>
        <th>harga</th>
        <th>aksi</th>
     </tr>
     <?php while ($row = mysqli_fetch_assoc($result)):?>
    <tr>
    <td><?$row['id_buku']?></td>
    <td><?= $row['judul']?></td>
    <td><?= $row['penulis']?></td>
    <td><?= $row['penerbit']?></td>
    <td><?= $row['tahun']?></td>
    <td><?= $row['harga']?></td>

    <td>
    <a href="editform_buku.php?id_buku=<?= $row['id_buku']?>" ?>edit</a>

    <a href="delete_buku.php?id_buku=<?=$row['id_buku']?>" ?>Hapus</a>
  <?php endwhile ?>
     </td>
     </tr>
     </table>
</body>
</html>