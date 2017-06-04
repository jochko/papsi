<?php 
$flashdata = $this->session->flashdata('finish');
?>
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
	<link href="<?php echo base_url(); ?>assets/user/css/finish-page.css" rel="stylesheet" />
</head>
<body class="konfirmasia-page">
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
					<div class="content">
					      <div class="row">
					        <div class="col-md-offset-3 col-md-6 col-lg-offset-3 col-lg-6" style="margin-bottom:20px">
					          <div class="box" style="margin-top:20px">
					            <h2 class="heading">Thanks, <?php echo $username ?>!</h2> 
					            <div class="line m_b_20"></div>
					            <p>
					              Nomor Pesanan Anda<br>
					              <span class="orderno"><?php echo $flashdata["kode_pesan"] ?></span><br>
					              <br>
					            </p>
					            <div class="line m_b_20"></div>
					            <p>
					              Untuk Menyelesaikan Pesanan, Mohon:<br><br>
				              	</p>

					            <div class="step-box">
					              <div class="step-head">1</div>
					              <h3 class="h6 m_b_10"><strong>Melakukan Pembayaran sebesar :</strong></h3>
					              	<div class="step-content">
					                	Total Transaksi <span><?php echo currency_format($flashdata["total_transaksi"]) ?></span><br>
	                              	</div>
  					              	<div class="step-content">
  					              		<?php $nominal = $flashdata["total_transaksi"] == $flashdata["nominal"] ? '0': $flashdata["nominal"] ?>
  					                	Total Uang Muka <span><?php echo currency_format($nominal) ?></span><br>
  	                              	</div>
  	                              	<hr>
  					              	<div class="step-content">
  					                	Total Pelunasan <span><?php echo currency_format($flashdata["total_transaksi"] - $nominal) ?></span><br>
  	                              	</div>
					            </div>
					            <div class="step-box">
					              <div class="step-head">2</div>
					              <h3 class="h6 m_b_10"><strong>Email</strong></h3>
					              <div class="step-content">
					                Cek Email Anda<br>
					              </div>
					            </div>
					            
					      			            
					            <div class="line"></div>
					          </div><!--.box-->

					          <div class="btn-placeholder">
					            <div class="outer-center">
					              <div class="inner-center">
					                <a class="btn btn-default" href="<?php echo base_url()."home" ?>">Lanjutkan Transaksi</a>
					                <a class="btn btn-primary" href="#">History Transaksi</a>
					              </div>
					            </div>
					          </div><!--.btn-placeholder-->
					        </div><!--.col-->
					      </div><!--.row-->

					    </div>
	            </div>
	      	</div>  
	    </div><!--.panel end -->
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