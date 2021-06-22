<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
-->
<!-- new slider start -->
<section class="slider">
	<div class="container-fluid">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		 
		  

			

		  <div class="carousel-inner">

			<?php if($frist_publish_slide_image){ ?>
		    <div class="carousel-item active">
		     <a href="<?php echo $frist_publish_slide_image->image_slider_link;?>" target="_blank">
			 <img class="d-block w-100" src="<?php echo $frist_publish_slide_image->image_slider_image_name;?>" alt="First slide">
			 </a> 
			</div>
			<?php } ?>
			
		<?php if($publish_slide_image){ ?>
			<?php foreach($publish_slide_image as $all_publish_slide_image){ ?>
				
		    <div class="carousel-item ">
				<a href="<?php echo $all_publish_slide_image->image_slider_link;?>" target="_blank">
		     	 <img class="d-block w-100" src="<?php echo $all_publish_slide_image->image_slider_image_name;?>" alt="Second slide">
			 	 </a>
			</div>
			<?php } ?>

		<?php } ?>	
			
		  </div>












		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
</section>
<!-- new slider end -->