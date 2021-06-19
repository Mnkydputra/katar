<!DOCTYPE html>
<html>

<head>
	<title>BUKIT DURI</title>
	<meta name="viewport" content="width=device-width , initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/login.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/sweetalert2/sweetalert2.min.css" media="screen">
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
		<div class="brand-title">LOGIN</div><br>
		<form method="post" onsubmit="return validasi()" action="<?= base_url('Login/Ceklogin') ?>">
			<div class="input">
				<!-- <label>NPK</label> -->
				<input type="text" name="email" id="email" autocomplete="off" placeholder="Masukan Email anda" data-validate="NPK is Required"><br>
				<!-- <label>PASSWORD</label> -->
				<input type="password" name="password" id="password" placeholder="Masukan Password anda" data-validate="Password is Reuired">
				<button type="submit">LOGIN</button>
			</div>
		</form>
		<div class="alert">
			<?php if ($this->session->flashdata("nouser")) { ?>
				<span style="color:red">user tidak di temukan</span>
			<?php } else if ($this->session->flashdata('info')) { ?>
				<small style="color:red"><?= $this->session->flashdata('info'); ?></small>
			<?php } ?>
		</div>
		<div class="akun">
			<a href="Login/CreateAkun">Daftar Akun</a></label>
		</div>


		<div class="copyright">
			<a href="#" target="_blank">&copy;<b>HADY</b></a>
		</div>
	</div>


	<script type="text/javascript">
		function validasi() {
			if (document.getElementById('npk').value == "") {
				alert('npk masih kosong');
				return false;
			} else if (document.getElementById('password').value == "") {
				alert('password masih kosong');
				return false;
			}
		}
	</script>

	<?php if ($this->session->flashdata('sukses')) { ?>
		<script type="text/javascript">
			Swal.fire({
				title: 'Berhasil!',
				text: 'Password Anda : S1g4p123',
				icon: 'success',
				confirmButtonText: 'Cool'
			})
		</script>

	<?php } ?>
</body>

</html>