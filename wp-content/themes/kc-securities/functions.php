<?php
if(!defined('KC_SECURITY_CHILD_URL')){
	define('KC_SECURITY_CHILD_URL', get_stylesheet_directory_uri() );
}
if(!defined('KC_SECURITY_CHILD_DIR')){
	define('KC_SECURITY_CHILD_DIR',get_stylesheet_directory() );
}

include KC_SECURITY_CHILD_DIR.'/include/class-kc-security-admin.php';
$Kc_Security_Admin = new Kc_Security_Admin();

include KC_SECURITY_CHILD_DIR.'/include/class-kc-security-public.php';
$Kc_Security_Public = new Kc_Security_Public();

include KC_SECURITY_CHILD_DIR.'/include/class-kc-security-shortcode.php';
$Kc_Security_Shortcodes = new Kc_Security_Shortcodes();


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
	wp_enqueue_style('select2-min', get_stylesheet_directory_uri() . '/assets/css/select2.min.css');
	wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/style.css', 999);

	// Scripts
	wp_enqueue_script('jquery-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js');
	wp_enqueue_script('jquery-bootstrap-main-js', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'));
	wp_enqueue_script('jquery-popper-min-js', get_stylesheet_directory_uri() . '/assets/js/popper.min.js');
	wp_enqueue_script('jquery-slick-js', get_stylesheet_directory_uri() . '/assets/js/slick.min.js');
	wp_enqueue_script('select2-min', get_stylesheet_directory_uri() . '/assets/js/select2.min.js');


	// wp_enqueue_script('Marquee-JS', "https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js", array(), null, null); // Marquee JS
	wp_enqueue_script('Marquee-JS-min', "https://cdnjs.cloudflare.com/ajax/libs/jQuery.Marquee/1.6.0/jquery.marquee.min.js", array(), null, null); // Marquee JS
	// wow 
	wp_enqueue_script('wow', get_stylesheet_directory_uri() . '/assets/js/wow.min.js');
	//custom js
	//wp_enqueue_script('custom_js', (get_stylesheet_directory_uri() . '/assets/js/custom.js'), array(), null, true);

	wp_register_script('custom_js', get_stylesheet_directory_uri(). '/assets/js/custom.js',array('jquery'), null, true);
	wp_localize_script('custom_js', 'location_filter', array('ajaxurl' => admin_url('admin-ajax.php')));
	wp_enqueue_script( 'custom_js' );

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
	else if(is_page_template('template/account-opening-process-template.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/account-opening-process.css', array(), null, false );
	}
	else if(is_page_template('template/offline-account-opening-template.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/account-opening-process.css', array(), null, false );
	}
	else if(is_page_template('template/online-account-opening-template.php')){
		wp_enqueue_style( 'product_css', get_stylesheet_directory_uri() . '/templates-css/account-opening-process.css', array(), null, false );
	}



}
add_action('wp_enqueue_scripts', 'enqueue_scripts', 9999);


/* -------------------------------------------------------------------
------------------------ ADD CUSTOM POST-TYPES -----------------------
------------------------------------------------------------------- */

/**
 * Registers the `Articles` post type.
 */
