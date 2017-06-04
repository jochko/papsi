<div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
					<h3><?= $header; ?></h3><?= validation_errors('<p style="color:red">','</p>'); ?>
					</div>
					
                        <div class="row col-lg-6">
                        	<form name="Paket" action="" method="post" enctype="multipart/form-data">
							                               
									<input name="id" type="hidden" value="">
                                	
                                    <div class="form-group">
                                    	<label>Kategori</label>
                            			<input class="form-control" name="kategori" type="text" placeholder="Input Kategori" value="<?= $kategori; ?>">
                            		</div>
									<div class="form-group">
									
                                            <label>File input</label>
											
											<input type="file" name="gambar">
                                        </div>
										<?php
											if (isset($gambar)) {
												echo '<input type="hidden" name="old_pict" value="'.$gambar.'">';
												echo '<img src="'.base_url().'assets/upload/'.$gambar.'"width="30%">';
												}
											?>
											<div class="clear-fix"></div>
											</br>
									<div class="form-group">
									<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset">
                                    <button  type="submit" class="btn btn-success" name="submit" value="submit">Submit</button>
									<button  type="" onclick="window.history.go(-1)" class="btn btn-primary">Kembali</button>
                                    </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                    
                    
                  </div>  
                </div>
                <!--.panel end -->
			</div>
		
		
		
