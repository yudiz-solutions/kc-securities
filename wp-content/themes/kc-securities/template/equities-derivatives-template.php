<?php

/**
 * Template Name: Equities & Derivatives Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->


<!--------------------------------- product section Start --------------------------------->
<section class="services-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6">
                <div class="services-content">
                     <?php echo do_shortcode('[product_service_inner_page]');?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-images equities-part">
                    <?php echo do_shortcode('[product_service_inner_image]');?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- product section End --------------------------------->



<?php

get_footer();
