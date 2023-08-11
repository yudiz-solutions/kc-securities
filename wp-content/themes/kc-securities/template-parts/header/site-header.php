<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
?>

<!-- 
<div class="heder-text-slide">

</ul>
</div> -->

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?> header-main">
	<div class="container">
		<div class="header-wrapper">
			<div class="header-log"><?php get_template_part( 'template-parts/header/site-branding' ); ?></div>
			
			<div class="header-navigation">
				<?php get_template_part( 'template-parts/header/site-nav' ); ?>
				 <div class="navigation-login">
					<?php dynamic_sidebar('navigation_login'); ?>
				 </div>
			</div>

			
		</div>
	</div>

	

</header><!-- #masthead -->
