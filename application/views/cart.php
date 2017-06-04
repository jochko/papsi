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
<body class="tentangkami-page">
<div class="wrapper">
	<div class="wrapper">
	<div class="header header-filter" style="background-image: url('<?php echo base_url(); ?>assets/user/img/puncakdarma.jpg');">
		<div class="container">
			<div class="row">
				
				</div>
			</div>
			</div>
		</div>
	</div>
<div class="main main-raised">
		<div class="section section-basic">
	    	<div class="container">
			<h2>Daftar Pesanan</h2>
			<hr/>
			<br/>
			<table class="table table-responsive table-striped">
				<thead>
					<tr>
						<td>#</td>
						<td>Nama Pesanan</td>
						<td>Jumlah Pesanan</td>
						<td>Harga</td>
						<td>Opsi</td>
					</tr>
				</thead>
				<tbody>
					<?php
					$i = 1;
					foreach($this->cart->contents() as $key) :
					?>
					<tr>
			            <td><?= $i++; ?></td>
						<td><?= $key['name']; ?></td>
						<td><?= $key['qty']; ?></td>
						<td>Rp. <?= number_format($key['price'],0,',','.'); ?></td>
						
						<td>
						<!-- <a href="#<?= $key['rowid']; ?>" class="btn btn-success"><i class="fa fa-edit"></i></a> -->
						<a href="<?= base_url(); ?>cart/delete/<?= $key['rowid'] ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Pesanan?')"><i class="fa fa-trash"></i></a>
						</td>
					</tr>
					<div class="modal" id="<?= $key['rowid']; ?>">
						<form action="<?= base_url();?>cart/delete/<?= $key['rowid']; ?>" method="post">
						<div class="modal-content">
							<div class="input-field">
								<input type="number" name="qty" value="<?= $key['rowid']; ?>">
								<label for="qty<?= $key['rowid']; ?>">Jumlah Pesanan</label>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name="sebmit" value="submit" calss="modal-action btn blue"> Update Pesanan</button>
						</div>
					</div>
					<?php endforeach; ?>
					<tr>
						<td colspan="3">Total</td>
						<td colspan="2">Rp. <?= number_format($this->cart->total(),0,',','.'); ?></td>
					</tr>
					<tr>
						<td colspan="3">bayar</td>
						<td colspan="2">Rp. <?= number_format($this->cart->total(),0,',','.'); ?></td>
					</tr>
				</tbody> 
			</table>
			<br />
			<a href="" class="btn btn-warning" onclick="window.history.go(-1)">Kembali</a>
			<a href="<?php echo base_url()."konfirmasi" ?>" class="btn btn btn-primary pull-right" >Lanjutkan</a>
			</div>
			</div>
			</div>
</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>assets/user/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/user/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/user/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<!-- <script src="<?php echo base_url(); ?>assets/user/js/nouislider.min.js" type="text/javascript"></script> -->

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