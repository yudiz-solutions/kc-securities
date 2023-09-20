<?php

/**
 * Template Name: Investor Awareness Page template
 */

get_header();
?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<?php echo do_shortcode('[comman_subpage_banner]');?>
<!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Investor Awareness section Start --------------------------------->
<section class="investor-awareness-section custom-padding m-0" >
    <div class="container">
        <div class="row g-4 wow fadeInUp">
            <?php $investor_modal_lists = get_field('investor_modal_list');
                if(isset($investor_modal_lists) && !empty($investor_modal_lists)){
                    foreach($investor_modal_lists as $investor_modal_list){
                        $modal_image = $investor_modal_list['modal_image'];?>
                        <div class="col-lg-4 col-sm-6">
                            <a href="#" class="investor-awareness-box" data-bs-toggle="modal" data-bs-target="#investorawarenessmodal" data="<?php echo $modal_image['url'];?>">
                                <img src="<?php echo $modal_image['url'];?>" alt="<?php echo $modal_image['alt'];?>" class="modal_image">
                            </a>
                        </div><?php 
                    } 
                } ?>
            
            
        </div>
    </div>
</section>
<!--------------------------------- Investor Awareness section End --------------------------------->
<script>
    jQuery('.investor-awareness-box').on('click',function(){
      var image =  jQuery(this).attr('data');
        jQuery('.investor_modal_image').attr("src", image);
    });
</script>
<!-- Modal Start -->
<div class="modal fade investor-awarenes-modal m-0" id="investorawarenessmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        
                        <div class="investor-img">
                            <img src="#" alt="Investor" class="investor_modal_image">
                        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal End -->

<?php

get_footer();
