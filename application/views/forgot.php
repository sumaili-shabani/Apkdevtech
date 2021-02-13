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