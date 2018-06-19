<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Login</title>
		
		<!-- Bootstrap template 3.3.7-->
		<link href="<?=base_url('assets/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
		<!-- Bootstrap Core JS and jquery -->
		<script src="<?php base_url('asset/bootstrap/js/bootstrap.min.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
		<script src="<?php base_url('assets//bootstrap/js/jquery.js') ?>" type="text/javascript" charset="utf-8" async defer></script>
		
		<!-- fonts googlelapis online -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:500' rel='stylesheet' type='text/css'>
		
		<!-- Our Styles -->
		<link href="<?=base_url('assets/vendor/st_login.css')?>" rel="stylesheet">
	</head>
	<body>
		<div class="container middlepage">
			
			<div class="img1">
				<img src="<?=base_url('assets/img/e.png')?>" alt="">
			</div>
			<hr>
			
			<div class="row">
				<div class="column left">
					<img src="<?=base_url('assets/img/fasilkom.png')?>" alt="">
				</div>
				<div class="column right">
					<!-- redirect to process -->
					<?php echo form_open('Login/process'); ?>				
						<div class="container">
							<h5>Selamat Datang.</h5>
							<h6>Silakan Login Terlebih Dahulu.<?php echo $error; ?> </h6>
							<label for="uname"><b>Username/NIP/NIM</b></label>
							<br>
							<input type="text" placeholder="Enter Username/NIP/NIM" name="username" required>
							<br>
							<label for="psw"><b>Password</b></label>
							<br>
							<input type="password" value=
							"" placeholder="Enter Password" name="password" required>
							<br>
							<label for="psw"><b>Role</b></label>
							<br>
							<select name="role" class="sel">
								<option value="Admin">Admin</option>
								<option value="Dosen">Dosen</option>
								<option value="Mahasiswa">Mahasiswa</option>
							</select>
							<br><br>
							<small><a href="#" onclick="alert('Please contact the administrator to reset your password!')">Forgot Password?</a></small>
							<br>
							<button type="submit">Login</button>
						</div>
					<?php echo form_close(); ?>
				</div>
				
			</div>
		</div>	
</body>
</html>