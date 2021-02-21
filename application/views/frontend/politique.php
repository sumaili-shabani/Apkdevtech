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

<body class="nk-body npc-invest bg-white ">
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
                        	<!-- commencement -->
                            <div class="col-md-12">
                            	<div class="row">
                            		<div class="col-md-2"></div>
                            		<div class="col-md-8">

                            			<div class="nk-block">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                              	
                                              	<div class="card-title text-center">
                                              		<h5 class="email-heading email-heading-s1 mb-4">
	                                              		<?php echo($title) ?>
	                                              	</h5>
                                              	</div>
                                                <div class="card-text">
                                                	<p class="fs-16px text-base">
	                                                	<?php echo(nl2br($termes_info)) ?> 
	                                                </p>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                            			
                            		</div>
                            		<div class="col-md-2"></div>
                            	</div>
                            </div>
                            <!-- fin -->
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