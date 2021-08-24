<?php 
    /*
      Template Name: Career-Template
    */ 
?>

<?php get_header(); ?>
    <!-- hero section -->
    <section>
        <div class="hero-section hero-another-section career-bg">
            <div class="container">
                <div class="hero-content">
                    <h2>Career</h2>
                    <p class="hero-para">
                      iBOS is the art of tech for a better future. Join this amazing team to deliver the best user experience.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- join-our-team section -->
    <section>
        <div class="join-our-team">
            <div class="container">
                <div class="join-our-team-content">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="single-join-our-team-txt">
                                <h2>Join Our Team</h2>
                                <p>
                                   It is your turn to have the most incredible experience. Your problem will meet its solution in the most transparent way. So what are you waiting for?
                                </p>
                                <div>
                                    <a href="#" class="btn btn-career">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/customer.svg" alt="iBOS">
                                        See Open Positions
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="single-join-our-team-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/01.png" alt="iBOS">
                                <div class="team-img-group">
                                    <img class="img-one wooble-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/career/img-group/01.png"
                                        alt="ibOS">
                                    <img class="img-two wooble-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/career/img-group/02.png"
                                        alt="ibOS">
                                    <img class="img-three wooble-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/career/img-group/03.png"
                                        alt="ibOS">
                                    <img class="img-four wooble-effect" src="https://ibos.io/wp-content/uploads/2021/08/tazbin.png"
                                        alt="ibOS">
                                    <img class="img-five wooble-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/career/img-group/05.png"
                                        alt="ibOS">
                                    <img class="img-six wooble-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/career/img-group/06.png"
                                        alt="ibOS">
                                    <img class="img-seven wooble-effect" src="https://ibos.io/wp-content/uploads/2021/08/forhad.jpg"
                                        alt="ibOS">
                                    <img class="img-eight wooble-effect" src="<?php echo get_template_directory_uri(); ?>/assets/images/career/img-group/08.png"
                                        alt="ibOS">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- open-position section -->
    <section>
        <div class="open-position-section">
            <div class="container">
                <h2 class="title">OPEN POSITIONS</h2>
                <div class="open-position-content">
                  
                    <?php the_content();?>
                        <!--
                        <li>
                            <div class="link-box">
                                <a href="<?php echo get_option("siteurl"); ?>/single-career/"></a>
                            </div>
                            <div class="inner-text">
                                <h6>2</h6>
                                <h3>Sr. Software Engineer</h3>
                                <p>FULL-TIME / REMOTE</p>
                            </div>
                        </li>
                        <li>
                            <div class="link-box">
                                <a href="<?php echo get_option("siteurl"); ?>/single-career/"></a>
                            </div>
                            <div class="inner-text">
                                <h6>3</h6>
                                <h3>Junior Back-end Developer</h3>
                                <p>FULL-TIME / REMOTE</p>
                            </div>
                        </li>
                        <li>
                            <div class="link-box">
                                <a href="<?php echo get_option("siteurl"); ?>/single-career/"></a>
                            </div>
                            <div class="inner-text">
                                <h6>4</h6>
                                <h3>UI/UX Designer</h3>
                                <p>FULL-TIME / REMOTE</p>
                            </div>
                        </li>
                        <li>
                            <div class="link-box">
                                <a href="<?php echo get_option("siteurl"); ?>/single-career/"></a>
                            </div>
                            <div class="inner-text">
                                <h6>5</h6>
                                <h3>Sr. Front-end Developer</h3>
                                <p>FULL-TIME / REMOTE</p>
                            </div>
                        </li>
                        -->
                    </ul>
                    <div class="apply-anyway">
                        <p>HAVEN’T FOUND A SUITABLE POSITION</p>
                        <h2>
                            Apply anyway. We are always looking
                            for talented people to join our team
                        </h2>
                        <a href="<?php echo get_option("siteurl"); ?>/contact/" class="btn hero-button">
                            <span>Contact Us</span>
                            <i class="fa fa-arrow-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- career-feature section -->
    <section>
        <div class="career-feature">
            <div class="container">
                <div class="title-section">
                    <h2 class="section-title">
                       More Than Just A Team
                    </h2>
                    <p class="section-para">
                       iBOS is more than just an IT Firm. It’s been created as a community of creative minds. The company views its employees as partners and works together as a team to serve its clients.
                    </p>
                </div>
                <div class="career-feature-content">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-career-feature">
                                <div class="single-career-feature-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/remote-work.svg" alt="iBOS">
                                </div>
                                <div class="single-career-feature-txt">
                                    <h2>People-centric</h2>
                                    <p>
                                       iBOS is a company where people are given the most importance. It’s believed that satisfied people make successful organizations.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-career-feature">
                                <div class="single-career-feature-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/mentoring.svg" alt="iBOS">
                                </div>
                                <div class="single-career-feature-txt">
                                    <h2>Agility</h2>
                                    <p>
                                       Agility is said to be one of the most powerful virtues that iBOS has. Communication and high synchronisation among the team members result in outcomes. 
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-career-feature">
                                <div class="single-career-feature-img">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/fast.svg" alt="iBOS">
                                </div>
                                <div class="single-career-feature-txt">
                                    <h2>Collaboration</h2>
                                    <p>
                                        People here at iBOS collaborate to solve problems together, achieve goals, and grow as persons. You will find your productivity skyrocketing as a part of the team over here!
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    
    <!-- internship-career section -->
    <section>
        <div class="internship-career-section">
            <div class="container">
                <div class="internship-career-section-content">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="single-internship-career-wrapper">
                                <div class="single-internship-career-txt">
                                    <h3>Internship Oppurtunities</h3>
                                    <p>
                                        We are here to hear from you about your business purpose and help you with
                                        proper guidence.
                                    </p>
                                    <div>
                                        <a href="#" class="btn hero-button btn-apply">
                                            Apply Now
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="single-internship-career-img">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/career/02.png" alt="iBOS">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- career-faq section -->
    <section>
        <div class="career-faq-section">
            <div class="container">
                <div class="title-section">
                    <h2 class="section-title">
                        FAQ: Have Questions in Mind? Just Ask!
                    </h2>
                    <p class="section-para">
                      Some of your questions are answered here, see if you can find yours.
                    </p>
                </div>
                <div class="career-faq-content">
                    <div class="single-why-choose-feature-accordion">
                        <div class="accordion">
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapseOne"
                                                aria-expanded="true" aria-controls="collapseOne">
                                                <span>
                                                 Can I apply for more than one position at the same time?
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" data-parent="#accordion" class="panel-collapse collapse show"
                                        role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <p class="welcome-para">
                                               Ans. Of course! Feel free to apply for all the openings you see yourself fit for.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapseTwo"
                                                aria-expanded="true" aria-controls="collapseTwo">
                                                <span>
                                                   How can I prepare for any position at iBOS?
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" data-parent="#accordion" class="panel-collapse collapse"
                                        role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">
                                            <p class="welcome-para">
                                               Ans. We prefer you start preparing yourself from university. Having said that, learning has no age and you can start now as well. Reach out to us whenever you feel you’re ready.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapseThree"
                                                aria-expanded="true" aria-controls="collapseThree">
                                                <span>
                                                   How should I submit a resume?
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" data-parent="#accordion" class="panel-collapse collapse"
                                        role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="welcome-para">
                                                Ans. Mail your CV or resume to us at our email address and we’ll have a look!
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapseFour"
                                                aria-expanded="true" aria-controls="collapseFour">
                                                <span>
                                                 Do you offer entry-level positions?
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFour" data-parent="#accordion" class="panel-collapse collapse"
                                        role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="welcome-para">
                                               Ans. We offer a wide range of positions from entry level to senior level. We welcome innovative and enthusiastic minds of every age.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapseFive"
                                                aria-expanded="true" aria-controls="collapseFive">
                                                <span>
                                                 Do you offer part-time positions?
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseFive" data-parent="#accordion" class="panel-collapse collapse"
                                        role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="welcome-para">
                                             Ans. Most positions are full-time, but don’t let that stop you from applying.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" href="#collapseSix"
                                                aria-expanded="true" aria-controls="collapseSix">
                                                <span>
                                                 Are work schedules flexible here?
                                                </span>
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseSix" data-parent="#accordion" class="panel-collapse collapse"
                                        role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">
                                            <p class="welcome-para">
                                                Ans. Not really. We work from 9am-6pm six days a week.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>