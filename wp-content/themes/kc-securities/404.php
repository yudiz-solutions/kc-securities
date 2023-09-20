<?php

get_header();
?>

<section class="custom-padding">
	<div class="container">
		<div class="error-inner">
			<?php $page_image = get_field('404_image','option');
				  if(isset($page_image) && !empty($page_image)){ ?>	
					<img src="<?php echo $page_image['url'];?>" alt="<?php echo $page_image['alt'];?>">
			<?php } ?>
			<a href="<?php echo site_url();?>" class="primary-button">Home</a>
		</div>
	</div>
</section>


<?php
get_footer();
