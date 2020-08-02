
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h4 mb-2 text-gray-800">DATA PEMBAYARAN TRANSAKSI </h1>

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
            <th>Tipe Bayar</th>
            <th>Nominal</th>
            <th>Status Bayar</th>
            <th>Bukti</th>
            <th>Keterangan</th>
            <th>Aksi</th>
          </tr>
        </thead>
    
        <tbody>
        <?php 
		$no = 1;
		foreach($pembayaran as $u){ 
		?>
          <tr>
            <td><?= $no++ ?></td>
            <td><?= $u->id_transaksi ?></td>
            <td><?= $u->tipe_bayar ?></td>
            <td><?= $u->nominal_bayar ?></td>
            <td><?= $u->status_bayar ?></td>
            <td><?= $u->bukti_bayar ?></td>
            <td><?= $u->keterangan ?></td>
            <td>
            <a href="<?= base_url('admin/studio/edit/') ?><?= $u->id_transaksi?>" class="btn btn-success btn-circle btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
         
              <a href="<?= base_url('admin/studio/hapus/') ?><?= $u->id_transaksi?>" class="btn btn-danger btn-circle btn-sm">
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
