 <?php

 $first_name;
 $last_name;
 $email;
 $image;
 $telephone;
 $full_adresse;
 $biographie;
 $date_nais;
 $passwords;
 $idrole;

 $facebook;
 $linkedin;
 $twitter ;

 $university;
 $faculte;
 $option ;
 $sexe;
 $photo;

 $id_user;

 foreach ($users as $row) {
  $id_user    = $row["id"];
  $first_name   = $row["first_name"];
  $last_name    = $row["last_name"];
  $email      = $row["email"];
  $image      = $row["image"];
  $telephone    = $row["telephone"];
  $full_adresse = $row["full_adresse"];
  $biographie   = $row["biographie"];
  $date_nais    = $row["date_nais"];
  $passwords    = $row["passwords"];
  $idrole       = $row["idrole"];
  $sexe       = $row["sexe"];

  $facebook     = $row["facebook"];
  $linkedin     = $row["linkedin"];
  $twitter      = $row["twitter"];
  
 }

 ?>
<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    
    <?php include("_meta.php") ?>
</head>

<body class="nk-body layout-apps has-apps-sidebar npc-apps-messages bg-white ">
    <div class="nk-app-root">
        <?php include('_navigation.php') ?>
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include '_navMenu.php'; ?>
                <!-- main header @e -->

               <!-- mes script commencent -->
                <div class="nk-content nk-content-lg nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                               <!--  <div class="nk-block-head text-center">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><span>Effectuez l'opération.</span></div>
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title fw-normal"><?php echo($title) ?></h4>
                                            
                                        </div>
                                    </div>
                                </div> --><!-- nk-block -->
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <!-- mes script commencent -->
											<div class="row">
												<div class="col-md-3">

													<?php include("menu_user.php") ?>
													
												</div>
												<div class="col-md-8">

													<!-- debut -->

								                    <div class="col-md-12">
								                    	<?php include("objet_basic_message.php") ?>
								                    </div>
								                    <!-- fin  -->
													
												</div>
												<div class="col-md-1">
													
												</div>
											</div>

                                            <!-- fin de mes scripts -->

                                        </div>
                                        
                                    </div>
                                </div><!-- nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

               <!-- fin mes scripts -->




            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include("_script.php") ?>

 


    <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");
        });
    </script>





</body>

</html>