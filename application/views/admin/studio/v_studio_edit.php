
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

  <?php foreach($studio as $u){ ?>
  <form method="POST" action="<?=base_url('admin/studio/update') ?>">
  <input type="hidden" name="id_studio" value="<?php echo $u->id_studio ?>">
  <div class="form-group">
    <label>Nama Studio</label>
    <input type="text" class="form-control" name="nama_studio" value="<?php echo $u->nama_studio ?>">
  </div>
  <div class="form-group">
    <label>Tarif Sewa</label>
    <input type="number" class="form-control" name="tarif" value="<?php echo $u->tarif ?>">
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea class="form-control" name="deskripsi" rows="3"><?php echo $u->deskripsi?></textarea>
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="gambar">
  </div>
  <button type="submit" class="btn btn-success">UPDATE</button>
</form>
<?php } ?>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
