<?php
require "koneksi.php";

$id_buku =$_POST ["id_buku"];
$judul =$_POST ['judul'];
$penulis =$_POST ['penulis'];
$penerbit =$_POST ['penerbit'];
$tahun =$_POST ['tahun'];
$harga =$_POST ['harga'];

$sql ="UPDATE buku SET judul ='$judul', penulis ='$penulis', penerbit ='$penerbit', tahun ='$tahun', harga ='$harga' WHERE id_buku ='$id_buku'";
 $result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
          alert('Edit Berhasil');
          location.href ='databuku.php';
          </script>";
} else {
echo "<script>
      alert('Edit Gagal');
      location.href ='databuku.php';
      </script>";

}
?>