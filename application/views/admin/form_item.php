<div class="clearfix"></div>
<div class="row">
	<div class="col-md-12 col-sm-12 col-xs-12">
	    <div class="x_panel">
	      <div class="x_title">
			<h3><?= $header; ?></h3><?= validation_errors('<p style="color:red">','</p>'); ?>
			</div>
			<?php if ($this->session->flashdata("response")): ?>
			  <div class="alert <?php echo $this->session->flashdata("response")["css_class"] ?> animated slideInDown" id="my-alert">
			   <div class="container">    
			      <?php echo $this->session->flashdata("response")["message"] ?>
			     <button type="button" class="close" id="id-btn-dissmiss-alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			   </div>
			  </div>  
			<?php endif ?>

	        <div class="panel-body">
	            <div class="row col-lg-6">
	            	<form name="Paket" action="" method="post" enctype="multipart/form-data">
			        <div class="form-group">
						<label> Kategori</label>
						<select name="id_kategori" class="form-control">
							<option value="">Pilih Kategori</option>
							<?php foreach ($kategori as $key => $value): ?>
								<option value="<?=$value->id_kategori; ?>" <?php echo $value->id_kategori == $item["id_kategori"] ? 'selected' : ''; ?> >
									<?=$value->kategori; ?>
								</option>
							<?php endforeach ?>
						</select>
					</div>                     
					<input name="id" type="hidden" value="">
                    <div class="form-group">
                    	<label>Nama</label>
            			<input class="form-control" name="nama" type="text" placeholder="Input nama" value="<?= $item["nama"]; ?>">
            		</div>
                    	<label>Harga</label>
                    <div class="form-group input-group">
                        <span class="input-group-addon">Rp</span>
            			<input class="form-control" name="harga" type="text" value="<?= $item["harga"]; ?>">
                        <span class="input-group-addon">,00</span>
            		</div>
					<label>Kapasitas</label>
                    <div class="form-group input-group">
            			<input class="form-control" name="kapasitas" type="text" value="<?= $item["kapasitas"]; ?>">
						<span class="input-group-addon">Orang</span>
            		</div>
					<div class="form-group">
	                    <label>File input</label>			
						<input type="file" name="gambar">
                        </div>
						<?php
							if (isset($item["gambar"])) {
								echo '<input type="hidden" name="old_pict" value="'.$item["gambar"].'">';
								echo '<img src="'.base_url().'assets/upload/'.$item["gambar"].'"width="30%">';
							}
						?>
						<div class="clear-fix"></div>
						</br>
                	<div class="form-group">
                    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Dekripsi</label>
            			<textarea class="form-control" row="4" name="desk"><?= $item["ket_item"]; ?></textarea>
            		</div>
					<div class="clear-fix"></div>
					<div class="form-group">
                    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Fasilitas</label>
						<textarea class="form-control" row="4" name="fas"><?= $item["fas_item"]; ?></textarea>
					</div>
					<div class="clear-fix"></div>
					<div class="form-group">
                    	<label class="control-label col-md-2 col-sm-2 col-xs-12">Alamat</label>
						<textarea class="form-control" row="4" name="alamat"><?= $item["alamat"]; ?></textarea>
					</div>
					<div class="form-group">
						<label> Status</label>
						<select name="status" class="form-control">
						<option value="">--Pilih Status--</option>
						<option value="1" <?php echo $item["status"] == 1 ? 'selected' : ''; ?>>Aktif</option>
						<option value="2" <?php echo $item["status"] == 2 ? 'selected' : ''; ?>>Tidak Aktif</option>
						</select>
					</div>
					
					<div class="form-group">
						<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset">
		                    <button  type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
							<button  type="submit" onclick="window.history.go(-1)" class="btn btn-primary">Kembali</button>
	                    </div>
                    </div>
	                </form>
	            </div>
	        </div>
	      </div>  
	    </div>
    <!--.panel end -->
	</div>
</div>



