<?php

/**
 * Template Name: Mutual Funds Page template
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
            <?php $mutual_fund_details = get_field('mutual_fund_detail');
                  if(isset($mutual_fund_details) && !empty($mutual_fund_details)){ 
                    $i=1;
                    foreach($mutual_fund_details as $mutual_fund_detail){
                        $mutual_fund_title = $mutual_fund_detail['mutual_fund_title'];
                        $mutual_funds_contents = $mutual_fund_detail['mutual_funds_content'];
                        foreach($mutual_funds_contents as $mutual_funds_content){
                            $mutual_funds_content = $mutual_funds_content['mutual_funds_content'];
                    ?> 
            <div class="accordion-item active">
                <h2 class="accordion-header" id="heading<?php echo $i;?>">
                    <?php if(isset($mutual_fund_title) && !empty($mutual_fund_title) ){ ?>        
                    <button class="accordion-button <?php if($i!==1){echo 'collapsed';}?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $i;?>" aria-expanded="true" aria-controls="collapse<?php echo $i;?>">
                       <?php echo $mutual_fund_title;?>
                    </button>
                    <?php } ?>
                </h2>
                <div id="collapse<?php echo $i;?>" class="accordion-collapse collapse <?php if($i==1){echo 'show';}?>" aria-labelledby="heading<?php echo $i;?>" data-bs-parent="#accordionmutual">
                    <div class="accordion-body ">
                        <div class="mutual-part custom-table">
                            <?php echo  $mutual_funds_content;?>
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; } } } ?>
           
        </div>
    </div>
</section>
<!--------------------------------- Mutual Fund End --------------------------------->


<?php

get_footer();
