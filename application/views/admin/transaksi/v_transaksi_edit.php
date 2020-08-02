
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h4>VIEW DATA TRANSAKSI</h4>
  </div>
  <div class="card-body">

  <?php foreach($transaksi as $u){ ?>
  <form method="POST" action="<?=base_url('admin/transaksi/update') ?>">
  <input type="hidden" name="id_transaksi" value="<?php echo $u->id_transaksi ?>">
  <div class="form-group">
    <label>ID TRANSAKSI</label>
    <input type="text" class="form-control" name="id_transaksi" value="<?php echo $u->id_transaksi ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" class="form-control" name="tanggal" value="<?php echo $u->tanggal ?>" >
  </div>
  <div class="form-group">
    <label>Nama Member</label>
    <input type="text" class="form-control" name="id_member" value="<?php echo $u->id_member ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Jam Sewa</label>
    <input type="text" class="form-control" name="id_jam" value="<?php echo $u->id_jam ?>" >
  </div>
  <hr>
  <div class="form-group">
    <div div class="alert alert-danger" role="alert">
      Sebelum melakukan perubahan status sewa, silahkan verifikasi status pembayaran dan pastikan member melakukan DP/pelunasan
    </div>
  </div>
  <div class="form-group">
  <a href="<?php echo base_url('admin/pembayaran/edit') ?>" class="btn btn-danger btn-icon-split btn-sm pull-right btn-block">
                    <span class="icon text-white-50">
                      <i class="fas fa-plus"></i>
                    </span>
                    <span class="text">CEK PEMBAYARAN</span>
                  </a>
  </div>
  <div class="form-group">
    <label>Status Sewa</label>
    <select name="status_sewa" class="form-control">
      <option value="booking">BOOKING</option>
      <option value="selesai">SELESAI</option>
      <option value="batal">BATAL</option>
</select>
  </div>
  
  <button type="submit" class="btn btn-success">UPDATE</button>
</form>
<?php } ?>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
