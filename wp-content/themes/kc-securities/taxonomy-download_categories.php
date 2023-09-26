<?php get_header();?>
<!--------------------------------- Inner page Banner Start --------------------------------->
<section class="sub-banner-section download-banner m-0" style="background-image:url(<?php echo site_url(); ?>/wp-content/uploads/2023/08/download-banner.jpg)">
    <div class="container">
        <div class="sub-banner-caption text-center">
            <h1 class="title-style-1">Download</h1>
        </div>
    </div>
</section><!--------------------------------- Inner page Banner End --------------------------------->

<!--------------------------------- Download inner section Start --------------------------------->
<section class="sub-download-section custom-padding m-0">
	<div class="container">
		<div class="sub-page-back">
			<ul>
                <li><button class="p-0 border-0 bg-transparent" onclick="history.back();"><img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/back-icon.svg" alt="File Icon"></button></li>
				<li><button class="p-0 border-0 bg-transparent" onclick="history.back();"> Back </button></li>

			</ul>
		</div>
		<div class="row g-3">
            <?php $term = get_queried_object();
                $args = array(
                    'posts_per_page' => -1,
                    'post_type'      => 'download',
                    'orderby'        => 'title',
                    'order'          => 'ASC',
                    'tax_query'      => array(
                        array(
                            'taxonomy'         => 'download_categories',
                            'field'            => 'term_id',
                            'terms'            => $term->term_id,
                            'include_children' => false
                        )
                    )
                             
                );
              
                $products = get_posts( $args );
                foreach($products as $post)
                {  
                    $download_link = get_field('download_document_link');
                    if(isset($download_link) && !empty($download_link)){
                        $file_url = $download_link['url'];
                        //print_r($download_link);
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
                            <a href="<?php if(isset($download_link) && !empty($download_link)){echo $download_link['url'];}else{echo "#";}?>" class="download-box" target = "_blank">
                                <?php 
                                    if (isset($icons[$file_extension])) {
                                        $icon_url = get_stylesheet_directory_uri().'/assets/images/'. $icons[$file_extension]; ?>
                                        <span> <img src="<?php echo $icon_url; ?>"> </span><?php 
                                    }
                                    if(isset($post) && !empty($post)){
                                        echo "<p>" . $post->post_title . "</p>";      
                                    }else{
                                        echo '';
                                    }
                                   // echo "<p>" . the_title() . "</p>"; 
                                ?>
                            </a>  
                        </div><?php
                    }
                    
                } 
          
                /**Second Child Category */    
                $children = get_terms( $term->taxonomy, array(
                    'parent'    => $term->term_id,
                    'hide_empty' => false,
                ) );
                if ($children ) { 
                    foreach( $children as $subcat ){ ?>
                        <div class="col-lg-4 col-md-6">
                            <a href="<?php echo esc_url(get_term_link($subcat, $subcat->taxonomy)); ?>" class="download-box">
                                <span> <img src="<?php echo site_url(); ?>/wp-content/uploads/2023/08/file.svg" alt="File Icon"> </span>
                                <p><?php echo $subcat->name;?></p>
                            </a>
                        </div>
                        <?php
                    }
                if(isset($children->term_id)):
                    $args = array(
                        'posts_per_page' => -1,
                        'post_type'      => 'download',
                        'orderby'        => 'title',
                        'order'          => 'ASC',
                        'tax_query'      => array(
                            array(
                                'taxonomy'         => 'download_categories',
                                'field'            => 'term_id',
                                'terms'            => $children->term_id,
                                'include_children' => false
                            )
                        )
                                 
                    );
                    $products = get_posts( $args );
                    foreach($products as $value){
                        $download_link = get_field('download_document_link');
                        if(isset($download_link) && !empty($download_link)){
                            $file_url = $download_link['url'];
                            //print_r($download_link);
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
                                <a href="<?php if(isset($download_link) && !empty($download_link)){echo $download_link['url'];}else{echo "#";}?>" class="download-box" target = "_blank">
                                    <?php 
                                    if (isset($icons[$file_extension])) {
                                            $icon_url = get_stylesheet_directory_uri().'/assets/images/'. $icons[$file_extension]; ?>
                                            <span> <img src="<?php echo $icon_url; ?>"> </span> 
                                <?php  }  if(isset($value) && !empty($value)){
                                            echo "<p>" . $value->post_title . "</p>";      
                                        }else{
                                            echo '';
                                        }
                                    ?>
                                    
                                    </a>  
                            </div><?php 
                        }   
                    }
                endif;
                } ?>
        </div>
            
	</div>
</section>
<!--------------------------------- Download inner section Start --------------------------------->

<?php get_footer();?>