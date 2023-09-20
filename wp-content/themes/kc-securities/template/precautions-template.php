<?php

/**
 * Template Name: Precautions Page template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->


<!--------------------------------- Precautions section Start --------------------------------->
<section class="precautions-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 align-self-center">
                <div class="precautions-content-left custom-point">
                    <?php $precautions_title = get_field('precautions_title');
                    if(isset($precautions_title) && !empty($precautions_title)){ ?>
                        <h2 class="title-style-2"><?php echo $precautions_title;?></h2>
                   <?php } ?>
                   <?php echo do_shortcode('[product_service_inner_page]');?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="precautions-imgage">
                    <?php echo do_shortcode('[product_service_inner_image]');?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Precautions section End --------------------------------->


<?php

get_footer();
