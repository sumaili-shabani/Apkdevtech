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

            <!-- crarouel insertion -->
            <?php include('component/carousel.php') ?>
            <!-- fin insertion carousel -->

            <!-- content @s -->
            <div class="nk-content nk-content-lg nk-content-fluid">
                <div class="container-xl wide-lg">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">

                        	<!-- mes scripts commencent -->

                                <!-- informations personneles -->
                            	<div class="col-md-12">
                            		<div class="row">
                            			<!-- citation -->
                            			<div class="col-md-12">
                            				<div class="row">
                            					<div class="col-md-2"></div>
                            					<div class="col-md-8 text-center">

                            						<ul class="list list-lg list-checked-circle list-success">
		                                                <li>
		                                                	<strong>
		                                                		Avec nous, nos clients  ne sont jamais deçus,
                                                                car la qualité des nos services dont nous offrons est  parfaitement excellente et appropriée à leur problèmatique.
		                                                	</strong>
		                                                </li>
		                                            </ul>
                            						
                            					</div>
                            					<div class="col-md-2"></div>
                            				</div>
                            			</div>
                            			<!-- fin citation -->



                            			<?php 
                                			if ($personelles->num_rows() > 0) {
                                				foreach ($personelles->result_array() as $key) {
                                					
                                					?>
                                					<!-- information personnelle -->
    		                            			<div class="col-md-4 mb-2">
    		                            				<div class="card  bg-lighter">
    													    <div class="card-header text-center">
    													    	<i class="fa <?php echo($key['icone']) ?> fa-lg"></i>
    													    </div>
    													    <div class="card-inner" style="height: 220px;">
    													        <h5 class="card-title"><?php echo($key['titre']) ?></h5>
    													        <p class="card-text"><?php echo(substr($key['description'], 0,300)) ?></p>

    													    </div>
    													</div>
    		                            			</div>
    		                            			<!-- fin information personnelle -->
                                					<?php
                                				}
                                			}
                                			else{

                                			}

                            			?>

                            			
                            			
                            		</div>
                            	</div>
                                <!-- informations personneles -->

                                <!-- missions personneles -->
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="row">

                                        <!-- bloc mission -->
                                        <div class="col-md-6 mb-2">

                                            <div class="card-inner card-inner-lg h-100" style="border: 2px dashed #E5E9F2;">
                                                <div class="align-center flex-wrap flex-md-nowrap g-3 h-100">
                                                    <div class="nk-block-image w-200px flex-shrink-0 order-first order-md-last">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 114 113.9">
                                                            <path d="M87.84,110.34l-48.31-7.86a3.55,3.55,0,0,1-3.1-4L48.63,29a3.66,3.66,0,0,1,4.29-2.8L101.24,34a3.56,3.56,0,0,1,3.09,4l-12.2,69.52A3.66,3.66,0,0,1,87.84,110.34Z" transform="translate(-4 -2.1)" fill="#c4cefe"></path>
                                                            <path d="M33.73,105.39,78.66,98.1a3.41,3.41,0,0,0,2.84-3.94L69.4,25.05a3.5,3.5,0,0,0-4-2.82L20.44,29.51a3.41,3.41,0,0,0-2.84,3.94l12.1,69.11A3.52,3.52,0,0,0,33.73,105.39Z" transform="translate(-4 -2.1)" fill="#c4cefe"></path>
                                                            <rect x="22" y="17.9" width="66" height="88" rx="3" ry="3" fill="#29347A"></rect>
                                                            <rect x="31" y="85.9" width="48" height="10" rx="1.5" ry="1.5" fill="#fff"></rect>
                                                            <rect x="31" y="27.9" width="48" height="5" rx="1" ry="1" fill="#e3e7fe"></rect>
                                                            <rect x="31" y="37.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe"></rect>
                                                            <rect x="59" y="37.9" width="20" height="3" rx="1" ry="1" fill="#c4cefe"></rect>
                                                            <rect x="31" y="45.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe"></rect>
                                                            <rect x="59" y="45.9" width="20" height="3" rx="1" ry="1" fill="#c4cefe"></rect>
                                                            <rect x="31" y="52.9" width="48" height="3" rx="1" ry="1" fill="#e3e7fe"></rect>
                                                            <rect x="31" y="60.9" width="23" height="3" rx="1" ry="1" fill="#c4cefe"></rect>
                                                            <path d="M98.5,116a.5.5,0,0,1-.5-.5V114H96.5a.5.5,0,0,1,0-1H98v-1.5a.5.5,0,0,1,1,0V113h1.5a.5.5,0,0,1,0,1H99v1.5A.5.5,0,0,1,98.5,116Z" transform="translate(-4 -2.1)" fill="#9cabff"></path>
                                                            <path d="M16.5,85a.5.5,0,0,1-.5-.5V83H14.5a.5.5,0,0,1,0-1H16V80.5a.5.5,0,0,1,1,0V82h1.5a.5.5,0,0,1,0,1H17v1.5A.5.5,0,0,1,16.5,85Z" transform="translate(-4 -2.1)" fill="#9cabff"></path>
                                                            <path d="M7,13a3,3,0,1,1,3-3A3,3,0,0,1,7,13ZM7,8a2,2,0,1,0,2,2A2,2,0,0,0,7,8Z" transform="translate(-4 -2.1)" fill="#9cabff"></path>
                                                            <path d="M113.5,71a4.5,4.5,0,1,1,4.5-4.5A4.51,4.51,0,0,1,113.5,71Zm0-8a3.5,3.5,0,1,0,3.5,3.5A3.5,3.5,0,0,0,113.5,63Z" transform="translate(-4 -2.1)" fill="#9cabff"></path>
                                                            <path d="M107.66,7.05A5.66,5.66,0,0,0,103.57,3,47.45,47.45,0,0,0,85.48,3h0A5.66,5.66,0,0,0,81.4,7.06a47.51,47.51,0,0,0,0,18.1,5.67,5.67,0,0,0,4.08,4.07,47.57,47.57,0,0,0,9,.87,47.78,47.78,0,0,0,9.06-.87,5.66,5.66,0,0,0,4.08-4.09A47.45,47.45,0,0,0,107.66,7.05Z" transform="translate(-4 -2.1)" fill="#2ec98a"></path>
                                                            <path d="M100.66,12.81l-1.35,1.47c-1.9,2.06-3.88,4.21-5.77,6.3a1.29,1.29,0,0,1-1,.42h0a1.27,1.27,0,0,1-1-.42c-1.09-1.2-2.19-2.39-3.28-3.56a1.29,1.29,0,0,1,1.88-1.76c.78.84,1.57,1.68,2.35,2.54,1.6-1.76,3.25-3.55,4.83-5.27l1.35-1.46a1.29,1.29,0,0,1,1.9,1.74Z" transform="translate(-4 -2.1)" fill="#fff"></path></svg>
                                                    </div>
                                                    <div class="nk-block-content">
                                                        <div class="nk-block-content-head">
                                                            <h4>Notre Mission</h4>
                                                        </div>
                                                        <p><?php echo($mission_info) ?></p>
                                                       
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- bloc bloc mission -->

                                        <!-- bloc mission -->
                                        <div class="col-md-6 mb-2">

                                            <div class="card-inner card-inner-lg h-100" style="border: 2px dashed #E5E9F2;">
                                                <div class="align-center flex-wrap flex-md-nowrap g-3 h-100">
                                                    <div class="nk-block-image w-200px flex-shrink-0 order-first order-md-last">
                                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                                            <path d="M26,70.78V24.5a7,7,0,0,1,7-7H69a9,9,0,0,1,9,9v49a7,7,0,0,1-7,7H16.55S25.72,78.89,26,70.78Z" fill="#29347A" stroke="#29347A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                            <path d="M7,30.5H26a0,0,0,0,1,0,0V73.9a8.6,8.6,0,0,1-8.6,8.6H13.6A8.6,8.6,0,0,1,5,73.9V32.5a2,2,0,0,1,2-2Z" fill="#e3e7fe" stroke="#29347A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                            <circle cx="71.5" cy="21" r="13.5" fill="#fff" stroke="#29347A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                                            <rect x="34" y="33.5" width="16" height="8" rx="1" ry="1" fill="#c4cefe"></rect>
                                                            <line x1="35" y1="46.5" x2="67" y2="46.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                            <line x1="35" y1="53.5" x2="67" y2="53.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                            <line x1="35" y1="59.5" x2="67" y2="59.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                            <line x1="35" y1="64.5" x2="67" y2="64.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                            <line x1="35" y1="71.5" x2="51" y2="71.5" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                                            <path d="M75.24,23.79a5.2,5.2,0,0,1-6.42,2.57,5.78,5.78,0,0,1-3.26-7.25,5.25,5.25,0,0,1,6.8-3.47,5.35,5.35,0,0,1,2,1.34l2.75,2.75" fill="none" stroke="#29347A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                                            <polyline points="77.75 16.61 77.75 20.61 73.75 20.61" fill="none" stroke="#29347A" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></polyline>
                                                        </svg>
                                                    </div>
                                                    <div class="nk-block-content">
                                                        <div class="nk-block-content-head">
                                                            <h4>Notre Objectif Principal</h4>
                                                        </div>
                                                        <p><?php echo($objectif_info) ?></p>
                                                       
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- bloc bloc mission -->
                                        
                                    </div>
                                </div>
                                <!-- mission personneles -->

                                <!-- notre famille -->
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="row">
                                        <!-- bloc membre -->
                                        <div class="col-md-12">

                                            <div class="nk-block-head-content text-center">
                                                <h4 class="nk-block-title fw-normal">Notre meilleur groupe</h4>
                                                <div class="nk-block-des">
                                                    <p>En matière de la technologie, Ces personnages ne sont pas n'importe qui! 👌</p>
                                                </div>
                                            </div>

                                            <?php include('component/membre.php') ?>

                                            
                                        </div>
                                        <!-- fin bloc membre -->
                                        
                                    </div>
                                </div>
                                <!-- notre famille -->

                                <!-- SAVOIR PLUS SUR NOUS -->
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="row">

                                        <div class="col-md-12 mb-2">
                                            <div class="nk-block-head-content text-center">
                                                <h4 class="nk-block-title fw-normal">Nos services</h4>
                                                <div class="nk-block-des">
                                                    <p>Explorez plus de nos services au prix le plus bas possible jamais atteint! 🔔</p>
                                                </div>
                                            </div>

                                        </div>
                                        <?php include('component/service.php') ?>
                                        
                                    </div>
                                </div>
                                <!-- fin SAVOIR PLUS SUR NOUS -->

                                <!-- champs d'adhesion -->
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="row">

                                        <!-- citation -->
                                        <div class="col-md-12">
                                            <div class="row">
                                                <div class="col-md-2"></div>
                                                <div class="col-md-8 text-center">

                                                    <div class="col-md-12">
                                                        <div class="nk-block-head-content text-center">
                                                            <h4 class="nk-block-title fw-normal">Abonnez-vous déjà!</h4>
                                                            <div class="nk-block-des">
                                                                <p>Voici à présents quelques applications complètes  dont vous pouvez vous abonner</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <ul class="list list-lg list-checked-circle list-success">
                                                        <li>
                                                            <strong>
                                                               Nous proposons des aplications complètes pour adhésion annuelle selon les différents plans par rapport à  votre choix.
                                                            </strong>
                                                        </li>
                                                    </ul>
                                                    
                                                </div>
                                                <div class="col-md-2"></div>
                                            </div>
                                        </div>
                                        <!-- fin citation -->
                                        <div class="col-md-12">

                                           <?php include('component/mini_project.php') ?>
                                            
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- fin champs d'adhesion -->



                                <!-- bloc attantes -->
                                <?php include('component/comprendre.php') ?>
                                <!-- fin bloc -->

                                 <!-- bloc projet  -->
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="nk-block-head-content text-center">
                                                <h4 class="nk-block-title fw-normal">Nos Meilleurs Projets Récents</h4>
                                                <div class="nk-block-des">
                                                    <p>Suivez nos différents projets à la une</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                        <div class="col-md-8">
                                           <div class="col-md-12 col-lg-12 col-sm-12 card" style="/*background-color: rgb(41, 52, 122);*/">
                                               <?php include('component/projet.php') ?>
                                           </div>
                                        </div>
                                        <div class="col-md-2"></div>
                                    </div>
                                </div>
                                <!-- fin bloc projet  -->

                                <!-- bloc savoir plus sur nous!  -->
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="nk-block-head-content text-center">
                                                <h4 class="nk-block-title fw-normal">Explorez nos services</h4>
                                                <div class="nk-block-des">
                                                    <p></p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-sm-12 card">
                                           <?php include('component/service_techno.php') ?>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- fin bloc savoir plus sur nous!  -->

                                <!-- bloc savoir plus sur nous!  -->
                                <div class="col-md-12" style="margin-top: 10px;">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="nk-block-head-content text-center">
                                                <h4 class="nk-block-title fw-normal">
                                                    Pourquoi nous choisir?
                                                </h4>
                                                <div class="nk-block-des">
                                                    <p>
                                                        Félicitation d'avance votre choix  n'a pas été en vain. En nous choisissant vous optenez une 
                                                        technologie très appréciable et très avancées. ✅
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-lg-12 col-sm-12 card">
                                            <div class="col-md-12 mb-2">
                                                <div class="row">
                                                    
                                                </div>
                                            </div>
                                           <?php include('component/votre_choix.php') ?>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- fin bloc savoir plus sur nous!  -->




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


    <script type="text/javascript">
        $(document).ready(function() {

            function load_country_data(page)
            {
              $.ajax({
               url:"<?php echo base_url(); ?>home/pagination_access_our_services/"+page,
               method:"GET",
               dataType:"json",
               
                beforeSend:function()
                {
                    var src = "<?= base_url()?>upload/annumation/a.gif";
                     $('.resultat_service').html('<div class="post_data col-md-12 col-sm-12"><p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p><p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p></div>');
                },
               success:function(data)
               {
                $('.resultat_service').html(data.country_table);
                $('#pagination_link').html(data.pagination_link);
               }
              });
            }
             
            load_country_data(1);

            $(document).on("click", ".pagination li a", function(event){
              event.preventDefault();
              var page = $(this).data("ci-pagination-page");
              load_country_data(page);
            });

            
        });
    </script>




</body>

</html>