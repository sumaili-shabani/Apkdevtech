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
                            	
                            	<!-- login -->
                            	<div class="col-md-12">
                            		<div class="row">

                            			<div class="col-md-3"></div>
                            			<div class="col-md-6 card-bordered mb-2">

                            				<div class="nk-block-head text-center" style="margin-top: 10px;">
						                        <div class="nk-block-head-content">
						                            <h5 class="nk-block-title">Authentification</h5>
						                            <div class="nk-block-des">
						                                <p>Accédez au panneau <span style="color: rgb(204, 205, 207);"><font class="text-warning">Dev</font><font class="text-info">tech</font><font class="text-success">ology</font></span> en utilisant votre e-mail et votre code d'accès.</p>
						                            </div>
						                        </div>
						                    </div><!-- .nk-block-head -->
						                    <form method="post" action="<?php echo base_url(); ?>login/validation">

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
						                                <label class="form-label" for="default-01">E-mail ou nom d'utilisateur</label>
						                               
						                            </div>
						                            <input type="text" name="user_email" class="form-control form-control-lg" id="default-01" placeholder="E-mail ou nom d'utilisateur">
						                        </div><!-- .foem-group -->
						                        <div class="form-group">
						                            <div class="form-label-group">
						                                <label class="form-label" for="password">Mot de passe</label>
						                                <a class="link link-primary link-sm" tabindex="-1" href="<?php echo(base_url()) ?>login/forgot">Code oublié?</a>
						                            </div>
						                            <div class="form-control-wrap">
						                                <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
						                                    <em class="passcode-icon icon-show icon ni ni-eye"></em>
						                                    <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
						                                </a>
						                                <input type="password" name="user_password" class="form-control form-control-lg" id="password" placeholder="Entez votre mot de passe">
						                            </div>
						                        </div><!-- .foem-group -->
						                        <div class="form-group">
						                            <button type="submit" class="btn btn-lg btn-primary btn-block">Se connecter</button>
						                        </div>
						                    </form><!-- form -->
						                    <div class="form-note-s2 pt-4"> Nouveau sur notre plateforme? <a href="<?php echo(base_url()) ?>login/register">Créer un compte</a>
						                    </div>
						                    <div class="text-center pt-4 pb-3">
						                        <h6 class="overline-title overline-title-sap"><span>Ou</span></h6>
						                    </div>
						                    <ul class="nav justify-center gx-4">
						                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Facebook</a></li>
						                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Google</a></li>
						                    </ul>

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