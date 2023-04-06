<?php

$servername ="localhost";
$username ="root";
$password ="";
$database ="db_buku";

$conn=mysqli_connect($servername, $username, $password, $database);

if(!$conn){
    die("koneksi error:".mysqli.connect.error());
}

?>