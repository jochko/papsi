                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Kategori</h2><div class="clearfix"></div>
                  </div>
				  <a href="<?= base_url(); ?>kategori/add_kategori/"class="btn btn-warning">Tambah Kategori</i></a>
                  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
					<div class="x_content">
                    <table  class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Kategori</th>
                          <th>Gambar</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                      $i=1;
                      foreach($data->result() as $kategori) :
                      ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $kategori->kategori ?></td>
                          <td><?= $kategori->gambar ?></td>
                          <td class="text-right">
                                        <div class="tooltip-demo">
                                            <a href="<?= base_url(); ?>kategori/edit/<?= $kategori->id_kategori; ?>"class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<a href="<?= base_url(); ?>kategori/delete/<?= $kategori->id_kategori; ?>" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Kategori')"><i class="fa fa-trash"></i></a>
										</div>
                                        </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>