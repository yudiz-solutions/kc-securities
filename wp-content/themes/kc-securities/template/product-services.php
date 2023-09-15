<?php

/**
 * Template Name: Product & Services Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Product & Services section start --------------------------------->
<section class="product-services-main custom-padding common-star-shape m-0">
    <div class="container">
        <div class="row g-4">
            <?php 
                    $service_details = get_field('service_details');
                    if(isset($service_details) && !empty($service_details)){
                        foreach($service_details as $service_detail){
                            $service_icon = $service_detail['service_icon'];
                            $service_title = $service_detail['service_title'];
                            $service_content = $service_detail['service_content'];
                            $service_button_link = $service_detail['service_button_link'];
                            ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="common-box">
                                    <div class="common-box-img">
                                        <?php if(isset($service_icon) && !empty($service_icon)){ ?>
                                                <span>
                                                    <img src="<?php echo $service_icon['url'];?>" alt="<?php echo $service_icon['alt'];?>">
                                                    <img src="<?php echo $service_icon['url'];?>" alt="<?php echo $service_icon['alt'];?>">
                                                </span>
                                        <?php } ?>
                                    </div>
                                        <?php if(isset($service_title) && !empty($service_title)){ ?>
                                            <h6 class="title-style-6"><?php echo $service_title;?></h6>
                                        <?php } if(isset($service_content) && !empty($service_content)){ echo $service_content; }?>
                                        <?php if(isset($service_button_link) && !empty($service_button_link)){ ?>
                                            <a href="<?php echo $service_button_link['url']; ?>" class="know-btn"><?php echo $service_button_link['title']; ?></a>
                                        <?php } ?>
                                </div>
                            </div><?php 
                        }
                    } ?>        
        </div>
    </div>
</section>


<!--------------------------------- Product & Services section End --------------------------------->



<?php

get_footer();
