<?php

/**
 * Template Name: FAQ template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- FAQ section Start --------------------------------->
<section class="faq-section custom-padding common-star-shape-right m-0">
    <div class="container">
        <div class="faq-tabing custom-tabing wow fadeInUp">
            <ul class="tabs">
                <?php 
                        $tab_details = get_field('faq_tab_details');
                        if(isset($tab_details) && !empty($tab_details)){
                            $i=1;
                            foreach ($tab_details as $key => $value) {
                               $faq_tab_title = $value['faq_tab_title'];
                                    if(isset($faq_tab_title) && !empty($faq_tab_title)){
                                    ?>
                                        <li class="<?php if($i==1){echo 'active';}?>" rel="tab<?php echo $i;?>"><button class="nav-link-tab"><?php echo $faq_tab_title;?></button></li>
                                <?php 
                                }
                           $i++; }
                        } ?>
                <!-- <li rel="tab2"><button class="nav-link-tab">Currency</button></li>
                <li rel="tab3"><button class="nav-link-tab">NRI</button></li> -->
            </ul>
            <div class="tab_container">
                 <?php 
                        $tab_details = get_field('faq_tab_details');
                        if(isset($tab_details) && !empty($tab_details)){
                            $j=1;
                            $first = TRUE;
                            foreach ($tab_details as $key => $value) {
                                $button_value = 'false';
                                if ($first) {
                                  $button_value = 'true';
                                  $first = FALSE;
                                }
                                
                               $faq_tab_title = $value['faq_tab_title'];
                                    if(isset($faq_tab_title) && !empty($faq_tab_title)){
                                    ?>
                                        <button  class="<?php if($j==1){echo 'd_active';}?> tab_drawer_heading" rel="tab<?php echo $j;?>"><?php echo $faq_tab_title;?></button>
                                    <?php } ?>
                                    <div id="tab<?php echo $j;?>" class="tab_content">
                                        <div class="accordion custom-accordion" id="accordion<?php echo $faq_tab_title;?>">
                                            <?php $faq_question_lists = $value['faq_question_list'];
                                                  if(isset($faq_question_lists) && !empty($faq_question_lists)){
                                                    $k=1;
                                                    foreach($faq_question_lists as $faq_question_list){
                                                        $faq_question_title = $faq_question_list['faq_question_title'];?>
                                                        <div class="accordion-item active">
                                                            <h2 class="accordion-header" id="heading<?php echo $k;?>">
                                                            <?php if(isset($faq_question_title) && !empty($faq_question_title)){ ?>
                                                                    <button class="accordion-button <?php if($k!==1){echo 'collapsed';}?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $k;?>" aria-expanded="<?php echo esc_attr($button_value); ?>" aria-controls="collapse<?php echo $k;?>">
                                                                    <?php echo $faq_question_title;?>
                                                                </button>
                                                                <?php } ?>
                                                            </h2>
                                                            <?php $faq_answer_lists = $faq_question_list['faq_answer_list'];
                                                                  if(isset($faq_answer_lists) && !empty($faq_answer_lists)){ 
                                                                    
                                                                    foreach($faq_answer_lists as $faq_answer_list){
                                                                            $faq_answer_title = $faq_answer_list['faq_answer_title'];
                                                                        ?> 
                                                                    <div id="collapse<?php echo $k;?>" class="accordion-collapse collapse <?php if($k==1){echo 'show';}?>" aria-labelledby="heading<?php echo $k;?>" data-bs-parent="#accordion<?php echo $faq_tab_title;?>">
                                                                        <div class="accordion-body faq-body custom-point">
                                                                            <?php echo $faq_answer_title;?>
                                                                        </div>
                                                                    </div><?php 
                                                                    }
                                                                  }?>
                                                        </div><?php
                                                  $k++; }
                                                }?>
                                          
                                        </div>
                                    </div><?php
                            $j++; }
                        } ?>            
            </div>
        </div>
    </div>
</section>
<!--------------------------------- FAQ section End --------------------------------->
<script>
    jQuery(document).ready(function(){
    if(jQuery('.accordion-button').hasClass('collapsed')){
      jQuery('.accordion-button').parents('.accordion-item').siblings().removeClass('accordion-active');
    }
    var $accordionItems = jQuery('.accordion-item');
    $accordionItems.first().addClass('accordion-active');
    jQuery(document).on('click','.accordion-button',function () {       
      jQuery('.accordion-button').parents('.accordion-item').removeClass('accordion-active');
      if(!jQuery(this).hasClass('collapsed')){
          jQuery(this).parents('.accordion-item').addClass('accordion-active');
        }else {
          jQuery(this).parents('.accordion-item').removeClass('accordion-active');
        }
    });
});
</script>
<?php

get_footer();
