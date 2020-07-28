<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>





    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>LOGIN MEMBER</h5>
                    </div>
                    <?php echo $this->session->flashdata('msg');?>
                    <form method="POST" action="<?=base_url('login/cek_login') ?>">
                    <div class="form-group">
    <label for="email">Username</label>
    <input type="text" class="form-control" placeholder="Masukan username" name="username" required>
    <label for="email">Password</label>
    <input type="text" class="form-control" placeholder="Masukan passwerd" name="password" required> 
  </div>

  
  


  <button type="submit" class="btn btn-primary btn-block">LOGIN</button>
</form> 
                </div>
                
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    

    


    
   