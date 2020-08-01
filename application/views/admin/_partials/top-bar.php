<div id="content-wrapper" class="d-flex flex-column">
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

     

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">        
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
            <a href=<?php echo base_url('login/logout') ?>>logout (<?php echo $this->session->userdata("nama_admin") ?> )
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
