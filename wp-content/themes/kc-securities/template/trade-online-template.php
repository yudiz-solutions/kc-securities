<?php

/**
 * Template Name: Trade Online Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- KC iTrade Advantage start --------------------------------->
<?php $kc_itrade_title = get_field('kc_itrade_title');
       $kc_itrade_content = get_field('kc_itrade_content');
       $itrade_app_title = get_field('itrade_app_title');
       $google_details = get_field('google_details');
       $kc_itrade_image = get_field('kc_itrade_image'); 
?>
<section class="kc-itrade-section custom-padding bg-2 m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-7 align-self-center">
                <div class="kc-trade-conten-part">
                    <?php if(isset($kc_itrade_title) && !empty($kc_itrade_title)){ ?>
                        <h2 class="title-style-2"><?php echo $kc_itrade_title;?></h2>
                    <?php } ?>
                    <div class="kc-point custom-point">
                        <?php if(isset($kc_itrade_content) && !empty($kc_itrade_content)){ echo $kc_itrade_content; }?>
                    </div>
                    <div class="kc-tade-app-content">
                        <?php if(isset($itrade_app_title) && !empty($itrade_app_title)){ ?>
                        <p><?php echo $itrade_app_title;?></p>
                        <?php } ?>
                        <div class="kc-tade-app-content-image">
                            <?php if(isset($google_details) && !empty($google_details)){
                                    foreach($google_details as $google_detail){
                                        $google_image = $google_detail['google_play_image'];
                                        $google_link = $google_detail['link'];
                                        $new_target = ($google_link['target'] == "_blank") ? "target='_blank'" : "";

                                        if(isset($google_image) && !empty($google_image)){
                                ?>
                                <a href="<?php if(isset($google_link) && !empty($google_link)){echo $google_link['url']; }?>" <?php echo $new_target; ?> class="kc-tade-app-images">
                                    <img src="<?php echo $google_image['url'];?>" alt="<?php echo $google_image['alt'];?>">
                                </a>
                            <?php } } } ?>
                        
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <?php if(isset($kc_itrade_image) && !empty($kc_itrade_image)){ ?>
                    <div class="kc-trade-image">
                        <img src="<?php echo $kc_itrade_image['url'];?>" alt="<?php echo $kc_itrade_image['alt'];?>">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- KC iTrade Advantage End --------------------------------->

<!--------------------------------- KC iTrade Advantage start --------------------------------->
<?php $kc_internet_title = get_field('kc_internet_title');
       $kc_internet_content = get_field('kc_internet_content');
       $kc_internet_image = get_field('kc_internet_image');
      
?>
<section class="kc-itrade-section kc-laptop-tarade-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
             <div class="col-lg-5 order-lg-1 order-2">
                 <?php if(isset($kc_internet_image) && !empty($kc_internet_image)){ ?>
                    <div class="kc-trade-image kc-trade-laptop">
                        <img src="<?php echo $kc_internet_image['url'];?>" alt="<?php echo $kc_internet_image['alt'];?>">
                    </div>
                <?php } ?>
            </div>
            <div class="col-lg-7 align-self-center order-lg-2 order-1">
                <div class="kc-trade-conten-part">
                    <?php if(isset($kc_internet_title) && !empty($kc_internet_title)){ ?>
                        <h2 class="title-style-2"><?php echo $kc_internet_title;?></h2>
                    <?php } ?>
                    <div class="kc-point custom-point">
                        <?php if(isset($kc_internet_content) && !empty($kc_internet_content)){ echo $kc_internet_content; }?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- KC iTrade Advantage End --------------------------------->


<?php

get_footer();
