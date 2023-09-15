<?php

/**
 * Template Name: Product & Services Page html
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/product-banner.jpg">
    <div class="container">
        <div class="sub-banner-caption text-center">
            <h1 class="title-style-1">Product & Services</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Product & Services section start --------------------------------->
<section class="product-services-main custom-padding common-star-shape m-0">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 col-sm-6">
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
            <div class="col-lg-4 col-md-6 col-sm-6">
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
            <div class="col-lg-4 col-md-6 col-sm-6">
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
            <div class="col-lg-4 col-md-6 col-sm-6">
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
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
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
            <div class="col-lg-4 col-md-6 col-sm-6">
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
      
    </div>
</section>


<!--------------------------------- Product & Services section End --------------------------------->



<?php

get_footer();
