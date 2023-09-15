<?php

/**
 * Template Name: Research Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/research-banner.jpg">
    <div class="container">
        <div class="sub-banner-caption text-center wow fadeInUp">
            <h1 class="title-style-1">Research</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Help market section start --------------------------------->
<section class="help-market-section custom-padding m-0">
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <div class="col-lg-6 align-self-center">
                <div class="help-content">
                    <h2 class="title-style-2">Helps You to Analyze Market Trend</h2>
                    <p><strong>Stock market advice by Kantilal Chhaganlal experts helps you to analyze market trend for smarter investment decisions.</strong></p>
                    <p>KC's Institutional Equity Research provides in-depth reporting and analysis on many of NSE, BSE listed stock with clear focus on value investing principal and to help our institutional investors create wealth with prudent and investing. KC's technical research team believes in providing cutting edge and winning calls to its customer based on its strong technical knowledge and ability to identify winning picks in markets. A winning combination of in-depth research, professional management and value based approach towards investing, forms the strong foundation of the KC group, on the basis of which we enjoy the trust of our clients and business associates.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="help-image">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/help-person.jpg" alt="Help Person">
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Help market section End --------------------------------->

<!--------------------------------- Get in Touch section start --------------------------------->
<section class="get-in-touch-section custom-padding m-0 bg-1">
    <div class="container">
        <div class="row justify-content-center wow fadeInUp">
            <div class="col-lg-8">
                <div class="title-main text-center">
                    <h2 class="title-style-2">Get in Touch<br> With Our Research Team</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                       <div class="get-box">
                         <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/call-contact.svg" alt="Call">
                         <p class="p-title">Call Us</p>
                         <p><a href="tel:02267236000">+91 022-6723 6000 / </a><a href="tel:02267236001">6001</a></p>
                       </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="get-box">
                         <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/email-contact.svg" alt="Call">
                         <p class="p-title">Email Us on</p>
                         <p><a href="mailto:surya.nayak@kcsecurities.com">surya.nayak@kcsecurities.com</a></p>
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Get in Touch section End --------------------------------->

<!--------------------------------- Month section Start --------------------------------->
<section class="month-content-section custom-padding m-0">
    <div class="container">
        <div class="month-wrapper wow fadeInUp">
            <div class="month-date">
                <div class="month-selecet">
                    <div class="form-grp custom-select">
                        <select id="month">
                            <option value="hide">Select Month</option>
                            <option value="January">January</option>
                            <option value="February">February</option>
                            <option value="March">March</option>
                            <option value="April">April</option>
                            <option value="May">May</option>
                            <option value="Jun">Jun</option>
                            <option value="July">July</option>
                            <option value="August">August</option>
                            <option value="September">September</option>
                            <option value="Octomber">Octomber</option>
                            <option value="November">November</option>
                            <option value="December">December</option>
                        </select>               
                    </div>
                </div>
                <div class="month-selecet">
                    <div class="form-grp custom-select ">
                        <select id="year">
                            <option value="hide">Select Year</option>
                            <?php $cur_year = date('Y');
                            for($year = ($cur_year-10); $year <= ($cur_year+10); $year++) {
                                if ($year == $cur_year) { ?>
                                    <option value="<?php echo $year;?>" selected="selected"><?php echo $year;?></option>
                                <?php } else{
                                    echo '<option value="'.$year.'">'.$year.'</option>';
                                } 
                            }?>
                        </select>               
                    </div>
                </div>
                <div class="month-selecet">
                    <a class="primary-button">View</a>
                </div>
            </div>
            <div class="month-tabing custom-tabing">
                <ul class="tabs">
                <?php
                    $research_categories = get_terms(array(
                        'taxonomy'        => 'research-category',
                        'hide_empty'      => false,
                        'parent'          => 0,
                        'order'           => 'ASC',
                    ));
                    $term_ids = array();
                    $i=1;
                    foreach ($research_categories as $research_category) :
                            $term_ids[] =  $research_category->term_id;
                            ?>
                    <!-- <option value="hide">Select Year</option> -->
                    <li class="<?php if($i==1){ echo 'active'; }?>" rel="tab<?php echo $i;?>"><button class="nav-link-tab"><?php echo $research_category->name;?></button></li>
                    <?php $i++; endforeach; wp_reset_postdata();?>
                    <!-- <li class="active" rel="tab1"><button class="nav-link-tab">Recommendation</button></li>
                    <li rel="tab2"><button class="nav-link-tab">Tools</button></li>
                    <li rel="tab3"><button class="nav-link-tab">Market News</button></li>
                    <li rel="tab4"><button class="nav-link-tab">Research</button></li> -->
                </ul>
                <div class="tab_container research_post">
                <?php 
                
                    $args_research = array(
                       'post_type' => 'research',
                       'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'order' => 'DESC',
                        'tax_query' => array(
                            array(
                                'taxonomy' =>  "research-category",
                                'field'    => 'term_id',
                                'terms'    => $term_ids,
                                'operator' => 'IN'
                            )
                        ),
                    );
                    $arr_posts_research = new WP_Query($args_research);
                    if ($arr_posts_research->have_posts()) {
                        $j=1;
                        while ($arr_posts_research->have_posts()) : $arr_posts_research->the_post();
                            $terms = get_the_terms( $arr_posts_research->ID, 'research-category' );
                            $title =  get_the_title(); 
                            ?>    
                            <button  class="<?php if($j==1){ echo 'd_active';}?> tab_drawer_heading" rel="tab<?php echo $j;?>"><?php foreach($terms as $term){
                        echo $term_name = $term->name;}?></button>
                            <div id="tab<?php echo $j;?>" class="tab_content">
                                <div class="date-content-wrapper">
                                    <div class="date-content">
                                        <p><strong><?php echo $title;?></strong></p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                                    </div>
                                </div>
                            </div><?php 
                            $j++;
                    endwhile;
                } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Month section End --------------------------------->
<?php

get_footer();
