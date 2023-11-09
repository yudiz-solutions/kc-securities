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


<!--------------------------------- Board of Directors Start --------------------------------->
<?php 
    $board_of_directors_title = get_field('board_of_directors_title');
?>
<section class="directors-section bg-2 custom-padding m-0">
    <div class="container">
        <?php if(isset($board_of_directors_title) && !empty($board_of_directors_title)){ ?>
        <div class="title-main text-center wow fadeInUp">
            <h2 class="title-style-2"><?php echo $board_of_directors_title;?></h2>
        </div>
        <?php } ?>
        <div class="row g-4 wow fadeInUp">
            <?php  $directors_details = get_field('directors_details');
                    if(isset($directors_details) && !empty($directors_details)){
                        $i = 1;
                        foreach($directors_details as $directors_detail){
                            $directors_name = $directors_detail['directors_name'];
                            $directors_content = $directors_detail['directors_content'];
                            $directors_postion = $directors_detail['directors_postion'];
                            ?>
                                <div class="col-lg-4 col-md-6">
                                    <a href="#" class="directors-box" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $i;?>">
                                        <?php if(isset($directors_name) && !empty($directors_name)){ ?>
                                            <div class="directors-name">
                                                <p><?php echo $directors_name;?></p>
                                            </div><?php 
                                        }if(isset($directors_content) && !empty($directors_content)){echo $directors_content; }?>
                                        <?php if(isset($directors_postion) && !empty($directors_postion)){ ?>
                                            <div class="directors-postion">
                                                <p><?php echo $directors_postion;?></p>
                                            </div>
                                        <?php } ?>
                                    </a>
                                </div><?php
                       $i++; }
                    } ?>           
        </div>
    </div>
</section>
<!--------------------------------- Board of Directors End --------------------------------->


<!--------------------------------- The Executive Team Start --------------------------------->
<?php 
    $executive_title = get_field('executive_title');
?>
<section class="directors-section custom-padding m-0">
    <div class="container">
        <?php if(isset($executive_title) && !empty($executive_title)){ ?>
            <div class="title-main text-center wow fadeInUp">
                <h2 class="title-style-2"><?php echo $executive_title;?></h2>
            </div>
        <?php } ?>
        <div class="row g-4 wow fadeInUp">
            <?php  $executive_team_details = get_field('executive_team_details');
                    if(isset($executive_team_details) && !empty($executive_team_details)){
                        $i = 1;
                        foreach($executive_team_details as $executive_team_detail){
                            $executive_directors_name = $executive_team_detail['executive_directors_name'];
                            $executive_directors_content = $executive_team_detail['executive_directors_content'];
                            $executive_directors_postion = $executive_team_detail['executive_directors_postion'];
                            ?>
                            <div class="col-lg-4 col-md-6">
                                <a href="#" class="directors-box" data-bs-toggle="modal" data-bs-target="#executiveModal<?php echo $i;?>">
                                    <?php if(isset($directors_name) && !empty($directors_name)){ ?>
                                        <div class="directors-name">
                                            <p><?php echo $executive_directors_name;?></p>
                                        </div>
                                    <?php } if(isset($executive_directors_content) && !empty($executive_directors_content)){echo $executive_directors_content; }?>
                                    <?php if(isset($executive_directors_postion) && !empty($executive_directors_postion)){ ?>
                                        <div class="directors-postion">
                                            <p><?php echo $executive_directors_postion;?></p>
                                        </div>
                                    <?php } ?>
                                </a>
                            </div><?php
                       $i++; }
                    } ?>        
        </div>
    </div>
</section>
<!--------------------------------- The Executive Team End --------------------------------->

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
                                                        <div class="mission-box custom-point">
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


<!-- Modal -->
<?php  $directors_details = get_field('directors_details');
        if(isset($directors_details) && !empty($directors_details)){
            $i = 1;
            foreach($directors_details as $directors_detail){
                $directors_name = $directors_detail['directors_name'];
                $directors_content = $directors_detail['directors_content'];
                $directors_postion = $directors_detail['directors_postion'];
                ?>
                <div class="modal fade directors-modal m-0" id="exampleModal-<?php echo $i;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="directors-title">
                            <?php if(isset($directors_name) && !empty($directors_name)){ ?>
                                <h6 class="title-style-6"><?php echo $directors_name;?></h6>
                            <?php } if(isset($directors_postion) && !empty($directors_postion)){ ?>
                                <p><?php echo $directors_postion;?></p>
                            <?php } ?>
                        </div>
                        <?php if(isset($directors_content) && !empty($directors_content)){ echo $directors_content;}?>
                    </div>
                    
                    </div>
                </div>
                </div><?php 
            $i++;   }
        } ?>

<!-- /**** Executive Modal Section Start */ -->
<?php $executive_team_details  = get_field('executive_team_details');
    if(isset($executive_team_details)&& !empty($executive_team_details)){ 
        $k=1;
        foreach($executive_team_details as $executive_team_detail){
            $executive_directors_name = $executive_team_detail['executive_directors_name'];
            $executive_directors_content = $executive_team_detail['executive_directors_content'];
            $executive_directors_postion = $executive_team_detail['executive_directors_postion'];
            ?>            
            <div class="modal fade directors-modal m-0" id="executiveModal<?php echo $k;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="directors-title">
                        <?php if(isset($executive_directors_name) && !empty($executive_directors_name)){ ?>
                                <h6 class="title-style-6"><?php echo $executive_directors_name;?></h6>
                        <?php } if(isset($executive_directors_postion) && !empty($executive_directors_postion)){ ?>
                        <p><?php echo $executive_directors_postion;?></p>
                        <?php } ?>
                    </div>
                    <?php if(isset($executive_directors_content) && !empty($executive_directors_content)){ echo $executive_directors_content; }?>
                </div>
                
                </div>
            </div>
            </div><?php
        $k++; }
    }?>    
<!-- /**** Executive Modal Section End */ -->
<?php

get_footer();
