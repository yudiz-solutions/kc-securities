<?php

/**
 * Template Name: Home Page template
 */

get_header();
?>

<!--------------------------------- Banner Main Start --------------------------------->
<section class="banner-section m-0">
    <div>
        <div class="banner-inner"  style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/businessman-checking-reports-emails.jpg)">
            <div class="container">
                <div class="banner-caption wow fadeInUp">
                    <h1 class="title-style-1">Open Your Trading Account Today</h1>
                    <p>Welcome to a world of financial opportunities! Whether you're an experienced trader or just starting out.</p>
                    <a href="#" class="primary-button">Open an Account</a>
                </div>
            </div>
        </div>
    </div>
     <div>
        <div class="banner-inner" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/home-banner-2.jpg)">
              <div class="container">
                <div class="banner-caption wow fadeIn">
                    <h1 class="title-style-1">Let Us Help You to Plan Your Future</h1>
                    <p>We offer our clientele a bouquet of customized, end to end wealth management solutions.</p>
                    <a href="<?php echo home_url("backoffice-2"); ?>" class="primary-button">Backoffice Login</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Banner Main End --------------------------------->

<!--------------------------------- Products & Services Start --------------------------------->
<section class="product-services-section custom-padding common-star-shape m-0 ">
    <div class="container">
        <div class="title-main text-center">
            <h2 class="title-style-2 wow fadeInUp">Products & Services</h2>
        </div>
        <div class="product-wrapper wow fadeInUp">
            <div>
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/equities-derivatives.svg" alt="Equities Derivatives">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/equities-derivatives.svg" alt="Equities Derivatives">
                        </span>
                    </div>
                    <h6 class="title-style-6">Equities & Derivatives</h6>
                    <p>Kantilal Chhaganlal Securities’ long term association with the capital markets, backed by quality research.</p>
                    <a href="<?php echo home_url("equities-derivatives"); ?>" class="know-btn">Know More</a>
                </div>
            </div>
            <div>
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/commodities.svg" alt="commodities">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/commodities.svg" alt="commodities">
                        </span>
                    </div>
                    <h6 class="title-style-6">Commodities</h6>
                    <p>Commodities’ trading is a global phenomenon and offers tremendous potential to market participants for profit.</p>
                    <a href="<?php echo home_url("commodities"); ?>" class="know-btn">Know More</a>
                </div>
            </div>
            <div>
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/depository-services.svg" alt="Depository Services">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/depository-services.svg" alt="Depository Services">
                        </span>
                    </div>
                    <h6 class="title-style-6">Depository Services</h6>
                    <p>Kantilal Chhaganlal Securities is a Depository Participant of CDSL. Clients can open demat accounts with us by visiting.</p>
                    <a href="<?php echo home_url("depository-services"); ?>" class="know-btn">Know More</a>
                </div>
            </div>
            <div>
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/IPO.svg" alt="IPO">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/IPO.svg" alt="IPO">
                        </span>
                    </div>
                    <h6 class="title-style-6">IPO</h6>
                    <p>Unlock the power of seamless communication with our innovative Text-to-Place IPO (Initial Public Offering).</p>
                    <a href="<?php echo home_url("ipo"); ?>" class="know-btn">Know More</a>
                </div>
            </div><div>
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/currency-futures.svg" alt="Currency Futures">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/currency-futures.svg" alt="Currency Futures">
                        </span>
                    </div>
                    <h6 class="title-style-6">Currency Futures</h6>
                    <p>The launch of currency derivatives in India, recommended jointly by SEBI and RBI, opened one more lucrative avenue.</p>
                    <a href="<?php echo home_url("currency-features"); ?>" class="know-btn">Know More</a>
                </div>
            </div>
            <div>
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mutual-funds.svg" alt="Mutual Funds">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mutual-funds.svg" alt="Mutual Funds">
                        </span>
                    </div>
                    <h6 class="title-style-6">Mutual Funds</h6>
                    <p>A Mutual fund is a vehicle for investing in stocks and bonds. Mutual fund pools the money of several investors and invests.</p>
                    <a href="<?php echo home_url("mutual-funds"); ?>" class="know-btn">Know More</a>
                </div>
            </div>
        </div>
        <div class="slider-arrow-part">
			<div class="slick-prev slick-arrow"></div>
			<div class="slick-next slick-arrow"></div>
		</div>
      
    </div>
</section>

<!--------------------------------- Products & Services End --------------------------------->

<!--------------------------------- About KC Securities Start --------------------------------->
<section class="about-section custom-padding-bottom m-0">
    <div class="container">
        <div class="about-wrapper bg-1 wow fadeInUp">
            <div class="row g-0">
                <div class="col-lg-7 align-self-center">
                    <div class="about-content-wrapper">
                        <h2 class="title-style-2">About KC Securities</h2>
                        <div class="about-content">
                            <p>Established in 1954, Kantilal Chhaganlal Securities Pvt Ltd (KC), has more than six decades of market intermediation and transaction execution expertise. Over the years, KC has stood the test of time, has helped clients understand and simplify the investment process to achieve their financial goals.</p>
                            <p>Backed by the significant cumulative experience of the top management team, we offer our clientele a bouquet of customized, end to end financial solutions.</p>
                        </div>
                        <a href="<?php echo home_url("about"); ?>" class="know-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-images">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/about.jpg" alt="About">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- About KC Securities End --------------------------------->

