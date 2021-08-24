<!-- blog-gallery section -->
<section>
    <div class="blog-gallery-section  single-blog-gallary">
        <div class="container">
            <div class="blog-details">
                <div class="single-blog-head">
                    <h6 class="small-info">Update</h6>
                    <h6 class="small-info"><?php the_time( 'j M Y' ); ?></h6>
                    <h2 class="single-blog-title">
                        What Makes a Software Company Worth Hiring
                    </h2>
                    <h4>
                        You need to find yourself a software company that understands the requirements of your business.
                        They should know how to utilize the latest technologies to enable your business to be more
                        profitable. A top-notch software company combines technical fluency with excellent customer
                        service so that they can ensure value for your money. <br><br>
                        But which part should you roll your eyes over while picking up a software company to get a
                        solution from? Well, that’s the answer we’re about to put on your table today.

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
                            <img src="https://ibos.io/wp-content/uploads/2021/08/What-Makes-a-Software-Company-Worth-Hiring-2.jpg"
                                alt="iBOS" />
                            <p>
                                Expertise:
                                Tech-industry is constantly growing and expanding. Be it from the perspective of tools
                                or skills-it’s indispensable to have a software company that is expert in what it does.
                                All the top software companies around the world have one thing in common-that is high
                                efficiency and expertise.

                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/What-Makes-a-Software-Company-Worth-Hiring-3.jpg"
                                alt="iBOS" />
                            <p>
                                Understanding Clients’ Requirements:
                                Mutual understanding is absolutely inevitable between you & your clients. A company
                                might have the best software in the world and still be of no use if they do not
                                understand what you need. That’s why, you should find the assistance of a software
                                company that will recognize your necessities and present you with all the options for
                                you to choose from.

                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/What-Makes-a-Software-Company-Worth-Hiring-4.jpg"
                                alt="iBOS" />
                            <p>
                                Consultancy:
                                Not always you’ll know what exactly you are looking for. In those cases, you should have
                                a smart software company to guide you through the complexities in the world of
                                automation. You can even arrange seminars, webinars and training sessions to have your
                                people properly trained on tech-tools and processes.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/What-Makes-a-Software-Company-Worth-Hiring.jpg"
                                alt="iBOS" />
                            <p>
                                Implementation:
                                All those plans can mean nothing if the software company cannot implement it for you.
                                Having resources is not enough if implementation is not done correctly. So, it’s
                                absolutely essential to find a software company who’ll be there with you from the
                                beginning till the end.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="single-blog-body">
                    <h2>Qualities of a Hirable Software Company</h2>
                    <p>If you’re up for hiring the best software company in the market, make sure that they’ve got the following qualities covered.</p>

                        <img src="https://ibos.io/wp-content/uploads/2021/08/What-Makes-a-Software-Company-Worth-Hiring.jpg"
                            alt="iBOS" />
                        <p class="image-title">
                            What Makes a Software Company Worth Hiring
                        </p>
                    <h3>Management</h3>
                    <p>Management comes first when you’re trying to hire a software company to share your burden. No matter how  much resources one has, without proper management, everything falls apart. On the other hand, proper labour distribution of work among the people can result in significant progress in the overall development  of your business needs.</p>
                    <h3>Expertise</h3>
                    <p>Tech-industry is constantly growing and expanding. Be it from the perspective of tools or skills-it’s indispensable to have a software company that is expert in what it does. All the top software companies around the world have one thing in common-that is high efficiency and expertise.</p>
                    <h3>Understanding Clients’ Requirement
                    </h3>
                    <p>Mutual understanding is absolutely inevitable between you & your clients. A company might have the best software in the world and still be of no use if they do not understand what you need. That’s why, you should find the assistance of a software company that will recognize your necessities and present you with all the options for you to choose from.
                    </p>
                    <h3>Consultancy</h3>
                    <p>Not always you’ll know what exactly you are looking for. In those cases, you should have a smart software company to guide you through the complexities in the world of automation. You can even arrange seminars, webinars and training sessions to have your people properly trained on tech-tools and processes.</p>
                    <h3>Implementation</h3>
                    <p>All those plans can mean nothing if the software company cannot implement it for you. Having resources is not enough if implementation is not done correctly. So, it’s absolutely essential to find a software company who’ll be there with you from the beginning till the end.
                    </p>
                    <h2>Final Words</h2>
                    <p>In order to ensure automation in your company and flourish, you should find a compatible software company that identifies your gaps and enhances your strengths. Keep the above mentioned factors in mind and leave a mark on the industry.</p>
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