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


<div class="heder-text-slide">
	 <ul>
		<li>No need to issue cheques by investors while subscribing to IPO. Just write the bank account number and sign in the application form to authorise your bank to make payment in case of allotment.No worries for refund as the money remains in investor's account.</li>
		<li>Attention Investors, Prevent unauthorized transactions in your Trading/ Demat account --> Update your mobile numbers/email IDs with your stock brokers/ Depository Participant. Receive information/alerts for all transactions directly from Exchange / CDSL on your mobile/email at the end of the day and receive OTP directly from depository on your email id and/or mobile number to create pledge........... Issued in the interest of investors.</li>
	 </ul>
</div>

<header id="masthead" class="<?php echo esc_attr( $wrapper_classes ); ?> header-main">
	<div class="container">
		<div class="header-wrapper">
			<div class="header-log"><?php get_template_part( 'template-parts/header/site-branding' ); ?></div>
			
			<div class="header-navigation">
				<?php get_template_part( 'template-parts/header/site-nav' ); ?>
			</div>
			
		</div>
	</div>

	

</header><!-- #masthead -->
