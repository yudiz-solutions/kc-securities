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
<section class="corporate-address-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 align-self-center">
                <div class="corporate-wrapper">
                    <h4 class="title-style-4">Corporate Office</h4>
                    <div class="corporate-address-box">
                        <div class="address-box-icon">
                            <span>
                                <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/location-contact.svg" alt="location">
                            </span>
                        </div>
                        <div class="corporate-content">
                            <p>7th Floor, Sangita Ellipse Plot No. 32,<br> Tajpal Scheme Sahakar Road, Vile Parle(E) Mumbai,<br> Mumbai, Maharashtra 400057</p>
                        </div>
                    </div>
                    <div class="corporate-address-box">
                        <div class="address-box-icon">
                            <span>
                                <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/call-contact.svg" alt="Call Us">
                            </span>
                        </div>
                        <div class="corporate-content">
                            <p><strong>Call Us</strong></p>
                            <p><a href="tel:02267236035">022-6723-6035</a>/<a href="tel:02267236152">6152</a></p>
                        </div>
                    </div>
                    <div class="corporate-address-box">
                        <div class="address-box-icon">
                            <span>
                                <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/email-contact.svg" alt="Email Us">
                            </span>
                        </div>
                        <div class="corporate-content">
                            <p><strong>Email Us</strong></p>
                            <p>support@kcsecurities.com</p>
                        </div>
                    </div>
                    <div class="last-content">
                        <a href="#" class="know-btn">Investor Grievance Escalation Matrix</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="corporate-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3769.972496153316!2d72.84869482563428!3d19.10886248210249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c9487903c82b%3A0xa83ea0e92cb3ec27!2sKantilal%20Chhaganlal%20Securities%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1692361493237!5m2!1sen!2sin" width="100%" style="border:0; border-radius: 24px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
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
                    <!-- <option value="hide">Select Year</option> -->
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Kolkata">Kolkata</option>
                    <option value="Nagpur">Nagpur</option>
                    <option value="Indore">Indore</option>
                </select>               
            </div>
        </div>
        <div class="contact-different-wrapper wow fadeInUp">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-left-image">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/gateway-india.jpg" alt="Gateway India">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right-address">
                        <h4 class="title-style-4">Head Office</h4>
                        <div class="corporate-address-box">
                            <div class="address-box-icon">
                                <span>
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/location-contact.svg" alt="location">
                                </span>
                            </div>
                            <div class="corporate-content">
                                <p>7th Floor, Sangita Ellipse Plot No. 32,<br> Tajpal Scheme Sahakar Road, Vile Parle(E) Mumbai,<br> Mumbai, Maharashtra 400057</p>
                            </div>
                        </div>
                        <div class="corporate-address-box">
                            <div class="address-box-icon">
                                <span>
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/call-contact.svg" alt="Call Us">
                                </span>
                            </div>
                            <div class="corporate-content">
                                <p><strong>Call Us</strong></p>
                                <p><a href="tel:02267236035">022-6723-6035</a>/<a href="tel:02267236152">6152</a></p>
                            </div>
                        </div>
                        <div class="corporate-address-box">
                            <div class="address-box-icon">
                                <span>
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/email-contact.svg" alt="Email Us">
                                </span>
                                </div>
                            <div class="corporate-content">
                                <p><strong>Email Us</strong></p>
                                <p><a href="mailto:chetan.shah@kcsecurities.com">chetan.shah@kcsecurities.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------------------------- contact address section Start --------------------------------->


<?php

get_footer();
