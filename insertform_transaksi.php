<?php
require "koneksi.php";

$result_customer = mysqli_query($conn, "SELECT id_customer, nama FROM customer");
$result_buku = mysqli_query($conn, "SELECT id_buku, judul, harga FROM buku");
$options_customer = mysqli_fetch_all($result_customer, MYSQLI_ASSOC );
$options_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC );
?>
<DOCTYPE html>
<head></head>
<body>
<form action="insert_transaksi.php" method="post">
    <label for="nama_customer">Nama Pelanggan</label><br>
    <select name="id_customer" id="nama_pelanggan">
        <option 
        disabled selected>Pilih Nama Pelanggan..
    </option>
        <?php foreach ($options_customer as $option) { ?>
        <option value="<?=$option['id_customer']?>"><?=$option['nama']?></option>
        <?php } ?>
            </select><br>
            <label for="judul">Nama Buku</label><br>
            <select name="id_buku" id="judul">
                <option
                 disabled selected>Pilih Nama Buku..
                </option>
                <?php foreach ($options_buku as $option) { ?>
                <option value="<?=$option['id_buku']?>"><?=$option['judul'] . ' ' .  "- Rp" .  $option['harga']?></option>
                <?php } ?>
            </select><br>
            <label for="kuantitas">Kuantitas</label><br>
            <input type="number" name="kuantitas" id="kuantitas"/><br>
            <input type="submit" value="simpan" class="button4">
        </form>
        </body>
        </html>