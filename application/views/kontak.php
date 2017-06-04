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
<div id="contactUsMap" class="big-map"></div>

	<div class="main main-raised">
		<div class="contact-content">
    		<div class="container">
            	<h2 class="title">Kontak Kami</h2>
				
					 <?php
                      foreach($data->result() as $item) :
                      ?>
                	<div class="col-md-4 col-md-offset-2">
    		        	<div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">pin_drop</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">Alamat Kami</h4>
    							<p> <?= $item->alamat ?><br>
                                   
    							</p>
    						</div>
    		        	</div>
                        <div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">phone</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">no Telpon Kami</h4>
    							<p> <?= $item->no_telp ?></p>
    						</div>
    		        	</div>
    		        	<div class="info info-horizontal">
    						<div class="icon icon-primary">
    							<i class="material-icons">email</i>
    						</div>
    						<div class="description">
    							<h4 class="info-title">email Kami</h4>
								<p><?= $item->email ?></p>
								<?php endforeach; ?>
    						</div>
    		        	</div>
				    </div>
				<div class="row">
					<div class="col-md-6">
						<p class="description"><h3>Kirim Pesan</h3><br>
						</p>
						
						<form role="form" id="contact-form" method="post">
							<div class="form-group">
                                    	<label>Nama</label>
                            			<input class="form-control" name="nama" type="text" placeholder="Masukan Nama Pemesan" value="">
                            		</div>
								<div class="form-group">
                                    	<label>Email</label>
                            			<input class="form-control" name="email" type="email" placeholder="Masukan Nama Pemesan" value="">
                            		</div>
							<div class="form-group">
                                    	<label>No Hp</label>
                            			<input class="form-control" name="no_hp" type="numeric" placeholder="Masukan Nama Pemesan" value="">
                            		</div>
							<div class="form-group label-floating">
								<label>Isi Pesan Anda</label>
								<textarea class="form-control" name="komentar"  value=""></textarea>
							</div>
							<div class="submit text-center">
								<button  type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
							</div>
						</form>
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