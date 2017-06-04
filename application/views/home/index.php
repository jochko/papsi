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
<body class="index-page">
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
	<div class="container">
        <div class="navbar-header">
	    	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-index">
	        	<span class="sr-only">Toggle navigation</span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	        	<span class="icon-bar"></span>
	    	</button>
	    	<a href="<?php echo base_url('Home');?>">
	        	<div class="">
	                <div class="">
	                    <img src="<?php echo base_url(); ?>assets/user/img/papsi4.png" alt="Papsi" rel="tooltip" title="<b>PAPSI </b> Paguyuban Alama Pakidulan Sukabumi</b>" data-placement="bottom" data-html="true">
	                </div>
	                


				</div>
	      	</a>
	    </div>

	    <div class="collapse navbar-collapse" id="navigation-index">
	    	<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#" target="">
						<i class="material-icons">help</i>Cara Pesan
					</a>
				</li>
				<li>
					<a href="<?php echo base_url('Tentangkami');?>" target="">
						<i class="material-icons">account_box</i> Tentang Kami
					</a>
				</li>
				<li>
					<a href="#" target="">
						<i class="material-icons">contacts</i>Kontak
					</a>
				</li>
				
				
				<?php
				if ($this->session->userdata('logged_in') == TRUE) { ?>
				<li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons">account_circle</i>Akun Saya
                                    <b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">profil</a></li>
                                <li><a href="<?php echo base_url('Cekpesanan');?>">Cek Pesanan</a></li>
                                <li class="divider"></li>
                                <li><a href="<?php echo base_url('login/logout');?>">Logout</a></li>
                              </ul>
                        </li>
				
				<? } else {	?>
				<li> 
				<a href="<?php echo base_url('login');?>">
				<i class="material-icons">account_circle</i>Login
				</a>
				</li>
				<? } ?>
				
				
	    	</ul>
	    </div>
	</div>
</nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url(); ?>assets/user/img/puncakdarma.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="brand">
						<div class="">
	                    <h2>PAPSI CILETUH SUKABUMI</h2>
	                </div>
	                
						<h3>Geopark Ciletuh-Pelabuan ratu salah satu lokasi liburan keren yang patut untuk kalian coba.</h3>
					</div>
				</div>
			</div>

		</div>
	</div>

	<div class="row text-center">
					<div class="col-md-8 col-md-offset-2">
	                    <h2>Geopark Ciletuh</h2>
	                    <h4>Geopark Ciletuh Sukabumi ini adalah salah satu lokasi liburan keren yang patut untuk kalian pertimbangan. Terutama untuk kalian yang ingin berwisata alam dengan tangantan. Geopark Ciletuh Sukabumi atau taman alam batuan tua yang ada di Ciletuh, Sukabumi, Jawa Barat ini adalah tempat wisata alam yang keren di Jawa Barat.</h4>
	                </div>
					
	            </div>

	            <div class="row sharing-area text-center">
	                    <h3>Thank you for supporting</h3>
	                    <center>
	                    <figure>
	                    	<img src="<?php echo base_url(); ?>assets/user/img/papsi2.png" alt="Free HTML5 Responsive Template" class="img-responsive">
	                    </figure>
	                    <figure>
	                    	<img src="<?php echo base_url(); ?>assets/user/img/biofarma1.png" alt="Free HTML5 Responsive Template" class="img-responsive">
	                    </figure>
	            </div>
	   
    <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                   
                </nav>
                <p class="copyright pull-right">
                    &copy; 2017 <a href="">PAPSI</a>, Joko Agus Gunawan
                </p>
                
            </div>
        </footer>

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
