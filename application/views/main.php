<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



    <!-- ***** Welcome Area Start ***** -->
    <div class="welcome-area" id="welcome">

        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="left-text col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                        <h2>Art Factory is free <strong>for YOU</strong></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis quaerat culpa totam laboriosam ab quos facilis nam expedita obcaecati cum voluptatem dolores dolorem, debitis suscipit. Eaque consectetur distinctio nemo repellendus!</p>
                        <a href="#about" class="main-button-slider">DAFTAR SEKEARANG</a>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <img src="assets/images/slider-icon.png" class="rounded img-fluid d-block mx-auto" alt="First Vector Graphic">
                    </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                    <img src="assets/images/left-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
                <div class="right-text col-lg-5 col-md-12 col-sm-12 mobile-top-fix">
                    <div class="left-heading">
                        <h5>Vivamus sodales nisi id ante molestie venenatis</h5>
                    </div>
                    <div class="left-text">
                        <p>This template is <a href="#">last updated on 20 August 2019 </a>for main menu drop-down arrow and sub menu text color. Duis auctor dolor eu scelerisque vestibulum. Vestibulum lacinia, nisl sit amet tristique condimentum. <br><br>
                        Sed a consequat velit. Morbi lectus sapien, vestibulum et sapien sit amet, ultrices malesuada odio. Donec non quam euismod, mattis dui a, ultrices nisi.</p>
                        <a href="#about2" class="main-button">Discover More</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="hr"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Big Item Start ***** -->
    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12 mobile-bottom-fix">
                    <div class="left-heading">
                        <h5>Curabitur aliquam eget tellus id porta</h5>
                    </div>
                    <p>Proin justo sapien, posuere suscipit tortor in, fermentum mattis elit. Aenean in feugiat purus.</p>
                    <ul>
                        <li>
                            <img src="assets/images/about-icon-01.png" alt="">
                            <div class="text">
                                <h6>Nulla ultricies risus quis risus</h6>
                                <p>You can use this website template for commercial or non-commercial purposes.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-02.png" alt="">
                            <div class="text">
                                <h6>Donec consequat commodo purus</h6>
                                <p>You have no right to re-distribute this template as a downloadable ZIP file on any website.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/images/about-icon-03.png" alt="">
                            <div class="text">
                                <h6>Sed placerat sollicitudin mauris</h6>
                                <p>If you have any question or comment, please <a rel="nofollow" href="https://templatemo.com/contact">contact</a> us on TemplateMo.</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img src="assets/images/right-image.png" class="rounded img-fluid d-block mx-auto" alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Big Item End ***** -->


    <!-- ***** Features Small Start ***** -->
    <section class="section" id="services">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme">
                


                <?php foreach($studio as $u)
                 { 
		        ?>
   
                    <div class="item service-item">
                        <div class="icon">
                            <i><img src="assets/images/service-icon-01.png" alt=""></i>
                        </div>
                        <h5 class="service-title"><?= $u->nama_studio ?></h5>
                        <?= $u->deskripsi ?>
                        <button class="main-button">IDR <?= $u->tarif ?></button>
                    </div>
                  
                   
                    <?php } ?>
                   
                   
                  
                </div>
            </div>
        </div>
    </section>
 



    
   