<!--------------------------------- Investor Alerts and Compliance Start --------------------------------->
<section class="investor-alerts-section custom-padding m-0">
    <div class="container">
        <div class="title-main text-center">
            <h2 class="title-style-2 wow fadeInUp"> Investor Alerts and Compliance </h2>
        </div>
      
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-charter.svg" alt="Investor Charter">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-charter.svg" alt="Mutual Funds">
                        </span>
                    </div>
                    <h6 class="title-style-6">Investor Charter</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <a href="<?php echo home_url("investor-charter"); ?>" class="know-btn">Know More</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="common-box">
                    <div class="common-box-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/compliance.svg" alt="Compliance">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/compliance.svg" alt="Compliance">
                        </span>
                    </div>
                    <h6 class="title-style-6">Compliance</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                    <a href="<?php echo home_url("compliance-2"); ?>" class="know-btn">Know More</a>
                </div>
            </div>
        </div>
       
    </div>
</section>
<!--------------------------------- Investor Alerts and Compliance End --------------------------------->

<!--------------------------------- Filing Complaints on Scores Start --------------------------------->
<section class="filing-complaints-section custom-padding bg-1 m-0">
    <div class="container">
         <div class="title-main wow fadeInUp">
            <h2 class="title-style-2">Filing Complaints on Scores</h2>
            <a href="#" class="primary-button">Register on Scores Portal</a>
        </div>
        <div class="filing-wrapper wow fadeInUp">
            <div class="filing-box">
                <div class="filing-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/clock.svg" alt="Clock">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/clock.svg" alt="Clock">
                    </span>
                </div>
                <p>Easy and <br> Quick</p>
            </div>
            <div class="filing-box">
                <div class="filing-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mandatory-details.svg" alt="Mandatory Details">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mandatory-details.svg" alt="Mandatory Details">
                    </span>
                </div>
                <p>Mandatory Details for Filing Complaints on Scores</p>
            </div>
             <div class="filing-box">
                <div class="filing-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/effective-communication.svg" alt="Message">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/effective-communication.svg" alt="Message">
                    </span>
                </div>
                <p>Effective Communication</p>
            </div>
            <div class="filing-box">
                <div class="filing-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/speedy-redressal.svg" alt="Speedy Redressal">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/speedy-redressal.svg" alt="Speedy Redressal">
                    </span>
                </div>
                <p>Speedy Redressal of the Grievances</p>
            </div>
        </div>
        <div class="filing-button d-lg-none mt-4 text-center pt-2">
            <a href="#" class="primary-button">Register on Scores Portal</a>
        </div>
    </div>
</section>
<!--------------------------------- Filing Complaints on Scores End --------------------------------->

<!--------------------------------- Trade Online With KC Securities Start --------------------------------->
<section class="trade-section custom-padding m-0">
    <div class="container">
        <div class="title-main text-center wow fadeInUp">
            <h2 class="title-style-2">Trade Online With KC Securities</h2>
            <p>Extraordinary solution to manage your trade with ease</p>
        </div>
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 col-md-6">
                <div class="trade-wrapper-box">
                    <div class="trade-box-img">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mobile-trade.svg" alt="Trade">
                    </div>
                    <div class="trade-content">
                        <h6 class="title-style-6">KC iTrade</h6>
                        <a href="#" class="primary-button">Download App</a>
                    </div>
                </div>
            </div>
             <div class="col-lg-6 col-md-6">
                <div class="trade-wrapper-box">
                    <div class="trade-box-img">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mac-trade.svg" alt="Trade">
                    </div>
                    <div class="trade-content">
                        <h6 class="title-style-6">KC Internet Trading</h6>
                        <a href="<?php echo home_url("trade-online"); ?>" class="primary-button">Know More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Trade Online With KC Securities End --------------------------------->

<!--------------------------------- Common-part Start --------------------------------->
<section class="common-card bg-1 m-0">
    <div class="container">
        <div class="common-card-wrapper wow fadeInUp">
            <div>
                <a href="<?php echo home_url("mutual-funds"); ?>" class="common-filter">
                    <div class="common-filter-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mutual.svg" alt="Mutual Fund">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/mutual.svg" alt="Mutual Fund">
                        </span>
                    </div>
                    <p>Mutual Fund</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url("research"); ?>" class="common-filter">
                    <div class="common-filter-img">
                        <span>
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/research.svg" alt="Research">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/research.svg" alt="Research">
                        </span>
                    </div>
                    <p>Research</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url("backoffice-2"); ?>" class="common-filter">
                    <div class="common-filter-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/backoffice.svg" alt="Backoffice">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/backoffice.svg" alt="Backoffice">
                    </span>
                    </div>
                    <p>Backoffice</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url("partner-with-us"); ?>" class="common-filter">
                    <div class="common-filter-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/partner-with-us.svg" alt="Partner With Us">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/partner-with-us.svg" alt="Partner With Us">
                    </span>
                    </div>
                    <p>Partner With Us</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url("faqs"); ?>" class="common-filter">
                    <div class="common-filter-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/faqs.svg" alt="Faq’s">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/faqs.svg" alt="Faq’s">
                    </span>
                    </div>
                    <p>Faq’s</p>
                </a>
            </div>
            <div>
                <a href="<?php echo home_url("download"); ?>" class="common-filter">
                    <div class="common-filter-img">
                    <span>
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/download.svg" alt="Downloads">
                        <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/download.svg" alt="Downloads">
                    </span>
                    </div>
                    <p>Downloads</p>
                </a>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Common-part End --------------------------------->



<?php

get_footer();
