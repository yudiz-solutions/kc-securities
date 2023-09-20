<?php

/**
 * Template Name: Compliance Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Compliance Point section Start --------------------------------->
<?php 
    $compliance_point_details = get_field('compliance_point_details');
?>
<section class="compliance-point-section custom-padding m-0">
    <div class="container">
        <div class="compliance-wrapper-point wow fadeInUp">
            <?php if(isset($compliance_point_details) && !empty($compliance_point_details)){
                    foreach($compliance_point_details as $compliance_point_detail){
                        $compliance_content = $compliance_point_detail['compliance_content']; 
                        if(isset($compliance_content) && !empty($compliance_content)){ 
                            ?>
                            <div class="compliance-point-inner">
                                <?php echo $compliance_content;?>
                            </div><?php
                        }
                    }
                }?>
        </div>
    </div>
</section>
<!--------------------------------- Compliance Point section End --------------------------------->

<!--------------------------------- Disclosure of Complaints Start --------------------------------->
<?php 
    $disclosure_title = get_field('disclosure_title');
?>
<section class="disclosure-complaints custom-padding m-0 bg-2">
    <div class="container">
        <?php if(isset($disclosure_title) && !empty($disclosure_title)){ ?>
            <div class="title-main text-center wow fadeInUp">
                <h2 class="title-style-2"><?php echo $disclosure_title;?></h2>
            </div>
        <?php } ?>
        <div class="row g-3 wow fadeInUp">
            <?php  $disclosure_excle_details = get_field('disclosure_excle_details');
                   if(isset($disclosure_excle_details) && !empty($disclosure_excle_details)){
                        foreach($disclosure_excle_details as $disclosure_excle_detail){
                            $disclosure_title = $disclosure_excle_detail['disclosure_title'];
                            $disclosure_download_pdf = $disclosure_excle_detail['disclosure_download_pdf'];
                            if ($disclosure_download_pdf) {
                                $file_url = $disclosure_download_pdf['url'];
                                $file_extension = pathinfo($file_url, PATHINFO_EXTENSION);
                                
                                // Define an array of allowed file extensions and their corresponding icons
                                $icons = array(
                                    'pdf' => 'pdf-icon.svg',
                                    'doc' => 'doc-icon.svg',
                                    'text' => 'text-icon.svg',
                                    'xls' => 'xl-icon.svg',
                                    'xlsx' => 'xl-icon.svg',
                                    'rar' =>  'rar.svg',
                                    'jpg' =>  'jpg.svg',
                                    'zip' =>  'zip.svg',
                                );
                                ?>
                          
                                <div class="col-lg-4 col-md-6">
                                    <a href="<?php echo $file_url;?>" class="download-box" target = "_blank" >
                                    <?php 
                                    if (isset($icons[$file_extension])) {
                                            $icon_url = get_stylesheet_directory_uri().'/assets/images/'. $icons[$file_extension];
                                    } ?>
                                        <span> <img src="<?php echo $icon_url; ?>"> </span>
                                        
                                        <?php if(isset($disclosure_title) && !empty( $disclosure_title)){ ?>
                                            <p><?php echo $disclosure_title;?></p>
                                        <?php } ?>
                                    </a>
                                </div><?php
                            }
                               
                        }
                    } ?>
        </div>
    </div>
</section>
<!--------------------------------- Disclosure of Complaints End --------------------------------->

<!--------------------------------- Board of Directors Start --------------------------------->
<?php 
    $board_of_directors_title = get_field('board_of_directors_title');
?>
<section class="directors-section custom-padding m-0">
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
<section class="directors-section custom-padding-bottom m-0">
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
