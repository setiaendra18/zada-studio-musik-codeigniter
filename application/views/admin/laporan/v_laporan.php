
<?php $this->load->view("/admin/_partials/header.php") ?>

<!-- Begin Page Content -->
<div class="container-fluid">
<div>
<form action="<?=base_url('admin/laporan/filter') ?>" method="post">
<label>Filter Data</label>
<input type="date" name="tgl_awal"> s.d <input type="date" name=tgl_akhir> 
<button type="submit" class="btn btn-primary">TERAPKAN</button>
<!-- DataTales Example -->
</form>
</div>
<br>
<div class="card shadow mb-4">

<div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
  <h6 class="m-0 font-weight-bold text-primary">Data Laporan</h6>
  <div>
  <button onclick="printDiv('printableArea')" value="Print Invoice" class="btn btn-danger">Print</button>
  </div>
  </div>
  <div id="printableArea" class="card-body">
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
           
          
          </tr>
        </thead>
    
        <tbody>
        <?php 
		$no = 1;
		foreach($laporan as $u){ 
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
        
          </tr>
          <?php } ?>
      </table>
    </div>
  </div>
</div>

</div>


<!-- /.container-fluid -->
<script type="text/javascript">
function printDiv(divName) {
    var printContents = document.getElementById(divName).innerHTML;
    var originalContents = document.body.innerHTML;
    document.body.innerHTML = printContents;
    window.print();
    document.body.innerHTML = originalContents;
}
</script>
<?php $this->load->view("admin/_partials/footer.php") ?>
