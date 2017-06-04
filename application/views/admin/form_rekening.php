<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
					<h3><?= $header; ?></h3><?= validation_errors('<p style="color:red">','</p>'); ?>
					</div>
	
                    <div class="panel-body">
                        <div class="row col-lg-6">
                        	<form name="Paket" action="" method="post" enctype="multipart/form-data">               
									<input name="id" type="hidden" value="">
                                    <div class="form-group">
                                    	<label>Nama Pemilik</label>
                            			<input class="form-control" name="nama_pemilik" type="text" placeholder="Input Nama Pemilik" value="<?= $nama_pemilik; ?>">
                            		</div>
                                    	 <div class="form-group">
                                    	<label>No Rekening</label>
                            			<input class="form-control" name="no_rekening" type="text" placeholder="Input No Rekening" value="<?= $no_rekening; ?>">
                            		</div>
									<label>Nama Bank</label>
                                    <div class="form-group input-group">
                            			<input class="form-control" name="nama_bank" type="text" placeholder="Input Nama Bank" value="<?= $nama_bank; ?>">
                            		</div>
									
									<div class="form-group">
									<label> Status</label>
									<select name="status" class="form-control">
									<option value="">--Pilih Status--</option>
									<option value="1">Aktif</option>
									<option value="2">Tidak Aktif</option>
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
		
		
		
