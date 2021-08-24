<!-- blog-gallery section -->
<section>
    <div class="blog-gallery-section  single-blog-gallary">
        <div class="container">
            <div class="blog-details">
                <div class="single-blog-head">
                    <h6 class="small-info">Update</h6>
                    <h6 class="small-info"><?php the_time( 'j M Y' ); ?></h6>
                    <h2 class="single-blog-title">
                        What Can Make An ERP Software Effective for a Business?
                    </h2>
                    <h4>
                        Whenever you’re swiping your card to add an ERP solution to your business arsenal, you’re paying
                        for it to be a bucket of features that’ll push your business towards a better track. Well, we
                        don’t see that happening if you don’t even know what feature you should be expecting from an ERP
                        if you want to call it effective.
                        In case you haven’t had your share of research on that part, let us share with you what we’ve
                        got when we’ve done ours.

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
                            <img src="https://ibos.io/wp-content/uploads/2021/08/5art1.jpg" alt="iBOS" />
                            <p>
                                Business processes integration

                                The easiest way to bulk up the automation bill of a company is using different systems
                                for each of the processes. But if you’ve got the right ERP software, then business
                                process integration is the last thing you’ll have to worry about. Each of the processes
                                will get integrated automatically which will drive the total process towards a
                                successful accomplishment.

                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/5art2.jpg" alt="iBOS" />
                            <p>
                                Establishing Management and Control

                                Isn’t it what you need in the first place to pull off the success you’re dreaming of
                                about your business? So, don’t count an ERP to be effective unless it’s helping you in
                                establishing management and control over each and every single department of yours. It
                                can be anything like HR, purchase, inventory, accounts, billing, etc.

                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/5art3.jpg" alt="iBOS" />
                            <p>
                                Operations Traceability

                                We don’t know if anyone has told you that but if you’ll lose the advantage of operation
                                traceability, then it’s going to be harder than ever to stop the downfall of your
                                business. So, before you pay for an ERP, don’t forget to check out how it works when it
                                comes to detecting how things are working and where they’re coming from.


                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/5art4.jpg" alt="iBOS" />
                            <p>
                                Responsive User Interface

                                Why don't you have a super computer on your desk? Well, because that’s going to be just
                                too complicated for you to handle. Well, things are pretty much the same when asking for
                                effectiveness out of an ERP solution. The more responsive and user friendly the
                                interface will be, the more effective it’ll be as the users can keep up with it without
                                much of a hassle.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="single-blog-body">
                    <h2>Features of Effective ERP Software</h2>
                    <p>If you’re calling something effective, then it’s because the features are pushing it to that level. Well, things are pretty much the same for ERPs as well. So, when you’re putting your hand in the pocket to buy an ERP, makes sure they’re capable of pulling off -
                    </p>
                        <img src="https://ibos.io/wp-content/uploads/2021/08/5art4.jpg" alt="iBOS" />
                        <p class="image-title">
                            What Can Make An ERP Software Effective for a Business?
                        </p>
                        <h3>Establishing Management and Control
                        </h3>
                        <p>Isn’t it what you need in the first place to pull off the success you’re dreaming of about your business? So, don’t count an ERP to be effective unless it’s helping you in establishing management and control over each and every single department of yours. It can be anything like HR, purchase, inventory, accounts, billing, etc.  </p>
                        <h3>Operations Traceability</h3>
                        <p>We don’t know if anyone has told you that but if you’ll lose the advantage of operation traceability, then it’s going to be harder than ever to stop the downfall of your business. So, before you pay for an ERP, don’t forget to check out how it works when it comes to detecting how things are working and where they’re coming from. 
                        </p>
                        <h3>Responsive User Interface
                        </h3>
                        <p>Why don't you have a supercomputer on your desk? Well, because that’s going to be just too complicated for you to handle. Well, things are pretty much the same when asking for effectiveness out of an ERP solution. The more responsive and user-friendly the interface will be, the more effective it’ll be as the users can keep up with it without much of a hassle.</p>
                        <h3>Instant Data Reach</h3>
                        <p>You can’t find even a single organization out there that takes the importance of instant decisions lightly. But for that what they need the most is all the required data right on hand. So, if the ERP is not bringing that to your table, then you can count it as anything but not effective.</p>
                        <h2>Final Words </h2>
                        <p>The prime objective of getting an ERP is taking a business to a level where it can achieve maximum output with minimum effort. But that’s never going to happen when you’re investing in a system that is still far away from being effective. So, go for something that fills all the gaps up, just like the iBOS Enterprise solution does. </p>
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