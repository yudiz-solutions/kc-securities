<?php 
class Kc_Security_Admin{

    public function __construct(){

        add_filter( 'wp_check_filetype_and_ext', array($this,'gic_prime_support_svg_images'), 10, 4 );
        add_filter('upload_mimes', array($this,'gic_prime_copo_mime_types'));
        add_action('widgets_init', array($this,'kc_security_wpb_widgets_init'));
    

        add_action('init', array($this, 'kc_security_office_locations_post_type'), 0);
        add_action('init', array($this, 'kc_security_research_post_type'), 0);

        add_action('acf/init',array($this,'kc_security_acf_setting'));
        
    }    

    public function gic_prime_support_svg_images( $data, $file, $filename, $mimes ){
        $filetype = wp_check_filetype($filename, $mimes);

        return [
            'ext'             => $filetype['ext'],
            'type'            => $filetype['type'],
            'proper_filename' => $data['proper_filename']
        ];

    }

   public function gic_prime_copo_mime_types($mimes) {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }

 
    public function kc_security_wpb_widgets_init()
    {
        //Navigation Login
        register_sidebar(
            array(
                'name'          => esc_html__('Navigation Login', 'KC Securites'),
                'id'            => 'navigation_login',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<nav id="%1$s" class="widget %2$s login-navigation-bar">',
                'after_widget'  => '</nav>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //footer logo
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Logo', 'KC Securites'),
                'id'            => 'footer_logo',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Get KC itrade app
        register_sidebar(
            array(
                'name'          => esc_html__('KC Itrade Icon', 'KC Securites'),
                'id'            => 'footer_kc-trade_icon',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s footer_kc-icon-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer Quick Link
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Quick link', 'KC Securites'),
                'id'            => 'footer_quick_link',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s footer-quick-navigation">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Products & Services
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Product and Services', 'KC Securites'),
                'id'            => 'footer_product_link',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s footer-quick-navigation">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Contact Us
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Contact Us', 'KC Securites'),
                'id'            => 'footer_contact_us',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s footer-contact-wrapper">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer Group Companies Heading
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Group Companies Heading', 'KC Securites'),
                'id'            => 'footer_group_name',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer Group Companies slider
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Group Companies Name', 'KC Securites'),
                'id'            => 'footer_group_slider',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer inner page link
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Inner Page Link', 'KC Securites'),
                'id'            => 'footer_inner_page_link',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer Content
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Content', 'KC Securites'),
                'id'            => 'footer_content',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer External Website Link
        register_sidebar(
            array(
                'name'          => esc_html__('Footer External Website Link', 'KC Securites'),
                'id'            => 'footer_external_website',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer Copyright name
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Copyright Name', 'KC Securites'),
                'id'            => 'footer_copy_right_name',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );

        //Footer Privacy Policy
        register_sidebar(
            array(
                'name'          => esc_html__('Footer Privacy Policy', 'KC Securites'),
                'id'            => 'footer_privancy_link',
                'description'   => esc_html__('Add widgets here to appear in your footer.', 'KC Securites'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h2 class="widget-title">',
                'after_title'   => '</h2>',
            )
        );
    }
  
       
    public function kc_security_office_locations_post_type(){
        /****************OUR DIAGNOSTIC SERVICE CUSTOM POST TYPE********************/
	$our_diagnostic_service_labels = array(
		'name'                => _x('Office Locations', 'Post Type General Name', 'kc-securities'),
		'singular_name'       => _x('Office Locations', 'Post Type Singular Name', 'kc-securities'),
		'menu_name'           => __('Office Locations', 'kc-securities'),
		'parent_item_colon'   => __('Office Locations', 'kc-securities'),
		'all_items'           => __('All Office Locations', 'kc-securities'),
		'view_item'           => __('View Office Locations', 'kc-securities'),
		'add_new_item'        => __('Add New Office Locations', 'kc-securities'),
		'add_new'             => __('Add New', 'kc-securities'),
		'edit_item'           => __('Edit Office Locations', 'kc-securities'),
		'update_item'         => __('Update Office Locations', 'kc-securities'),
		'search_items'        => __('Search Office Locations', 'kc-securities'),
		'not_found'           => __('Not Found', 'kc-securities'),
		'not_found_in_trash'  => __('Not found in Trash', 'kc-securities'),
	);
	$our_diagnostic_service_args = array(
		'label'               => __('Office Locations', 'kc-securities'),
		'description'         => __('Office Locations news and reviews', 'kc-securities'),
		'labels'              => $our_diagnostic_service_labels,
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail','author','comments','revisions', 'custom-fields'),
		'rewrite' => array('slug' => 'office-locations'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-location',

	);
	register_post_type('office-locations', $our_diagnostic_service_args);


    $labels = array(
        'name' => _x('Areas', 'taxonomy general name', 'kc-securities'),
        'singular_name' => _x('Areas', 'taxonomy singular name', 'kc-securities'),
        'search_items' => __('Search Areas', 'kc-securities'),
        'all_items' => __('All Areas', 'kc-securities'),
        'parent_item' => __('Parent Areas', 'kc-securities'),
        'parent_item_colon' => __('Parent Areas:', 'kc-securities'),
        'edit_item' => __('Edit Areas', 'kc-securities'),
        'update_item' => __('Update Areas', 'kc-securities'),
        'add_new_item' => __('Add New Areas', 'kc-securities'),
        'new_item_name' => __('New Areas Name', 'kc-securities'),
        'menu_name' => __('Areas', 'kc-securities'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'office-locations'),
        'show_in_rest' => true, //add this
        'update_count_callback' => '_update_post_term_count',
        
    );

    register_taxonomy('areas', array('office-locations'), $args);
    flush_rewrite_rules();
    }

    public function kc_security_research_post_type(){
        /****************Research post type ********************/
	$our_diagnostic_service_labels = array(
		'name'                => _x('Research', 'Post Type General Name', 'kc-securities'),
		'singular_name'       => _x('Research', 'Post Type Singular Name', 'kc-securities'),
		'menu_name'           => __('Research', 'kc-securities'),
		'parent_item_colon'   => __('Research', 'kc-securities'),
		'all_items'           => __('All Research', 'kc-securities'),
		'view_item'           => __('View Research', 'kc-securities'),
		'add_new_item'        => __('Add New Research', 'kc-securities'),
		'add_new'             => __('Add New', 'kc-securities'),
		'edit_item'           => __('Edit Research', 'kc-securities'),
		'update_item'         => __('Update Research', 'kc-securities'),
		'search_items'        => __('Search Research', 'kc-securities'),
		'not_found'           => __('Not Found', 'kc-securities'),
		'not_found_in_trash'  => __('Not found in Trash', 'kc-securities'),
	);
	$our_diagnostic_service_args = array(
		'label'               => __('Research', 'kc-securities'),
		'description'         => __('Research news and reviews', 'kc-securities'),
		'labels'              => $our_diagnostic_service_labels,
		'supports'            => array('title', 'editor', 'excerpt', 'thumbnail','author','comments','revisions', 'custom-fields'),
		'rewrite' => array('slug' => 'research'),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 10,
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
		'show_in_rest'        => true,
		'menu_icon'           => 'dashicons-location',

	);
	register_post_type('research', $our_diagnostic_service_args);


    $labels = array(
        'name' => _x('Category', 'taxonomy general name', 'kc-securities'),
        'singular_name' => _x('Category', 'taxonomy singular name', 'kc-securities'),
        'search_items' => __('Search Category', 'kc-securities'),
        'all_items' => __('All Category', 'kc-securities'),
        'parent_item' => __('Parent Category', 'kc-securities'),
        'parent_item_colon' => __('Parent Category:', 'kc-securities'),
        'edit_item' => __('Edit Category', 'kc-securities'),
        'update_item' => __('Update Category', 'kc-securities'),
        'add_new_item' => __('Add New Category', 'kc-securities'),
        'new_item_name' => __('New Category Name', 'kc-securities'),
        'menu_name' => __('Category', 'kc-securities'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'research'),
        'show_in_rest' => true, //add this
        'update_count_callback' => '_update_post_term_count',
        
    );

    register_taxonomy('research-category', array('research'), $args);
    flush_rewrite_rules();
    }


    public function kc_security_acf_setting(){
        acf_add_options_page(array(
                'page_title'    => 'Theme General Settings',
                'menu_title'    => 'Theme Settings',
                'menu_slug'     => 'theme-general-settings',
                'capability'    => 'edit_posts',
                'redirect'      => false
        ));
            
        
    }

   
}