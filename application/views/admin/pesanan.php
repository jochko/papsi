  <style type="text/css">
    span.order-stat {
        color: #bf0f0f;
        padding: 3px 5px;
        background: #f39898;
        border-radius: 3px;
        font-size: 0.9em;
    }
    span.order-success {
        color: #fff;
        padding: 3px 5px;
        background: #5cb85c;
        border-radius: 3px;
        font-size: 0.9em;
    }
    .form-control{
      margin : 2px;
    }
  </style>
  <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="x_panel">
      <div class="x_title">
      <?php if ($this->session->flashdata("response")): ?>
        <div class="alert <?php echo $this->session->flashdata("response")["css_class"] ?> animated slideInDown" id="my-alert">
         <div class="container">    
            <?php echo $this->session->flashdata("response")["message"] ?>
           <button type="button" class="close" id="id-btn-dissmiss-alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
         </div>
        </div>
      <?php endif ?> 
        <h2>Data Pesanan</h2><div class="clearfix"></div>
      </div>
      <div class="x_content">
          <p class="text-muted font-13 m-b-30">
          </p>
         <div class="x_content">
          <table  class="table table-striped table-bordered dt-responsive" id="datatable">
          <thead>
            <tr>
              <th>No</th>
              <th>Kode Pesanan</th>
              <th>Nama Pemesan</th>
              <th>Tranfer Bank</th>
  					  <th>Nama Rekening Pemesan</th>
              <th>Total Item</th>
  					  <th>Total Transaksi</th>
              <th>Tgl Pesan</th>
              <th>Batas Pembayaran</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php if (isset($pesanan) && is_array($pesanan) && !empty($pesanan)): ?>
                <?php foreach ($pesanan as $key => $value): ?>
                      <tr>
                        <td><?php echo $key+1 ?></td>
                        <td>
                          <?php echo $value["kode_pesan"] ?>
                          <br>
                          <!-- JIKA STATUS PEMESANAN CANCEL/EXPIRED -->
                          <?php if ($value["status"] == 0 && date("Y-m-d h:i:s") > $value["batas_bayar"]): ?>
                            <span class="order-stat">EXPIRED</span>
                          <?php endif ?>
                          <!-- JIKA STATUS PEMESANAN SUCCESS & TERBAYARKAN -->
                          <?php if ($value["status"] == 1): ?>
                            <span class="order-success">SUCCESS</span>
                          <?php endif ?>
                        </td>
                        <td><?php echo $value["fullname"] ?></td>
                        <td><?php echo $value["nama_bank"] ?></td>
                        <td><?php echo $value["nama_pembayar"] ?></td>
                        <td><?php echo count($value["detail"]) ?></td>
                        <td><?php echo $value["total"] ?></td>
                        <td><?php echo $value["tgl_pesanan"] ?></td>
                        <td><?php echo $value["batas_bayar"] ?></td>
                        <td class="text-right">
                          <div class="tooltip-demo">
                            <a href="#" class="btn btn-warning" data-toggle="modal" data-target="#myModal-<?php echo $value["kode_pesan"];?>">
                              <i class="fa fa-eye"></i>
                            </a>
                          </div>
                        </td>
                      </tr>
                <?php endforeach ?>                      
            <?php endif ?>    
					</tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php if (isset($pesanan) && is_array($pesanan) && !empty($pesanan)): ?>
  <?php foreach ($pesanan as $key => $value): ?>
    <div class="modal fade" id="myModal-<?php echo $value["kode_pesan"];?>">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 class="modal-title"><span id="title"></span></h3>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-3">Kode Pesanan</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="order_id"><?php echo $value["kode_pesan"] ?></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Tanggal</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="tanggal_transaksi"><?php echo $value["tgl_pesanan"] ?></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Nama Pemesan</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="pelanggan"><?php echo $value["fullname"] ?></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Nama Pemilik Rekening</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="pelanggan"><?php echo $value["nama_pembayar"] ?></div>
            </div>
            <table class="table table-striped" id="tblGrid">
              <thead id="tblHead">
                <tr>
                  <th>Nama Item</th>
                  <th>Kategori</th>
                  <th>Harga</th>
                  <th>Qty</th>
                  <th>Sub Total</th>
                </tr>
              </thead>
              <tbody>
                <?php if (isset($value["detail"]) && is_array($value["detail"]) && !empty($value["detail"])): ?>
                  <?php foreach ($value["detail"] as $key_detail => $value_detail): ?>
                    <tr>
                      <td><?php echo $value_detail["nama"] ?></td>
                      <td><?php echo $value_detail["kategori"] ?></td>
                      <td><?php echo $value_detail["harga"] ?></td>
                      <td><?php echo $value_detail["qty"] ?></td>
                      <td><?php echo $value_detail["sub_total"] ?></td>
                    </tr>
                  <?php endforeach ?>
                <?php endif ?>
                
              </tbody>
              <tfoot>
              </tfoot>
            </table>
            <div class="form-group">
              <div class="clearfix"></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Nominal Uang Muka</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="cash"><?php echo $value["uang_muka"] ?></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Nominal Pelunasan</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="kredit"><?php echo $value["total"] - $value["uang_muka"] ?></div>
            </div>
            <div class="row">
              <div class="col-sm-3">Total Transaksi</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="total"><?php echo $value["total"] ?></div>
            </div>
            <div class="form-group">
              <div class="clearfix"></div>
            </div>
            <hr>
            <form action="<?php echo base_url()."pesanan/konfirmasi" ?>" method="POST">
            <input type="hidden" name="id_pesanan" value="<?php echo $value["id_pesanan"] ?>">
            <input type="hidden" name="total" value="<?php echo $value["total"] ?>">
            <input type="hidden" name="kode_pesan" value="<?php echo $value["kode_pesan"] ?>">
            <b>Nominal Konfirmasi</b>
            <div class="row">
              <div class="col-sm-3">Nominal Uang Muka</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="total">
                <input type="text" name="uang_muka" class="form-control" placeholder="Masukkan nominal konfirmasi" 
                  <?php echo ($value["status"] == 0 && date("Y-m-d h:i:s") > $value["batas_bayar"]) || $value["status"] == 1 ? 'disabled':''; ?>
                  onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo @$value["pembayaran"]["nominal_uang_muka"] ?>" >
              </div>
            </div>
            <div class="row">
              <div class="col-sm-3">Nominal Pelunasan</div>
              <div class="col-sm-1">:</div>
              <div class="col-sm-8" id="total">
                <input type="text" name="pelunasan" class="form-control" placeholder="Masukkan nominal konfirmasi" 
                  <?php echo ($value["status"] == 0 && date("Y-m-d h:i:s") > $value["batas_bayar"]) || $value["status"] == 1 ? 'disabled':''; ?>
                  onkeypress='return event.charCode >= 48 && event.charCode <= 57' value="<?php echo @$value["pembayaran"]["nominal_pelunasan"] ?>">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success"
              <?php echo ($value["status"] == 0 && date("Y-m-d h:i:s") > $value["batas_bayar"]) || $value["status"] == 1 ? 'disabled':''; ?> >
              <span class="fa fa-save"></span> Save
            </button>
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
          </form>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->    
  <?php endforeach ?>  
<?php endif ?>