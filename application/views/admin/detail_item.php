<div class="x_panel">
<div class="x_title">
<h2>Detail Item</h2>
<div class="clearfix"></div>
</div>

<div class="x_content">
    <div class="row">
        <div class="col-mad-5 col-sm-6">
        <img src="<?= base_url();?>assets/upload/<?= $gambar; ?>" alt="Free HTML5 Responsive Template" class="img-responsive" style="width: 500px; height: 500px;">
        </div>
        <div class="col-mad-5 col-sm-6">
        <table class="table table-striped">
        <tr>
        <td width="100px;">Nama</td>
        <td>: <?= $nama; ?></td>
        </tr>
		<tr>
        <td width="100px;">Kategori</td>
        <td>: </td>
        </tr>
        <tr>
        <tr>
        <td width="100px;">Harga</td>
        <td>: <?='Rp.'.number_format ($harga,0,',','.'); ?></td>
        </tr>
		<tr>
        <td width="100px;">Kapasitas</td>
        <td>: <?= $kapasitas; ?> Orang</td>
        </tr>
        <tr>
        <td width="100px;">Ketetangan</td>
        <td>: <?= nl2br($ket_item); ?></td>
        </tr>
        <tr>
        <td width="100px;">fasilitas</td>
        <td>: <?= nl2br($fas_item); ?></td>
        </tr>
		<tr>
        <td width="100px;">Alamat</td>
        <td>: <?= nl2br($alamat); ?></td>
        </tr>
        </table>
        <a href="" class="btn btn-warning" onclick="window.history.go(-1)">Kembali</a>
</div>
</div>
</div>
</div>