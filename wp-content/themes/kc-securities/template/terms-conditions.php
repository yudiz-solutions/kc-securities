<?php

/**
 * Template Name: Terms & Conditions template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/tearm.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center">
            <h1 class="title-style-1">Terms & Conditions</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->


<!---------------------- privacy-policy content---------------------------->  
<section class="privacy-policy-content custom-padding m-0">
    <div class="container">
        <div class="privacy-inner">
            <?php the_content(); ?>
        </div>
    </div>
</section>
<!---------------------- privacy-policy content---------------------------->  


<?php

get_footer();
