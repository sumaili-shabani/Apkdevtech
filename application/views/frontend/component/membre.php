 <div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <!-- nk-block -->
                <div class="nk-block">
                    <form class="plan-iv">
                        
                        <div class="plan-iv-list nk-slider nk-slider-s2">
                            <ul class="plan-list slider-init" 
                            data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "infinite":false, "responsive":[
									{"breakpoint": 992,"settings":{"slidesToShow": 2}},
									{"breakpoint": 768,"settings":{"slidesToShow": 1}}
								]}'>

								<?php 
									
									if ($familles->num_rows() > 0) {
										foreach ($familles->result_array() as $key) {
										?>
										<li class="plan-item">
		                                    
		                                    <div class="plan-item-card">
		                                        <div class="plan-item-head">
		                                            <div class="plan-item-heading">

		                                            	 <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($key['image']) ?>" class="card-img-top" alt="" style="height: 200px; border: 2px dashed
		                                            	  #E5E9F2;">
		                                            </div>
		                                            <div class="plan-item-summary card-text">

		                                            	<h6 class="plan-item-title card-title title">
		                                            	 <?php echo($key['first_name']) ?>  <?php echo($key['last_name']) ?> 
		                                            	 	<a targey="_blank" href="tel:<?php echo($key['telephone']) ?>" class="text-info" style="float: right;">
						                                    	<em class="icon ni ni-mobile"></em>
						                                    </a>
		                                            	</h6>
		                                                <p class="sub-text"><?php echo($key['poste']) ?></p>

		                                                <div class="row">
		                                                    <div class="col-12">
		                                                        <div class="row">
		                                                        	<div class="col-1"></div>
		                                                        	<div class="col-10">

		                                                        		<a target="_blank" href="<?php echo($key['facebook']) ?>" class="btn btn-icon btn-sm btn-primary btn-action">
		                                                        			<em class="icon ni ni-facebook-f"></em>
		                                                        		</a>

		                                                        		<a target="_blank" href="mailto:<?php echo($key['email']) ?>" class="btn btn-icon btn-sm btn-danger btn-action"><em class="icon ni ni-google"></em></a>

		                                                        		<a target="_blank" href="mailto:<?php echo($key['linkedin']) ?>" class="btn btn-icon btn-sm btn-info btn-action"><em class="icon ni ni-linkedin-round"></em></a>

		                                                        		<a target="_blank" href="mailto:<?php echo($key['twitter']) ?>" class="btn btn-icon btn-sm btn-primary btn-action"><em class="icon ni ni-twitter-round"></em></a>

		                                                        		
		                                                        	</div>
		                                                        	<div class="col-1"></div>
		                                                        </div>
		                                                    </div>
		                                                    
		                                                </div>
		                                            </div>
		                                        </div>
		                                        
		                                    </div>
		                                </li><!-- .plan-item -->
										<?php

										}

									}
									else{

									}


								?>


                                
                            </ul><!-- .plan-list -->
                        </div>
                        
                    </form>
                </div><!-- nk-block -->
            </div>
        </div>
    </div>
</div>