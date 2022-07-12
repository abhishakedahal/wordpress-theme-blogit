 <!-- footer section start -->
 <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_main">
               <div class="footer_logo"><a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png"></a></div>
               <div class="footer_menu">
                  <ul>
                     <li><a href="index.html">Home</a></li>
                     <li><a href="about.html">About</a></li>
                     <li><a href="blogs.html">Blog</a></li>
                     <li><a href="contact.html">Testimonial</a></li>
                     <li><a href="contact.html">Contact</a></li>
                  </ul>
               </div>
               <div class="social_icon">
                  <ul>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-icon.png"></a></li>
                     <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-icon.png"></a></li>
                  </ul>
               </div>
            </div>
            <h1 class="subscribe_text">Subscribe Now</h1>
            <div class="input_bt">
               <!-- <input type="text" class="mail_bt" placeholder="Enter your email" name="Enter your email">
                  <span class="subscribe_bt" id="basic-addon2"><a href="#"><i class="fa fa-right-arrow"></i></a></span> -->
               <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Enter Your Email" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                     <button class="btn btn-outline-secondary" type="button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                  </div>
               </div>
            </div>
            <div class="location_text">
               <ul>
                  <li>
                     <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/call-icon.png">
                     <span class="padding_15">Call +01 1234567890</span></a>
                  </li>
                  <li>
                     <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/mail-icon.png">
                     <span class="padding_15">demo@gmail.com</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- copyright section end -->

      <?php wp_footer(); ?>
      </body>
</html>