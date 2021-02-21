<?php 
if ($projects_detail->num_rows() > 0) {
	foreach ($projects_detail->result_array() as $key) {

		if ($key['lien'] !='') {
			$url_site ='
			<a target="_blank" href="'.$key['lien'].'" class="btn btn-outline-primary">
	    		<i class="fa fa-globe"></i> &nbsp;
	    	visiter le site</a>';
		}
		else
		{
			$url_site ='';
		}
		# code...
		?>
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-4 mb-2">
					<img src="<?php echo(base_url()) ?>upload/projet/<?php echo($key['image']) ?>" class="img img-thumbnail img-responsive">
				</div>
				<div class="col-md-8 mb-2">
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-12 mb-2">
								<h5><strong><?php echo($key['titre']) ?></strong> &nbsp;&nbsp;&nbsp; <?php echo($url_site) ?></h5>
								<p>
									<?php echo(nl2br($key['description'])) ?>

									
								</p>
							</div>



							<!-- definition -->
							<div class="col-md-12 mb-2">
								<div class="row">

									

									<div class="col-md-2"></div>
									<div class="col-md-8">

										Partagez ce lien <i class="fa fa-hand-o-right"></i>


										<a href="javascript:void(0);" class="btn btn-primary btn_facebook"><i class="fa fa-facebook"></i></a>

										<a href="javascript:void(0);" class="btn btn-info btn_twitter"><i class="fa fa-twitter"></i></a>

										<a href="javascript:void(0);" class="btn btn-danger btn_google"><i class="fa fa-google"></i></a>

										<a href="javascript:void(0);" class="btn btn-primary btn_linkedin"><i class="fa fa-linkedin"></i></a>

										
									</div>
									<div class="col-md-2 mb-2"></div>
								</div>

							<hr>
							</div>
							<!-- fin -->
							
						</div>
					</div>
				</div>



				<div class="col-md-12 mb-2" style="margin-top: 20px;">

					<div class="col-md-12 mb-2">
						<div class="row text-center">
							<div class="col-md-3"></div>
							<div class="col-md-6">
								<ul class="list list-lg list-checked-circle list-success">
		                            <li>
		                                <strong>
		                                   Voici quelaues images d'ilustration de l'application <?php echo($key['titre']) ?>
		                                </strong>
		                            </li>
		                        </ul>
							</div>
							<div class="col-md-3"></div>
						</div>
                                                    
					</div>

					<div class="row  ticket-msg-attach-list mb-2">
						<?php 
						$this->db->limit(8);
				    	$img_details = $this->db->get_where("detail_projet", array(
				    		'idtinfo_projet'	=>	$key['idtinfo_projet']
				    	));
				    	$push ='';

				    	if ($img_details->num_rows() > 0) {
				    		foreach ($img_details->result() as $key2) {

				    			?>

				    			<div class="col-md-3 mb-2">
							        <a download="<?= base_url() ?>upload/projet/<?= $key2->image ?>" href="<?= base_url() ?>upload/projet/<?= $key2->image ?>">
							            <img src="<?= base_url() ?>upload/projet/<?= $key2->image ?>" alt="" style="height: 190px; width: 100%;">
							            <em class="icon ni ni-download"></em>

							        </a>
							    </div>
				    			
				    			<?php
				    		}
				    	}
				    	else{

				    	}

						 ?>
						
					</div>
				</div>


			</div>
		</div>



		<?php
	}
}

?>
