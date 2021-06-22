<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->
<?php if($publish_cover_industries){ ?>
    <!-- image with title section start -->
    <section class="container">
    	<div class="row text-center">
    		<h2 class="mr-auto ml-auto">Industries We Cover</h2>
    	</div>
    	<div class="row">	
			<?php 

				foreach($publish_cover_industries as $all_publish_cover_industries){
			?>
    		<div class="col-md-3 mt-5">
    			<div class="blogimg bg-light">
    			<img src="<?php echo base_url().$all_publish_cover_industries->cover_industries_image;?>">
    			<div class="text-center mt-2"><h4 class=""><?php echo $all_publish_cover_industries->cover_industries_name; ?></h4></div>
    			</div>
			</div>
			
			<?php } ?>


    	</div>

    	<div class="spacesm"></div>
    	<div class="mx-auto button-more">
    		<a href="#" class="text-center">view more</a>
    	</div>
    </section>
	<!-- img with title section end -->
	
<?php } ?>