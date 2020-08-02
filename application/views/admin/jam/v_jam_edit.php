
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card shadow mb-4">
<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Edit Data Jam Operasional Studio Musik</h6>

  </div>
  <div class="card-body">

  <?php foreach($jam as $u){ ?>
  <form method="POST" action="<?=base_url('admin/jam/update') ?>">
  <input type="hidden" name="id_jam" value="<?php echo $u->id_jam ?>">
  <div class="form-group">
    <label>Jam</label>
    <input type="text" class="form-control" name="jam" value="<?php echo $u->jam ?>">
  </div>
  <button type="submit" class="btn btn-success">UPDATE</button>
</form>
<?php } ?>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
