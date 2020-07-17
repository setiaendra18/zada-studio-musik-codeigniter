<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>JADWAL STUDIO MUSIK</h5>
                    </div>
                    <table class="table">
  <thead >
    <tr>
      <th scope="col">No</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Nama</th>
      <th scope="col">Studio</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
                    <?php 
		$no = 1;
		foreach($jadwal as $u){ 
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $u->tanggal ?></td>
			<td><?php echo $u->nama_member?></td>
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
		</tr>
    <?php } ?>
    </table>
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    