<!-- blog-gallery section -->
<section>
    <div class="blog-gallery-section single-blog-gallary">
        <div class="container">
            <div class="blog-details">
                <div class="single-blog-head">
                    <h6 class="small-info">Update</h6>
                    <h6 class="small-info"><?php the_time( 'j M Y' ); ?></h6>
                    <h2 class="single-blog-title">
                        4 Major Problems A HRM Software Can Fix
                    </h2>
                    <p>
                        Which one of the resources you’ve found the hardest one to handle?
                        Don’t tell us if it’s anything but human resource. After all,
                        nothing else got a psychology of it’s except for this one. So, if
                        you’re planning to deal with them, then you’re going to need
                        something that can pull the job off where the chances of error will
                        be at its lowest. Yes, we’re talking about grabbing HRM software.
                        But why would you pick one in the first place if it can’t even fix
                        up your problems? So, before you make your mind, here’s a bunch of
                        problems you might be wishing to get solved.
                    </p>
                    <br />

                    <div class="single-blog-social-icons">
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
                            <img src="https://ibos.io/wp-content/uploads/2021/08/hrm-management-software-2.jpg"
                                alt="iBOS" />
                            <p>
                                Lack of Sufficient Monitoring Over Employees You’re not planning
                                to check out every employer manually, are you? If not, then we
                                don’t see a better alternative for you than the HRM Software.
                                It’s easy as pie to have a glance of all the activity of an
                                employee from the day an employee onboarding till the day he’s
                                leaving.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/people-in-hrm-softwares.jpg"
                                alt="iBOS" />
                            <p>
                                Automating the Communication Communication is the key to
                                operational success. So, with HRM software, rather than knocking
                                your door, employees can just go for HRMS login and reach you
                                whenever they need just with a click.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/people-management-in-hr.jpeg"
                                alt="iBOS" />
                            <p>
                                Routing Documents Letting the hiring manager have all the docs
                                on time indeed eats up a pile of time, unless HRM Software is
                                there to ease that up. Along with clearing document clogging, it
                                can also cut down the hassle of automating instant response.
                            </p>
                        </div>
                        <div class="single-blog-image">
                            <img src="https://ibos.io/wp-content/uploads/2021/08/problems-a-hrm-software-can-fix-featured.jpg"
                                alt="iBOS" />
                            <p>
                                Keeping the Track of Leave In the manual way, getting a view of
                                the leave status is nothing but a time consuming task. But HRMS
                                can easily make sure that you don’t have to leave your desk to
                                know the leave status of your employees.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="single-blog-body">
                    <h2>HRM Software - How the HR Hassles Ends?</h2>
                    <p>
                        Every software comes with a purpose - the purpose of solving a
                        problem. But HRM software is s something that is made to solve more
                        than one problem like -
                    </p>

                    <img src="https://ibos.io/wp-content/uploads/2021/08/problems-a-hrm-software-can-fix-featured.jpg"
                        alt="iBOS" />
                    <p class="image-title">4 Major Problems A HRM Software Can Fix</p>

                    <h2>Lack of Sufficient Monitoring Over Employees</h2>
                    <p>You’re not planning to check out every employer manually, are you? If not, then we don’t see a
                        better alternative for you than the HRM Software. It’s easy as pie to have a glance of all the
                        activity of an employee from the day an employee onboarding till the day he’s leaving.</p>

                    <h3>Automating the Communication</h3>
                    <p>Communication is the key to operational success. So, with HRM software, rather than knocking your
                        door, employees can just go for HRMS login and reach you whenever they need just with a click.
                    </p>

                    <h3>Routing Documents</h3>
                    <p>Letting the hiring manager have all the docs on time indeed eats up a pile of time, unless HRM
                        Software is there to ease that up. Along with clearing document clogging, it can also cut down
                        the hassle of automating instant response.
                    </p>
                    <h3>Keeping the Track of Leave
                    </h3>
                    <p>In the manual way, getting a view of the leave status is nothing but a time consuming task. But
                        HRMS can easily make sure that you don’t have to leave your desk to know the leave status of
                        your employees.</p>
                    <h2 class="">Final Words</h2>
                    <p>To be honest, if the HRMS software can deal with a bunch of more problems along with the ones
                        we’ve mentioned above. But that’s only when you’ve got a good one in your arsenal and if you’re
                        really into getting one, we’d think about something like the iBOS HRM as it can add up
                        additional benefits like payroll management, cafeteria management, overtime management, etc.</p>

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
                    'post_type'      =>
      'post', 'category_name' => 'blog', 'posts_per_page' => 6, 'facetwp' =>
      true, ); $query = new WP_Query( $args ); ?>
            <h2 class="blog-gallery-title">More from iBOS</h2>
            <div class="row">
                <?php if ( $query->have_posts() ) : while ( $query-> have_posts() ) :
        $query-> the_post(); ?>
                <?php $post_thumbnail_id = get_post_thumbnail_id(); $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>
                <div class="col-xl-6 col-12">
                    <div class="single-blog-item single-blog-float-item">
                        <div class="link-box">
                            <a href="<?php the_permalink()?>"></a>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="single-blog-img single-blog-float-img">
                                    <img src="<?php echo $post_thumbnail_url; ?>" alt="iBOS" />
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
                    'post_type'      =>
      'post', 'category_name' => 'blog', 'posts_per_page' => -1, 'facetwp' =>
      true, ); $query = new WP_Query( $args ); ?>
            <div class="row toggle-blog">
                <?php if ( $query->have_posts() ) : while ( $query-> have_posts() ) :
        $query-> the_post(); ?>
                <?php $post_thumbnail_id = get_post_thumbnail_id(); $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id ); ?>

                <?php 
                        $postNumber++;
                        if ($postNumber>6){ ?>

                <div class="col-xl-6 col-12">
                    <div class="single-blog-item single-blog-float-item">
                        <div class="link-box">
                            <a href="single-blog.html"></a>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="single-blog-img single-blog-float-img">
                                    <img src="<?php echo $post_thumbnail_url; ?>" alt="iBOS" />
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