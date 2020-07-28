<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>




    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                   
                        <h5>FORMULIR PEMESANAN STUDIO MUSIK</h5>
                    </div>
                    <form method="POST" action="<?=base_url('booking/simpan') ?>">
                    <div class="form-group">
    <label for="email">Nama lengkap</label>
    <input type="text" class="form-control" placeholder="Masukan nama lengkap" name="id_member" readOnly value="<?php echo $this->session->userdata("nama_member") ?>">
  </div>

  <div class="form-group">
    <label for="email">Tanggal</label>
    <input type="date" class="form-control" name="tanggal" min="<?= date('Y-m-d') ?>" value="<?= date('Y-m-d') ?>" required>
  </div>

  <div class="form-group">
    <label for="email">Pilih Jam :</label>
    <select class="form-control"  name="id_jam">
            <?php 

            foreach($jam as $row)
            { 
              echo '<option value="'.$row->id_jam.'">'.$row->jam.'</option>';
            }
            ?>
            </select>
  </div>
 
  <div class="form-group">
    <label for="email">Pilih Studio :</label>
    <select class="form-control"  name="id_studio">
            <?php 

            foreach($booking as $row)
            { 
              echo '<option value="'.$row->id_studio.'">'.$row->nama_studio.'-'.$row->tarif.'</option>';
            }
            ?>
            </select>
  </div>
 

  <button type="submit" class="btn btn-danger btn-block">PROSES BOOKING</button>
</form> 
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    