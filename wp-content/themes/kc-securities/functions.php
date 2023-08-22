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
	wp_enqueue_script('Marquee-js', 'https://www.jqueryscript.net/demo/jQuery-Plugin-For-Horizontal-Text-Scrolling-Simple-Marquee/marquee.js');
	wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js');

	wp_enqueue_script('jquery-bootstrap-main-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('jquery-popper-min-js', get_stylesheet_directory_uri() . '/assets/js/popper.min.js');
	wp_enqueue_script('jquery-slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
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

