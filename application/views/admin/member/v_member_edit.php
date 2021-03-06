
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<?php foreach($member as $u){ ?>
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Edit Data Member : <?php echo $u->nama_member ?></h6>

  </div>
  <div class="card-body">


  <form method="POST" action="<?=base_url('admin/member/update') ?>">
  <input type="hidden" name="id_member" value="<?php echo $u->id_member ?>">
  <div class="form-group">
    <label>Nama member</label>
    <input type="text" class="form-control" name="nama_member" value="<?php echo $u->nama_member ?>">
  </div>
  <div class="form-group">
    <label>username</label>
    <input type="text" class="form-control" name="username" value="<?php echo $u->username ?>">
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" value="<?php echo $u->password ?>">
  </div>
  <div class="form-group">
    <label>E-mail</label>
    <input type="email" class="form-control" name="email" value="<?php echo $u->email ?>">
  </div>
  <div class="form-group">
    <label>Nomor Telephone</label>
    <input type="text" class="form-control" name="no_tlpn" value="<?php echo $u->no_tlpn ?>">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea class="form-control" name="alamat" rows="3"><?php echo $u->alamat?></textarea>
  </div>
  <button type="submit" class="btn btn-success">UPDATE</button>
</form>
<?php } ?>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
