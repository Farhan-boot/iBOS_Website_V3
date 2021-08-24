<?php get_header(); ?>


<?php 
    $pages=get_the_title();
    //echo $pages;
        if ($pages == 'iBOS HRM') {
            get_template_part('dynamic/all_product/ibos-hrm');
        }
        else if($pages=='iBOS Accounting'){
           get_template_part('dynamic/all_product/ibos-accounting');
        }
         else if($pages=='iBOS RTM'){
          get_template_part('dynamic/all_product/ibos-rtm');
        }
         else if($pages=='iBOS SME'){
           get_template_part('dynamic/all_product/ibos-sme');
        }
         else if($pages=='iBOS Enterprise'){
            get_template_part('dynamic/all_product/ibos-bms');
        }
         else if($pages=='iBOS VAT and Tax'){
            get_template_part('dynamic/all_product/ibos-vat-tax');
        }
         else if($pages=='iBOS Billing'){
          get_template_part('dynamic/all_product/ibos-billing');
        }
        else if($pages==''){
                get_template_part('dynamic/all_product/');
            }
 ?>
<?php get_footer();?>