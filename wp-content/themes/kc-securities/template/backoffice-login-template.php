<?php

/**
 * Template Name: Backoffice Login Page template
 */

get_header();
?>
<?php $backoffice_title = get_field('backoffice_title');
       $backoffice_details = get_field('backoffice_details');
?>  
<section class="back-office-section custom-padding m-0">
    <div class="container">
        <div class="back-office-wrapper text-center wow fadeInUp">
            <?php if(isset($backoffice_title) && !empty($backoffice_title)){ ?>
                <h2 class="title-style-2"><?php echo $backoffice_title;?></h1>
            <?php } ?>
            <div class="back-office-button">
                <?php if(isset($backoffice_details) && !empty($backoffice_details)){ 
                        foreach($backoffice_details as $backoffice_detail){
                            $backoffice_link = $backoffice_detail['backoffice_link'];
                            $backoffice_title = $backoffice_detail['backoffice_title'];
                            $backoffice_new_target = ($backoffice_link['target'] == "_blank") ? "target='_blank'" : "";
                            ?>
                            <?php if(isset($backoffice_link) && !empty($backoffice_link)){ ?>
                                <a href="<?php echo $backoffice_link['url'];?>" class="primary-button<?php if($backoffice_title == 'Branch/AP Login'){echo '-outline';}?>" <?php echo $backoffice_new_target;?>><?php echo $backoffice_title;?></a><?php 
                            }
                        } 
                    }?>
                
            </div>
        </div>
    </div>
</section>




<?php

get_footer();
