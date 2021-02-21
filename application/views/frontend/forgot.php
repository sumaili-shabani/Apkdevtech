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

                            			<div class="col-md-3"></div>
                            			<div class="col-md-6 card-bordered mb-2">

                            				<div class="nk-block-head text-center" style="margin-top: 10px;">
						                        <div class="nk-block-head-content">
						                            <h5 class="nk-block-title">Recupération mot de passe</h5>
						                            <div class="nk-block-des">
						                                <p>Si vous avez oublié votre mot de passe, nous vous enverrons par e-mail des instructions pour réinitialiser votre mot de passe.</p>
						                            </div>
						                        </div>
						                    </div><!-- .nk-block-head -->
						                    <form method="post" action="<?php echo base_url(); ?>login/recuperaion_password">

						                    	<div class="form-group">
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

						                        <div class="form-group">
						                            <div class="form-label-group">
						                                <label class="form-label" for="default-01">Adresse E-mail </label>
						                               
						                            </div>
						                            <input type="text" name="user_email" class="form-control form-control-lg" id="default-01" placeholder="Entrez votre adresse E-mail">
						                        </div><!-- .foem-group -->
						                        
						                        <div class="form-group">
						                            <button type="submit" class="btn btn-lg btn-primary btn-block">Envoyer le lien de reunitialisation</button>
						                        </div>
						                    </form><!-- form -->
						                    <div class="form-note-s2 pt-4"> <a href="<?php echo(base_url()) ?>login">Revenir à la connexion</a>
						                    </div>

                            			</div>
                            			<div class="col-md-3"></div>
                            			
                            		</div>
                            	</div>
                            	<!-- fin login -->



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