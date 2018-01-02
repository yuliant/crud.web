<?php 

include 'koneksi.php';
$string = $_POST['email'];
$string2 = $_POST['no_telp'];

if(preg_match("/^([A-Za-z0-9_\-\.]){1,}\@([A-Za-z0-9_\-\.]){1,}\.([A-Za-z]{2,4})$/", $string)&&preg_match("/^([0-9]{1,13})$/", $string2)){
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$email = $_POST['email'];
	$no_telp = $_POST['no_telp'];

	mysql_query("UPDATE user SET nama='$nama', alamat='$alamat', pekerjaan='$pekerjaan', email='$email', no_telp='$no_telp' WHERE id='$id'");

	header("location:index.php?pesan=update");
}else{
	header("location:index.php?pesan=gagal");
}

?>