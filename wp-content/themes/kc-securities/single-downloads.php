<?php get_header();?>

<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section download-banner m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/download-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center">
            <h1 class="title-style-1">Download</h1>
        </div>
    </div>
</section>
<!--------------------------------- Inner page Banner End --------------------------------->


<!--------------------------------- Download inner section Start --------------------------------->
<section class="sub-download-section custom-padding m-0">
	<div class="container">
		<div class="sub-page-back">
			<ul>
				<li><a href="<?php echo home_url("download"); ?>"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/back-icon.svg" alt="File Icon"></a></li>
				<li><a href="<?php echo home_url("download"); ?>" class="">Download</a></li>
				<li class="active"><?php echo get_the_title();?></li>

			</ul>
		</div>
		<div class="row g-3">
            <?php $download_link_details = get_field('download_link_details');
                if(isset($download_link_details) && !empty($download_link_details)){
                    foreach($download_link_details as $download_link_detail){
                        $download_link = $download_link_detail['download_link'];
                        $download_file_name = $download_link_detail['download_file_name'];
                        //$file_url = $download_link['url'];
                        if (isset($download_link) && !empty($download_link)) {
                           
                                $file_url = $download_link['url'];
                           
                            
                            $file_extension = pathinfo($file_url, PATHINFO_EXTENSION);
                            
                            // Define an array of allowed file extensions and their corresponding icons
                            $icons = array(
                                'pdf' => 'pdf-icon.svg',
                                'doc' => 'doc-icon.svg',
                                'text' => 'text-icon.svg',
                                'xls' => 'xl-icon.svg',
                                'xlsx' => 'xl-icon.svg',
                            );
                        
                        ?>
                            <div class="col-lg-4 col-md-6">
                                <a href="<?php if(isset($file_url) && !empty($file_url)){echo $file_url;}?>" class="download-box" target = "_blank">
                                    <?php 
                                        if (isset($icons[$file_extension])) {
                                                $icon_url = get_stylesheet_directory_uri().'/assets/images/'. $icons[$file_extension]; ?>
                                                <span> <img src="<?php echo $icon_url; ?>"> </span> 
                                       <?php  } else{ ?>
                                       <span><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/pdf-icon.svg" alt="PDF Icon"> </span>
                                       <?php } ?>
                                        <?php if(isset($download_file_name) && !empty($download_file_name)){ ?>
                                                <p><?php echo $download_file_name;?></p>
                                    <?php } ?>
                                </a>
                            </div><?php 
                        
                        }
                    } 
                } ?>
        </div>
		</div>
	</div>
</section>
<!--------------------------------- Download inner section Start --------------------------------->

<?php get_footer();?>