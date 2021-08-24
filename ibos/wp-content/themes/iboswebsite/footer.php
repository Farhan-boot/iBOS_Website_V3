<?php
    global $uni_pro;
    $logo_white = $uni_pro['media-logo-white']['url'];
    $logo_blue = $uni_pro['media-logo-blue']['url'];
    $favicon = $uni_pro['media-favicon']['url'];
    //social section
    $social_facebook = $uni_pro['opt-social-text-facebook'];
    $social_instagram = $uni_pro['opt-social-text-instagram'];
    $social_twitter = $uni_pro['opt-social-text-twitter'];
    $social_linkedin = $uni_pro['opt-social-text-linkedin'];
    $social_youtube = $uni_pro['opt-social-text-youtube'];
    $social_whatsapp = $uni_pro['opt-social-text-whatsapp'];
    $social_telegram = $uni_pro['opt-social-text-telegram'];
    
    //footer section
    $footer_section1 = $uni_pro['opt-footer-text-section1'];
    $footer_section2 = $uni_pro['opt-footer-text-section2'];
    $footer_bottom = $uni_pro['opt-footer-bottom'];

?>

<!-- footer section -->
    <footer>
        <div class="footer-section">
            <div class="footer-section-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/ibos-icons.svg" alt="iBOS">
            </div>
            <div class="container">
                <div class="footer-top">
                    <div class="row">
                        <div class="col-lg-4 col-sm-6">
                            <div class="single-footer-item">
                                <div class="footer-logo">
                                    <img src="<?php echo $logo_white?>" alt="iBOS">
                                </div>
                                <div class="footer-logo-txt">
                                    <p>
                                    <?php echo $footer_section1 ?>
                                    </p>
                                    <ul class="footer-list">
                                        <li>
                                            <a target="_blank" href="<?php echo $social_facebook ?>">
                                                <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo $social_linkedin ?>">
                                                <i class="fa fa-linkedin-square" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo $social_whatsapp ?>">
                                                <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo $social_telegram ?>">
                                                <i class="fa fa-telegram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo $social_twitter ?>">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo $social_instagram ?>">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="<?php echo $social_youtube ?>">
                                                <i class="fa fa-youtube-play" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-item">
                                <h4 class="footer-title">Services</h4>
                                <?php wp_nav_menu( array( 'theme_location' => 'footer-Services' ) ); ?>
                            <!--
                                <ul class="footer-menu-list">
                                    <li>
                                        <a href="web-development.html">Web Development</a>
                                    </li>
                                    <li>
                                        <a href="mobile-development.html">
                                            Mobile App Development
                                        </a>
                                    </li>
                                    <li>
                                        <a href="e-commerce.html">
                                            E-commerce Solution
                                        </a>
                                    </li>
                                    <li>
                                        <a href="uiux.html">
                                            UX/UI Design
                                        </a>
                                    </li>
                                    <li>
                                        <a href="custom-business.html">
                                            Custom Business Solution
                                        </a>
                                    </li>
                                    <li>
                                        <a href="custom-softwear.html">
                                            Custom Software Development
                                        </a>
                                    </li>
                                </ul>
                            -->
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="single-footer-item">
                                <h4 class="footer-title">Products</h4>
                                <?php wp_nav_menu( array( 'theme_location' => 'footer-Products' ) ); ?>
                            <!--
                                <ul class="footer-menu-list">
                                    <li>
                                        <a href="bill-management.html">
                                            Bill Management System
                                        </a>
                                    </li>
                                    <li>
                                        <a href="sme.html">
                                            Small & Medium-sized Enterprises
                                        </a>
                                    </li>
                                    <li>
                                        <a href="erp.html">
                                            Enterprise Resource Planning
                                        </a>
                                    </li>
                                    <li>
                                        <a href="rtm.html">
                                            Released To Manufacturing
                                        </a>
                                    </li>
                                    <li>
                                        <a href="vat.html">
                                            Value Added Tax
                                        </a>
                                    </li>
                                    <li>
                                        <a href="hcm.html">
                                            HR management System
                                        </a>
                                    </li>
                                </ul>
                            -->
                            </div>
                        </div>
                        <div class="col-lg-2 col-sm-6">
                            <?php// echo $footer_section2 ?>

                        <div class="single-footer-item">
                                <h4 class="footer-title">Reach Us</h4>
                                <ul class="footer-menu-list">
                                    <li>
                                        <div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/message.svg" alt="iBOS">
                                        </div>
                                        <div><a href="mailto:info@ibos.io">info@ibos.io</a></div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/mobile.svg" alt="iBOS">
                                        </div>
                                        <div><a href="tel:+8801703596292"> +8801703596292</a></div>
                                    </li>
                                    <li>
                                        <div>
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon/location.svg" alt="iBOS">
                                        </div>
                                        <div>
                                            <a href="https://goo.gl/maps/RcZwqFQ274TjHfPs8" target="_blank">House No: 6/2, Kazi Nazrul Islam RD, Lalmatia, Dhaka - 1207</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>




                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <?php echo $footer_bottom ?> 
                    </div>
                </div>
            </div>
        </div>

        <div id="scroll-Top">
            <div class="return-to-top">
                <i class="fa fa-angle-up " id="scroll-top" data-toggle="tooltip" data-placement="top" title=""
                    data-original-title="Back to Top" aria-hidden="true"></i>
            </div>
        </div>
    </footer>

    <!-- Include all js compiled plugins (below), or include individual files as needed -->

    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/hubslider.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.sticky.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/aos.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom-menu.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<script>
        const serveItems = document.getElementById("serve-items");
        if (serveItems) {
            $(".serve-items").on('afterChange', function (event, slick, currentSlide) {
                console.log('autoplay timer', slick.autoPlayTimer)
                if (slick.autoPlayTimer !== null) {
                    $('.serve-wrapper').css('background-image',
                        `url("<?php echo get_template_directory_uri(); ?>/assets/images/serve/background-${currentSlide}.jpg")`);
                } else {
                    let index = $(".slick-track .slick-current").index()
                    $('.serve-wrapper').css('background-image',
                        `url("assets/images/serve/background-${index}.jpg")`);
                }

            })
        }
    </script>

  <script type="text/javascript">
  
        $(".single-footer-item .menu-footer-services-container ul").addClass('footer-menu-list');
        $(".single-footer-item .menu-footer-products-container ul").addClass('footer-menu-list');
          // add careerBg
          let careerBg = document.createElement("div");
          careerBg.classList.add('single-career-hero-bg');
          $(".awsm-job-single-wrap").prepend(careerBg);
          
          let singleCareerContainer=document.querySelector(".awsm-job-content");
          singleCareerContainer.classList.add('container');
          
          let singleCareerContainerForm=document.querySelector(".awsm-job-form-inner");
          singleCareerContainerForm.classList.add('container');
  </script>





  <script type="text/javascript">
               $(document).ready(function() {
                    setTimeout(function(){ 
                            $('iframe').contents().find("head")
                             .append($("<style type='text/css'>.hubspot-link__container.sproket{display:none;};</style>"))
                             .append($("<style type='text/css'>.hs-button{color: #000;background: transparent; border: 1px solid #007bff; margin-bottom: 5px;}.hs-button:hover{background: #007bff;border-color: #007bff;color: #fff};</style>"))
                              .append($("<style type='text/css'>#firstname-3bfb247b-acae-4e11-8c22-5c55450c32fa{max-width: 48%;float: left;margin-right: 2%; border: none; border-bottom:1px solid #cbd6e2;background: none; margin-bottom: 10px;  }#email-3bfb247b-acae-4e11-8c22-5c55450c32fa{max-width: 48%;float:left;border: none; border-bottom:1px solid #cbd6e2;background: none;}#message-3bfb247b-acae-4e11-8c22-5c55450c32fa{border: none; border-bottom:1px solid #cbd6e2;background: none;label{display:none;};</style>"));
}, 5000);
                });
        </script>






 <?php wp_footer(); ?>
</body>

</html>