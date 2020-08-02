
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Data Member Fusion Studio Musik</h6>

  </div>
  <div class="card-body">
    <div >
      <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
          <tr>
            <th>No</th>
           
            <th>Nama member</th>
            <th>e-mail</th>
            <th>Username</th>
            <th>alamat</th>
            <th>No telephone</th>
            <th>Aksi</th>
          
          </tr>
        </thead>
    
        <tbody>
        <?php 
		$no = 1;
		foreach($member as $u){ 
		?>
          <tr>
            <td><?= $no++ ?></td>
         
            <td><?= $u->nama_member ?></td>
            <td><?= $u->username ?></td>
            <td><?= $u->email ?></td>
            <td><?= $u->alamat ?></td>
            <td><?= $u->no_tlpn ?></td>
            <td>
            <a href="<?= base_url('admin/member/edit/') ?><?= $u->id_member?>" class="btn btn-success btn-circle btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
         
              <a href="<?= base_url('admin/member/hapus/') ?><?= $u->id_member?>" class="btn btn-danger btn-circle btn-sm">
                    <i class="fas fa-trash"></i>
                  </a>
            </td>
          </tr>
          <?php } ?>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<?php $this->load->view("admin/_partials/footer.php") ?>
