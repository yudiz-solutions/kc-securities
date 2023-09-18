<?php

/**
 * Template Name: Mutual Funds Page html
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section mutual-fund-banner m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/mutual-funds-banner.jpg">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">Mutual Funds</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Mutual Fund Start --------------------------------->
<section class="mutual-fund-section custom-padding common-star-shape m-0">
    <div class="container">
        <div class="accordion custom-accordion wow fadeInUp" id="accordionmutual">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What is a Mutual Fund?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionmutual">
                    <div class="accordion-body ">
                        <div class="mutual-part custom-table">
                            <p>A mutual fund is a collective investment vehicle that collects & pools money from a number of investors and invests the same in equities, bonds, government securities, money market instruments. The money collected in mutual fund scheme is invested by professional fund managers in stocks and bonds etc.</p>
                           <?php echo do_shortcode('[table id=1 /]');?>
                            <h6>Managed by an Asset Management Company (AMC)</h6>
                            <p>The company that puts together a mutual fund is called an AMC. An AMC may have several mutual fund schemes with similar or varied investment objectives. The AMC hires a professional money manager, who buys and sells securities in line with the fund's stated objective.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Mutual funds and their Basics
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionmutual">
                    <div class="accordion-body">
                        <div class="mutual-part mutual-part custom-table">
                            <h6>1. Net Asset Value or NAV:</h6>
                            <p>NAV is the total asset value (net of expenses) per unit of the fund and is calculated by the AMC at the end of every business day.</p>
                            <h6>2. How is NAV calculated ?</h6>
                            <p>The value of all the securities in the portfolio in calculated daily. From this, all expenses are deducted and the resultant value divided by the number of units in the fund is the fund’s NAV.</p>
                            <h6>3. Expense Ratio:</h6>
                            <p>AMCs charge an annual fee, or expense ratio that covers administrative expenses, salaries, advertising expenses, brokerage fee, etc. A 1.5% expense ratio means the AMC charges Rs1.50 for every Rs100 in assets under management. A fund's expense ratio is typically to the size of the funds under management and not to the returns earned.</p>
                            <h6>4. Load:</h6>
                            <p>Some AMCs have sales charges, or loads, on their funds (entry load and/or exit load) to compensate for distribution costs. Funds that can be purchased without a sales charge are called no-load funds.</p>
                            <h6>Open- and Close-Ended Funds:</h6>
                            <h6>a) Open-Ended Funds:</h6>
                            <p>At any time during the scheme period, investors can enter and exit the fund scheme (by buying/ selling fund units) at its NAV (net of any load charge). Increasingly, AMCs are issuing mostly open-ended funds.</p>
                            <h6>b) Close-Ended Funds:</h6>
                            <p>Redemption can take place only after the period of the scheme is over. However, close-ended funds are listed on the stock exchanges and investors can buy/ sell units in the secondary market (there is no load).</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Why Invest through Mutual Funds?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionmutual">
                    <div class="accordion-body">
                        <div class="mutual-part mutual-part custom-table">
                            <h6>Professional Money Management:</h6>
                            <p>Fund managers monitor market and economic trends and analyze securities in order to make informed investment decisions.</p>
                            <h6>Diversification:</h6>
                            <p>Diversification is one of the best ways to reduce risk (to understand why, read the need to Diversify). Mutual funds offer investors an opportunity to diversify across assets depending on their investment needs.</p>
                            <h6>Liquidity:</h6>
                            <p>Investors can sell their mutual fund units on any business day and receive the current market value on their investments within a short time period (normally three- to five-days).</p>
                            <h6>Affordability:</h6>
                            <p>The minimum initial investment for a mutual fund is fairly low for most funds (as low as Rs500 for some schemes).</p>
                            <h6>Convenience:</h6>
                            <p>Most private sector funds provide you the convenience of periodic purchase plans, automatic withdrawal plans and the automatic reinvestment of interest and dividends. Mutual funds also provide you with detailed reports and statements that make record-keeping simple. You can easily monitor the performance of your mutual funds simply by reviewing the business pages of most newspapers or by using our Mutual Funds section.</p>
                            <h6>Flexibility and variety:</h6>
                            <p>You can pick from conservative, blue-chip stock funds, sectoral funds, funds that aim to provide income with modest growth or those that take big risks in the search for returns. You can even buy balanced funds, or those that combine stocks and bonds in the same fund.</p>
                            <h6>Tax benefits on Investment in Mutual Funds :</h6>
                            <ol>
                                <li>100% Income Tax exemption on all Mutual Fund dividends</li>
                                <li>Equity Funds - Short term capital gains is taxed at 15%. Long term capital gains is not applicable.Debt Funds - Short term capital gains is taxed as per the slab rates applicable to you. Long term capital gains tax to be lower of - 10% on the capital gains without factoring i ndexation benefit and 20% on the capital gains after factoring indexation benefit.</li>
                                <li>Open-end funds with equity exposure of more than 65% (Revised from 50% to 65% in Budget 2006) are exempt from the payment of dividend tax for a period of 3 years from 1999-2000.</li>
                            </ol>
                            <button class="primary-button">More Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Mutual Fund End --------------------------------->


<?php

get_footer();
