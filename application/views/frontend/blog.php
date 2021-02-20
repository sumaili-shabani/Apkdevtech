<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    <?php include('_meta.php') ?>
    <style type="text/css">
    	.my_footer_text{
    		color: rgb(181, 216, 242);
    	}
    </style>
</head>

<body class="nk-body npc-invest bg-white">
    <div class="nk-app-root">
        <!-- wrap @s -->
        <div class="nk-wrap ">
            <!-- main header @s -->
            <?php include('_navMenu.php'); ?>
            <!-- main header @e -->
            <!-- content @s -->
            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">

                        	<!-- mes scripts commencent -->
                            	<div class="col-md-12">
                            		<div class="row">
                            			<!-- bloc info -->
                            			<div class="col-md-8 mb-2">
                            				<div class="col-md-12">
                            					<div class="row">
                            						<div class="col-md-4">
                            							<div class="col-md-12">
                            								<div class="row">
                            									<!-- photo -->
                            									<div class="col-md-12 mb-2">
                            										<img src="<?php echo(base_url()) ?>upload/carousel/logo 5.jpg" class="img-responsive img-thumbnail">
                            									</div>
                            									<!-- fin photo -->

                            									<!-- photo -->
                            									<div class="col-md-12 mb-2">
                            										<img src="<?php echo(base_url()) ?>upload/carousel/logo 4.jpg" class="img-responsive img-thumbnail">
                            									</div>
                            									<!-- fin photo -->

                            								</div>
                            							</div>
                            						</div>

                            						<div class="col-md-8">

                            							<div class="col-md-12 mb-2">
                            								<div class="nk-block-head-content text-center">
				                                                <h4 class="nk-block-title fw-normal">Qui sommes-nous au juste?</h4>
				                                                <div class="nk-block-des">
				                                                    <p>
				                                                    	<ul class="list list-lg list-checked-circle list-success">
				                                                    		<li>
				                                                    			Il est hélas devenu évident aujourd'hui que notre technologie a dépassé notre humanité.
				                                                    		</li>
				                                                    		<li>
				                                                    			Ne te sers pas de la technologie comme d’un substitut à la chaleur humaine.
				                                                    		</li>
				                                                    	</ul>
				                                                    </p>
				                                                </div>
				                                            </div>
                            							</div>
                            							<div class="col-md-12 mb-2">
                            								<?php echo(nl2br($blog_info)) ?>
                            							</div>

                            						</div>


                            					</div>
                            				</div>
                            			</div>
                            			<!-- fin bloc info -->
                            			<!-- bloc media -->
                            			<div class="col-md-4 mb-2">
                            				<?php include('component/social_net.php') ?>
                            			</div>
                            			<!-- fin bloc media -->

                            			<!-- bloc attantes -->
		                                <?php include('component/comprendre.php') ?>
		                                <!-- fin bloc -->

                            		</div>
                            	</div>		
                            <!-- fin de mes scripts -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- content @e -->
            <!-- footer @s -->
           <?php include('_footer.php') ?>
            <!-- footer @e -->
        </div>
        <!-- wrap @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include('_script.php') ?>
</body>

</html>