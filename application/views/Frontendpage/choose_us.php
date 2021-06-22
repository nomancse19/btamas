	<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
	 -->
    <!-- Why we chose section start-->
    <section class="container">
    	<div class="row text-center">
    		<div class="space"></div>
    		<div class="col-md-12">
			<?php if($choose_us_header_info){?>
    			<div class="row text-center">
    				<h2 class="headwycu ml-auto mr-auto" ><?php echo $choose_us_header_info->choose_us_head;?></h2>
    				<p class=""><?php echo $choose_us_header_info->choose_us_article; ?></p>
    			</div>
			<?php } ?>

    			<div class="row">
    				<!-- card box srart -->
		    		<div class="col-md-6">
		    			<!-- row one -->
		    			<div class="row">

						<?php if($publish_choose_us){ ?>
							<?php foreach($publish_choose_us as $all_publish_choose_us) {?>
		    				<div class="col-md-4 col-6">
		    					<div class="card cardbox round border">
		    						<h2 class="mr-auto ml-auto"><?php echo $all_publish_choose_us->choose_us_box_top_article;?></h2>
		    						<p class="text-center"><?php echo $all_publish_choose_us->choose_us_box_bottom_articles;?></p>
		    					</div>
		    				</div>
		    			<?php } ?>
		    			<?php } ?>
		    		
		    			
		    				
		    			



		    			</div>
		    			
		    		</div>
		    		<!-- card box -->
		    		<!-- carimg coloum start -->
		    		<div class="col-md-6 carimg">
		    			<div class="row">
						<?php if($choose_us_header_info) {?>
		    				<div class="col-md-12">
		    					<img src="<?php echo $choose_us_header_info->choose_us_image;?>">
		    				</div>
						<?php } ?>
		    			</div>
		    		</div>
		    		<!-- carimg column end -->
		    	</div>
    		</div>
    	</div>
    </section>

    <!-- Why we chose section end-->