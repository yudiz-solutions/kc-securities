<?php

/**
 * Template Name: Investor Charter Page html
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-charter-banner.jpg">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">Investor Charter</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Investor Charter section start --------------------------------->
<section class="investor-charter-section custom-padding m-0">
    <div class="container">
        <div class="investor-charter-tabing custom-tabing">
            <ul class="tabs">
                <li class="active" rel="tab1"><button class="nav-link-tab">Stock Brokers</button></li>
                <li rel="tab2"><button class="nav-link-tab">Depository Participant</button></li>
                <li rel="tab3"><button class="nav-link-tab">Research Analyst</button></li>
            </ul>

            <div class="tab_container">
                <button  class="d_active tab_drawer_heading" rel="tab1">Stock Brokers</button>
                <div id="tab1" class="tab_content">
                    <div class="investor-wrapper-part investor-point custom-point custom-table">
                        <h6>Services Provided to Investors</h6>
                        <ul>
                            <li>Execution of trades on behalf of investors.</li>
                            <li>Issuance of Contract Notes.</li>
                            <li>Settlement of client’s funds.</li>
                            <li>Issuance of retention statement of funds.</li>
                            <li>Information sharing with the client w.r.t. exchange circulars.</li>
                            <li>Redressal of Investor’s grievances.</li>
                            <li>Issuance of intimations regarding margin due payments.</li>
                            <li>Facilitate execution of early pay-in obligation instructions.</li>
                            <li>Risk management systems to mitigate operational and market risk.</li>
                            <li>Facilitate client profile changes in the system as instructed by the client.</li>
                            <li>Intimation of securities held in Client Unpaid Securities Account (CUSA) Account.</li>
                        </ul>
                        <h6>Rights of Investors</h6>
                        <ul>
                            <li>Ask for and receive information from a firm about the work history and background of the person handling your account, as well as information about the firm itself.</li>
                            <li>Receive complete information about the risks, obligations, and costs of any investment before investing.</li>
                            <li>Receive recommendations consistent with your financial needs and investment objectives.</li>
                            <li>Discuss your grievances with compliance officer of the firm and receive prompt attention to and fair consideration of your concerns.</li>
                            <li>Receive a copy of all completed account forms and agreements.</li>
                            <li>Receive account statements that are accurate and understandable.</li>
                            <li>Access your funds in a timely manner and receive information about any restrictions or limitations on access.</li>
                            <li>Receive complete information about maintenance or service charges, transaction or redemption fees, and penalties.</li>
                            <li>Understand the terms and conditions of transactions you undertake.</li>
                        </ul>
                        <h6>Various activities of Stock Brokers with timelines</h6>
                        <?php echo do_shortcode('[table id=2 /]');?>
                        <h6>DOs and DON’Ts for Investors</h6>
                        <?php echo do_shortcode('[table id=3 /]');?>
                        <h6>Grievance Redressal Mechanism</h6>
                        <p><strong>Level 1</strong></p>
                        <p>Approach the Stock Broker at the designated Investor Grievance e-mail ID of the stock broker. The Stock Broker will strive to redress the grievance immediately, but not later than 30 days of the receipt of the grievance.</p>
                        <p><strong>Level 2</strong></p>
                        <p>Approach the Stock Exchange using the grievance mechanism mentioned at the website of the respective exchange.</p>
                        <div class="inverstor-image">
                            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/graph-image.png" alt="Graph">
                        </div>
                        <h6>Timelines for complaint resolution process at Stock Exchanges against stock brokers</h6>
                         <?php echo do_shortcode('[table id=4 /]');?>
                        <h6>Handling of Investor’s claims / complaints in case of default of a Trading Member / Clearing Member (TM/CM)</h6>
                        <p><strong>Default of TM/CM</strong></p>
                        <p><b>Following steps are carried out by Stock Exchange for benefit of investor, in case stock broker defaults:</b></p>
                        <ul>
                            <li>Circular is issued to inform about declaration of Stock Broker as Defaulter.</li>
                            <li>Information of defaulter stock broker is disseminated on Stock Exchange website.</li>
                            <li>Public Notice is issued informing declaration of a stock broker as defaulter and inviting claims within specified period.</li>
                            <li>Intimation to clients of defaulter stock brokers via emails and SMS for facilitating lodging of claims within the specified period.</li>
                        </ul>
                        <p><b>Following information is available on Stock Exchange website for information of investors:</b></p>
                        <ul>
                            <li>Norms for eligibility of claims for compensation from IPF.</li>
                            <li>Claim form for lodging claim against defaulter stock broker.</li>
                            <li>FAQ on processing of investors’ claims against Defaulter stock broker.</li>
                            <li>Provision to check online status of client’s claim.</li>
                        </ul>
                        <p><strong>Level 3</strong></p>
                        <p>The complaint not redressed at Stock Broker / Stock Exchange level, may be lodged with SEBI on SCORES (a web based centralized grievance redressal system of SEBI) <a href="https://scores.gov.in/scores/Welcome.html">https://scores.gov.in/scores/Welcome.html</a></p>
                    </div>
                </div>
                <button  class="tab_drawer_heading" rel="tab2">Depository Participant</button>
                <div id="tab2" class="tab_content">
                    ...
                </div>
                <button  class="tab_drawer_heading" rel="tab3">Research Analyst</button>
                <div id="tab3" class="tab_content">
                    ....
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Investor Charter section End --------------------------------->



<?php

get_footer();
