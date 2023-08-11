<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<footer id="colophon" class="site-footer w-100 mw-100 pb-0">
        <div class="footer-section m-0">
            <div class="container">
                <div class="footer-wrapper-first">
                    <div class="row">
                        <div class="col-lg-3" style="pa">
                            <div class="footer-logo">
								<?php dynamic_sidebar('footer_logo'); ?>
							</div>
                            <div class="get-kc-app-icon-part">
                                <?php dynamic_sidebar('footer_kc-trade_icon'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-quick-link quick-wrapper">
                                <?php dynamic_sidebar('footer_quick_link'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-quick-link product-link-wrapper">
                                <?php dynamic_sidebar('footer_product_link'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="footer-contact-us">
                                <?php dynamic_sidebar('footer_contact_us'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-group-of-companies">
                    <div class="company-heading">
                        <?php dynamic_sidebar('footer_group_name'); ?>
                    </div>
                    <div class="company-group-wrapper">
                        <?php dynamic_sidebar('footer_group_slider'); ?>
                    </div>
                </div>

                <div class="footer-inner-page-link">
                    <?php dynamic_sidebar('footer_inner_page_link'); ?>
                </div>

                <div class="footer-extra-content">
                    <?php dynamic_sidebar('footer_content'); ?>
                </div>
                <div class="footer-external-website-link">
                    <?php dynamic_sidebar('footer_external_website'); ?>
                </div>
            </div>
        </div>

        <div class="footer-copyright-section m-0">
            <div class="container">
                <div class="footer-copyright-wrapper">
                    <div class="footer-copyright-left">
                        <?php dynamic_sidebar('footer_copy_right_name'); ?>  
                    </div>
                    <div class="privacy-policy-right">
                        <?php dynamic_sidebar('footer_privancy_link'); ?>  
                    </div>
                </div>
            </div>
        </div>









		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
