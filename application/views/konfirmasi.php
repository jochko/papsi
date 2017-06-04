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
	            <div class="title">
					<h3>Konfirmasi Pembayaran</h3>
					</div>
					
                        <div class="row col-lg-6">
                        	<form name="Paket" action="<?php echo base_url()."konfirmasi/finish" ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                    	<label>Nama Pemesan</label>
                            			<input class="form-control" name="nama_pembayar" type="text" placeholder="Masukan Nama Pemesan" value="">
                            		</div>
									
									<div class="form-group">
                                    	<label>Tanggal Gunakan</label>
                            			<input class="form-control" name="tgl_gunakan" type="date" value="">
                            		</div>
									<div class="form-group">
									<label>Pilih Rekening Pembayaran</label>
									<select name="rekening" class="form-control" required>
										<option value="">Pilih Rekening</option>
										<?php if (isset($rekening) && is_array($rekening) && !empty($rekening)): ?>
											<?php foreach ($rekening as $key => $value): ?>
												<option value="1"><?php echo $value["nama_bank"] ?></option>
											<?php endforeach ?>
										<?php endif ?>
									</select>
									</div>
									<div class="form-group">
										<label>Pilih Metode Pembayaran</label>
										<select name="metode" class="form-control" onchange="metode_pembayaran()" required>
											<option value="">Pilih Metode</option>
											<option value="1">Lunas</option>
											<option value="2">Uang Muka</option>
										</select>
									</div>
									<div class="form-group">
                                    	<label>Nominal Transaksi</label>
                            			<input class="form-control" disabled id="nominal" name="nominal" type="text" value="<?php echo currency_format($total) ?>">
                            		</div>
									<div class="form-group">
                                    	<label>Nominal Pembayaran</label>
                            			<input class="form-control hidden" disabled type="text" id="nominal-bayar-lunas" value="<?php echo currency_format($total) ?>">
                            			<input class="form-control hidden" disabled type="text" id="nominal-bayar-cicilan" value="<?php echo currency_format(30/100*$total) ?>">
                            		</div>
									
									<div class="form-group">
										<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset">
											<button  type="submit" onclick="window.history.go(-1)" class="btn btn-warning">Kembali</button>
		                                    <button  type="submit" class="btn btn-primary" name="submit" value="submit">Submit</button>
	                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    
                    
                  </div>  
                </div>
                <!--.panel end -->
			</div>
</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>assets/user/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/user/js/bootstrap.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		function metode_pembayaran(){
			var metode = $('select[name="metode"] option:selected').val();
			$("#nominal-bayar-cicilan").addClass('hidden');
			$("#nominal-bayar-lunas").addClass('hidden');
			if (metode == 2){
				$("#nominal-bayar-cicilan").removeClass('hidden');
			}
			else{
				$("#nominal-bayar-lunas").removeClass('hidden');
			}
		}
	</script>
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