
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Tambah Admin</h6>
  </div>
  <div class="card-body">

  <form method="POST" action="<?=base_url('admin/admin/simpan') ?>">
  <div class="form-group">
    <label>Nama Lengkap</label>
    <input type="text" class="form-control" name="nama_admin">
  </div>
  <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="email" class="form-control" name="email">
  </div>
  <div class="form-group">
    <label>Nomor Telephone</label>
    <input type="text" class="form-control" name="no_tlpn">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">SIMPAN</button>
</form>

  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
