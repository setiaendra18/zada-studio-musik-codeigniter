
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-2 text-gray-800">DATA TRANSAKSI BOOKING</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
 
  </div>
  <div class="card-body">
    <div >
      <table class="table table-bordered table-responsive" id="dataTable">
        <thead>
          <tr>
            <th>No</th>
            <th>ID TRANSAKSI</th>
            <th>Nama Studio</th>
            <th>Jam Sewa</th>
            <th>Nama Member</th>
            <th>Tarif</th>
            <th>Status Pemesanan</th>
            <th>Status Bayar</th>
            <th>Aksi</th>
          
          </tr>
        </thead>
    
        <tbody>
        <?php 
		$no = 1;
		foreach($transaksi as $u){ 
		?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u->id_transaksi ?></td>
            <td><?= $u->nama_studio ?></td>
            <td><?= $u->jam ?></td>
            <td><?= $u->nama_member ?></td>
            <td><?= $u->tarif ?></td>
            <td>
        <?php if($u->status_sewa=="booking") { ?>  
          <span class="badge badge-primary"><?php echo $u->status_sewa ?></span>
        <?php } ?>
        <?php if($u->status_sewa=="selesai") { ?>  
          <span class="badge badge-success"><?php echo $u->status_sewa ?></span>
        <?php } ?>
        <?php if($u->status_sewa=="batal") { ?>  
          <span class="badge badge-danger"><?php echo $u->status_sewa ?></span>
        <?php } ?>
      </td>
      <td>
        <?php if($u->status_bayar=="peninjauan") { ?>  
          <span class="badge badge-warning"><?php echo $u->status_bayar ?></span>
        <?php } ?>
        <?php if($u->status_bayar=="tolak") { ?>  
          <span class="badge badge-danger"><?php echo $u->status_bayar ?></span>
        <?php } ?>
        <?php if($u->status_bayar=="terima") { ?>  
          <span class="badge badge-success"><?php echo $u->status_bayar ?></span>
        <?php } ?>
      </td>
            <td>
            <a href="<?= base_url('admin/studio/edit/') ?><?= $u->id_studio?>" class="btn btn-success btn-circle btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
         
              <a href="<?= base_url('admin/studio/hapus/') ?><?= $u->id_studio?>" class="btn btn-danger btn-circle btn-sm">
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
