<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Mengedit data dari database</h2>
	</div>
	
	<br/>
	
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Edit data</h3>

	<?php 
	include "koneksi.php";
	$id = $_GET['id'];
	$query_mysql = mysql_query("SELECT * FROM user WHERE id='$id'")or die(mysql_error());
	$nomor = 1;
	while($data = mysql_fetch_array($query_mysql)){
	?>
	<form action="update.php" method="post" onSubmit="return validasi()">		
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id" value="<?php echo $data['id'] ?>">
					<input type="text" name="nama" value="<?php echo $data['nama'] ?>" id="nama">
				</td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" value="<?php echo $data['alamat'] ?>" id="alamat"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" value="<?php echo $data['pekerjaan'] ?>" id="pekerjaan"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" value="<?php echo $data['email'] ?>" id="email"></td>					
			</tr>
			<tr>
				<td>No. Telpon</td>
				<td><input type="text" name="no_telp" value="<?php echo $data['no_telp'] ?>" id="no_telp"> ANGKA [max 13 karakter]</td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
	<?php } ?>
</body>

<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var alamat = document.getElementById("alamat").value;
		var pekerjaan = document.getElementById("pekerjaan").value;
		var email = document.getElementById("email").value;		
		var no_telp = document.getElementById("no_telp").value;				
		if (nama != "" && alamat != "" && pekerjaan!="" && email!="" && no_telp!="") {
			return true;
		}else{
			alert('Semuanya harus di isi !');
			return false;
		}
	}
 
</script>

</html>