<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
                
                    <div class="pull-left">
                        <h6>JADWAL STUDIO MUSIK</h6>
                       
                    </div>
                    <div class="pull-right">
                          Tanggal Sekarang <?= date('d-m-Y') ?>
                       
                    </div>

                    
                    <table class="table">
  <thead >
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Jam</th>
      <th scope="col">Nama</th>
      <th scope="col">alamat</th>
      
      <th scope="col">Studio</th>
      <th scope="col">Status</th>
      <th scope="col">Status Bayar</th>
    </tr>
  </thead>
                    <?php 
		$no = 1;
		foreach($jadwal as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->tanggal ?></td>
      <td><?php echo $u->jam?></td>
			<td><?php echo $u->nama_member?></td>
      <td><?php echo $u->alamat?></td>
			<td><?php echo $u->nama_studio ?></td>
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
    <div class="alert alert-primary" role="alert">
  Sistem hanya akan menampilkan jadwal tanggal sekarang dan sesudahnya, terima kasih
</div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    