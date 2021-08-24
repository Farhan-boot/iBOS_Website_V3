<!-- blog-gallery section -->
<section>
    <div class="blog-gallery-section  single-blog-gallary">
        <div class="container">
            <div class="blog-details">
                <div class="single-blog-head">
                    <h6 class="small-info">Update</h6>
                    <h6 class="small-info"><?php the_time( 'j M Y' ); ?></h6>
                    <h2 class="single-blog-title">
                        Why Are Businesses Loving Cloud-Based Solutions?
                    </h2>
                    <h4>
                        Even a decade ago we can’t remember if people knew about cloud so much like they do now. No,
                        we’re not talking about the one you’re seeing in the sky but the one that you’re roaming around
                        with. <br><br>
                        To be honest, people love nothing unless it’s putting some benefits on their table and the same
                        goes for Cloud-based solutions as well. But what we’ve noticed lately is that businesses are
                        loving them more than ever. So, we thought of finding the reasons out and ended up with some
                        interesting results.

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
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Why-Are-Businesses-Loving-Cloud-Based-Solutions-2.jpg"
                                alt="iBOS" />
                            <p>
                                Lowering Business Costs
                                No business loves a solution until it’s helping them to cut the cost off. If you look at
                                the cloud-based solution, they do that better than on-premises solutions as they don’t
                                ask for investments on servers, consultants, IT staff, etc. Actually, on-premises
                                solutions cost 30% more than cloud-based solutions.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Why-Are-Businesses-Loving-Cloud-Based-Solutions-3.jpg"
                                alt="iBOS" />
                            <p>
                                Speed of Implementation
                                on-premises solutions come with a huge drawback and that is the long implementation
                                time. But that’s not the thing of cloud-based solutions. As they don’t need any physical
                                equipment, implementing takes the lowest amount of time you can imagine.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Why-Are-Businesses-Loving-Cloud-Based-Solutions-4.jpg"
                                alt="iBOS" />
                            <p>
                                Accessibility
                                Do you know what has contributed the most in bringing the office in the home? The cloud.
                                This is the same reason why cloud-based solutions are breaking the ceiling of popularity
                                as the users can get in anytime they want from anywhere in the globe. If that doesn’t
                                make cloud based solutions worth having, then we don’t know what does.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/Why-Are-Businesses-Loving-Cloud-Based-Solutions.jpg"
                                alt="iBOS" />
                            <p>
                                Agility and Customization

                                When you’re asking for the system that can deliver you the maximum agility on the data
                                handling, nothing can pull that job off like cloud-based solutions. As you won’t be
                                dependent on any local server, putting the data in the system is going to be easy as
                                pie.
                                Another good thing about cloud solutions is they’re highly customizable. You can adjust
                                them as per your need without risking the process during the alteration.

                            </p>
                        </div>
                    </div>
                </div>
                <div class="single-blog-body">
                    <h2>Lowering Business Costs</h2>
                    <p>No business loves a solution until it’s helping them to cut the cost off. If you look at the cloud-based solution, they do that better than on-premises solutions as they don’t ask for investments on servers, consultants, IT staff, etc. Actually, on-premises solutions cost 30% more than cloud-based solutions.</p>
                        <img src="https://ibos.io/wp-content/uploads/2021/08/Why-Are-Businesses-Loving-Cloud-Based-Solutions.jpg"
                            alt="iBOS" />
                        <p class="image-title">
                            Why Are Businesses Loving Cloud-Based Solutions?
                        </p>
                        <h3>Speed of Implementation</h3>
                        <p>on-premises solutions come with a huge drawback and that is the long implementation time. But that’s not the thing of cloud-based solutions. As they don’t need any physical equipment, implementing takes the lowest amount of time you can imagine. </p>
                        <h3>Accessibility </h3>
                        <p>Do you know what has contributed the most in bringing the office in the home? The cloud. This is the same reason why cloud-based solutions are breaking the ceiling of popularity as the users can get in anytime they want from anywhere in the globe. If that doesn’t make cloud based solutions worth having, then we don’t know what does.</p>
                        <h3>Agility and Customization</h3>
                        <p>When you’re asking for the system that can deliver you the maximum agility on the data handling, nothing can pull that job off like cloud-based solutions. As you won’t be dependent on any local server, putting the data in the system is going to be easy as pie. <br>
                            Another good thing about cloud solutions is they’re highly customizable. You can adjust them as per your need without risking the process during the alteration. 
                            </p>
                        <h3>Security</h3>
                        <p>One of the best things about cloud solutions is data security. The kind of virtual setup they’re standing makes it next to impossible to cause any breach of data. But that happens only when the solution is engineered by keeping the security maximization in mind. </p>
                        <h2>Final Words</h2>
                        <p>Things have come to a stage in the business world where cloud solutions are becoming an essential part of an organization. After knowing why, we bet you too have understood why. In case you’re thinking about stepping into that world of cloud, we’d say go for a name that can deliver you each and every advantage of cloud solutions up to the mark, like iBOS solutions does.
                        </p>
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