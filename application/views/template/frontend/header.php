<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Template Mo">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

    <title>FUSION Studio Musik Yogyakarta</title>
<!--

ART FACTORY

https://templatemo.com/tm-537-art-factory

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/owl-carousel.css">

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">FUSION STUDIO</a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li ><a href="<?php echo base_url('/') ?>">BERANDA</a></li>

                            <?php 


if($this->session->userdata('username')=="")
{
    echo "";
}
else
{
?>
    <li ><a href="<?php echo base_url('booking') ?>">BOOKING</a></>
<?php
}

?>

<?php 
    
    if($this->session->userdata('username')=="")
    {
    ?>
         <li ><a href="<?php echo base_url('pendaftaran') ?>">PENDAFTARAN</a></li>
    <?php
    }
    else
    {
     echo "";
    }

    ?>
                            
                           
                         
                            <li ><a href="<?php echo base_url('jadwal') ?>">JADWAL</a></li>
                           
                           

                            <?php 
    
                            if($this->session->userdata('username')=="")
                            {
                            ?>
                                <li><a href="<?php echo base_url('login') ?>" class='btn btn-sm btn-danger'>LOGIN</a>
                                </li>
                            <?php
                            }
                            else
                            {
                            ?>
                                <li><a href=<?php echo base_url('login/logout') ?>>logout (<?php echo $this->session->userdata("nama_member") ?> )</a>
                            <?php
                            }

                            ?>

                           
                            
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->