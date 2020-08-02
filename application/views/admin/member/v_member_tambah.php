
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
  <h4>TAMBAH DATA STUDIO</h4>
  </div>
  <div class="card-body">

  <form method="POST" action="<?=base_url('admin/studio/simpan') ?>">
  <div class="form-group">
    <label>Nama Studio</label>
    <input type="text" class="form-control" name="nama_studio" placeholder="Masukan nama studio" required>
  </div>
  <div class="form-group">
    <label>Tarif Sewa</label>
    <input type="number" class="form-control" name="tarif" placeholder="Masukan tarif sewa studio" required>
  </div>
  <div class="form-group">
    <label>Deskripsi</label>
    <textarea placeholder="jelaskan deskripsi studio" class="form-control" name="deskripsi" rows="3"></textarea>
  </div>
  <div class="form-group">
    <label>Foto</label>
    <input type="file" class="form-control" name="gambar">
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>

  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
