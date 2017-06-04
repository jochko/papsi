                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Item</h2><div class="clearfix"></div>
                  </div>
				  <a href="<?= base_url(); ?>rekening/add_rekening/"class="btn btn-warning">Tambah Rekening</i></a>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
					<div class="x_content">
                    <table  class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nama Pemilik</th>
                          <th>No Rekening</th>
                          <th>Nama Bank</th>
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
                          <td><?= $item->nama_pemilik?></td>
                          <td><?= $item->no_rekening?></td>
                          <td><?= $item->nama_bank?></td>
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
                                            <a href="<?= base_url(); ?>rekening/edit_rekening/<?= $item->id_rekening; ?>"class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a href="" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Rekening')"><i class="fa fa-trash"></i></a>
										</div>
                                        </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>