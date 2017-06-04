                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data Member</h2><div class="clearfix"></div>
                  </div>
				  <div class="x_content">
                    <p class="text-muted font-13 m-b-30">
                    </p>
					<div class="x_content">
                    <table  class="table table-striped table-bordered dt-responsive nowrap" id="datatable">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Username</th>
                          <th>Fullname</th>
						  <th>email</th>
						  <th>Jenis Kelamin</th>
						  <th>Telp</th>
						  <th>Alamat</th>
                          <th>Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
                      $i=1;
                      foreach($data->result() as $user) :
                      ?>
                        <tr>
                          <td><?= $i++; ?></td>
                          <td><?= $user->username?></td>
                          <td><?= $user->fullname?></td>
						  <td><?= $user->email?></td>
						  <td><?= $user->jk?></td>
						  <td><?= $user->telp?></td>
						  <td><?= $user->alamat?></td>
						   
                          <td class="text-right">
                                        <div class="tooltip-demo">
											<a href="" class="btn btn-danger" onclick="return confirm('Yakin Ingin Menghapus Pesanan?')"><i class="fa fa-trash"></i></a>
										</div>
                                        </td>
                        </tr>
                        <?php endforeach; ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>