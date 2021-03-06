<!DOCTYPE html>
<html>
<head>
	<title>Membuat CRUD Dengan PHP Dan MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
	<div class="judul">
		<h1>Membuat CRUD Dengan PHP Dan MySQL</h1>
		<h2>Menampilkan data dari database</h2>
	</div>
	<br/>
	<?php
		// if(isset($_GET['pesan'])){
		// 	$pesan = $_GET['pesan'];
		// 	if($pesan == "input"){
		// 		echo '<script type="text/javascript"">
		// 		swal("Data", "Berhasil di input", "success");
		// 		</script>';
		// 	}else if($pesan == "update"){
		// 		echo '<script type="text/javascript"">
 		// 	 swal("Data", "Berhasil di update", "success");
 		// 	 </script>';
		// 	}else if($pesan == "hapus"){
		// 		echo '<script type="text/javascript"">
 		// 	 swal("Data", "Berhasil di hapus", "success");
 		// 	 </script>';
		// 	}elseif ($pesan == "gagal") {
		// 		echo '<script type="text/javascript"">
 		// 	 swal("Data", "Gagal di input", "success");
 		// 	 </script>';
		// 	}
		//}
		?>

		<br/>
		<br/>
		<form action="index.php" method="get">
		<label>Cari :</label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
		</form>
		<?php
		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			echo "<b>Hasil pencarian : ".$cari."</b>";
		}
		?>
		<br/>

	<?php
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo '<script type="text/javascript"">
			swal("Data", "Berhasil di input", "success");
			</script>';
		}else if($pesan == "update"){
			 echo '<script type="text/javascript"">
			 swal("Data", "Berhasil di update", "success");
			 </script>';
		}else if($pesan == "hapus"){
			echo '<script type="text/javascript"">
			swal("Data", "Berhasil di hapus", "success");
			</script>';
		}elseif ($pesan == "gagal") {
			echo '<script type="text/javascript"">
		 swal("Data", "Gagal di proses", "error");
		 </script>';
		}
	}
	?>
	<br/>
	<a class="tombol" href="input.php">+ Tambah Data Baru</a>

	<h3>Data user</h3>
	<table border="1" class="table">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Alamat</th>
			<th>Pekerjaan</th>
			<th>Email</th>
			<th>No. Telpon</th>
			<th>Opsi</th>
		</tr>

		<?php
		include "koneksi.php";

		if(isset($_GET['cari'])){
			$cari = $_GET['cari'];
			$query_mysql = mysql_query("select * from user where nama like '%".$cari."%'");
		}else{
			$query_mysql = mysql_query("select * from user")or die(mysql_error());
		}
		$nomor = 1;
		while($data = mysql_fetch_array($query_mysql)){
		?>

		<tr>
			<td><?php echo $nomor++; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td><?php echo $data['pekerjaan']; ?></td>
			<td><?php echo $data['email']; ?></td>
			<td><?php echo $data['no_telp']; ?></td>
			<td>
				<a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a> |
				<a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')">Hapus</a>
			</td>
		</tr>
		<?php } ?>
	</table>

</body>
</html>

<?php
//include '../config.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
	header("location:../index.php");
}

// menampilkan pesan selamat datang
echo "Hai, selamat datang ". $_SESSION['username'];

?>
<br/>
<br/>
<a href="logout.php">LOGOUT</a>
