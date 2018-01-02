<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysql_query("INSERT INTO user VALUES('','$nama','$username','$password')");

header("location:index.php?pesan=input");
?>