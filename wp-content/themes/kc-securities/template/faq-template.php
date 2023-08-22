<?php

/**
 * Template Name: FAQ template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/faq-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center">
            <h1 class="title-style-1">FAQ’s</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- FAQ section Start --------------------------------->
<section class="faq-section custom-padding common-star-shape-right m-0">
    <div class="container">
        <div class="faq-tabing custom-tabing">
            <ul class="tabs">
                <li class="active" rel="tab1"><button class="nav-link-tab">Derivatives</button></li>
                <li rel="tab2"><button class="nav-link-tab">Currency</button></li>
                <li rel="tab3"><button class="nav-link-tab">NRI</button></li>
            </ul>
            <div class="tab_container">
                
                <button  class="d_active tab_drawer_heading" rel="tab1">Derivatives</button>
                <div id="tab1" class="tab_content">
                    <div class="accordion custom-accordion" id="accordionDerivatives">
                        <div class="accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are Derivatives?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionDerivatives">
                                <div class="accordion-body faq-body custom-point">
                                    <p>The term "Derivative" indicates that it has no independent value, i.e. its value is entirely "derived" from the value of the underlying asset. The underlying asset can be Securities, Commodities, Bullion, Currency, Livestock or anything else. In other words, Derivative means a forward, future, option or any other hybrid contract of pre-determined fixed duration, linked for the purpose of contract fulfillment to the value of a specified real or financial asset or to an index of securities.</p>
                                    <p>With Securities Laws (Second Amendment) Act, 1999, Derivatives has been included in the definition of Securities. The term Derivative has been defined in Securities Contracts (Regulations) Act, as :</p>
                                    <ul>
                                        <li>A security derived from a debt instrument, share, loan, whether secured or unsecured, risk instrument or contract for differences or any other form of security.</li>
                                        <li>A contract which derives its value from the prices, or index of prices, of underlying securities.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is a Futures Contract?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionDerivatives">
                                <div class="accordion-body faq-body custom-point">
                                    <p>Futures Contract means a legally binding agreement to buy or sell the underlying security on a future date. Future contracts are the organized/standardized contracts in terms of quantity, quality (in case of commodities), delivery time and place for settlement on any date in future. The contract expires on a pre-specified date which is called the expiry date of the contract. On expiry, futures can be settled by delivery of the underlying asset or cash. Cash settlement enables the settlement of obligations arising out of the future/option contract in cash.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    What is an Option Contract?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionDerivatives">
                                <div class="accordion-body faq-body custom-point">
                                    <p>Option Contract is a type of Derivatives Contract which gives the buyer/holder of the contract the right (but not the obligation) to buy/sell the underlying asset at a predetermined price within or at end of a specified period. The buyer/holder of the option purchases the right from the seller/writer for a consideration which is called the premium. The seller/writer of an option is obligated to settle the option as per the terms of the contract when the buyer/holder exercises his right. The underlying asset could include securities, an index of prices of securities etc.</p>
                                    <p>Under Securities Contracts (Regulations) Act, 1956 options on securities has been defined as "option in securities" means a contract for the purchase or sale of a right to buy or sell, or a right to buy and sell, securities in future, and includes a teji, a mandi, a teji mandi, a galli, a put, a call or a put and call in securities.</p>
                                    <p>An Option to buy is called Call option and option to sell is called Put option. Further, if an option that is exercisable on or before the expiry date is called American option and one that is exercisable only on expiry date, is called European option. The price at which the option is to be exercised is called Strike price or Exercise price.</p>
                                    <p>Therefore, in the case of American options the buyer has the right to exercise the option at any time on or before the expiry date. This request for exercise is submitted to the Exchange, which randomly assigns the exercise request to the sellers of the options, who are obligated to settle the terms of the contract within a specified time frame.</p>
                                    <p>As in the case of futures contracts, option contracts can be also be settled by delivery of the underlying asset or cash. However, unlike futures cash settlement in option contract entails paying/receiving the difference between the strikes price/exercise price and the price of the underlying asset either at the time of expiry of the contract or at the time of exercise / assignment of the option contract.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    What are Index Futures and Index Option Contracts?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionDerivatives">
                                <div class="accordion-body faq-body custom-point">
                                    <p>Futures contract based on an index i.e. the underlying asset is the index, are known as Index Futures Contracts. For example, futures contract on NIFTY Index and BSE-30 Index. These contracts derive their value from the value of the underlying index.</p>
                                    <p>Similarly, the options contracts, which are based on some index, are known as Index options contract. However, unlike Index Futures, the buyer of Index Option Contracts has only the right but not the obligation to buy / sell the underlying index on expiry. Index Option Contracts are generally European Style options i.e. they can be exercised / assigned only on the expiry date.</p>
                                    <p>An index, in turn derives its value from the prices of securities that constitute the index and is created to represent the sentiments of the market as a whole or of a particular sector of the economy. Indices that represent the whole market are broad based indices and those that represent a particular sector are sectoral indices. In the beginning futures and options were permitted only on S&P Nifty and BSE Sensex. Subsequently, sectoral indices were also permitted for derivatives trading subject to fulfilling the eligibility criteria. Derivative contracts may be permitted on an index if 80% of the index constituents are individually eligible for derivatives trading. However, no single ineligible stock in the index shall have a weightage of more than 5% in the index. The index is required to fulfill the eligibility criteria even after derivatives trading on the index have begun. If the index does not fulfill the criteria for 3 consecutive months, then derivative contracts on such index would be discontinued.</p>
                                    <p>By its very nature, index cannot be delivered on maturity of the Index futures or Index option contracts therefore, these contracts are essentially cash settled on Expiry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    What is the structure of derivatives markets in India?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionDerivatives">
                                <div class="accordion-body faq-body custom-point">
                                   <p>Derivative trading in India takes can place either on a separate and independent Derivative Exchange or on a separate segment of an existing Stock Exchange. Derivative Exchange/Segment function as a Self-Regulatory Organization (SRO) and SEBI acts as the oversight regulator. The clearing & settlement of all trades on the Derivative Exchange/Segment would have to be through a Clearing Corporation/House, which is independent in governance and membership from the Derivative Exchange/Segment.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    What is the regulatory framework of derivatives markets in India?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionDerivatives">
                                <div class="accordion-body faq-body custom-point">
                                   <p>With the amendment in the definition of ''securities'' under SC(R)A (to include derivative contracts in the definition of securities), derivatives trading takes place under the provisions of the Securities Contracts (Regulation) Act, 1956 and the Securities and Exchange Board of India Act, 1992.</p>
                                   <p>Dr. L.C Gupta Committee constituted by SEBI had laid down the regulatory framework for derivative trading in India. SEBI has also framed suggestive bye-law for Derivative Exchanges/Segments and their Clearing Corporation/House which lays down the provisions for trading and settlement of derivative contracts. The Rules, Bye-laws & Regulations of the Derivative Segment of the Exchanges and their Clearing Corporation/House have to be framed in line with the suggestive Bye-laws. SEBI has also laid the eligibility conditions for Derivative Exchange/Segment and its Clearing Corporation/House. The eligibility conditions have been framed to ensure that Derivative Exchange/Segment & Clearing Corporation/House provide a transparent trading environment, safety & integrity and provide facilities for redressal of investor grievances. Some of the important eligibility conditions are -</p>
                                  <ul>
                                        <li> Derivative trading to take place through an online screen based Trading System. </li>
                                        <li> The Derivatives Exchange/Segment shall have online surveillance capability to monitor positions, prices, and volumes on a real time basis to deter market manipulation. </li>
                                        <li> The Derivatives Exchange/ Segment should have arrangements for dissemination of information about trades, quantities and quotes on a real time basis through atleast two information vending networks, which are easily accessible to investors across the country. </li>
                                        <li> The Derivatives Exchange/Segment should have arbitration and investor grievances redressal mechanism operative from all the four areas / regions of the country. </li>
                                        <li> The Derivatives Exchange/Segment should have satisfactory system of monitoring investor complaints and preventing irregularities in trading. </li>
                                        <li> The Derivative Segment of the Exchange would have a separate Investor Protection Fund. </li>
                                        <li> The Clearing Corporation/House shall perform full novation, i.e. the Clearing Corporation/House shall interpose itself between both legs of every trade, becoming the legal counterparty to both or alternatively should provide an unconditional guarantee for settlement of all trades. </li>
                                        <li> The Clearing Corporation/House shall have the capacity to monitor the overall position of Members across both derivatives market and the underlying securities market for those Members who are participating in both. </li>
                                        <li> The level of initial margin on Index Futures Contracts shall be related to the risk of loss on the position. The concept of value-at-risk shall be used in calculating required level of initial margins. The initial margins should be large enough to cover the one-day loss that can be encountered on the position on 99% of the days. </li>
                                        <li> The Clearing Corporation/House shall establish facilities for electronic funds transfer (EFT) for swift movement of margin payments. </li>
                                        <li> In the event of a Member defaulting in meeting its liabilities, the Clearing Corporation/House shall transfer client positions and assets to another solvent Member or close-out all open positions. </li>
                                        <li> The Clearing Corporation/House should have capabilities to segregate initial margins deposited by Clearing Members for trades on their own account and on account of his client. The Clearing Corporation/House shall hold the clients’ margin money in trust for the client purposes only and should not allow its diversion for any other purpose. </li>
                                        <li> The Clearing Corporation/House shall have a separate Trade Guarantee Fund for the trades executed on Derivative Exchange / Segment. </li>
                                        <li> Presently, SEBI has permitted Derivative Trading on the Derivative Segment of BSE and the F&O Segment of NSE. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button  class="tab_drawer_heading" rel="tab2">Currency</button>
                <div id="tab2" class="tab_content">
                    <div class="accordion custom-accordion" id="accordionCurrency">
                        <div class="accordion-item active">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    What is Forex?
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionCurrency">
                                <div class="accordion-body faq-body custom-point">
                                   <p>Foreign exchange is the simultaneous buying of one currency and selling of another. Currencies are traded through a broker or dealer and are executed in currency pairs. For example: the Euro and the US Dollar (EUR/USD) or the British Pound and the Japanese Yen (GBP/JPY). The Foreign Exchange Market (Forex) is the largest financial market in the world, with a daily volume of over $4 trillion. This is more than three times the total amount of the stocks and futures markets combined. Unlike other financial markets, the Forex spot market has neither a physical location nor a central exchange. It operates through an electronic network of banks, corporations, and individuals trading one currency for another. The lack of a physical exchange enables the Forex market to operate on a 24-hour basis, spanning from one time zone to another across the major financial centers. This fact - that there is no centralized exchange - is important to keep in mind as it permeates all aspects of the Forex experience.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    What is a Spot Market?
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionCurrency">
                                <div class="accordion-body faq-body custom-point">
                                   <p>A Spot Market is any market that deals in the current price of a financial instrument. Futures markets, such as the Chicago Mercantile Exchange (CME), National Stock Exchange (NSE), MCX' SX, BSE offer currency futures contracts whose delivery dates may span several months into the future. Settlement of Forex spot transactions usually occurs within two business days.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Who trades in Foreign Exchanges?
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionCurrency">
                                <div class="accordion-body faq-body custom-point">
                                   <p>There are two main groups that trade in currencies. About 5-10% of daily volume is from companies and governments that buy or sell products and services in a foreign country and must subsequently convert profits made in foreign currencies into their own domestic currency in the course of doing business. This is primarily hedging activity. The other 90-95% consists of investors trading for profit, or speculation. Speculators range from large banks trading 10,000,000 million currency units or more and the home-based operator trading perhaps 10,000 units or less. Today, importers and exporters, international portfolio managers, multinational corporations, speculators, day traders, long-term holders, and hedge funds all use the FOREX market to pay for goods and services, to transact in financial assets, or to reduce the risk of currency movements by hedging their exposure in other markets. The speculator trades to make a profit by purchasing one currency and simultaneously selling another. The hedger trades to protect his or her margin on an international sale from adverse currency fluctuations. The hedger has an intrinsic interest in one side of the market or the other. The speculator does not.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                    Who can trade in Currency Futures markets in India?
                                </button>
                            </h2>
                            <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionCurrency">
                                <div class="accordion-body faq-body custom-point">
                                    <p>Any resident Indian or company including banks and financial institutions can participate in the futures market. However, at present, Foreign Institutional Investors (FIIs) and Non-Resident Indians (NRIs) are not permitted to participate in currency futures market.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingfive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    How are currency prices determined?
                                </button>
                            </h2>
                            <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionCurrency">
                                <div class="accordion-body faq-body custom-point">
                                    <p>Currency prices are affected by a variety of economic and political conditions, but probably the most important are interest rates, international trade, inflation, and political stability. Sometimes governments actually participate in the foreign exchange market to influence the value of their currencies. They do this either by flooding the market with their domestic currency in an attempt to lower the price or, conversely, buying in order to raise the price. This is known as Central Bank Intervention. Any of these factors, as well as large market orders, can cause high volatility in currency prices. However, the size and volume of the Forex market make it impossible for any one entity to drive the market for any length of time.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingsix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                    What are the major fundamental factors that affect currency movements?
                                </button>
                            </h2>
                            <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionCurrency">
                                <div class="accordion-body faq-body custom-point">
                                   <ul>
                                        <li><strong>Trade Balance :</strong> This refers to imports and exports, and is probably the most important determinant of a currency's value. When imports are greater than exports, you have a trade deficit. When exports are greater than imports, you have a surplus. A shift in the trade balance between two countries tends to weaken the currency of the country with greater deficit.</li>
                                        <li><strong>Wealth :</strong> Wealth is a country's reserves, in the form of gold, cash, natural resources, and so on. Any factor that affects a country's ability to repay loans, finance imports, and affect investments affects the market's perception of its currency and the currency's value.</li>
                                        <li><strong>Internal Budget Deficit or Surplus :</strong> A country running a current account deficit has, on balance, a weaker currency than one that runs a budget surplus. This is tricky, however, in that the direction of the surplus or deficit affects perceptions and currency valuations too.</li>
                                        <li><strong>Interest Rates :</strong> Funds travel globally in electronic format responding to changes in short-term interest rates. If three-month interest rates in Germany are running 1% less than three-month rates in the United States, then all other things being equal, ‘hot money’ flows out of Euro into the Dollar.</li>
                                        <li><strong>Inflation :</strong> Inflation in each country and inflationary expectations, affect currency values.</li>
                                        <li><strong>Political factors :</strong> Taxes, stability and other factors that affect the international trade of a country or the perception of ‘soundness’ of the currency affect its valuation.</li>
                                   </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button  class="tab_drawer_heading" rel="tab3">NRI</button>
                <div id="tab3" class="tab_content">
                    <div class="accordion custom-accordion" id="accordionNRI">
                            <div class="accordion-item active">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Who is a Non-Resident Indian (NRI)?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionNRI">
                                    <div class="accordion-body faq-body custom-point">
                                       <p>A Non- Resident Indian (NRI) means a 'person resident outside India' who is a citizen of India or is a 'person of Indian origin'.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Who is a 'person resident outside India'?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionNRI">
                                    <div class="accordion-body faq-body custom-point">
                                        <p>Under the Foreign Exchange Management Act, 1999 (FEMA), a person who is NOT a ‘person resident in India’, as defined under Section 2 (v) of the Act is considered as a ‘person resident outside India’. The most important change in definition (since FERA 1973) is that the citizenship of a person no longer has a bearing in determination of residential status.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Who is a ‘person of Indian origin’ (PIO)?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionNRI">
                                    <div class="accordion-body faq-body custom-point">
                                        <p>'Person of Indian Origin' (PIO) means a citizen of any country other than Bangladesh or Pakistan, if :</p>
                                        <ul>
                                            <li>That person at any time held Indian passport; or</li>
                                            <li>That person or either of his/her parents or any of his/her grandparents was a citizen of India by virtue of the Constitution of India or the Citizenship Act, 1955; or</li>
                                            <li>C) The person is a spouse of an Indian citizen or a person referred to in sub-clause (A) or (B).</li>
                                        </ul>
                                        <p> Investment by PIO in Indian Securities is treated the same as the investment by non-resident Indians and requires same approvals and enjoys the same exemptions.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfour">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                        Where can an NRI/PIO open a demat account?
                                    </button>
                                </h2>
                                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionNRI">
                                    <div class="accordion-body faq-body custom-point">
                                        <p>NNRI/PIO can open a Demat A/C with any Depository Participant (DP) of NSDL/CDSL.( Angel Broking Ltd is a depository participant of CDSL). The NRI/PIO needs to mention the type (‘NRI’ as compared to ‘Resident’) and the sub-type (‘Repatriable’ or ‘Non-Repatriable’) in the account opening form collected from the DP.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingfive">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                        What is the process for NRI to invest in Indian Capital Markets?
                                    </button>
                                </h2>
                                <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive" data-bs-parent="#accordionNRI">
                                    <div class="accordion-body faq-body custom-point">
                                        <p>Following is the process for NRI to invest in Indian Capital Markets :</p>
                                        <ul>
                                            <li>Open a bank account with a designated bank branch approved by RBI.</li>
                                            <li>Apply for a general approval for investment in Indian Stock Market through the bank branch.</li>
                                            <li>Open a Demat A/C with a depository participant to act as registered holder of securities.</li>
                                            <li>Open account with registered Broking Firm to execute transactions.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingsix">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                        What is a P.I.S. Account?
                                    </button>
                                </h2>
                                <div id="collapsesix" class="accordion-collapse collapse" aria-labelledby="headingsix" data-bs-parent="#accordionNRI">
                                    <div class="accordion-body faq-body custom-point">
                                        <p>Portfolio Investment Scheme (PIS) is a scheme of the Reserve Bank of India (RBI) defined in Schedule 3 of Foreign Exchange Management Act 2000 under which the ‘Non Resident Indians’ and ‘Person of Indian Origin’ can purchase and sell shares and convertible debentures of Indian Companies on a recognized stock exchange in India by routing all such purchase/sale transactions through their account held with a Designated Bank Branch.</p>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- FAQ section End --------------------------------->

<?php

get_footer();
