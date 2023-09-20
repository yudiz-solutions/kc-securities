<?php

/**
 * Template Name: policy common template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
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
