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
	</div>
	<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
	            <div class="title">
					<h2>List Item</h2>
				</div>
				<?php if (!empty($data->result())): ?>
				<?php foreach($data->result() as $key) : ?>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<a href="<?= base_url();?>item_user/detail_user/<?= $key->id_item; ?>" class="btn btn-white">
						<figure>						
							<img src="<?= base_url(); ?>assets/upload/<?= $key->gambar; ?>" alt="Free HTML5 Responsive Template" class="img-responsive" style="width: 200px; height: 200px;">
						</figure>
						<h4 class="fh5co-feature-lead"><?= $key->nama; ?></h4>
						<h4 class="fh5co-feature-lead">Rp. <?= number_format ($key->harga); ?></h4>
					</a>
				</div>
				<?php endforeach; ?>
				<?php else: ?>
					<div class="col-lg-3 col-md-6 col-sm-6">
						Item Tidak ditemukkan 
					</div>
				<?php endif ?>

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