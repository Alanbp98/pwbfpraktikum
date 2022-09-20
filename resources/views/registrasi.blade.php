<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi Akun</title>
	<link rel="stylesheet" type="text/css" href="assets/css/registrasistyle.css">
</head>
<body>
	<div class="container">
		<div class="title">Registrasi</div>
		<form action="#">
			<div class="user-details">
				<div class="input-box">
					<span class="details">Nama Lengkap :</span>
					<input type="text" placeholder="Masukkan namamu" required>
				</div>
				<div class="input-box">
					<span class="details">Username :</span>
					<input type="text" placeholder="Masukkan username" required>
				</div>
				<div class="input-box">
					<span class="details">Email :</span>
					<input type="text" placeholder="Masukkan emailmu" required>
				</div>
				<div class="input-box">
					<span class="details">No. HP :</span>
					<input type="text" placeholder="Masukkan No. HP" required>
				</div>
				<div class="input-box">
					<span class="details">Password :</span>
					<input type="password" placeholder="Masukkan passwordmu" required>
				</div>
				<div class="input-box">
					<span class="details">Konfirmasi Password :</span>
					<input type="password" placeholder="Konfirmasi passwordmu" required>
				</div>
			</div>
			<div class="gender-details">
				<input type="radio" name="gender" id="dot-1">
				<input type="radio" name="gender" id="dot-2">
				<span class="gender-title">Jenis Kelamin</span>
				<div class="category">
					<label for="dot-1">
						<span class="dot one"></span>
						<span class="gender">Laki-Laki</span>
					</label>
					<label for="dot-2">
						<span class="dot two"></span>
						<span class="gender">Perempuan</span>
					</label>
				</div>
			</div>
			<div class="button">
				<input type="submit" value="Register">
				<h5>Sudah punya akun ? <a href="#"> Login Disini</a></h5>
			</div>
		</form>
	</div>

</body>
</html>
