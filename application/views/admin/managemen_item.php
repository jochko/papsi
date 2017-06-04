                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Item</h2><div class="clearfix"></div>
                  </div>
				  <a href="<?= base_url(); ?>item/add_item/"class="btn btn-warning">Tambah Item</i></a>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
					<div class="x_content">
                    <table  class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Kategori</th>
                          <th>Nama</th>
                          <th>Harga</th>
						  <th>Kapasitas</th>
						  <th>status</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $i=1;
                      foreach($data->result() as $item) :
                      ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td>Paket Wisata</td>
                          <td><?= $item->nama?></td>
                          <td><?= $item->harga?></td>
						  <td><?= $item->kapasitas?></td>
						  <td
						  <?php
						  if ($item->status == 1){
							  echo '<label class="label-success" style="color:white; padding: 3px 
							  5px;">Aktif</label>';
						  }else{
							  echo '<label class="label-danger" style="color:white; padding:3px 
							  5px;">Tidak Aktif</label>';
						  }
						  ?>
						  </td>
                          <td class="text-right">
                                        <div class="tooltip-demo">
                                            <a href="<?= base_url(); ?>item/detail_item/<?= $item->id_item; ?>" class="btn btn-success"><i class="fa fa-search-plus"></i></a>
                                            <a href="<?= base_url(); ?>item/edit/<?= $item->id_item; ?>"class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a href="" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Item?')"><i class="fa fa-trash"></i></a>
										</div>
                                        </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>