<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <?php include("_meta.php") ?>
</head>

<body class="nk-body npc-crypto ui-clean pg-auth">
    <!-- app body @s -->
    <div class="nk-app-root">
        <div class="nk-split nk-split-page nk-split-md">
            <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container">
                <div class="absolute-top-right d-lg-none p-3 p-sm-5">
                    <a href="#" class="toggle btn-white btn btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
                </div>
                <div class="nk-block nk-block-middle nk-auth-body">
                    <div class="brand-logo pb-5 text-center">
                        <a href="javascript:void(0);" class="logo-link">
                            <img class="logo-light logo-img logo-img-lg" src="<?= base_url('js/images/favicon.png')?>" srcset="<?= base_url('js/images/favicon.png')?>" alt="logo">
                            <img class="logo-dark logo-img logo-img-lg" src="<?= base_url('js/images/favicon.png')?>" srcset="<?= base_url('js/images/favicon.png')?>" alt="logo-dark">

                             <span style="color: rgb(204, 205, 207);"><font class="text-warning">Dev</font><font class="text-info">tech</font><font class="text-success">ology</font></span>
                        </a>
                    </div>
                    <div class="nk-block-head text-center">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Création de compte</h5>
                            <div class="nk-block-des">
                                <p>Créer un nouveau compte au système <span style="color: rgb(204, 205, 207);"><font class="text-warning">Dev</font><font class="text-info">tech</font><font class="text-success">ology</font></span></p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <form method="post" enctype="multipart/form-data" action="<?= base_url(); ?>login/register_validation">
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
					        <label class="form-label" for="name">Nom</label>
					        <input type="text" name="first_name" class="form-control form-control-lg" id="first_name" placeholder="Entrez votre nom" required="">
					        <span class="text-danger"></span>
					    </div>

					    <div class="form-group">
					        <div class="form-label-group">
					            <label class="form-label" for="default-01">Adresse E-mail </label>

					        </div>
					        <input type="email" name="mail_ok" class="form-control form-control-lg" id="default-01" placeholder="Entrez votre adresse e-mail ">
					        <span class="text-danger"></span>
					    </div>
					    <!-- .foem-group -->
					    <div class="form-group">
					        <div class="form-label-group">
					            <label class="form-label" for="password">Mot de passe</label>

					        </div>
					        <div class="form-control-wrap">
					            <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
					                <em class="passcode-icon icon-show icon ni ni-eye"></em>
					                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
					            </a>
					            <input type="password" name="user_password" class="form-control form-control-lg" id="password" placeholder="Entrez votre mot de passe">
					            <span class="text-danger"></span>
					        </div>
					    </div>
					    <!-- .foem-group -->

					    <div class="form-group">
					        <div class="custom-control custom-control-xs custom-checkbox">
					            <input type="checkbox" class="custom-control-input" id="checkbox" required="">
					            <label class="custom-control-label" for="checkbox"> <a tabindex="-1" href="javascript:void(0);"> J'accepte  Politique de confidentialité</a> 
					                <a tabindex="-1" href="#"></a>
					            </label>
					        </div>
					    </div>


					    <div class="form-group">
					        <button type="submit" class="btn btn-lg btn-primary btn-block">connecter</button>
					    </div>
					</form>
                    <div class="form-note-s2 pt-4"> Vous avez déjà un compte ? <a href="<?php echo(base_url()) ?>login">S'identifier</a>
                    </div>
                    <div class="text-center pt-4 pb-3">
                        <h6 class="overline-title overline-title-sap"><span>Ou</span></h6>
                    </div>
                    <ul class="nav justify-center gx-4">
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Facebook</a></li>
                        <li class="nav-item"><a class="nav-link" href="javascript:void(0);">Google</a></li>
                    </ul>
                   
                </div><!-- .nk-block -->
                
            </div><!-- .nk-split-content -->
            <!-- carousel div -->
            <?php include('_carousel_pub.php') ?>
            <!-- fin carousel div -->
        </div><!-- .nk-split -->
    </div><!-- app body @e -->
    <!-- JavaScript -->
  <?php include("_script.php") ?>
</body>

</html>