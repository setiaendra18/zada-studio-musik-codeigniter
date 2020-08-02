
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->


<div class="card shadow mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Tambah Data Jam Operasional</h6>
  
  </div>
  <div class="card-body">

  <form method="POST" action="<?=base_url('admin/jam/simpan') ?>">
  <div class="form-group">
    <label>Jam</label>
    <input type="text" class="form-control" name="jam" placeholder="Masukan jam dengan format 09:00 - 10:00" required>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>

  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
