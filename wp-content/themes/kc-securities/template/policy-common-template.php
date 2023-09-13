<?php

/**
 * Template Name: policy common template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section privacy-banner m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/policy-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">Privacy Policy</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->


<!---------------------- privacy-policy content---------------------------->  
<section class="privacy-policy-content custom-padding m-0">
    <div class="container">
        <div class="privacy-inner wow fadeInUp">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<!---------------------- privacy-policy content---------------------------->  


<?php

get_footer();
