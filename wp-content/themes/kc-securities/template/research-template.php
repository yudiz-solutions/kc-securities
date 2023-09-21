<?php

/**
 * Template Name: Research Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Help market section start --------------------------------->
<?php
 $research_title = get_field('research_title');
 $research_content = get_field('research_content');
 $research_image = get_field('research_image');
?>
<section class="help-market-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 align-self-center">
                <div class="help-content">
                    <?php if(isset($research_title) && !empty($research_title)){ ?>
                    <h2 class="title-style-2"><?php echo $research_title;?></h2>
                    <?php } if(isset($research_content) && !empty($research_content)){ echo $research_content;} ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if(isset($research_image) && !empty($research_image)){ ?>
                    <div class="help-image">
                        <img src="<?php echo $research_image['url'];?>" alt="<?php echo $research_image['alt'];?>">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Help market section End --------------------------------->

<!--------------------------------- Get in Touch section start --------------------------------->
<?php
 $get_in_touch_title = get_field('get_in_touch_title');   
 $authorize_details = get_field('authorize_details');
?>
<section class="get-in-touch-section custom-padding m-0 bg-1">
    <div class="container">
        <div class="row justify-content-center wow fadeInUp">
            <div class="col-lg-8">
                <?php if(isset($get_in_touch_title) && !empty($get_in_touch_title)){ ?>
                    <div class="title-main text-center">
                        <h2 class="title-style-2"><?php echo $get_in_touch_title;?></h2>
                    </div>
                <?php } ?>
                <div class="row g-4">
                    <?php if(isset($authorize_details) && !empty($authorize_details)){
                            foreach ($authorize_details as $key => $value) {
                                 $authorize_image = $value['authorize_image'];
                                 $authorize_title = $value['authorize_title'];
                                $authorize_content = $value['authorize_content'];
                                ?>
                                <div class="col-lg-6">
                                   <div class="get-box">
                                    <?php if(isset($authorize_image) && !empty($authorize_image)){ ?>
                                     <img src="<?php echo $authorize_image['url'];?>" alt="<?php echo $authorize_image['alt'];?>"><?php
                                    } if(isset($authorize_title) && !empty($authorize_title)){ ?>
                                         <p class="p-title"><?php echo $authorize_title;?></p>
                                 <?php } if(isset($authorize_content) && !empty($authorize_content)){ ?>
                                        <?php if($authorize_content == 'surya.nayak@kcsecurities.com'){ ?>
                                            <p><a href="mailto:<?php echo $authorize_content;?>"><?php echo $authorize_content;?></a></p>
                                       <?php  } else{ ?>
                                        <p><?php echo $authorize_content;?></p>
                                      <?php  } ?>
                                 <?php } ?>
                                   </div>
                                </div><?php
                            } 
                        } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Get in Touch section End --------------------------------->

<!--------------------------------- Month section Start --------------------------------->
<section class="month-content-section custom-padding m-0">
    <div class="container">
        <div class="month-wrapper wow fadeInUp">
            <div class="month-date">
                <div class="month-selecet">
                    <div class="form-grp custom-select">
                        <select id="month">
                            <option value="hide">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="Octomber">Octomber</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>               
                    </div>
                </div>
                <div class="month-selecet">
                    <div class="form-grp custom-select ">
                        <select id="year">
                            <option value="hide">Select Year</option>
                            <?php $cur_year = date('Y');
                            for($year = ($cur_year-10); $year <= ($cur_year+10); $year++) {
                                if ($year == $cur_year) { ?>
                                    <option value="<?php echo $year;?>" selected="selected"><?php echo $year;?></option>
                                <?php } else{
                                    echo '<option value="'.$year.'">'.$year.'</option>';
                                } 
                            }?>
                        </select>               
                    </div>
                </div>
                <div class="month-selecet">
                    <a class="primary-button" id="research_view">View</a>
                </div>
            </div>
            <div class="month-tabing custom-tabing">
               
                <?php
                    $args_research = array(
                        'post_type' => 'research',
                        'post_status' => 'publish',
                         'posts_per_page' => -1,
                         'order' => 'DESC',
                   
                     );
                 
                     $arr_posts_research = new WP_Query($args_research);
                    
                         $postdata = array();
                         if ($arr_posts_research->have_posts()) {
                             
                             $j=1;
                             while ($arr_posts_research->have_posts()) : $arr_posts_research->the_post();
                                 $terms = get_the_terms( $arr_posts_research->ID, 'research-category' );
                                 
                                 if( !empty($terms)){
                                     foreach( $terms as $key => $term){                        
                                         $postdata[$term->term_id][] = get_the_ID();
                                     }
                                 }                 
                             endwhile; 
                         }else{
                                echo "not record found";
                         }
                         if( !empty($postdata)){
                            $i = 1;
                            echo '<ul class="tabs">';
                            foreach($postdata as $term_id => $post){
                                    $term  = get_term( $term_id );                    
                                ?>
                                <li class="<?php echo ($i == 1 ) ? 'active' : '' ?> <?php echo $term->name ?>" rel="tab<?php echo $i ?>"><button class="nav-link-tab"><?php echo $term->name ?></button></li>
                            <?php 
                                $i++;
                            }
                            echo '</ul>';
                        }
                  
                    if( !empty($postdata)){ 
                        $j = 1;
                        ?>    
                        <div class="tab_container research_post">
                            <?php foreach($postdata as $term_id => $post_ids ){  
                                $term  = get_term( $term_id );             
                                ?>
                                <button class="<?php echo ($j == 1 ) ? 'd_active' : '' ?> tab_drawer_heading" rel="tab<?php echo $j ?>"><?php echo $term->name ?> </button>
                                <div id="tab<?php echo $j ?>" class="tab_content" >
                                <?php
                                    foreach( $post_ids as $post_id){
                                    $post = get_post( $post_id );
                                    $style = '';
                                    if( $j == 1 ){
                                        $style = 'style="display:block"';
                                    }
                                ?>
                                <div class="date-content-wrapper">
                                    <div class="date-content">
                                        <h6><?php echo $post->post_title;?></strong></h6>
                                        <p><?php echo $post->post_content;?></p> 
                                    </div>
                                </div>
                        
                            <?php } ?>
                        </div>
                    <?php $j++; } ?>
                    </div>
                    <?php }  ?>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Month section End --------------------------------->
<?php

get_footer();
