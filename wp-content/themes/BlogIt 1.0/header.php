<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Blogr</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
     
      <?php wp_head(); ?>
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_3">
                           <div class="shoping_bag"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/user-icon.png"></a>
                              <span class="padding_left_40"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/search-icon.png"></a></span>
                           </div>
                           <div id="myNav" class="overlay">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              <div class="overlay-content">
                                 <a href="index.html">Home</a>
                                 <a href="about.html">About</a>
                                 <a href="blog.html">Blog</a>
                                 <a href="contact.html">Testimonial</a>
                                 <a href="contact.html">Contact</a>
                              </div>
                           </div>
                           <span class="navbar-toggler-icon"></span>
                           <span onclick="openNav()"><img src="<?php echo get_template_directory_uri(); ?>/images/toogle-icon.png" class="toggle_menu"></span>
                        </div>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="banner_taital_section">
                        <h1 class="design_taital">We Do Design Blog For Business</h1>
                        <div class="contact_bt"><a href="#">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="banner_img"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="<?php echo get_template_directory_uri(); ?>/images/banner-img.png"></div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->