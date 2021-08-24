


<?php get_header(); ?>


<?php 
    $pages=get_the_title();
    //echo $pages;
        if ($pages == 'The Industry Where Automation Boosts Financial Strength and Flexibility') {
            get_template_part('dynamic/all_industry/fintech');
        }
        else if($pages=='The Industries That Needs Automation to Flourish'){
           get_template_part('dynamic/all_industry/healthcare');
        }
         else if($pages=='A Sector Where Automation Take the Growth at Its Peak'){
          get_template_part('dynamic/all_industry/automotive');
        }
         else if($pages=='RMG, The Sector That Lagging Behind in The Race Of Automation'){
           get_template_part('dynamic/all_industry/rmg');
        }
         else if($pages=='Manage Every Retail Business Segment With Total Automation'){
            get_template_part('dynamic/all_industry/retail');
        }
         else if($pages=='Reestablish Chaotic Manufacturing Systems into Organized Ones'){
            get_template_part('dynamic/all_industry/manufacturing');
        }
         else if($pages=='The Sector Which Needs Automation More Than Ever'){
          get_template_part('dynamic/all_industry/e-commerce');
        }
        else if($pages=='Real-time Information That Improve Overall Functionality'){
                get_template_part('dynamic/all_industry/sme');
            }
             else if($pages=='Open the Door to the Digitized Education System'){
                get_template_part('dynamic/all_industry/education');
            }
             else if($pages=='Industry Where Automation Becoming Unavoidable'){
                get_template_part('dynamic/all_industry/fmcg');
            }
             else if($pages=='Lift Productivity and Overcome Challenges of Startups'){
                get_template_part('dynamic/all_industry/startup');
            }
             else if($pages=='Put Planning and Execution On the Same Page'){
                get_template_part('dynamic/all_industry/real_estate');
            }
 ?>
<?php get_footer();?>