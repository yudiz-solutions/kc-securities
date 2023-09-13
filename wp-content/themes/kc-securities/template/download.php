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
          
            <div class="col-lg-4 col-md-6">
                <a href="#" class="download-box">
                    <span>
                         <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/exe-icon.svg" alt="EXE Icon">
                    </span>
                    <p>AcroRdrDC2100720099_en_US.exe</p>
                </a>
            </div>

            <div class="col-lg-4 col-md-6">
                <a href="#" class="download-box">
                    <span>
                         <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/pdf-icon.svg" alt="PDF Icon">
                    </span>
                    <p>Risk Disclosures on Derivatives.pdf</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Download section End --------------------------------->

<?php

get_footer();
