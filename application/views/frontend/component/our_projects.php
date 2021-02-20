<div class="col-md-12 mb-2">
    <div class="row">
        <!-- img services -->
       <!--  <div class="col-md-4">
            
        </div> -->
        <!-- fin services -->
        <!-- service bloc -->
        <div class="col-md-12">
            <div class="col-md-12 mb-2">

                <div class="nk-search-box">
                    <div class="form-group">
                        <div class="form-control-wrap">
                            <input type="text" class="form-control form-control-lg search_text" placeholder="Taper pour rechercher l'un de nos projets">
                            <button class="form-icon form-icon-right">
                                <em class="icon ni ni-search"></em>
                            </button>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row resultat_service">

            	<?php
                    /*
                    
                    $icone_service_ok ='';
                    $url_site ='';

                    if ($projects_cool->num_rows() > 0) {
                    	foreach ($projects_cool->result_array() as $key) {

                    		

                    		if ($key['lien'] !='') {
                    			$url_site ='
                    			<a target="_blank" href="'.$key['lien'].'" class="btn btn-outline-info">
                            		<i class="fa fa-globe"></i> &nbsp;
                            	visiter le site</a>';
                    		}
                    		else
                    		{
                    			$url_site ='';
                    		}

                    		?>
                    		<!-- bloc 1 -->
			                <div class="col-md-12 mb-2">

			                	<div class="card card-bordered">

			                		<div class="card-header text-center" style="background-color: rgb(41, 52, 122);">
			                			<h5 class="text-white"><?php echo($key['titre']) ?></h5>
			                			
			                		</div>

			                        <div class="card-inner card-inner-lg bg-lighter">
			                            <div class="align-center flex-wrap flex-md-nowrap g-4">
			                                <div class="nk-block-image w-120px flex-shrink-0">

			                                   <img src="<?php echo(base_url()) ?>upload/projet/<?php echo($key['image']) ?>" class="img img-fluid">
			                                   
			                                </div>
			                                <div class="nk-block-content">
			                                    <div class="nk-block-content-head px-lg-4">
			                                    	
			                                        <p class="text-soft"> <?php echo(substr($key['description'], 0,450)) ?> ... &nbsp;&nbsp;

			                                        	<?php echo($url_site) ?>
			                                        </p>
			                                        

			                                        
			                                    </div>
			                                </div>
			                                
			                            </div>
			                        </div>

			                        <div class="card-header text-center" style="background-color: rgb(41, 52, 122);">
			                			<p class="sub-text ">
                                        	<a href="<?php echo(base_url()) ?>home/projet/ <?php echo($key['idtinfo_projet']) ?>" class="btn btn-primary btn-sm">
                                        		<i class="fa fa-eye"></i>&nbsp; Voir le détail
                                        	</a>
                                        </p>

			                		</div>

			                    </div>
			                   
			                </div>
			                <!-- fin -->
                    		<?php

                    		# code...
                    	}
                    	# code...
                    }
                    else{

                    }

                    */
                    
                ?>

                
            </div>
        </div>
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-4"></div>
        		<div class="col-4">
        			<!-- pagination box -->
					<div class="pagination-box" id="pagination_link">
						
					</div>
					<!-- End Pagination box -->
        		</div>
        		<div class="col-4"></div>
        	</div>
        </div>
        <!-- fin service -->

    </div>
</div>
