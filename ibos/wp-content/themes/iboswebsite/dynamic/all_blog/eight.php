<!-- blog-gallery section -->
<section>
    <div class="blog-gallery-section  single-blog-gallary">
        <div class="container">
            <div class="blog-details">
                <div class="single-blog-head">
                    <h6 class="small-info">Update</h6>
                    <h6 class="small-info"><?php the_time( 'j M Y' ); ?></h6>
                    <h2 class="single-blog-title">
                        How the Right Mobile App Changes A Business?
                    </h2>
                    <h4>
                        How often do you step out of your house without your mobile? Not much we guess. But why? Well,
                        clearly, the mobile is containing apps that are making your work and life easier. This is pretty
                        much the same reason why a big part of the business world is counting using apps as a more
                        fruitful way of doing business. <br>
                        Now the question is why apps are doing so well and how they change a business? Well, get ready
                        for the answer then.

                    </h4>
                    <div class="single-blog-social-icons mt-4">
                        <a href="#" class="single-blog-social-icon">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="single-blog-social-icon">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="single-blog-social-icon">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="single-blog-social-icon">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <div class="single-blog-images">
                    <div class="single-blog-image-slider">
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/How-the-Right-Mobile-App-Changes-A-Business-2.jpg"
                                alt="iBOS" />
                            <p>
                                Valuation of the customer

                                Usually in a business, it’s not easy to reach the customers always and have a check on
                                their each and every need. But lately, mobile apps have filled that gap beautifully. As
                                the businesses get the chance to interact with their customers directly, they get more
                                value as a customer from the business.

                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/How-the-Right-Mobile-App-Changes-A-Business-3.jpg"
                                alt="iBOS" />
                            <p>
                                No More Waiting Rooms
                                The customers don’t need to wait to get in touch with the company as the apps make it a
                                one-click job. On the contrary, the company too can respond to their customers without
                                putting them in the waiting room.

                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/How-the-Right-Mobile-App-Changes-A-Business-4.jpg"
                                alt="iBOS" />
                            <p>
                                Reducing Cost

                                An app alone can eliminate a ton of hassles where it does marketing, showcasing service
                                or product, increasing customer engagement and much more. So, if you look closely,
                                you’ll see that an app can reduce major costs relating to marketing, order management
                                and customer service.


                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/How-the-Right-Mobile-App-Changes-A-Business.jpg"
                                alt="iBOS" />
                            <p>
                                Brand Visibility

                                If you really want to bury your roots in the market, then you’ve got no other choice but
                                to enhance your brand visibility. These days it’s hard to think of a brand with higher
                                visibility if it doesn’t have a mobile app that makes that part easier. So, any company
                                that has an app, it becomes more convenient for them to enhance their brand visibility.


                            </p>
                        </div>
                    </div>
                </div>
                <div class="single-blog-body">
                    <p>
                        Cash Flow Booster
                        When was the last time you realized that your own invoicing system is keeping you away from
                        pulling the reins of insufficient cashflow? Well, that issue can be fixed with ERP as it makes
                        the invoicing better where it also delivers you useful and efficient collection tools.
                        <img src="https://ibos.io/wp-content/uploads/2021/08/How-the-Right-Mobile-App-Changes-A-Business.jpg"
                            alt="iBOS" />
                        <p class="image-title">
                            How the Right Mobile App Changes A Business?
                        </p>
                        <h3>Valuation of the customer</h3>
                        <p>Usually in a business, it’s not easy to reach the customers always and have a check on their each and every need. But lately, mobile apps have filled that gap beautifully. As the businesses get the chance to interact with their customers directly, they get more value as a customer from the business. </p>
                        <h3>No More Waiting Rooms</h3>
                        <p>The customers don’t need to wait to get in touch with the company as the apps make it a one-click job. On the contrary, the company too can respond to their customers without putting them in the waiting room. </p>
                        <h3>Reducing Cost</h3>
                        <p>An app alone can eliminate a ton of hassles where it does marketing, showcasing service or product, increasing customer engagement and much more. So, if you look closely, you’ll see that an app can reduce major costs relating to marketing, order management and customer service. </p>
                        <h3>Brand Visibility</h3>
                        <p>If you really want to bury your roots in the market, then you’ve got no other choice but to enhance your brand visibility. These days it’s hard to think of a brand with higher visibility if it doesn’t have a mobile app that makes that part easier. So, any company that has an app, it becomes more convenient for them to enhance their brand visibility. </p>
                        <h3>Working As A Social Platform</h3>
                        <p>What a social platform does? Bringing people together, right? Well, apps lately are doing the same thing for businesses. Due to working as a social platform, apps help the business in interacting with the customers along with understanding their needs. </p>
                        <h2>Final Words</h2>
                        <p>No matter how good products a business is offering, they’ll have to get closer to the customer in every possible way which is nothing but impossible without the right mobile app. But that is </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- more-blog section -->
