<?php

/**
 * Template Name: Download Page template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Download section Start --------------------------------->
<section class="download-section custom-padding m-0">
    <div class="container">
        <div class="row g-3 wow fadeInUp">
            <?php
            $cats = get_terms(array('taxonomy'=>'download_categories', 'hide_empty'=> 0, 'hierarchical'=>1,'parent' => 0));
           if($cats){
                foreach ($cats as $cat) {
                    if($cat->parent == 0){ ?>
                        <div class="col-lg-4 col-md-6">
                            <a href="<?php echo get_term_link($cat->slug, 'download_categories'); ?>" class="download-box">
                                <span> <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/file.svg" alt="File Icon"> </span>
                                <p><?php echo $cat->name;?></p>
                            </a>
                        </div><?php
                    }
                }
            }?>
            <?php $download_link_details = get_field('download_link_details');
                if(isset($download_link_details) && !empty($download_link_details)){
                    foreach($download_link_details as $download_link_detail){
                        $download_link = $download_link_detail['download_link'];
                        $download_file_name = $download_link_detail['download_file_name'];
                        if ($download_link) {
                            $file_url = $download_link['url'];
                            $file_extension = pathinfo($file_url, PATHINFO_EXTENSION);
                            
                            // Define an array of allowed file extensions and their corresponding icons
                            $icons = array(
                                'pdf' => 'pdf-icon.svg',
                                'doc' => 'doc-icon.svg',
                                'txt' => 'text-icon.svg',
                                'xls' => 'xl-icon.svg',
                                'xlsx' => 'xl-icon.svg',
                                'csv'  => 'xl-icon.svg',
                                'rar'  => 'rar.svg',
                                'jpg'  => 'jpg.svg', 
                                'exe'  => 'exe-icon.svg',
                                'zip' => 'zip.svg',
                                'apk' => 'apk-icon.svg',
                             );
                        
                         ?>
                            <div class="col-lg-4 col-md-6">
                                <a href="<?php echo $file_url;?>" class="download-box" target = "_blank">
                                <?php 
                                        if (isset($icons[$file_extension])) {
                                                $icon_url = get_stylesheet_directory_uri().'/assets/images/'. $icons[$file_extension];
                                        }else{
                                            $icon_url = get_stylesheet_directory_uri().'/assets/images/comman-icon.svg';
                                        } ?>
                                        <span> <img src="<?php echo $icon_url; ?>"> </span>
                                        <?php if(isset($download_file_name) && !empty($download_file_name)){ ?>
                                                <p><?php echo $download_file_name;?></p>
                                    <?php } ?>
                                </a>
                            </div><?php 
                        }
                    } 
                } ?>
        </div>
    </div>
</section>
<!--------------------------------- Download section End --------------------------------->
<?php

get_footer();
