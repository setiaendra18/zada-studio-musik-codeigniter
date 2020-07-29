<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>

<section class="section"z id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
              
                <?php echo $this->session->flashdata('msg');?>

<div class="card">
  <div class="card-body">
   <?php  
   $data_booking=$this->session->userdata('data_booking');
   
   ?>
   <h5>NOMOR TRANSAKSI : <?= $data_booking['id_transaksi'] ?></h5>
   
   <hr>
    <?php
           echo form_open_multipart('booking/upload');
           if (isset($error))
           echo '<p>'.$error.'</p>';
        ?>
        <select name="tipe_bayar">
          <option value="dp">DOWN PAYMENT</option>
          <option value="lunas">PELUNASAN</option>
        </select>
        <input type="file" name="bukti_bayar">
        <button type="submit" class="btn btn-success">KONFIRMASI PEMBAYARAN</button>
        <?php 
              echo form_close(); 
              if(isset($upload_data)):
        ?>
        <p> <?php echo $this->session->flashdata('upload_sukses');?><p>
        <?php 
         endif;
        ?>
  </div>
</div>

</div>
        </div>
    </section>