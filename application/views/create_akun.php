<!DOCTYPE html>
<html>

<head>
	<title>BUKIT DURI</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/sweetalert2/sweetalert2.min.css" media="screen">
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/img/logo.png">
	<script src="<?= base_url('assets/sweetalert2/') ?>sweetalert2.min.js"></script>

</head>

<body>

		<div class="slidercaptcha card">
			<div class="card-header">
				<span>Drag To Verify</span>
			</div>
			<div class="card-body">
				<div id="captcha"></div>
			</div>
		</div>

	<div class="container">
		<div class="brand-logo"><img class="brand-logo" src="<?php echo base_url() ?>assets/img/logo.png"></div>
		<div class="brand-title">Daftar Akun</div><hr>
		<form method="post" onsubmit="return validasi()" action="<?= base_url('Login/Create') ?>">
			<div class="input">
				<!-- NAMA -->
				<input type="text" name="nama" id="nama" autocomplete="off" placeholder="Masukan Nama Lengkap Anda" data-validate="Nama is Required"><br>
				<!-- NPK-->
				<input type="text" name="email" id="email" autocomplete="off" placeholder="Masukan Email Anda" data-validate="Email is Required"><br>
				<!-- PASSWORD -->
				<input type="password" name="password" id="password" placeholder="Masukan Password anda" data-validate="Password is Reuired"><br>
                <input type="password" name="password2" id="password2" placeholder="Konfirmasi Password" data-validate="Password is Reuired">
				<button type="submit" onclick="return validasi2()">Daftar</button>
			</div>
		</form>
		<hr>
		<!-- Kembali kehalaman Login -->
		<div class="akun">
				<a href="<?= base_url('Login')?>">LOG IN</a></label>
		</div>
		<!-- Copyright -->
		<div class="copyright">
			<a href="#" target="_blank">&copy;<b>HADY</b></a>
		</div>
	</div>

	<!-- valdasi password  -->
	<script type="text/javascript">
		function validasi2(){
		var password1 = document.getElementById('password').value;
		var password2 = document.getElementById('password2').value;
		if( password1 != password2){
			alert('Password Tidak sama');
			return false;
		}
	}
	</script>
	<!-- validasi form submit ga boleh kosong -->
	<script type="text/javascript">
		function validasi() {
			if (document.getElementById('nama').value == "") {
				alert('nama masih kosong');
				return false;
			} else if (document.getElementById('email').value == "") {
				alert('email masih kosong');
				return false;
			} else if (document.getElementById('password').value == "") {
				alert('password masih kosong');
				return false;
			} else if (document.getElementById('password2').value == "") {
				alert('password kedua masih kosong');
				return false;
			}
		}
	</script>

	<?php if($this->session->flashdata('sukses')){?>
	<script type="text/javascript">
		Swal.fire({
			title: 	'Berhasil!',
			text: 	'Selamat Bergabung Dengan Katar Bukit Duri!!!',
			icon: 	'success',
			confirmButtonText: 'Cool'
			})
	</script>

	

<?php }?>
</body>

</html>