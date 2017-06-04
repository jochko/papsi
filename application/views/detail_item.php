<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="papsi" sizes="100x100" href="<?php echo base_url(); ?>assets/user/img/papsi2.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>ssets/user/img/papsi2.png">
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
	                <h2>Detail </h2>
					<?php
					$key = $data->row(); 
					?>
	            </div>
				<div class="section section-gray">
	    <div class="container">
            
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                       <div class="tab-content">
                            <div class="">
							<a href="<?= base_url(); ?>assets/upload/<?= $key->gambar; ?>" class="btn btn-white">
							<img src="<?= base_url(); ?>assets/upload/<?= $key->gambar; ?>" alt="Free HTML5 Responsive Template" class="img-responsive" style="width: 400px; height: 400px;">
							<a>
							</div>
							</div>
							</div>
                    <div class="col-md-6 col-sm-6">
						<h3 class="title">Nama 		: <?= $key->nama; ?></h3>
						<h3 class="title">Kapasitas : <?= $key->kapasitas; ?> Orang</h3>
						<h3 class="title">Harga 	: Rp. <?= number_format ($key->harga); ?></h3>
						</div>  
                        <div class="row text-left">
							 <button type="button" class="btn btn-danger" onclick ="window.history.go(-1)" >Kembali<i class="material-icons"></i></button>
							 
							 <a href="<?= base_url(); ?>cart/add/<?= $key->id_item; ?>" class="btn btn-primary">Pesan</a>
							 </button>
                        </div>
						<!-- Tabs with icons on Card -->
						<div class="card card-nav-tabs">
							<div class="header header-primary">
								<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
								<div class="nav-tabs-navigation">
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs">
											<li class="active">
												<a href="#profile" data-toggle="tab">
													Deskripsi
												</a>
											</li>
											<li>
												<a href="#messages" data-toggle="tab">
													Fasilitas
												</a>
											</li>
											<li>
													<a href="#settings" data-toggle="tab">
														
														Alamat
													</a>

												</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="content">
								<div class="tab-content text-center">
									<div class="tab-pane active" id="profile">
										<p> <?= $key->ket_item; ?></p>
									</div>
									<div class="tab-pane" id="messages">
										<p> <?= $key->fas_item; ?></p>
									</div>
									<div class="tab-pane" id="settings">
											<p><?= $key->alamat; ?></p>
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