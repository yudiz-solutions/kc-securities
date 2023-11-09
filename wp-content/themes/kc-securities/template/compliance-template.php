<?php

/**
 * Template Name: Compliance Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
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
        <?php
            $cats = get_terms(array('taxonomy'=>'compliance_categories', 'hide_empty'=> 0, 'hierarchical'=>1,'parent' => 0));
           if($cats){
                foreach ($cats as $cat) {
                    if($cat->parent == 0){ ?>
                        <div class="col-lg-4 col-md-6">
                            <a href="<?php echo get_term_link($cat->slug, 'compliance_categories'); ?>" class="download-box">
                                <span> <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/file.svg" alt="File Icon"> </span>
                                <p><?php echo $cat->name;?></p>
                            </a>
                        </div><?php
                    }
                }
            }?>
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



<?php

get_footer();