<section>
    <div class="more-blog-content single-more-blog-content">
        <div class="container">
            <?php
                    $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'blog',
                    'posts_per_page' => 6,
                    'facetwp' => true,
                    );
                 $query = new WP_Query( $args );
            ?>
            <h2 class="blog-gallery-title">More from iBOS</h2>
            <div class="row">

                <?php if ( $query->have_posts() ) : while ( $query-> have_posts() ) : $query-> the_post(); ?>
                <?php $post_thumbnail_id = get_post_thumbnail_id(); $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
                <div class="col-xl-6 col-12">
                    <div class="single-blog-item single-blog-float-item">
                        <div class="link-box">
                            <a href="<?php the_permalink()?>"></a>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="single-blog-img single-blog-float-img">
                                    <img src="<?php echo $post_thumbnail_url; ?>" alt="iBOS">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-story-txt single-blog-txt single-blog-float-txt">
                                    <h6>Press Release</h6>
                                    <h2>
                                        <a href="single-blog.html">
                                            <?php echo wp_trim_words( get_the_title(), 6, '' );?>
                                        </a>
                                    </h2>
                                    <p>
                                        <?php echo wp_trim_words( get_the_content(), 12, '' );?>
                                    </p>
                                    <h6><?php the_time( 'j M Y' ); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    endwhile;
                    wp_reset_postdata(); 
                     endif; 
                 ?>

                <!--
                    <div class="col-xl-6 col-12">
                        <div class="single-blog-item single-blog-float-item">
                            <div class="link-box">
                                <a href="single-blog.html"></a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="single-blog-img single-blog-float-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/12.png" alt="iBOS">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-story-txt single-blog-txt single-blog-float-txt">
                                        <h6>Press Release</h6>
                                        <h2>
                                            <a href="single-blog.html">
                                                Human Capital management refers to managing an organization’s
                                                employees
                                            </a>
                                        </h2>
                                        <p>
                                            This the meaning of insanity, insanity means doing one fucking thing
                                            ever and ever.
                                        </p>
                                        <h6>June 29, 2021</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="single-blog-item single-blog-float-item">
                            <div class="link-box">
                                <a href="single-blog.html"></a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="single-blog-img single-blog-float-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/13.png" alt="iBOS">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-story-txt single-blog-txt single-blog-float-txt">
                                        <h6>Press Release</h6>
                                        <h2>
                                            <a href="single-blog.html">
                                                Odoo is a comprehensive open-source enterprise resource planning
                                                software
                                            </a>
                                        </h2>
                                        <p>
                                            This the meaning of insanity, insanity means doing one fucking thing
                                            ever and ever.
                                        </p>
                                        <h6>June 29, 2021</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="single-blog-item single-blog-float-item">
                            <div class="link-box">
                                <a href="single-blog.html"></a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="single-blog-img single-blog-float-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/14.png" alt="iBOS">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-story-txt single-blog-txt single-blog-float-txt">
                                        <h6>Press Release</h6>
                                        <h2>
                                            <a href="single-blog.html">
                                                iBOS worked with distinctive clients in its lifetime
                                            </a>
                                        </h2>
                                        <p>
                                            This the meaning of insanity, insanity means doing one fucking thing
                                            ever and ever.
                                        </p>
                                        <h6>June 29, 2021</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="single-blog-item single-blog-float-item">
                            <div class="link-box">
                                <a href="single-blog.html"></a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="single-blog-img single-blog-float-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/15.png" alt="iBOS">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-story-txt single-blog-txt single-blog-float-txt">
                                        <h6>Press Release</h6>
                                        <h2>
                                            <a href="single-blog.html">
                                                The market for ERP software in the Asia Pacific has grown to
                                                $9.67 billion by 2020
                                            </a>
                                        </h2>
                                        <p>
                                            This the meaning of insanity, insanity means doing one fucking thing
                                            ever and ever.
                                        </p>
                                        <h6>June 29, 2021</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12">
                        <div class="single-blog-item single-blog-float-item">
                            <div class="link-box">
                                <a href="single-blog.html"></a>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="single-blog-img single-blog-float-img">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/16.png" alt="iBOS">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="single-story-txt single-blog-txt single-blog-float-txt">
                                        <h6>Press Release</h6>
                                        <h2>
                                            <a href="single-blog.html">
                                                Our iBOS Tax Management is a simple arranged platform
                                            </a>
                                        </h2>
                                        <p>
                                            This the meaning of insanity, insanity means doing one fucking thing
                                            ever and ever.
                                        </p>
                                        <h6>June 29, 2021</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            -->
            </div>



            <?php
                    $args = array(
                    'post_type'      => 'post',
                    'category_name'  => 'blog',
                    'posts_per_page' => -1,
                    'facetwp' => true,
                    );
                 $query = new WP_Query( $args );
            ?>
            <div class="row toggle-blog">
                <?php if ( $query->have_posts() ) : while ( $query-> have_posts() ) : $query-> the_post(); ?>
                <?php $post_thumbnail_id = get_post_thumbnail_id(); $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>

                <?php 
                        $postNumber++;
                        if ($postNumber>6){
                    ?>

                <div class="col-xl-6 col-12">
                    <div class="single-blog-item single-blog-float-item">
                        <div class="link-box">
                            <a href="single-blog.html"></a>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="single-blog-img single-blog-float-img">
                                    <img src="<?php echo $post_thumbnail_url; ?>" alt="iBOS">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="single-story-txt single-blog-txt single-blog-float-txt">
                                    <h6>Press Release</h6>
                                    <h2>
                                        <a href="single-blog.html">
                                            <?php echo wp_trim_words( get_the_title(), 6, '' );?>
                                        </a>
                                    </h2>
                                    <p>
                                        <?php echo wp_trim_words( get_the_content(), 12, '' );?>
                                    </p>
                                    <h6><?php the_time( 'j M Y' ); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                        }
                    ?>

                <?php 
                 endwhile;
                 wp_reset_postdata(); 
                 endif; 
              ?>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="more-blog-btn-section">
                        <button type="button" class="btn service-btn btn-seemore">
                            <span>View More</span>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                        <button type="button" class="btn service-btn btn-seeless">
                            <span>Less View</span>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>