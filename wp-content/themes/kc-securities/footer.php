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
                    <div class="row g-sm-4 g-2">
                        <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-logo-main-part">
                                <div class="footer-logo">
                                    <?php dynamic_sidebar('footer_logo'); ?>
                                </div>
                                <div class="get-kc-app-icon-part">
                                    <?php dynamic_sidebar('footer_kc-trade_icon'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6">
                            <div class="footer-quick-link quick-wrapper d-sm-block d-none">
                                <?php dynamic_sidebar('footer_quick_link'); ?>
                            </div>

                            <div class="footer-accrodion footer-quick-link footer-contact-us d-sm-none d-block">
                                <div class="accordion" id="accordionExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            Quick Links
                                        </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php dynamic_sidebar('footer_quick_link'); ?>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Products & Services
                                        </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php dynamic_sidebar('footer_product_link'); ?>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                           Contact Us
                                        </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <?php dynamic_sidebar('footer_contact_us'); ?>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 d-sm-block d-none">
                            <div class="footer-quick-link product-link-wrapper">
                                <?php dynamic_sidebar('footer_product_link'); ?>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 d-sm-block d-none">
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
            <!--Bottom-to-top-->
        <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
        </div>
		
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
