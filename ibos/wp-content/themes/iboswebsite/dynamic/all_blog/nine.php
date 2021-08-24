<!-- blog-gallery section -->
<section>
    <div class="blog-gallery-section  single-blog-gallary">
        <div class="container">
            <div class="blog-details">
                <div class="single-blog-head">
                    <h6 class="small-info">Update</h6>
                    <h6 class="small-info"><?php the_time( 'j M Y' ); ?></h6>
                    <h2 class="single-blog-title">
                        Do You Need Accounting Software?
                    </h2>
                    <h4>
                        Accounting software is a solution that keeps track of all the cash flows in your business.
                        Having a future projection of your overall financial health empowers you in multiple ways.
                        <br><br>
                        It’s a matter of fact that Accounting software is an efficient solution to know where a business
                        stands financially. At the same time it’s also true that not all businesses need it to function
                        smoothly.
                        Here are 5 times when you can identify that you need Accounting Software to obtain more accuracy
                        in decision-making.


                    </h4>
                    <div class="single-blog-social-icons pt-4">
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
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Do-You-Need-Accounting-Software-2.jpg"
                                alt="iBOS" />
                            <p>
                                Your Business is Growing
                                Every business targets growth since the very beginning of inception. You might have
                                started off by keeping a tab on your finances manually. But as your business expands, it
                                becomes a must for you to have accounting software.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Why-Should-SMEs-Start-Taking-ERP-Solutions-Serifously-3.jpg"
                                alt="iBOS" />
                            <p>
                                You Need Automation
                                To ensure faster access to information you need automation at one point or other.
                                Because depending solely on spreadsheets is not very helpful at the end of the day
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Do-You-Need-Accounting-Software-3.jpg"
                                alt="iBOS" />
                            <p>
                                You Need to Save Time
                                Time is money. So, repeating manual tasks only means you are wasting your invaluable
                                human resources and time. In this scenario, accounting software can be just the thing
                                that can save your resources altogether.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Do-You-Need-Accounting-Software-4.jpg"
                                alt="iBOS" />
                            <p>
                                You Need Assurance During Audit
                                To err is human. Therefore, it is not an impossible phenomenon for mistakes to occur.
                                Accounting software handles all the red flags by itself so that it can have your back
                                during the audit.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="single-blog-body">
                    <p> Here are 5 times when you can identify that you need Accounting Software to obtain more accuracy
                        in decision-making.</p> <br>
                        <ul>
                            <li><strong> Your Business is Growing </strong></li>
                        </ul>
                        <p>Every business targets growth since the very beginning of inception. You might have started off by keeping a tab on your finances manually. But as your business expands, it becomes a must for you to have accounting software.
                        </p>
                        <ul>
                            <li> <strong> You Need Automation </strong> </li>
                        </ul>
                        <p>To ensure faster access to information you need automation at one point or other. Because depending solely on spreadsheets is not very helpful at the end of the day when you need to have quick access to your data to make a decision that’s error-free.

                        </p>
                        <ul>
                            <li> <strong> You Need to Save Time </strong> 
                            </li>
                        </ul>
                        <p>Time is money. So, repeating manual tasks only means you are wasting your invaluable human resources and time. In this scenario, accounting software can be just the thing that can save your resources altogether.


                        </p>
                        <ul>
                            <li> <strong> You Need Assurance During Audit </strong> </li>
                        </ul>
                        <p>To err is human. Therefore, it is not an impossible phenomenon for mistakes to occur. Accounting software handles all the red flags by itself so that it can have your back during the audit.

                        </p>
                        <ul>
                            <li> <strong> You Need Assistance in Tax Filing  </strong> </li>
                        </ul>
                        <p>A proper accounting solution can ensure you file your taxes with confidence, in a way that you know for sure that there is no gap in your books. Accounting Software enables you to have a look at the running history of your business. You could have obviously done it manually, but you could not have done it with confidence.


                        </p>
                        <!-- <img src="https://ibos.io/wp-content/uploads/2021/08/Do-You-Need-Accounting-Software.jpg"
                            alt="iBOS" />
                        <p class="image-title">
                            Do You Need Accounting Software?
                        </p> -->
                        <h2>Final Words</h2>
                        <p>We’ve made a concise list of factors you need to check before making the decision. So that you know when to update your business to a level when you can have accounting software.</p>
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