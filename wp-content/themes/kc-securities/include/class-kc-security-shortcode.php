<?php 
class Kc_Security_Shortcodes{


    public function __construct(){
        // Add shortcode here
        add_shortcode('comman_subpage_banner',array($this,'kc_security_common_banner_section'));
        add_shortcode('product_service_inner_page',array($this,'kc_security_service_page'));
        add_shortcode('product_service_inner_image',array($this,'kc_security_service_page_image'));

      
    } 


    // Comman Banner Section Start
    public function kc_security_common_banner_section(){
        ob_start();
        //  $common_banner_image = get_field('common_banner_image');
        $feature_image = get_the_post_thumbnail_url(get_the_ID(),'full');
        $banner_default_image = get_field('banner_default_image','option');
       $image_url = $feature_image;
       
        if(isset($feature_image) && !empty($feature_image)){
            $image_url ;
        }else{
            $image_url = isset($banner_default_image['url']) ? $banner_default_image['url'] : '';
        }
        
        $page_title = get_the_title();
        ?>
        
        <section class="sub-banner-section m-0" style="background-image: url('<?php if(isset($image_url) && !empty($image_url)){echo $image_url;}?>');">
            <div class="container">
                <div class="sub-banner-caption text-center wow fadeInUp">
                    <h1 class="title-style-1"><?php echo $page_title;?></h1>
                </div>
            </div>
        </section>
       
        <?php
        $banner_subpages = ob_get_clean();
    
        return  $banner_subpages;
    }
    // Comman Banner Section End
    public function kc_security_service_page(){
        ob_start();

                $service_page_content = get_field('service_content');
               // $service_image = get_field('service_image');
               if(isset($service_page_content) && !empty($service_page_content)){ echo $service_page_content; } ?>
        <?php 
        $service_pages = ob_get_clean();

        return  $service_pages;   
    }

    public function kc_security_service_page_image(){
        ob_start();
            $service_image = get_field('service_image');
              ?>
              
                    <?php if(isset($service_image) && !empty($service_image)){ ?>
                        <img src="<?php echo $service_image['url'];?>" alt="<?php echo $service_image['alt'];?>">
                    <?php } ?>
              
        <?php 
        $service_image = ob_get_clean();

        return  $service_image;   
    }
} ?>
