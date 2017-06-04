<div class="x_panel">
<div class="x_title">
<h2>Detail Item</h2>
<div class="clearfix"></div>
</div>

<div class="x_content">
    <div class="row">
        <div class="col-mad-5 col-sm-6">
        <img src="<?= base_url();?>assets/upload/<?= $gambar; ?>" alt="Free HTML5 Responsive Template" class="img-responsive" style="width: 300px; height: 300px;">
        </div>
        <div class="col-mad-5 col-sm-6">
        <table class="table table-striped">
        <tr>
        <td width="100px;">Nama</td>
        <td>: <?= $nama; ?></td>
        <tr>
        <td width="100px;">Deskripsi</td>
        <td>: <?= ($deskripsi); ?></td>
        </tr>
        </table>
        <a href="" class="btn btn-warning" onclick="window.history.go(-1)">Kembali</a>
</div>
</div>
</div>
</div>