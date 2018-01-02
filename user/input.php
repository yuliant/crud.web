<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menginput data dari database</h2>
	</div>

	<br/>

	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post" onSubmit="return validasi()">		
		<table>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" id="nama"></td>					
			</tr>	
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat" id="alamat"></td>					
			</tr>	
			<tr>
				<td>Pekerjaan</td>
				<td><input type="text" name="pekerjaan" id="pekerjaan"></td>					
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email"></td>					
			</tr>
			<tr>
				<td>No. Telpon</td>
				<td><input type="text" name="no_telp" id="no_telp"> ANGKA [max 13 karakter]</td>					
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