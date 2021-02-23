
<!-- main header @s -->
<div class="nk-header nk-header-fluid is-theme">
    <div class="container-xl wide-lg">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
            </div>

            <div class="nk-header-brand">
                <a href="<?php echo(base_url()) ?>" class="logo-link">
                    <img class="logo-light logo-img" src="<?php echo($icone_info) ?>" srcset="<?php echo($icone_info) ?>" alt="logo">
                            <img class="logo-dark logo-img" src="<?php echo($icone_info) ?>" srcset="<?php echo($icone_info) ?>" alt="logo-dark">
                    <span class="nio-version">
                        <span style="color: rgb(204, 205, 207);"><?php echo($nom_site_info) ?></span>
                    </span>
                </a>
            </div><!-- .nk-header-brand -->
            <div class="nk-header-menu" data-content="headerNav" style="background-color: rgb(41, 52, 122);">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="<?= base_url() ?>" class="logo-link">
                            <img class="logo-light logo-img" src="<?php echo($icone_info) ?>" srcset="<?php echo($icone_info) ?>" alt="logo">
                            <img class="logo-dark logo-img" src="<?php echo($icone_info) ?>" srcset="<?php echo($icone_info) ?>" alt="logo-dark">
                            <span class="nio-version">
		                        <span style="color: rgb(204, 205, 207);"><?php echo($nom_site_info) ?></span>
		                    </span>
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- Menu -->
                <ul class="nk-menu nk-menu-main">
                    <li class="<?php

                    if($menu=="/"){
                        echo("nk-menu-item active");
                    }

                     ?>">
                        <a href="<?= base_url() ?>" class="nk-menu-link text-white">

                            <span class="nk-menu-text"><em class="icon ni ni-home-fill"></em>&nbsp;Accueil</span>
                        </a>
                    </li>
                    <li class="<?php

                    if($menu=="blog"){
                        echo("nk-menu-item active");
                    }

                     ?>">
                        <a href="<?php echo(base_url()) ?>home/blog" class="nk-menu-link text-white">
                            <span class="nk-menu-text"><em class="icon ni ni-inbox-fill"></em>&nbsp;Blog</span>
                        </a>
                    </li>
                    <li class="<?php

                    if($menu=="contact"){
                        echo("nk-menu-item active");
                    }

                     ?>">
                        <a href="<?php echo(base_url()) ?>home/contact" class="nk-menu-link text-white">
                            <span class="nk-menu-text"><em class="icon ni ni-mail-fill"></em>&nbsp;Contact</span>
                        </a>
                    </li>
                    <li class="<?php

                    if($menu=="service"){
                        echo("nk-menu-item active");
                    }

                     ?>">
                        <a href="<?php echo(base_url()) ?>home/service" class="nk-menu-link text-white">
                            <span class="nk-menu-text"><em class="icon ni ni-layers-fill"></em>&nbsp;Service</span>
                        </a>
                    </li>
                    <li class="nk-menu-item active has-sub">
                        <a href="javascrit:void(0);" class="nk-menu-link nk-menu-toggle text-white">
                            <span class="nk-menu-text"><em class="icon ni ni-setting text-white"></em>&nbsp;Paramètre</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>home/projets" class="nk-menu-link">
                                    <span class="nk-menu-text"><em class="icon ni ni-clipboad-check-fill"></em>&nbsp;Nos projets</span>
                                </a>
                            </li>

                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>home/galery" class="nk-menu-link">
                                    <span class="nk-menu-text"><em class="icon ni ni-camera-fill"></em>&nbsp;Notre galerie</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>home/video" class="nk-menu-link">
                                    <span class="nk-menu-text"><em class="icon ni ni-video-fill"></em>&nbsp;Nos vidéo</span>
                                </a>
                            </li>
                            <!-- <li class="nk-menu-item">
                                <a href="javascrit:void(0);" class="nk-menu-link">
                                    <span class="nk-menu-text"><em class="icon ni ni-book-read"></em>&nbsp;Nos cours</span>
                                </a>
                            </li> -->
                            
                            
                        </ul>
                    </li>

                    <?php 
                    if(!$this->session->userdata('admin_login') && !$this->session->userdata('id') ) {
					 	 ?>

		                    <li class="nk-menu-item">
		                        <a href="<?php echo(base_url()) ?>login" class="nk-menu-link text-white">

		                            <span class="nk-menu-text"><em class="icon ni ni-signout"></em>&nbsp;Se connecter</span>
		                        </a>
		                    </li>
					 	 <?php
					}

                     ?>


                </ul>
            </div><!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">

                	<?php 

	                	if ($this->session->userdata('admin_login')) {
	                		include('component/admin_param.php');
	                	}
                        if ($this->session->userdata('id')) {
                            include('component/user_param.php');
                        }

                	?>

                </ul><!-- .nk-quick-nav -->
            </div><!-- .nk-header-tools -->
        </div><!-- .nk-header-wrap -->
    </div><!-- .container-fliud -->
</div>
<!-- main header @e -->