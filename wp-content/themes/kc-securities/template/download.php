<?php

/**
 * Template Name: Download Page template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section download-banner m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/download-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">Download</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Download section Start --------------------------------->
<section class="download-section custom-padding m-0">
    <div class="container">
        <div class="row g-3 wow fadeInUp">
 <?php
        $args_kc_securities = array(
                'post_type' => 'downloads',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                //'paged' => 1,
        );
        $arr_posts_kc_securities = new WP_Query($args_kc_securities);
        ?>



<?php if ($arr_posts_kc_securities->have_posts()) : ?>
<?php while ($arr_posts_kc_securities->have_posts()) : $arr_posts_kc_securities->the_post(); ?>
            <div class="col-lg-4 col-md-6">
                <a href="<?php echo get_the_permalink(); ?>" class="download-box">
                    <span> <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/file.svg" alt="File Icon"> </span>
                    <p><?php echo get_the_title();?></p>
                </a>
            </div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
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
                                'text' => 'text-icon.svg',
                                'xls' => 'xl-icon.svg',
                                'xlsx' => 'xl-icon.svg',
                            );
                        
                         ?>
                            <div class="col-lg-4 col-md-6">
                                <a href="<?php echo $file_url;?>" class="download-box" target = "_blank">
                                <?php 
                                        if (isset($icons[$file_extension])) {
                                                $icon_url = get_stylesheet_directory_uri().'/assets/images/'. $icons[$file_extension];
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
