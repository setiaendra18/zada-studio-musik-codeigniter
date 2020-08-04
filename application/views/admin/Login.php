


<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>FUSION ADMIN</title>


  <link href="<?php echo base_url();?>/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url();?>/assets/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>/assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>


<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-6 col-md-12">
     
        <div class="card o-hidden border-0 shadow-lg my-5">
        <?php echo $this->session->flashdata('gagal');?>
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
            
              
            
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user"  method="POST" action="<?=base_url('admin/cek_login') ?>">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Masukan username" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Masukan Password" required>
                    </div>
                  
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                     MASUK
                    </button>
                  
                 
                  </form>
                 
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

 
