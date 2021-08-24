
<?php get_template_part('sections/components/archive_header'); ?>

    <?php 
        $pages=get_the_title();
        //echo $pages;
            if ($pages == '4 Major Problems A HRM Software Can Fix') {
                get_template_part('dynamic/all_blog/one');
            }
            else if($pages=='Why Should SMEs Start Taking ERP Solutions Seriously?'){
               get_template_part('dynamic/all_blog/two');
            }
             else if($pages=='Think Before You Choose Your Billing/Invoicing Solution'){
              get_template_part('dynamic/all_blog/three');
            }
             else if($pages=='What Makes a Software Company Worth Hiring'){
               get_template_part('dynamic/all_blog/four');
            }
             else if($pages=='What Can Make An ERP Software Effective for a Business?'){
                get_template_part('dynamic/all_blog/five');
            }
             else if($pages=='How A Software Can Help with VAT And Tax Issues of An Organization?'){
                get_template_part('dynamic/all_blog/six');
            }
             else if($pages=='Why Are Businesses Loving Cloud-Based Solutions?'){
              get_template_part('dynamic/all_blog/seven');
            }
            else if($pages=='How the Right Mobile App Changes A Business?'){
                    get_template_part('dynamic/all_blog/eight');
                }
            else if($pages=='Do You Need Accounting Software?'){
                    get_template_part('dynamic/all_blog/nine');
                }
            else if($pages=='How Pricing is Connected to Brand Loyalty'){
                    get_template_part('dynamic/all_blog/ten');
                }
                     
     ?>

<?php get_footer();?>








    