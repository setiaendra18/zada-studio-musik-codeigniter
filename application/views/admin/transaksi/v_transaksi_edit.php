
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
  <form method="POST" action="<?=base_url('admin/studio/update') ?>">
  <input type="hidden" name="id_studio" value="<?php echo $u->id_transaksi ?>">
  <div class="form-group">
    <label>ID TRANSAKSI</label>
    <input type="text" class="form-control" name="nama_studio" value="<?php echo $u->id_transaksi ?>" readOnly>
  </div>
  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" class="form-control" name="tarif" value="<?php echo $u->tanggal ?>" >
  </div>
  <div class="form-group">
    <label>Nama Member</label>
    <input type="text" class="form-control" name="tarif" value="<?php echo $u->id_member ?>" >
  </div>
  <div class="form-group">
    <label>Tanggal</label>
    <input type="date" class="form-control" name="tarif" value="<?php echo $u->tanggal ?>" >
  </div>
  <div class="form-group">
    <label>Status Sewa</label>
    <select class="form-control">
      <option>BOOKING</option>
      <option>SELESAI</option>
      <option>BATAL</option>
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
