<?php

/**
 * Template Name: Home Page template
 */

get_header();
?>

<!--------------------------------- Banner Main Start --------------------------------->
<?php $banner_details = get_field('banner_details');?>
<section class="banner-section m-0">
    <?php if(isset($banner_details) && !empty($banner_details)){
            foreach($banner_details as $banner_detail){
                $banner_image = $banner_detail['banner_image'];
                $banner_title = $banner_detail['banner_title'];
                $banner_content = $banner_detail['banner_content'];
                $banner_button_link = $banner_detail['banner_button_link'];
                ?>
                <div>
                    <div class="banner-inner"  style="background-image:url(<?php if(isset($banner_image) && !empty($banner_image)){ echo $banner_image['url']; }?>)">
                        <div class="container">
                            <div class="banner-caption wow fadeInUp">
                                <?php if(isset($banner_title) && !empty($banner_title)){ ?>
                                <h1 class="title-style-1"><?php echo $banner_title;?></h1>
                                <?php } if(isset($banner_content) && !empty($banner_content)){ echo $banner_content; } 
                                 if(isset($banner_button_link) && !empty($banner_button_link)){ ?>
                                <a href="<?php echo $banner_button_link['url'];?>" class="primary-button"><?php echo $banner_button_link['title'];?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div><?php
            }
        } ?>
</section>
<!--------------------------------- Banner Main End --------------------------------->

<!--------------------------------- Products & Services Start --------------------------------->
<section class="product-services-section custom-padding common-star-shape m-0 ">
    <div class="container">
        <?php $products_services_title = get_field('products_services_title');
            if(isset($products_services_title) && !empty($products_services_title)){ ?>
                <div class="title-main text-center">
                    <h2 class="title-style-2 wow fadeInUp"><?php echo $products_services_title;?></h2>
                </div>
            <?php } ?>
        <div class="product-wrapper wow fadeInUp">
            <?php 
            $service_details = get_field('service_details');
            if(isset($service_details) && !empty($service_details)){
                foreach($service_details as $service_detail){
                    $service_icon = $service_detail['service_icon'];
                    $service_title = $service_detail['service_title'];
                    $service_content = $service_detail['service_content'];
                    $service_button_link = $service_detail['service_button_link'];
                    ?>
                    <div>
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
        <div class="slider-arrow-part">
			<div class="slick-prev slick-arrow"></div>
			<div class="slick-next slick-arrow"></div>
		</div>
      
    </div>
</section>


<!--------------------------------- Products & Services End --------------------------------->

<!--------------------------------- About KC Securities Start --------------------------------->
<section class="about-section custom-padding-bottom m-0">
    <div class="container">
        <div class="about-wrapper bg-1 wow fadeInUp">
            <div class="row g-0">
                <div class="col-lg-7 align-self-center">
                    <div class="about-content-wrapper">
                        <?php $about_title = get_field('about_title');
                              $about_content = get_field('about_content');
                              $about_button_link = get_field('about_button_link');
                              $about_image = get_field('about_image');
                        ?>
                        <?php if(isset($about_title) && !empty($about_title)){ ?>
                        <h2 class="title-style-2"><?php echo $about_title;?></h2>
                        <?php } if(isset($about_content) && !empty($about_content)){ ?>
                        <div class="about-content">
                            <?php echo $about_content;?>
                        </div>
                        <?php } if(isset($about_button_link) && !empty($about_button_link)){ ?>
                        <a href="<?php echo $about_button_link['url'];?>" class="know-btn"><?php echo $about_button_link['title'];?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="col-lg-5">
                    <?php if(isset($about_image) && !empty($about_image)){ ?>
                        <div class="about-images">
                            <img src="<?php echo $about_image['url'];?>" alt="<?php echo $about_image['alt'];?>">
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- About KC Securities End --------------------------------->

<!--------------------------------- Investor Alerts and Compliance Start --------------------------------->
<section class="investor-alerts-section custom-padding m-0">
    <div class="container">
        <?php $investor_main_title = get_field('investor_main_title');
            if(isset($investor_main_title) && !empty($investor_main_title)){ ?>
                <div class="title-main text-center">
                    <h2 class="title-style-2 wow fadeInUp"><?php echo $investor_main_title;?></h2>
                </div><?php 
            } ?>    
      
        <div class="row g-4 wow fadeInUp">
            <?php 
            $investor_details = get_field('investor_details');
            if(isset($investor_details) && !empty($investor_details)){
                foreach($investor_details as $investor_detail){
                    $investor_icon = $investor_detail['investor_icon'];
                    $investor_title = $investor_detail['investor_title'];
                    $investor_content = $investor_detail['investor_content'];
                    $investor_button_link = $investor_detail['investor_button_link'];
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="common-box">
                            <div class="common-box-img">
                                <?php if(isset($investor_icon) && !empty($investor_icon)){ ?>
                                    <span>
                                        <img src="<?php echo $investor_icon['url'];?>" alt="<?php echo $investor_icon['alt'];?>">
                                        <img src="<?php echo $investor_icon['url'];?>" alt="<?php echo $investor_icon['alt'];?>">
                                    </span>
                                <?php } ?>
                            </div>
                            <?php if(isset($investor_title) && !empty($investor_title)){ ?>
                            <h6 class="title-style-6"><?php echo $investor_title;?></h6>
                            <?php } if(isset($investor_content) && !empty($investor_content)){ echo $investor_content; }?>
                            <?php if(isset($investor_button_link) && !empty($investor_button_link)){ ?>
                            <a href="<?php echo $investor_button_link['url'];?>" class="know-btn"><?php echo $investor_button_link['title'];?></a>
                            <?php } ?>
                        </div>
                    </div><?php 
                }
            } ?>        
        </div>
    </div>
</section>
<!--------------------------------- Investor Alerts and Compliance End --------------------------------->

<!--------------------------------- Filing Complaints on Scores Start --------------------------------->
<section class="filing-complaints-section custom-padding bg-1 m-0">
    <div class="container">
        <div class="title-main wow fadeInUp">
            <?php $filing_main_title = get_field('filing_main_title');
                 $register_button_link = get_field('register_button_link');
            if(isset($filing_main_title) && !empty($filing_main_title)){ ?>
            <h2 class="title-style-2"><?php echo $filing_main_title;?></h2>
            <?php } if(isset($register_button_link) && !empty($register_button_link)){ ?>
            <a href="<?php echo $register_button_link['url'];?>" class="primary-button"><?php echo $register_button_link['title'];?></a>
            <?php } ?>
        </div>
        <div class="filing-wrapper wow fadeInUp">
            <?php 
            $filing_details = get_field('filing_details');
            if(isset($filing_details) && !empty($filing_details)){
                foreach($filing_details as $filing_detail){
                    $filing_icon = $filing_detail['filing_icon'];
                    $filing_title = $filing_detail['filing_title'];
                    ?>
                    <div class="filing-box">
                        <div class="filing-img">
                            <?php if(isset($filing_icon) && !empty($filing_icon)){ ?>
                                    <span>
                                        <img src="<?php echo $filing_icon['url'];?>" alt="<?php echo $filing_icon['alt'];?>">
                                        <img src="<?php echo $filing_icon['url'];?>" alt="<?php echo $filing_icon['alt'];?>">
                                    </span>
                            <?php } ?>
                        </div>
                        <?php if(isset($filing_title) && !empty($filing_title)){?> 
                            <p><?php echo $filing_title;?></p>
                        <?php } ?>
                    </div><?php 
                }
            } ?>        
          
        </div>
        <div class="filing-button d-lg-none mt-4 text-center pt-2">
            <?php if(isset($register_button_link) && !empty($register_button_link)){ ?>
            <a href="<?php echo $register_button_link['url'];?>" class="primary-button"><?php echo $register_button_link['title'];?></a>
            <?php } ?>
        </div>
    </div>
</section>
<!--------------------------------- Filing Complaints on Scores End --------------------------------->

<!--------------------------------- Trade Online With KC Securities Start --------------------------------->
<?php $trade_title = get_field('trade_title');
      $trade_content = get_field('trade_content');
?>            
<section class="trade-section custom-padding m-0">
    <div class="container">
        <div class="title-main text-center wow fadeInUp">
            <?php if(isset($trade_title) && !empty($trade_title)){ ?>
            <h2 class="title-style-2"><?php echo $trade_title;?></h2>
            <?php } if(isset($trade_content) && !empty($trade_content)){ echo $trade_content; }?>
        </div>
        <div class="row g-4 wow fadeInUp">
            <?php 
            $trade_details = get_field('trade_detail');
            if(isset($trade_details) && !empty($trade_details)){
                foreach($trade_details as $trade_detail){
                    $trade_image = $trade_detail['trade_image'];
                    $trade_title = $trade_detail['trade_title'];
                    $trade_button_link = $trade_detail['trade_button_link'];
                    ?>
                    <div class="col-lg-6 col-md-6">
                        <div class="trade-wrapper-box">
                            <?php if(isset($trade_image) && !empty($trade_image)){ ?>
                                <div class="trade-box-img">
                                    <img src="<?php echo $trade_image['url'];?>" alt="<?php echo $trade_image['alt'];?>">
                                </div>
                            <?php } ?>
                            <div class="trade-content">
                                <?php if(isset($trade_title) && !empty($trade_title)){ ?>
                                    <h6 class="title-style-6"><?php echo $trade_title;?></h6>
                                <?php } if(isset($trade_button_link) && !empty($trade_button_link)){ ?>
                                    <a href="<?php echo $trade_button_link['url'];?>" class="primary-button"><?php echo $trade_button_link['title'];?></a>
                                <?php } ?>
                            </div>
                        </div>
                    </div><?php 
                }
            } ?>        
        </div>
    </div>
</section>
<!--------------------------------- Trade Online With KC Securities End --------------------------------->

<!--------------------------------- Common-part Start --------------------------------->
<section class="common-card bg-1 m-0">
    <div class="container">
        <div class="common-card-wrapper wow fadeInUp">
            <?php 
            $common_part_details = get_field('common_part_details');
            if(isset($common_part_details) && !empty($common_part_details)){
                foreach($common_part_details as $common_part_detail){
                    $common_part_icon = $common_part_detail['common_part_icon'];
                    $common_part_title = $common_part_detail['common_part_title'];
                    $common_part_button_link = $common_part_detail['common_part_button_link'];
                    ?>
                    <div>
                        <a href="<?php if(isset($common_part_button_link) && !empty($common_part_button_link)){ echo $common_part_button_link['url']; }?>" class="common-filter">
                            <div class="common-filter-img">
                                <?php if(isset($common_part_icon) && !empty($common_part_icon)){ ?>
                                        <span>
                                            <img src="<?php echo $common_part_icon['url'];?>" alt="<?php echo $common_part_icon['alt'];?>">
                                            <img src="<?php echo $common_part_icon['url'];?>" alt="<?php echo $common_part_icon['alt'];?>">
                                        </span>
                                <?php } ?>
                            </div>
                            <?php if(isset($common_part_title) && !empty($common_part_title)){ ?>
                                <p><?php echo $common_part_title;?></p>
                            <?php } ?>
                        </a>
                    </div><?php 
                }
            } ?>        
        </div>
    </div>
</section>
<!--------------------------------- Common-part End --------------------------------->



<?php

get_footer();
