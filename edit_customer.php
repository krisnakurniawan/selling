<?php
require "koneksi.php";

$id_customer =$_POST ["id_customer"];
$nama =$_POST ['nama'];
$no_hp =$_POST ['no_hp'];
$email =$_POST ['email'];
$tahun =$_POST ['tahun'];
$harga =$_POST ['harga'];

$sql ="UPDATE customer SET nama ='$nama', no_hp ='$no_hp', email ='$email' WHERE id_customer ='$id_customer'";
 $result = mysqli_query($conn, $sql);

if ($result) {
    echo "<script>
          alert('Edit Berhasil');
          location.href ='datacustomer.php';
          </script>";
} else {
echo "<script>
      alert('Edit Gagal');
      location.href ='datacustomer.php';
      </script>";

}
?>