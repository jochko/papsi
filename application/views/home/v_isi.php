<div class="main main-raised">
	<div class="section section-basic">
		<div class="container">
	        <div class="title">
	            <h2>Fasilitas yang di sediakan</h2>
				<?php foreach($data->result() as $key) : ?>
	        </div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="<?= base_url()."home/kategori/".$key->id_kategori;?>" class="btn btn-primary">
					<figure>
						<img src="<?= base_url(); ?>assets/upload/<?= $key->gambar; ?>" alt="" class="img-responsive">
					</figure>
					<h3 class="fh5co-feature-lead"><?= $key->kategori; ?></h3>
				</a>
			<?php endforeach; ?>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<a href="<?= base_url();?>item_user/galeri/" class="btn btn-primary">
					<figure>
						<img src="<?php echo base_url(); ?>assets/user/img/Gallery1.png" alt="" class="img-responsive">
					</figure>
					<h3 class="fh5co-feature-lead">Gallery</h3>
				</a>
			</div>
		</div>
	</div>
</div>
