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
    NOMOR PESANAN : </br>
    NAMA PEMESAN : asdfasf</br>
    NOMINAL PEMBAYARAN : asfsf </br>
    MINIMAL DP (DOWN PAYMENT) : IDR 10.0000 </br>
    <?php
           echo form_open_multipart('booking/upload');
           if (isset($error))
           echo '<p>'.$error.'</p>';
        ?>
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