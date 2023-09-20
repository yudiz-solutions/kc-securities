<?php 
class Kc_Security_Public{
    
    public function __construct(){
        add_action('wp_ajax_office_location',array($this, 'kc_security_office_location'));
        add_action('wp_ajax_nopriv_office_location',array($this, 'kc_security_office_location'));

        add_action('wp_ajax_research',array($this, 'kc_security_research'));
        add_action('wp_ajax_nopriv_research',array($this, 'kc_security_research'));
    }

    public function kc_security_office_location(){
        $location_are = $_POST['location_are'];
        $args_office = array(
           'post_type' => 'office-locations',
           'posts_per_page' => -1,
           'post_status' => 'publish',
           'tax_query' => array(
                array(
                    'taxonomy' =>  "areas",
                    'field'    => 'slug',
                    'terms'    => $location_are,
                 
                )
            ),
        );
        $arr_posts_office = new WP_Query($args_office);
        if ($arr_posts_office->have_posts()) {
            while ($arr_posts_office->have_posts()) : $arr_posts_office->the_post();
                $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($arr_posts_office->ID), 'full');
                $alt = get_post_meta(get_post_thumbnail_id($arr_posts_office->ID), '_wp_attachment_image_alt', true);
                $title =  get_the_title(); 
                $location_address = get_field('location_address',$arr_posts_office->ID);
                $location_number_title = get_field('location_number_title',$arr_posts_office->ID);
                $location_number = get_field('location_number',$arr_posts_office->ID);
                $location_email_title = get_field('location_email_title',$arr_posts_office->ID);
                $location_email_address = get_field('location_email_address',$arr_posts_office->ID);
                $phone_numbers = str_replace(' ','',$location_number);
                ?>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="contact-left-image">
                            <img src="<?php echo $image_url[0];?>" alt="<?php if ($alt) { echo $alt; } else { the_title(); } ?>">
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <div class="contact-right-address">
                            <h4 class="title-style-4"><?php echo $title;?></h4>
                            <div class="corporate-address-box">
                                <div class="address-box-icon">
                                    <span>
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/location-contact.svg" alt="location">
                                    </span>
                                </div>
                                <?php if(isset($location_address) && !empty($location_address)){ ?>
                                <div class="corporate-content">
                                   <?php echo $location_address;?>
                                </div>
                                <?php } ?>
                            </div>
                            <div class="corporate-address-box">
                                <div class="address-box-icon">
                                    <span>
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/call-contact.svg" alt="Call Us">
                                    </span>
                                </div>
                                <div class="corporate-content">
                                <?php if(isset($location_number_title) && !empty($location_number_title)){ ?>
                                    <p><strong><?php echo $location_number_title;?></strong></p>
                                    <?php } else{ ?>
                                         <p><strong><?php __e('Call Us');?></strong></p>
                                  <?php   } if(isset($location_number) && !empty($location_number)){ ?>
                                    <p><?php echo $location_number;?></p>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="corporate-address-box">
                                <div class="address-box-icon">
                                    <span>
                                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/email-contact.svg" alt="Email Us">
                                    </span>
                                    </div>
                                <div class="corporate-content">
                                    <?php if(isset($location_email_title) && !empty($location_email_title)){ ?>
                                            <p><strong><?php echo $location_email_title;?></strong></p>
                                    <?php } else{ ?>
                                         <p><strong><?php __e('Email Us');?></strong></p>
                                  <?php   } if(isset($location_email_address) && !empty($location_email_address)){ ?>
                                    <p><a href="mailto:<?php echo $location_email_address;?>"><?php echo $location_email_address;?></a></p>
                                 <?php } ?>   
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php
            endwhile; wp_reset_postdata();
        }       
    //return $output;

    // $result = [
    //     'max' => $max_pages,
    //     'html' => $output,
    //   ];
    //   echo json_encode($result);
      exit;
    }

    public function kc_security_research(){
       
       $month = $_POST['month'];
       $year = $_POST['year'];
     

        $args_research = array(
           'post_type' => 'research',
           'posts_per_page' => -1,
           'post_status' => 'publish',
            'meta_query' => array(
                'relation' => 'AND',
            array(
                'key' => 'month_list',
                'value' => $month,
                'compare' => 'IN'
            ),
    
            array(
                'key' => 'year_list',
                'value' => $year,
                'compare' => 'IN'
            )),
        );
       
        $arr_posts_research = new WP_Query($args_research);
        
        ob_start();

        $postdata = array();
        if ($arr_posts_research->have_posts()) {
            
            $j=1;
            while ($arr_posts_research->have_posts()) : $arr_posts_research->the_post();
                $terms = get_the_terms( $arr_posts_research->ID, 'research-category' );
                
                if( !empty($terms)){
                    foreach( $terms as $key => $term){                        
                        $postdata[$term->term_id][] = get_the_ID();
                    }
                }                 
            endwhile; 
        }
       

        if( !empty($postdata)){
            $i = 1;
            echo '<ul class="tabs">';
            foreach($postdata as $term_id => $post){
                    $term  = get_term( $term_id );                    
                ?>
                <li class="<?php echo ($i == 1 ) ? 'active' : '' ?> <?php echo $term->name ?>" rel="tab<?php echo $i ?>"><button class="nav-link-tab"><?php echo $term->name ?></button></li>
            <?php 
                $i++;
            }
            echo '</ul>';
        }
        

        
        if( !empty($postdata)){ 

            $j = 1;
        ?>    
        <div class="tab_container research_post">
            <?php foreach($postdata as $term_id => $post_ids ){  
                 $term  = get_term( $term_id );             
                ?>
                <button class="<?php echo ($j == 1 ) ? 'd_active' : '' ?> tab_drawer_heading" rel="tab<?php echo $j ?>"><?php echo $term->name ?> </button>
                <div id="tab<?php echo $j ?>" class="tab_content"  <?php echo $style ?> >
                <?php
                    foreach( $post_ids as $post_id){
                    $post = get_post( $post_id );
                    $style = '';
                    if( $j == 1 ){
                        $style = 'style="display:block"';
                    }
                ?>
                    
                        <div class="date-content-wrapper">
                            <div class="date-content">
                                <p><strong><?php echo $post->post_title;?></strong></p>
                                <p><strong><?php echo $post->post_content;?></strong></p> 
                            </div>
                        </div>
                   
                <?php } ?>
                </div>
            <?php $j++; } ?>
        </div>
        <?php } ?>

        
        <?php
       
        $output = ob_get_clean();                
    
    //return $output;

    $result = [
       'html' => $output,
      ];
       echo json_encode($result);
      exit;
    }

}