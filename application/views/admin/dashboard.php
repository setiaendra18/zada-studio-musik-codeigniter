<?php $this->load->view("/admin/_partials/header.php") ?>



        <!-- Begin Page Content -->
        <div class="container-fluid">
            <h2>Selamat Datang Admin <?php echo $session['login_admin']['admin_nama'];?></h2>
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <?php $this->load->view("admin/_partials/footer.php") ?>
