<!DOCTYPE html>
<html>
<head>
	<title>Membuat Form Validasi dengan Javascript</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
	<br/>
	<center><h2>Form log in BY USER</h2></center>	
	<br/>
	<div class="login">
	<br/>
		<form action="login_user.php" method="post" onSubmit="return validasi()">
			<div>
				<label>Username:</label>
				<input type="text" name="username" id="username" />
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password" id="password" />
			</div>			
			<div>
				<input type="submit" value="Login" class="tombol">
			</div>
		</form>
	</div>
</body>

<center><a href="index.php">Log in sebagai ADMIN</a></center>
<br/>
<center><a href="create/index.php">Create PASSWORD</a></center>
 
<script type="text/javascript">
	function validasi() {
		var username = document.getElementById("username").value;
		var password = document.getElementById("password").value;		
		if (username != "" && password!="") {
			return true;
		}else{
			alert('Username dan Password harus di isi !');
			return false;
		}
	}
 
</script>
</html>