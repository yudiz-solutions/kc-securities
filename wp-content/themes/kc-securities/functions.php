<?php

// Upload SVG in media
add_filter('upload_mimes', 'SVG_upload');
function SVG_upload($file_types)
{
	$new_filetypes = array();
	$new_filetypes['svg'] = 'image/svg+xml';
	$file_types = array_merge($file_types, $new_filetypes);
	return $file_types;
}




// Script & Styles
function enqueue_scripts()
{
	// Styles
	wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css');
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css');
	wp_enqueue_style('slick', get_stylesheet_directory_uri() . '/assets/css/slick.css');
	wp_enqueue_style('slick-theme', get_stylesheet_directory_uri() . '/assets/css/slick-theme.css');
	wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/css/animate.min.css');
	wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', 999);

	// Scripts
	wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js');
	wp_enqueue_script('jquery-bootstrap-main-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('jquery-popper-min-js', get_stylesheet_directory_uri() . '/assets/js/popper.min.js');
	wp_enqueue_script('jquery-slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');

	// wp_enqueue_script('Marquee-JS', "https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", array(), null, null); // Marquee JS
	wp_enqueue_script('Marquee-JS-min', "https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.min.js", array(), null, null); // Marquee JS
	//custom js
	wp_enqueue_script('custom_js', (get_stylesheet_directory_uri() . '/assets/js/custom.js'), array(), null, true);


	if(is_front_page( ) ){
		wp_enqueue_style( 'home_css', get_stylesheet_directory_uri() . '/templates-css/home-page.css', array(), null, false );
    }
	 else if(is_page_template('template/about-template.php')){
		wp_enqueue_style( 'about_us_css', get_stylesheet_directory_uri() . '/templates-css/about-us.css', array(), null, false );
	}
	 else if(is_page_template('template/contact-us-template.php')){
		wp_enqueue_style( 'contact_us_css', get_stylesheet_directory_uri() . '/templates-css/contact-us.css', array(), null, false );
	}
	else if(is_page_template('template/policy-common-template.php')){
		wp_enqueue_style( 'policy_css', get_stylesheet_directory_uri() . '/templates-css/policy-page.css', array(), null, false );
	}
	else if(is_page_template('template/disclaimer-page-template.php')){
		wp_enqueue_style( 'policy_css', get_stylesheet_directory_uri() . '/templates-css/policy-page.css', array(), null, false );
	}
	else if(is_page_template('template/terms-conditions.php')){
		wp_enqueue_style( 'policy_css', get_stylesheet_directory_uri() . '/templates-css/policy-page.css', array(), null, false );
	}
	else if(is_page_template('template/faq-template.php')){
		wp_enqueue_style( 'faq_css', get_stylesheet_directory_uri() . '/templates-css/faq-page.css', array(), null, false );
	}
	else if(is_page_template('template/precautions-template.php')){
		wp_enqueue_style( 'precautions_css', get_stylesheet_directory_uri() . '/templates-css/precautions-page.css', array(), null, false );
	}
	else if(is_page_template('template/compliance-template.php')){
		wp_enqueue_style( 'precautions_css', get_stylesheet_directory_uri() . '/templates-css/compliance-page.css', array(), null, false );
	}
	else if(is_page_template('template/mutual-funds-template.php')){
		wp_enqueue_style( 'mutual_fund_css', get_stylesheet_directory_uri() . '/templates-css/mutual-fund-page.css', array(), null, false );
	}
	else if(is_page_template('template/product-services.php')){
		wp_enqueue_style( 'product_services_css', get_stylesheet_directory_uri() . '/templates-css/product-services.css', array(), null, false );
	}
	else if(is_page_template('template/research-template.php')){
		wp_enqueue_style( 'research_css', get_stylesheet_directory_uri() . '/templates-css/research-page.css', array(), null, false );
	}
	else if(is_page_template('template/partner-with-us.php')){
		wp_enqueue_style( 'partner_css', get_stylesheet_directory_uri() . '/templates-css/partner-with-us-page.css', array(), null, false );
	}
	else if(is_page_template('template/investor-awareness-template.php')){
		wp_enqueue_style( 'investor_awareness_css', get_stylesheet_directory_uri() . '/templates-css/investor-awareness-page.css', array(), null, false );
	}
	else if(is_page_template('template/trade-online-template.php')){
		wp_enqueue_style( 'trade_online_css', get_stylesheet_directory_uri() . '/templates-css/trade-online.css', array(), null, false );
	}
	else if(is_page_template('template/investor-charter-template.php')){
		wp_enqueue_style( 'investor_charter_css', get_stylesheet_directory_uri() . '/templates-css/investor-charter-page.css', array(), null, false );
	}
	else if(is_page_template('template/equities-derivatives-template.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/product-page.css', array(), null, false );
	}
	else if(is_page_template('template/commodities-templates.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/product-page.css', array(), null, false );
	}
	else if(is_page_template('template/ipo-template.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/product-page.css', array(), null, false );
	}
	else if(is_page_template('template/depository-services-template.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/product-page.css', array(), null, false );
	}
	else if(is_page_template('template/currency-features-template.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/product-page.css', array(), null, false );
	}


}
add_action('wp_enqueue_scripts', 'enqueue_scripts', 9999);


//schedule button
function customWidgetAreas()
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

add_action('widgets_init', 'customWidgetAreas');


/* -------------------------------------------------------------------
------------------------ ADD CUSTOM POST-TYPES -----------------------
------------------------------------------------------------------- */
function custom_postype()
{
    /**************** Downloads CUSTOM POST TYPE********************/
    $downloads_listing_labels = array(
        'name'                => _x('Downloads', 'Post Type General Name', 'kc-securities'),
        'singular_name'       => _x('Downloads', 'Post Type Singular Name', 'kc-securities'),
        'menu_name'           => __('Downloads', 'kc-securities'),
        'services_item_colon'   => __('Downloads', 'kc-securities'),
        'all_items'           => __('All Downloads', 'kc-securities'),
        'view_item'           => __('View Downloads', 'kc-securities'),
        'add_new_item'        => __('Add New Downloads', 'kc-securities'),
        'add_new'             => __('Add New', 'kc-securities'),
        'edit_item'           => __('Edit Downloads', 'kc-securities'),
        'update_item'         => __('Update Downloads', 'kc-securities'),
        'search_items'        => __('Search Downloads', 'kc-securities'),
        'not_found'           => __('Not Found', 'kc-securities'),
        'not_found_in_trash'  => __('Not found in Trash', 'kc-securities'),
    );
    $downloads_listing_args = array(
        'label'               => __('Downloads', 'kc-securities'),
        'description'         => __('Downloads Details', 'kc-securities'),
        'labels'              => $downloads_listing_labels,
        'supports'            => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite'             => true,
        'hierarchical'        => true,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest'        => true,
        'menu_icon'           => 'dashicons-download',

    );
    register_post_type('downloads', $downloads_listing_args);

}
add_action('init', 'custom_postype');