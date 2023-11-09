<?php

/**
 * Template Name: Online account opening Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->


<!---------------------------------  Start --------------------------------->
<?php $offline_account_opening_title = get_field('offline_account_opening_title');
      $offline_account_opening_content = get_field('offline_account_opening_content');  
      ?>
<section class="opening-section custom-padding m-0">
    <div class="container">
        <div class="opening-wrapper">
            <?php if(isset($offline_account_opening_title) && !empty($offline_account_opening_title)){ ?>
                <h3 class="title-style-3 text-center"><?php echo $offline_account_opening_title;?></h3>
            <?php } ?>
            <div class="opening-inner">
                <?php if(isset($offline_account_opening_content) && !empty($offline_account_opening_content)){echo $offline_account_opening_content; } ?>
            </div>
        </div>
    </div>
</section>

<!---------------------------------  End --------------------------------->


<?php

get_footer();