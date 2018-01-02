<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL - Menampilkan data dari database</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
	</div>
	<br/>
	<center>
		<?php 
		if(isset($_GET['pesan'])){
			$pesan = $_GET['pesan'];
			if($pesan == "input"){
				echo "Data berhasil di input.";
			}else if($pesan == "update"){
				echo "Data berhasil di update.";
			}else if($pesan == "hapus"){
				echo "Data berhasil di hapus.";
			}elseif ($pesan == "gagal") {
				echo "Data gagal di input . pastikan anda menulis form dengan benar";
			}
		}
		?>
	</center>
	
	<br/>
	<br/>
	<h3>Input password baru</h3>
	<form action="index-aksi.php" method="post" onSubmit="return validasi()">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" id="nama"></td>					
			</tr>	
			<tr>
				<td>Username</td>
				<td><input type="text" name="username" id="username"></td>					
			</tr>	
			<tr>
				<td>Password</td>
				<td><input type="text" name="password" id="password"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>

<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (nama != "" && username != "" && password!="") {
			return true;
		}else{
			alert('Semuanya harus di isi !');
			return false;
		}
	}
 
</script>
</html>