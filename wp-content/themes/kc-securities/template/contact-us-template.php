<?php

/**
 * Template Name: Contact Us Page template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section contact-banner m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/contact-us-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">Contact Us</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Corporate Office Start --------------------------------->
<?php 
    $location_title = get_field('location_title');
    $location_address = get_field('location_address');
    $location_number_title = get_field('location_number_title');
    $location_number = get_field('location_number');
    $location_email_title = get_field('location_email_title');
    $location_email_address = get_field('location_email_address');
    $phone_numbers = str_replace(' ','',$location_number);
    $location_link = get_field('location_link');
    
    $map_link = get_field('map_link');
?>
<section class="corporate-address-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 align-self-center">
                <div class="corporate-wrapper">
                    <?php if(isset($location_title) && !empty($location_title)){ ?>
                        <h4 class="title-style-4"><?php echo $location_title;?></h4>
                    <?php } ?>
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
                            <?php   if(isset($location_number_title) && !empty($location_number_title)){ ?>
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
                    <?php if(isset($location_link) && !empty($location_link)){ ?>
                        <div class="last-content">
                            <a href="<?php echo $location_link['url'];?>" class="know-btn"><?php echo $location_link['title'];?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php  $map_link = get_field('map_link');
                        if(isset($map_link) && !empty($map_link)){ 
                ?>
                <div class="corporate-map">
                    <iframe src="<?php echo $map_link;?>" width="100%" style="border:0; border-radius: 24px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <?php } ?>
        </div>
        </div>
    </div>
</section>
<!--------------------------------- Corporate Office End --------------------------------->


<!--------------------------------- contact address section Start --------------------------------->
<section class="contact-different-address common-star-shape-right custom-padding-bottom m-0">
    <div class="container">
        <div class="city-wrapper wow fadeInUp">
            <div class="form-grp custom-select ">
                <select id="city">
                <?php
                    $office_are_categories = get_terms(array(
                        'taxonomy'        => 'areas',
                        'hide_empty'      => false,
                        'parent'          => 0,
                        'order'           => 'ASC',
                    ));
                    $term_ids = array();
                    foreach ($office_are_categories as $office_are_category) :
                            $term_ids[] =  $office_are_category->term_id;
                            ?>
                    <!-- <option value="hide">Select Year</option> -->
                    <option data-category="<?php echo $office_are_category->term_id; ?>" value="<?php echo $office_are_category->name;?>" class="location_are"><?php echo $office_are_category->name;?></option>
                <?php endforeach; ?>
                    <!-- <option value="Delhi">Delhi</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Nagpur">Nagpur</option>
                    <option value="Indore">Indore</option> -->
                </select>               
            </div>
        </div>
        <div class="contact-different-wrapper wow fadeInUp location_area">
            <?php 
                    $args_office = array(
                       'post_type' => 'office-locations',
                       'post_status' => 'publish',
                        'posts_per_page' => 6,
                        'paged' => 1,
                        'tax_query' => array(
                            array(
                                'taxonomy' =>  "areas",
                                'field'    => 'term_id',
                                'terms'    => $term_ids,
                                'operator' => 'IN'
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
                        endwhile; wp_reset_postdata(); ?>
                         <div class="tagged-posts"></div>
                        <?php
                    }   ?>    
        </div>
    </div>
</section>

<!--------------------------------- contact address section Start --------------------------------->
<?php

get_footer();
