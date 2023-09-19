<?php

/**
 * Template Name: Investor Charter Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-charter-banner.jpg">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">Investor Charter</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Investor Charter section start --------------------------------->
<section class="investor-charter-section custom-padding m-0">
    <div class="container">
        <div class="investor-charter-tabing custom-tabing">
            <ul class="tabs">
                <?php 
                        $tab_details = get_field('investor_details');
                        if(isset($tab_details) && !empty($tab_details)){
                            $i=1;
                            foreach ($tab_details as $key => $value) {
                               $investor_tab_title = $value['investor_tab_title'];
                                    if(isset($investor_tab_title) && !empty($investor_tab_title)){
                                    ?>
                                        <li class="<?php if($i==1){echo 'active';}?>" rel="tab<?php echo $i;?>"><button class="nav-link-tab"><?php echo $investor_tab_title;?></button></li>
                                <?php 
                                }
                           $i++; }
                        } ?>
               
            </ul>

            <div class="tab_container">
                <?php 
                        $tab_details = get_field('investor_details');
                        if(isset($tab_details) && !empty($tab_details)){
                            $j=1;
                            $first = TRUE;
                            foreach ($tab_details as $key => $value) {
                                $button_value = 'false';
                                if ($first) {
                                  $button_value = 'true';
                                  $first = FALSE;
                                }
                                
                                    $investor_tab_title = $value['investor_tab_title'];
                                        if(isset($investor_tab_title) && !empty($investor_tab_title)){ ?>
                                            <button  class="<?php if($j==1){echo 'd_active';}?> tab_drawer_heading" rel="tab<?php echo $j;?>"><?php echo $investor_tab_title;?></button>
                                        <?php } ?>
                                        <div id="tab<?php echo $j;?>" class="tab_content">
                
                                            <div class="investor-wrapper-part investor-point custom-point custom-table">
                                                <?php $investor_content_details =  $value['investor_content_detail'];
                                                    if(isset($investor_content_details) && !empty($investor_content_details)){
                                                            foreach($investor_content_details as $investor_content_detail){
                                                            $investor_content = $investor_content_detail['investor_content'];
                                                                if(isset($investor_content) && !empty($investor_content)){echo $investor_content;}
                                                               
                                                            }
                                                        
                                                    }?>  
                                            </div>
                                        </div><?php
                                   
                                $j++;    
                            }
                        }?>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Investor Charter section End --------------------------------->
<?php

get_footer();
