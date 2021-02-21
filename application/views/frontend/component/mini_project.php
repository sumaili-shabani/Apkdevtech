 <div class="nk-block mb-2">
    <div class="row g-gs">
    	<?php 
									
			if ($mini_projets->num_rows() > 0) {
				foreach ($mini_projets->result_array() as $key) {
				?>

				<div class="col-md-4 mb-2">
		            <div class="price-plan card card-bordered text-center">
		                <div class="card-inner">
		                    <div class="price-plan-media">
		                        <img src="<?php echo(base_url()) ?>upload/projet/<?php echo($key['image']) ?>" alt="" style="height: 100px;">
		                    </div>
		                    <div class="price-plan-info">
		                        <h5 class="title text-uppercase"><?php echo($key['titre']) ?></h5>
		                        <span><?php echo(substr($key['description'], 0,80)) ?> ...</span>


		                    </div>
		                    <div class="price-plan-amount">
		                        <div class="amount">$<?php echo($key['montant']) ?> <span>/année</span></div>
		                       
		                    </div>
		                    <div class="price-plan-action">

		                        <a href="<?php echo(base_url()) ?>home/contact" class="btn btn-primary">Passez votre commande</a>
		                    </div>
		                </div>
		            </div><!-- .price-item -->
		        </div><!-- .col -->
				
				<?php

				}

			}
			else{

			}


		?>


       
       


    </div><!-- .row -->
</div>