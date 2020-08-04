
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h4>EDIT DATA STUDIO</h4>
  </div>
  <div class="card-body">

  <?php foreach($pembayaran as $u){ ?>
  <form method="POST" action="<?=base_url('admin/pembayaran/update') ?>">
  <input type="hidden" name="id_bayar" value="<?php echo $u->id_bayar ?>">
  <div class="form-group">
    <label>Nomor Transaksi</label>
    <input type="text" class="form-control" name="id_transaksi" value="<?php echo $u->id_transaksi ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Tipe Pembayaran</label>
    <input type="text" class="form-control"  value="<?php echo $u->tipe_bayar ?>" readOnly>
  </div>
 
  <div class="form-group">
    <label>Total Harga Sewa</label>
    <input type="text" class="form-control"  value="<?php echo $u->tarif ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Nominal Transfer</label>
    <input type="text" class="form-control"  name="nominal_bayar" value="<?php echo $u->nominal_bayar ?>">
  </div>
  <div class="form-group">
    <label>Kekurangan</label>
    <?php $kurang=($u->tarif-$u->nominal_bayar); ?>
    <input type="text" class="form-control"  value="<?= $kurang ?>" readOnly>
  </div>

  <div class="form-group">
    <label>Bukti Transfer</label></br>
    <img src="<?php echo base_url();?>/assets/images/bukti_bayar/<?php echo $u->bukti_bayar ?>" class="img-fluid">
  </div>
  <div class="form-group">
    <label>Status Pembayaran</label>
    <select name="status_bayar" class="form-control">
      <option value="peninjauan">PENINJAUAN</option>
      <option value="terima">TERIMA</option>
      <option value="tolak">TOLAK</option>
</select>
<div class="form-group">
<div class="form-group">
    <label >Keterangan</label>
    <textarea class="form-control" name="keterangan" rows="3" placeholder="Masukan Keterangan tambahan jika perlu"><?= $u->keterangan ?></textarea>
  </div>
  </div>
  </div> 
  <button type="submit" class="btn btn-success">UPDATE</button>
  <a href="<?= base_url('admin/transaksi/edit/')?><?= trim($u->id_transaksi) ?>" class="btn btn-danger">RUBAH STATUS BOOKING</a>
  
</form>
<?php } ?>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
