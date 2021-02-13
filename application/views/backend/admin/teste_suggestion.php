<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    
    <?php include("_meta.php") ?>
</head>

<body class="nk-body layout-apps has-apps-sidebar npc-apps-messages ">
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
                                <div class="nk-block-head text-center">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><span>Effectuez l'opération.</span></div>
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title fw-normal"><?php echo($title) ?></h4>
                                            
                                        </div>
                                    </div>
                                </div><!-- nk-block -->
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <!-- mes script commencent -->
                                            <div class="col-md-12">
                                            	<div class="row">
                                            		<div class="col-md-3"></div>

                                            		<!-- cool le boss -->
                                            		<div class="col-md-6">
                                            			<div class="card">
													    <div class="card-body login-card-body">
													      <p class="login-box-msg text-center">prière de complèter la bonne information pour avoir le droit d'accès à toutes les questions.</p>

													      <form method="post" action="<?php echo(base_url())?>admin/teste_suggestion_param/">

													      	<div class="form-group mb-3">
									                            <?php
										                            if($this->session->flashdata('message'))
										                            {
										                                echo '
										                                <div class="alert alert-success" style="background:white;">
										                                <button class="close" data-dismiss="alert">x</button>
										                                    '.$this->session->flashdata("message").'
										                                </div>
										                                ';
										                            }
										                            elseif ($this->session->flashdata('message2')) {
										                              echo '
										                                <div class="alert alert-danger" style="background:white;">
										                                <button class="close" data-dismiss="alert">x</button>
										                                    '.$this->session->flashdata("message2").'
										                                </div>
										                                ';
										                            }
										                            else{

										                            }
									                            ?>
									                        </div>

													      	
													        <div class="input-group mb-3">
													          <input type="text" name="token" class="form-control" placeholder="Entrer le token donné">
													          <div class="input-group-append">
													            <div class="input-group-text">
													              <span class="fa fa-lock"></span>
													            </div>
													          </div>
													        </div>
													        <div class="row">
													          <div class="col-12">
													            <button type="submit" name="btn_submit_personnel" class="btn btn-primary btn-block"><i class="fa fa-globe"></i>  Valider le mot de passe</button>
													          </div>
													          <!-- /.col -->
													        </div>
													      </form>

													      
													      
													    </div>
													    <!-- /.login-card-body -->
													  </div>
                                            		</div>
                                            		<!-- fin de mes scripts -->
                                            		<div class="col-md-3">
                                            			
                                            		</div>
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

 

     <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage admin</span>
                        
                    </div>
                    <div class="nk-block">

                        <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                            
                        




                        </form>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->



    <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");
        });
    </script>





</body>

</html>