<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "marvelnews";
$koneksi = mysqli_connect($host,$user,$pass) or die ("Koneksi database gagal");
mysqli_select_db($koneksi,$name) or die ("Database Not Found");
?>