add_action( 'init', 'Articles_posttype_init' );
function Articles_posttype_init() {
	
	register_post_type( 'download', array(
		'labels'                	=> array(
			'name'                  => __( 'Download', 'kc-securities' ),
			'singular_name'         => __( 'Download', 'kc-securities' ),
			'all_items'             => __( 'All Download', 'kc-securities' ),
			'archives'              => __( 'Download Archives', 'kc-securities' ),
			'attributes'            => __( 'Download Attributes', 'kc-securities' ),
			'insert_into_item'      => __( 'Insert into Download', 'kc-securities' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Download', 'kc-securities' ),
			'featured_image'        => _x( 'Featured Image', 'Download', 'kc-securities' ),
			'set_featured_image'    => _x( 'Set featured image', 'Download', 'kc-securities' ),
			'remove_featured_image' => _x( 'Remove featured image', 'Download', 'kc-securities' ),
			'use_featured_image'    => _x( 'Use as featured image', 'Download', 'kc-securities' ),
			'filter_items_list'     => __( 'Filter Download list', 'kc-securities' ),
			'items_list_navigation' => __( 'Download list navigation', 'kc-securities' ),
			'items_list'            => __( 'Download list', 'kc-securities' ),
			'new_item'              => __( 'New Download', 'kc-securities' ),
			'add_new'               => __( 'Add New', 'kc-securities' ),
			'add_new_item'          => __( 'Add New Download', 'kc-securities' ),
			'edit_item'             => __( 'Edit Download', 'kc-securities' ),
			'view_item'             => __( 'View Download', 'kc-securities' ),
			'view_items'            => __( 'View Download', 'kc-securities' ),
			'search_items'          => __( 'Search Download', 'kc-securities' ),
			'not_found'             => __( 'No Download found', 'kc-securities' ),
			'not_found_in_trash'    => __( 'No Download found in trash', 'kc-securities' ),
			'parent_item_colon'     => __( 'Parent Download:', 'kc-securities' ),
			'menu_name'             => __( 'Download', 'kc-securities' ),
		),
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => 4,
		'exclude_from_search'   => false,
		'show_in_rest'          => false,
		'publicly_queryable'    => false,
		'menu_icon'             => 'dashicons-download',
		'taxonomies' => array( 'download_categories')
	) );

	register_taxonomy(
        'download_categories',
        'download',
        array(
			'show_admin_column' => true,
		   	'hierarchical' => true,
		   	'label' => 'Download Category',
		   	'show_ui' => true,
		   	'show_in_menu' => true,
		   	'show_in_nav_menus' => true,
		   	'query_var' => true,
		   	// 'rewrite' => array( 'slug' => 'articles-categories' ),
			'rewrite' => array(
				'with_front' => true,
				'hierarchical' => true,
				'slug' => 'download-categories',
			),
        )
    );

	

}



add_action( 'init', 'Articles_compliance_posttype_init' );
function Articles_compliance_posttype_init() {
	
	register_post_type( 'compliance', array(
		'labels'                	=> array(
			'name'                  => __( 'compliance', 'kc-securities' ),
			'singular_name'         => __( 'compliance', 'kc-securities' ),
			'all_items'             => __( 'All compliance', 'kc-securities' ),
			'archives'              => __( 'compliance Archives', 'kc-securities' ),
			'attributes'            => __( 'compliance Attributes', 'kc-securities' ),
			'insert_into_item'      => __( 'Insert into compliance', 'kc-securities' ),
			'uploaded_to_this_item' => __( 'Uploaded to this compliance', 'kc-securities' ),
			'featured_image'        => _x( 'Featured Image', 'compliance', 'kc-securities' ),
			'set_featured_image'    => _x( 'Set featured image', 'compliance', 'kc-securities' ),
			'remove_featured_image' => _x( 'Remove featured image', 'compliance', 'kc-securities' ),
			'use_featured_image'    => _x( 'Use as featured image', 'compliance', 'kc-securities' ),
			'filter_items_list'     => __( 'Filter compliance list', 'kc-securities' ),
			'items_list_navigation' => __( 'compliance list navigation', 'kc-securities' ),
			'items_list'            => __( 'compliance list', 'kc-securities' ),
			'new_item'              => __( 'New compliance', 'kc-securities' ),
			'add_new'               => __( 'Add New', 'kc-securities' ),
			'add_new_item'          => __( 'Add New compliance', 'kc-securities' ),
			'edit_item'             => __( 'Edit compliance', 'kc-securities' ),
			'view_item'             => __( 'View compliance', 'kc-securities' ),
			'view_items'            => __( 'View compliance', 'kc-securities' ),
			'search_items'          => __( 'Search compliance', 'kc-securities' ),
			'not_found'             => __( 'No compliance found', 'kc-securities' ),
			'not_found_in_trash'    => __( 'No compliance found in trash', 'kc-securities' ),
			'parent_item_colon'     => __( 'Parent compliance:', 'kc-securities' ),
			'menu_name'             => __( 'compliance', 'kc-securities' ),
		),
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'public'                => true,
		'hierarchical'          => false,
		'show_ui'               => true,
		'show_in_nav_menus'     => true,
		'has_archive'           => true,
		'rewrite'               => true,
		'query_var'             => true,
		'menu_position'         => 4,
		'exclude_from_search'   => false,
		'show_in_rest'          => false,
		'publicly_queryable'    => false,
		'menu_icon'             => 'dashicons-download',
		'taxonomies' => array( 'compliance_categories')
	) );

	register_taxonomy(
        'compliance_categories',
        'compliance',
        array(
			'show_admin_column' => true,
		   	'hierarchical' => true,
		   	'label' => 'Compliance Category',
		   	'show_ui' => true,
		   	'show_in_menu' => true,
		   	'show_in_nav_menus' => true,
		   	'query_var' => true,
		   	// 'rewrite' => array( 'slug' => 'articles-categories' ),
			'rewrite' => array(
				'with_front' => true,
				'hierarchical' => true,
				'slug' => 'compliance-categories',
			),
        )
    );

	

}

add_filter('upload_mimes', 'allow_custom_mimes');

function allow_custom_mimes ( $existing_mimes=array() ) {
// ' with mime type 'application/vnd.android.package-archive'
$existing_mimes['apk'] = 'application/vnd.android.package-archive';
return $existing_mimes;
}

function enable_extended_upload ( $mime_types =array() ) {

	// The MIME types listed here will be allowed in the media library.
	// You can add as many MIME types as you want.
	$mime_types['exe']  = 'application/exe'; 
	$mime_types['rar'] = 'application/vnd.rar';
	return $mime_types;
 } 
 add_filter('upload_mimes', 'enable_extended_upload');