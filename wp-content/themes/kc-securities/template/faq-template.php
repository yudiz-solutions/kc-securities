<?php

/**
 * Template Name: FAQ template
 */

get_header();
?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/faq-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">FAQ’s</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- FAQ section Start --------------------------------->
<section class="faq-section custom-padding common-star-shape-right m-0">
    <div class="container">
        <div class="faq-tabing custom-tabing wow fadeInUp">
            <ul class="tabs">
                <?php 
                        $tab_details = get_field('faq_tab_details');
                        if(isset($tab_details) && !empty($tab_details)){
                            $i=1;
                            foreach ($tab_details as $key => $value) {
                               $faq_tab_title = $value['faq_tab_title'];
                                    if(isset($faq_tab_title) && !empty($faq_tab_title)){
                                    ?>
                                        <li class="<?php if($i==1){echo 'active';}?>" rel="tab<?php echo $i;?>"><button class="nav-link-tab"><?php echo $faq_tab_title;?></button></li>
                                <?php 
                                }
                           $i++; }
                        } ?>
                <!-- <li rel="tab2"><button class="nav-link-tab">Currency</button></li>
                <li rel="tab3"><button class="nav-link-tab">NRI</button></li> -->
            </ul>
            <div class="tab_container">
                 <?php 
                        $tab_details = get_field('faq_tab_details');
                        if(isset($tab_details) && !empty($tab_details)){
                            $j=1;
                            $first = TRUE;
                            foreach ($tab_details as $key => $value) {
                                $button_value = 'false';
                                if ($first) {
                                  $button_value = 'true';
                                  $first = FALSE;
                                }
                                
                               $faq_tab_title = $value['faq_tab_title'];
                                    if(isset($faq_tab_title) && !empty($faq_tab_title)){
                                    ?>
                                        <button  class="<?php if($j==1){echo 'd_active';}?> tab_drawer_heading" rel="tab<?php echo $j;?>"><?php echo $faq_tab_title;?></button>
                                    <?php } ?>
                                    <div id="tab<?php echo $j;?>" class="tab_content">
                                        <div class="accordion custom-accordion" id="accordion<?php echo $faq_tab_title;?>">
                                            <?php $faq_question_lists = $value['faq_question_list'];
                                                  if(isset($faq_question_lists) && !empty($faq_question_lists)){
                                                    $k=1;
                                                    foreach($faq_question_lists as $faq_question_list){
                                                        $faq_question_title = $faq_question_list['faq_question_title'];?>
                                                        <div class="accordion-item active">
                                                            <h2 class="accordion-header" id="heading<?php echo $k;?>">
                                                            <?php if(isset($faq_question_title) && !empty($faq_question_title)){ ?>
                                                                    <button class="accordion-button <?php if($k!==1){echo 'collapsed';}?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $k;?>" aria-expanded="<?php echo esc_attr($button_value); ?>" aria-controls="collapse<?php echo $k;?>">
                                                                    <?php echo $faq_question_title;?>
                                                                </button>
                                                                <?php } ?>
                                                            </h2>
                                                            <?php $faq_answer_lists = $faq_question_list['faq_answer_list'];
                                                                  if(isset($faq_answer_lists) && !empty($faq_answer_lists)){ 
                                                                    
                                                                    foreach($faq_answer_lists as $faq_answer_list){
                                                                            $faq_answer_title = $faq_answer_list['faq_answer_title'];
                                                                        ?> 
                                                                    <div id="collapse<?php echo $k;?>" class="accordion-collapse collapse <?php if($k==1){echo 'show';}?>" aria-labelledby="heading<?php echo $k;?>" data-bs-parent="#accordion<?php echo $faq_tab_title;?>">
                                                                        <div class="accordion-body faq-body custom-point">
                                                                            <?php echo $faq_answer_title;?>
                                                                        </div>
                                                                    </div><?php 
                                                                    }
                                                                  }?>
                                                        </div><?php
                                                  $k++; }
                                                }?>
                                          
                                        </div>
                                    </div><?php
                            $j++; }
                        } ?>            
                
                <!-- <button  class="tab_drawer_heading" rel="tab2">Currency</button>
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
                </div> -->
            </div>
        </div>
    </div>
</section>
<!--------------------------------- FAQ section End --------------------------------->
<script>
    jQuery(document).ready(function(){
    if(jQuery('.accordion-button').hasClass('collapsed')){
      jQuery('.accordion-button').parents('.accordion-item').siblings().removeClass('accordion-active');
    }
    var $accordionItems = jQuery('.accordion-item');
    $accordionItems.first().addClass('accordion-active');
    jQuery(document).on('click','.accordion-button',function () {       
      jQuery('.accordion-button').parents('.accordion-item').removeClass('accordion-active');
      if(!jQuery(this).hasClass('collapsed')){
          jQuery(this).parents('.accordion-item').addClass('accordion-active');
        }else {
          jQuery(this).parents('.accordion-item').removeClass('accordion-active');
        }
    });
});
</script>
<?php

get_footer();
