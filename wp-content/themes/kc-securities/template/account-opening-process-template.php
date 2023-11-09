<?php

/**
 * Template Name: Account Opening Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Account Opening Part Start --------------------------------->
<section class="investor-alerts-section custom-padding m-0">
    <div class="container">
          <div class="row g-4 wow fadeInUp">
            <?php 
            $account_opening_process_details = get_field('account_opening_process_details');
            if(isset($account_opening_process_details) && !empty($account_opening_process_details)){
                foreach($account_opening_process_details as $account_opening_process_detail){
                    $account_image = $account_opening_process_detail['account_image'];
                    $account_title = $account_opening_process_detail['account_title'];
                    $account_link = $account_opening_process_detail['account_link'];
                    if($account_link){
                         $account_new_button = ($account_link['target'] == '_blank') ? "target='_blank'" : "";
                    }
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="common-box">
                            <div class="common-box-img">
                                <?php if(isset($account_image) && !empty($account_image)){ ?>
                                    <span>
                                        <img src="<?php echo $account_image['url'];?>" alt="<?php echo $account_image['alt'];?>">
                                        <img src="<?php echo $account_image['url'];?>" alt="<?php echo $account_image['alt'];?>">
                                    </span>
                                <?php } ?>
                            </div>
                            <?php if(isset($account_title) && !empty($account_title)){ ?>
                                <h6 class="title-style-6"><?php echo $account_title;?></h6>
                            <?php } ?>
                            <?php if(isset($account_link) && !empty($account_link)){ ?>
                            <a href="<?php echo $account_link['url'];?>" <?php echo $account_new_button;?> class="know-btn"><?php echo $account_link['title'];?></a>
                            <?php } ?>
                        </div>
                    </div><?php 
                }
            } ?>        
        </div>
       
    </div>
</section>
<!--------------------------------- Account Opening Part End --------------------------------->


<?php

get_footer();