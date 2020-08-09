<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Fusion Studio Musik">
    <meta name="author" content="Template Mo">
    <meta name="theme-color" content="#2F3BA2" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="FUSION STUDIO MUSIK">
    <link rel="apple-touch-icon" href="/images/icons/icon-152x152.png">


    
    <link rel="icon" href="demo_icon.gif" type="image/gif" sizes="16x16">
    <title>FUSION Studio Musik Yogyakarta</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/templatemo-art-factory.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/owl-carousel.css">
    
    
    <link rel="manifest" href="<?php echo base_url();?>/manifest.json">
    <script>
        if ('serviceWorker' in navigator) {
  window.addEventListener('load', () => {
    navigator.serviceWorker.register('<?php echo base_url();?>serviceworker.js')
        .then((reg) => {
          console.log('Service worker registered.', reg);
        });
  });
}
    </script>
    

    </head>
    
    <body>
    
   
    
    
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