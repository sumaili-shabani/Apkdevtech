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

                        	<!-- mes scripts commencent -->
                            	<div class="col-md-12">
                            		<div class="row">
                            			<!-- definition -->
                            			<div class="col-md-12">
                            				<?php include('component/detailProjt_tag.php') ?>
                            			</div>
                            			<!-- fin -->

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