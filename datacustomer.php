<?php 
require 'koneksi.php';
$sql = "SELECT * FROM customer";
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
        <th>id_customer</th>
        <th>nama_customer</th>
        <th>no_hp</th>
        <th>email</th>
        <th>aksi</th>
     </tr>
     <?php while ($row = mysqli_fetch_assoc($result)):?>
    <tr>
    <td><?$row['id_customer']?></td>
    <td><?= $row['nama']?></td>
    <td><?= $row['no_hp']?></td>
    <td><?= $row['email']?></td>

    <td>
    <a href="editform_customer.php?id_buku=<?= $row['id_customer']?>" ?>edit</a>

    <a href="delete_customer.php?id_buku=<?=$row['id_customer']?>" ?>Hapus</a>
  <?php endwhile ?>
     </td>
     </tr>
     </table>
</body>
</html>