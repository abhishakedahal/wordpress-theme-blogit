<?php get_header(); ?>
<!-- barber section start -->
<div class="barber_section layout_padding">
   <div class="container">
      <?php
      if ( have_posts() ) :
         while ( have_posts() ): the_post();
      ?>
            <div class="braber_taital_main">
               <div class="row">
                  <div class="col-lg-6">

                     <div class="barber_bg_main">
                        <h1 class="barber_taital"><?php the_title(); ?></h1>
                        <p class="barber_text"><?php the_excerpt(); ?></p>
                        <div class="blogr_main">
                           <div class="blogr_left">
                              <p class="post_text">Post By : <?php the_author(); ?></p>
                           </div>
                           <div class="blogr_right">
                              <div class="comment_text">
                                 <ul>
                                    <li><a href="#">Like<span class="padding_10"><i class="fa fa-thumbs-up"></i></span></a></li>
                                    <li><a href="#">Comment<span class="padding_10"><i class="fa fa-comment"></i></span></a></li>
                                    <li><a href="#">Share<span class="padding_10"><i class="fa fa-share-alt" aria-hidden="true"></i></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="fashion_img">
                        <img class="fashion_img" src=" <?php the_post_thumbnail_url();
                                                       ?>">
                        <div class="read_bt"><a href="#"><?php the_modified_date(); ?></a></div>
                     </div>
                  </div>
               </div>
            </div>
      <?php
        endwhile;
      endif;
      ?>
   </div>
</div>
<!-- barber section end -->
<!-- about section start -->
<div class="about_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-sm-12">
            <h1 class="about_taital">About Us</h1>
            <p class="about_text">Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and aIpsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a</p>
            <div class="get_bt"><a href="#">Get a quote</a></div>
         </div>
      </div>
   </div>
</div>
<!-- about section end -->
<!-- contact section start -->
<div class="contact_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="contact_main">
               <h1 class="contact_taital">Contact Us</h1>
               <form action="/action_page.php">
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Name" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Email" name="Name">
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Phone Numbar" name="Email">
                  </div>
                  <div class="form-group">
                     <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
                  </div>
               </form>
               <div class="send_bt"><a href="#">SEND</a></div>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="testimonial_taital_main">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <h1 class="testimonial_taital">Testimonial</h1>
                        <div class="testimonial_left">
                           <div class="client_img"><img src="<?php echo get_template_directory_uri(); ?>/images/client-img.png"></div>
                        </div>
                        <div class="testimonial_right">
                           <h1 class="jack_text">Hindona</h1>
                           <p class="dummy_text">Businessman</p>
                        </div>
                        <p class="lorem_text">That it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now</p>
                     </div>
                     <div class="carousel-item">
                        <h1 class="testimonial_taital">Testimonial</h1>
                        <div class="testimonial_left">
                           <div class="client_img"><img src="<?php echo get_template_directory_uri(); ?>/images/client-img.png"></div>
                        </div>
                        <div class="testimonial_right">
                           <h1 class="jack_text">Hindona</h1>
                           <p class="dummy_text">Businessman</p>
                        </div>
                        <p class="lorem_text">That it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now</p>
                     </div>
                     <div class="carousel-item">
                        <h1 class="testimonial_taital">Testimonial</h1>
                        <div class="testimonial_left">
                           <div class="client_img"><img src="<?php echo get_template_directory_uri(); ?>/images/client-img.png"></div>
                        </div>
                        <div class="testimonial_right">
                           <h1 class="jack_text">Hindona</h1>
                           <p class="dummy_text">Businessman</p>
                        </div>
                        <p class="lorem_text">That it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors nowthat it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now</p>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                     <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                     <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- contact section end -->


<?php get_footer(); ?>