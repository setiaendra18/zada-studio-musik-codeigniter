<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



<?php if($this->session->flashdata('msg')): ?>
    <p><?php echo $this->session->flashdata('msg'); ?></p>
<?php endif; ?>
    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>Pendaftaran Member</h5>
                    </div>
                    <form method="POST" action="<?=base_url('pendaftaran/simpan') ?>">
                    <div class="form-group">
    <label for="email">Nama lengkap</label>
    <input type="text" class="form-control" placeholder="Masukan nama lengkap" name="nama_member">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" placeholder="Masukan e-mail yang aktif" name="email">
  </div>
  <div class="form-group">
    <label for="email">No telephone:</label>
    <input type="text" class="form-control" placeholder="Masukan nomor telepone yang aktif" name="no_tlpn" maxlength="12">
  </div>
  <div class="form-group">
    <label for="email">alamat</label>
    <textarea class="form-control"  placeholder="Masukan alamat lengkap" rows="3" name="alamat"></textarea>
   
  </div>
  <div class="form-group">
    <label for="email">Username:</label>
    <input type="text" class="form-control" placeholder="Masukan username" name="username">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" placeholder="Masukan password" name="password">
  </div>

  <button type="submit" class="btn btn-primary btn-block">DAFTAR</button>
</form> 
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->
 
    