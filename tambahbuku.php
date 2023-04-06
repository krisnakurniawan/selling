<?php

require "koneksi.php";
$id_buku =$_POST['id_buku'];
$judul_buku =$_POST['judul'];
$penulis =$_POST['penulis'];
$penerbit =$_POST['penerbit'];
$tahun=$_POST['tahun'];
$harga =$_POST['harga'];

$sql ="INSERT INTO buku VALUES
('', '$judul', '$penulis', '$penerbit', '$tahun', '$harga')";
mysqli_query($conn, $sql);
header ("location:databuku.php");

?>