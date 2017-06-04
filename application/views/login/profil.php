<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="papsi" sizes="100x100" href="assets/user/img/papsi2.png">
	<link rel="icon" type="image/png" href="assets/user/img/papsi2.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>PAPSI-Geopark Ciletuh</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="<?php echo base_url(); ?>assets/user/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/user/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url(); ?>assets/user/css/demo.css" rel="stylesheet" />

</head>
<body class="paketwisata-page">
<div class="wrapper">
	<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url(); ?>assets/user/img/puncakdarma.jpg');">
		<div class="container">
			<div class="row">
				
				</div>
			</div>
			</div>
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="title">
	                <h2>Profil Member</h2>
					</div>
					<?= validation_errors('<p style="color:red">', '</p>'); ?>
				<form action="" method="post">
				<div class="col m10 s12">
				<div class="row">
				<div class="col-sm-5">
		<div class="form-group label-floating">
		<label for="first_name"class="validate">Nama Depan</label>
		<input id="first_name" type="text" name="nama1" class="form-control" value="<?= $nama1; ?>" >
	</div>
</div>
		<div class="col-sm-5">
		<div class="form-group label-floating">
		<label for="last_name"class="validate">Nama Belakang</label>
		<input id="last_name" type="text" name="nama2" class="form-control"  value="<?= $nama2; ?>">
		</div>
	</div>
</div>
		<div class="row">
		<div class="col-sm-5">
		<div class="form-group label-floating">
		<label for="username"class="validate">Username</label>
		<input id="username" type="text" name="user" class="form-control"  value="<?= $user; ?>">
		</div>
	</div>
</div>
			<div class="row">
		<div class="col-sm-5">
		<div class="form-group label-floating">
		<label for="email"class="validate">Email</label>
		<input id="email" type="text" name="email" class="form-control"  value="<?= $email; ?>" readonly="readonly">
		</div>
	</div>
</div>	
		
		<div class="tim-row" id="radio-row">
            	<h2> Jenis Kelamin </h2>
            	<legend></legend>
                <p>
					<div class="radio">
					<label>
					<input value="L" type="radio" id="lk" name="jk"checked="true">
					Laki-Laki
					</label>
					<div class="radio">
					<label>
					<input value="P" type="radio" id="pr" name="jk">
					Perempuan
					</label>
					</div>
                </p>
		<div class="row">
		<div class="col-sm-5">
		<div class="form-group label-floating">
		<label for="telp"class="validate">Telp</label>
		<input id="telp" type="text" name="telp" class="form-control"  value="<?= $telp; ?>">
		</div>
	</div>
</div>
		<div class="row">
		<div class="col-sm-10">
		<div class="form-group label-floating">
		<label for="alamat"class="validate">Alamat</label>
		<textarea class="form-control" id="alamat" name="alamat"><?= $alamat; ?></textarea>
		</div>
	</div>
</div>
		<div class="row">
		<div class="col-sm-5">
		<div class="form-group label-floating">
		<label for="password"class="validate">Masukan Password Anda</label>
		<input id="password" type="password" name="pass" class="form-control">
	</div>
</div>
</div>
		<div class="form-group">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset">
		<button  type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
		<button  type="submit" onclick="window.history.go(-1)" class="btn btn-warning">Kembali</button>
         </div>
	</div>
			</div>
		</div>
		</div>
</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>assets/user/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/user/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/user/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url(); ?>assets/user/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url(); ?>assets/user/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url(); ?>assets/user/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>
</html>