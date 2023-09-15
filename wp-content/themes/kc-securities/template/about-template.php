<?php
/**
 * Template Name: About Us Page template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- About Us inner page Start --------------------------------->
<?php   $about_title = get_field('about_title');
        $about_content = get_field('about_content');
        $about_inner_image = get_field('about_image');
?>
<section class="about-subpage custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 align-self-center">
                <div class="about-sub-left">
                    <?php if(isset($about_title) && !empty($about_title)){ ?>
                        <h2 class="title-style-2"><?php echo $about_title;?></h2>
                    <?php } if(isset($about_content) && !empty($about_content)){ echo $about_content;}?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php if(isset($about_inner_image) && !empty($about_inner_image)){ ?>
                    <div class="about-sub-images">
                        <img src="<?php echo $about_inner_image['url'];?>" alt="<?php echo $about_inner_image['alt'];?>">
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- About Us inner page End --------------------------------->



<!--------------------------------- About Us inner page Start --------------------------------->
<section class="vision-mission-section common-star-shape custom-padding m-0">
    <div class="container">
        <div class="vision-wrapper custom-tabing wow fadeInUp">
            <?php $vision_mission_details = get_field('vision_mission_details'); ?>
            <ul class="tabs">
                <?php
                $i=1;
                 if(isset($vision_mission_details) && !empty($vision_mission_details)){ 
                        foreach($vision_mission_details as $vision_mission_detail){
                            $tab_title = $vision_mission_detail['tab_title'];?>
                            <li class="<?php if($i== 1){ echo 'active'; } ?>" rel="tab<?php echo $i;?>"><button class="nav-link-tab"><?php if(isset($tab_title) && !empty($tab_title)){ echo $tab_title; }?></button></li><?php
                            $i++;
                        } 
                    } ?>
                <!-- <li rel="tab2"><button class="nav-link-tab">Depository Participant</button></li>
                <li rel="tab3"><button class="nav-link-tab">Research Analyst</button></li> -->
            </ul>
            <div class="tab_container">
            <?php
                $i=1;
                 if(isset($vision_mission_details) && !empty($vision_mission_details)){ 
                        foreach($vision_mission_details as $vision_mission_detail){
                            $tab_title = $vision_mission_detail['tab_title'];?>
                            <button  class="d_active tab_drawer_heading" rel="tab<?php echo $i;?>"><?php if(isset($tab_title) && !empty($tab_title)){ echo $tab_title; }?></button>
                                <div id="tab<?php echo $i;?>" class="tab_content">
                                    <?php  
                                        $tab_sub_detail = $vision_mission_detail['tab_sub_detail']; ?>
                                        
                                            <div class="row g-4"><?php
                                            foreach($tab_sub_detail as $value){
                                                $vision_icon = $value['vision_icon'];
                                                $vision_title = $value['vision_title'];
                                                $vision_content = $value['vision_content'];
                                                ?>
                                                    <div class="col-lg-6">
                                                        <div class="mission-box">
                                                            <div class="mission-box-img">
                                                                <?php if(isset($vision_icon) && !empty($vision_icon)){ ?>
                                                                    <span>
                                                                        <img src="<?php echo $vision_icon['url'];?>" alt="<?php echo $vision_icon['alt'];?>">
                                                                    </span>
                                                                <?php } ?>
                                                            </div>
                                                            <?php if(isset($vision_title) && !empty($vision_title)){ ?>
                                                            <h6 class="title-style-6"><?php echo $vision_title;?></h6>
                                                            <?php } if(isset($vision_content) && !empty($vision_content)){ echo $vision_content; }?>
                                                            
                                                        </div>
                                                    </div>
                                                    <?php } ?>
                                                </div>
                                            </div><?php 
                                        
                                $i++;
                        }
                    } ?>

                
               
            <!-- #tab4 --> 
            </div>
            <!-- .tab_container -->
            </div>
        </div>
    </div>
</section>

<!--------------------------------- About Us inner page End --------------------------------->


<?php

get_footer();
