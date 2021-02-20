 <div class="nk-content nk-content-lg nk-content-fluid">
    <div class="container-xl wide-lg">
        <div class="nk-content-inner">
            <div class="nk-content-body">
                <!-- nk-block -->
                <div class="nk-block">
                    <form class="plan-iv">
                        
                        <div class="plan-iv-list nk-slider nk-slider-s2">
                            <ul class="plan-list slider-init" 
                            data-slick='{"slidesToShow": 1, "slidesToScroll": 1, "infinite":false, "responsive":[
									{"breakpoint": 992,"settings":{"slidesToShow": 2}},
									{"breakpoint": 768,"settings":{"slidesToShow": 1}}
								]}'>

								<?php 
									
									if ($projects_cool->num_rows() > 0) {
										foreach ($projects_cool->result_array() as $key) {
										?>
										<li class="plan-item">
		                                    
		                                    <div class="plan-item-card">
		                                        <div class="plan-item-head">
		                                            <div class="plan-item-heading">

		                                            	 <img src="<?php echo(base_url()) ?>upload/projet/<?php echo($key['image']) ?>" class="card-img-top" alt="" style="height: 300px; border: 2px dashed
		                                            	  #FFF;">
		                                            </div>
		                                            <div class="plan-item-summary card-text">

		                                            	<h6 class="plan-item-title card-title title">
		                                            	 <?php echo($key['titre']) ?>  
		                                            	 	<a  href="<?php echo(base_url()) ?>home/projet/ <?php echo($key['idtinfo_projet']) ?>" class="text-info" style="float: right;" data-original-title="Consulter le site" title="Consulter le site">
						                                    	<em class="icon ni ni-globe"></em>
						                                    </a>
		                                            	</h6>
		                                                <p class="sub-text text-center">
		                                                	<?php echo(substr(nl2br($key['description']), 0,300)) ?> ...
		                                                		
		                                                </p>
		                                                <p class="sub-text ">
		                                                	<a href="<?php echo(base_url()) ?>home/projet/ <?php echo($key['idtinfo_projet']) ?>" class="btn btn-primary btn-sm">
		                                                		<i class="fa fa-eye"></i>&nbsp; Voir le détail
		                                                	</a>
		                                                </p>

		                                               
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