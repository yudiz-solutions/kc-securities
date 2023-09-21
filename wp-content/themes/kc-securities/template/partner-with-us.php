<?php

/**
 * Template Name: Partner With Us Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->


<!--------------------------------- Authorized Persons start --------------------------------->
<?php $authorized_title = get_field('authorized_title');
      $authorized_content = get_field('authorized_content');
      $authorized_image = get_field('authorized_image');  
 ?>

<section class="authorized-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 align-self-center">
                <div class="authorized-left">
                    <?php if(isset($authorized_title) && !empty($authorized_title)){ ?>
                        <h2 class="title-style-2"><?php echo $authorized_title;?></h2>
                    <?php } if(isset($authorized_content) && !empty($authorized_content)){ echo $authorized_content; }?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if(isset($authorized_image) && !empty($authorized_image)){ ?>
                    <div class="authorized-images">
                        <img src="<?php echo $authorized_image['url'];?>" alt="<?php echo $authorized_image['alt'];?>">
                    </div><?php 
                } ?>    
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Authorized Persons End --------------------------------->

<!--------------------------------- Compliance Point section Start --------------------------------->
<?php $sebi_rules_title = get_field('sebi_rules_title');
      $sebi_details = get_field('sebi_details');
 ?>
<section class="sebi-rules-section custom-padding m-0">
    <div class="container">
        <?php if(isset($sebi_rules_title) && !empty($sebi_rules_title)){ ?>
            <div class="title-main text-center wow fadeInUp">
                <h2 class="title-style-2"><?php echo $sebi_rules_title;?></h2>
            </div>
        <?php } ?>
        <div class="sebi-rules wow fadeInUp">
            <?php if(isset($sebi_details) && !empty($sebi_details)){
                    foreach ($sebi_details as $key => $value) {
                        $sebi_content = $value['sebi_content'];
                        ?>
                        <div class="sebi-rule-point">
                         <?php if(isset($sebi_content) && !empty($sebi_content)){ echo $sebi_content; }?>    
                        </div><?php
                    }
                } ?>
        </div>
    </div>
</section>
<!--------------------------------- Compliance Point section End --------------------------------->

<!--------------------------------- Register section start --------------------------------->
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
                                        <?php if($authorize_content == 'sales@kcsecurities.com'){ ?>
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
<!--------------------------------- Register section End --------------------------------->
<?php
get_footer();
