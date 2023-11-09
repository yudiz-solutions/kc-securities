<?php

/**
 * Template Name: Depository Services Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->


<!--------------------------------- product section Start --------------------------------->
<?php $depository_content = get_field('depository_content');
$depository_service_offered = get_field('depository_service_offered');
$service_details = get_field('service_details');
?>
<section class="services-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6">
                <div class="services-content">
                    <?php if(isset($depository_content) && !empty($depository_content)){ echo $depository_content;} ?>
                    <div class="service-sub-main">
                        <?php if(isset($depository_service_offered) && !empty($depository_service_offered)){ ?>
                            <p><strong><?php echo $depository_service_offered;?></strong></p>
                        <?php } ?>
                        <?php if(isset($service_details) && !empty($service_details)){ 
                                foreach ($service_details as $key => $value) {
                                    $service_sub_title = $value['service_sub_title'];
                                    $service_sub_content = $value['service_sub_content'];
                                    ?>
                                    <div class="services-sub">
                                        <?php if(isset($service_sub_title) && !empty($service_sub_title)){ ?>
                                            <p><strong><?php echo $service_sub_title;?></strong></p>
                                        <?php } if(isset($service_sub_content) && !empty($service_sub_content)){ ?>
                                            <?php echo $service_sub_content;?>
                                    <?php } ?>
                                    </div><?php 
                                } 
                            } ?>
                    </div>
                    <?php 
                    $depository_button_link = get_field('button_link');
                    $new_button_link = ($depository_button_link['target'] == '_blank') ? "target='_blank'" : "";
                    if(isset($depository_button_link) && !empty($depository_button_link)){ ?>
               <a href="<?php echo $depository_button_link['url'];?>" <?php echo $new_button_link;?> class="primary-button mt-3"><?php echo $depository_button_link['title'];?></a>  
               <?php } ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php $service_image = get_field('service_image');
                      if(isset($service_image) && !empty($service_image)){ ?>  
                <div class="services-images depository-part">
                   <img src="<?php echo $service_image['url'];?>" alt="<?php echo $service_image['alt'];?>">
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- product section End --------------------------------->



<?php

get_footer();
