<?php

/**
 * Template Name: Investor Awareness Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-awareness-banner.jpg">
    <div class="container">
        <div class="sub-banner-caption text-center">
            <h1 class="title-style-1">Investor Awareness</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Investor Awareness section Start --------------------------------->
<section class="investor-awareness-section custom-padding m-0" >
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="investor-awareness-box" data-bs-toggle="modal" data-bs-target="#investorawarenessmodal">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-awareness-1.jpg" alt="Investor Awareness">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="investor-awareness-box">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-awareness-1.jpg" alt="Investor Awareness">
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="investor-awareness-box">
                    <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-awareness-1.jpg" alt="Investor Awareness">
                </a>
            </div>
        </div>
    </div>
</section>
<!--------------------------------- Investor Awareness section End --------------------------------->

<!-- Modal Start -->
<div class="modal fade investor-awarenes-modal m-0" id="investorawarenessmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="investor-img">
            <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/investor-awareness-1.jpg" alt="Investor Awareness">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<?php

get_footer();
