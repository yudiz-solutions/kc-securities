<?php

/**
 * Template Name: Contact Us Page template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section contact-banner m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/contact-us-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center">
            <h1 class="title-style-1">Contact Us</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Corporate Office Start --------------------------------->
<section class="corporate-address-section custom-padding m-0">
    <div class="container">
        <div class="row g-4">
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
                            <p>7th Floor, Sangita Ellipse Plot No. 32, Tajpal Scheme Sahakar Road, Vile Parle(E) Mumbai, 400057</p>
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
                            <p><a href="tel:02267236000">022-6723-6000/</a><a href="tel:02267236001">6001</a></p>
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


<!--------------------------------- contact Form section Start --------------------------------->
<section class="contact-form-section custom-padding m-0 bg-2">
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-lg-8">
                 <div class="title-main text-center">
                    <h2 class="title-style-2">Connect With KC Securities</h2>
                </div>
                <div class="contact-form-wrapper">
                    <?php 
                        echo do_shortcode('[contact-form-7 id="bc401d0" title="Contact form"]');
                    ?>
                </div>
            </div>
       </div>
        
    </div>
</section>
<!--------------------------------- contact Form section End --------------------------------->


<!--------------------------------- contact address section Start --------------------------------->
<section class="contact-different-address common-star-shape-right custom-padding m-0">
    <div class="container">
        <div class="city-wrapper">
            <div class="form-grp custom-select ">
                <select id="city">
                    <!-- <option value="hide">Select Year</option> -->
                    <option value="Mumbai">Mumbai</option>
                    <option value="Delhi">Delhi</option>
                    <option value="2021">Ahemdabad</option>
                    <option value="2020">Kolkata</option>
                    <option value="2019">Nagpur</option>
                </select>               
            </div>
        </div>
        <div class="contact-different-wrapper">
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
                                <p>7th Floor, Sangita Ellipse Plot No. 32, Tajpal Scheme Sahakar Road, Vile Parle(E) Mumbai, 400057</p>
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
                                <p><a href="tel:02267236000">022-6723-6000/</a><a href="tel:02267236001">6001</a></p>
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
                                <p><a href="mailto:contactus@kcsecurities.com">contactus@kcsecurities.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="contact-different-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-left-image">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/ahmedabad.jpg" alt="Ahmedabad">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right-address">
                        <h4 class="title-style-4">Ahmedabad Branch</h4>
                        <div class="corporate-address-box">
                            <div class="address-box-icon">
                                <span>
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/location-contact.svg" alt="location">
                                </span>
                            </div>
                            <div class="corporate-content">
                                <p>9, Fourth Floor, Satguru Complex, Above Nike Show Room, Shivranjini Cross Road, Satellite, 132 ft Ring Road, Ahmedabad 380 015</p>
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
                                <p><a href="tel:07926928970">079-2692 8970/</a><a href="tel:07926928971">2692 8971</a></p>
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
                                <p><a href="mailto:ahmedabad@kcsecurities.com">ahmedabad@kcsecurities.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="contact-different-wrapper">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="contact-left-image">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/nagpur.jpg" alt="Nagpur">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-right-address">
                        <h4 class="title-style-4">Nagpur Branch</h4>
                        <div class="corporate-address-box">
                            <div class="address-box-icon">
                                <span>
                                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/location-contact.svg" alt="location">
                                </span>
                            </div>
                            <div class="corporate-content">
                                <p>110-112, Honey Archana Complex, Untkhana Road, Medical Square, Nagpur 440009.</p>
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
                                <p><a href="tel:07122743380">0712-2743380/</a><a href="tel:07122743381">81/</a><a href="tel:07122743382">82/</a>
                                <a href="07122743383">83/</a><a href="07122743384">84</a><a href="07122743385">85</a>
                                </p>
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
                                <p><a href="mailto:nagpur@kcsecurities.com">nagpur@kcsecurities.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
</section>

<!--------------------------------- contact address section Start --------------------------------->


<?php

get_footer();
