	<!--
	 * Program Concept By Md. Jahidul Islam Noman
     * Lead Programmer (Web,Codigniter Framwork)
     * Cell-01521451354,01772068908
     * Web- https://noman-it.com
	 -->
<?php if($publish_corporate_client){ ?>
    <!-- icon image card box section start -->
    <section class="container">
    	<div class="row text-center">
    		<div class="space"></div>
    		<div class="col-md-12">
    			<div class="row text-center">
    				<div class="col-md-12">
    					<h2 class="headwycu ml-auto mr-auto" >Corporate Clients</h2>
						best in class service! We work in tandem serve your best interest.</p>
    				</div>
    				
    			</div>
    			<div class="row">
    				<!-- card box srart -->
		    		<div class="col-md-12">
		    			<!-- row one -->
		    			<div class="row pt-5">

							<?php  
							foreach($publish_corporate_client as $all_publish_corporate_client){
							?>
		    				<div class="col5 col-sm-6">
		    					<div class="card border-0 cardbrandlogo ">
		    						<img src="<?php echo base_url().$all_publish_corporate_client->corporate_client_image;?>">
		    					</div>
							</div>
							<?php } ?>
							
		    			</div>
		    			<!-- row two -->
		    		</div>
		    		<!-- card box -->
		    	</div>
    		</div>
    	</div>
    	<div class="space"></div>
    </section>
	<!-- icon image card box section end -->
	
	<?php } ?>