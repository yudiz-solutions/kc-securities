<?php

/**
 * Template Name: Investor Charter Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Investor Charter section start --------------------------------->
<section class="investor-charter-section custom-padding m-0">
    <div class="container">
        <div class="investor-charter-tabing custom-tabing wow fadeInUp">
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
                                            <div class="investor-wrapper-part mt-5">
                                                <?php $invester_document_title = $value['invester_document_title'];?>
                                                <?php if(isset($invester_document_title) && !empty($invester_document_title)){ ?>
                                                    <h6><?php echo $invester_document_title;?></h6>
                                                <?php } ?>
                                                <div class="row g-3 wow fadeInUp">
                                                <?php  $investor_excle_details = $value['investor_excle_details'];
                                                    if(isset($investor_excle_details) && !empty($investor_excle_details)){
                                                            foreach($investor_excle_details as $investor_excle_detail){
                                                                $investor_title = $investor_excle_detail['investor_title'];
                                                                $investor_download_pdf = $investor_excle_detail['investor_download_pdf'];
                                                                if ($investor_download_pdf) {
                                                                    $file_url = $investor_download_pdf['url'];
                                                                    $file_extension = pathinfo($file_url, PATHINFO_EXTENSION);
                                                                    
                                                                    // Define an array of allowed file extensions and their corresponding icons
                                                                    $icons = array(
                                                                        'pdf' => 'pdf-icon.svg',
                                                                        'doc' => 'doc-icon.svg',
                                                                        'text' => 'text-icon.svg',
                                                                        'xls' => 'xl-icon.svg',
                                                                        'xlsx' => 'xl-icon.svg',
                                                                        'rar' =>  'rar.svg',
                                                                        'jpg' =>  'jpg.svg',
                                                                        'zip' =>  'zip.svg',
                                                                    );
                                                                    ?>
                                                            
                                                                    <div class="col-lg-4 col-md-6">
                                                                        <a href="<?php echo $file_url;?>" class="download-box" target = "_blank" >
                                                                        <?php 
                                                                        if (isset($icons[$file_extension])) {
                                                                                $icon_url = get_stylesheet_directory_uri().'/assets/images/'. $icons[$file_extension];
                                                                        } ?>
                                                                            <span> <img src="<?php echo $icon_url; ?>"> </span>
                                                                            
                                                                            <?php if(isset($investor_title) && !empty( $investor_title)){ ?>
                                                                                <p><?php echo $investor_title;?></p>
                                                                            <?php } ?>
                                                                        </a>
                                                                    </div><?php
                                                                }
                                                                
                                                            }
                                                        } ?>
                                            </div>
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
