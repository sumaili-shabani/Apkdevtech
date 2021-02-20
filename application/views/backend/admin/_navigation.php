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
 $nom_connected;

 $id_user;
 $connected = $this->session->userdata('admin_login');
 $email_ok;

 $user = $this->db->get_where("users", array('id' => $connected))->result_array();


 foreach ($user as $row) {
  $photo              = $row["image"];
  $nom_connected      = $row["first_name"];
  $email_ok = $row["email"];
  
 }

 ?>
<!-- main @s -->
<div class="nk-apps-sidebar bg-white">
    <div class="nk-apps-brand">
        <a href="javascript:void(0);" class="logo-link">
            <img class="logo-light logo-img" src="<?= base_url('js/images/logo-small.png')?>" srcset="<?= base_url('js/images/logo-small2x.png 2x')?>" alt="logo">
            <img class="logo-dark logo-img" src="<?= base_url('js/images/logo-dark-small.png')?>" srcset="<?= base_url('js/images/logo-dark-small2x.png 2x')?>" alt="logo-dark">
        </a>
    </div>
    <div class="nk-sidebar-element">
        <div class="nk-sidebar-body">
            <div class="nk-sidebar-content" data-simplebar>
                <div class="nk-sidebar-menu">
                    <!-- Menu -->
                    <ul class="nk-menu apps-menu">
                        <li class="nk-menu-item">
                            <a href="<?php echo(base_url()) ?>admin/database" class="nk-menu-link" title="Sauvegarde et restauration">
                                <span class="nk-menu-icon"><em class="icon ni ni-coins"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Investment Panel">
                                <span class="nk-menu-icon"><em class="icon ni ni-coin"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Subscription Panel">
                                <span class="nk-menu-icon"><em class="icon ni ni-calendar-booking"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Inbox">
                                <span class="nk-menu-icon"><em class="icon ni ni-inbox"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Messages">
                                <span class="nk-menu-icon"><em class="icon ni ni-chat"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="File Manager">
                                <span class="nk-menu-icon"><em class="icon ni ni-folder"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-hr"></li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Default Dashboard">
                                <span class="nk-menu-icon"><em class="icon ni ni-dashlite"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Crypto Dashboard">
                                <span class="nk-menu-icon"><em class="icon ni ni-bitcoin-cash"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="User Manager">
                                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                            </a>
                        </li>
                        <li class="nk-menu-hr"></li>
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Go to Components">
                                <span class="nk-menu-icon"><em class="icon ni ni-layers"></em></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="nk-sidebar-footer bg-white">
                    <ul class="nk-menu nk-menu-md">
                        <li class="nk-menu-item">
                            <a href="javascript:void(0);" class="nk-menu-link" title="Settings">
                                <span class="nk-menu-icon"><em class="icon ni ni-setting"></em></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="nk-sidebar-profile nk-sidebar-profile-fixed dropdown bg-white">
                <a href="javascript:void(0);" data-toggle="dropdown" data-offset="50,-60">
                    <div class="user-avatar">
                        <span>Admi</span>
                    </div>
                </a>

                <div class="dropdown-menu dropdown-menu-md ml-4">
                    <div class="dropdown-inner user-card-wrap d-none d-md-block">
                        <div class="user-card">
                            <div class="user-avatar">
                                <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($photo) ?>">
                            </div>
                            <div class="user-info">
                                <span class="lead-text"><?php echo($nom_connected) ?></span>
                                <span class="sub-text text-soft"><?php echo($email_ok) ?></span>
                            </div>
                        </div>
                    </div>
                    <div class="dropdown-inner">
                        <ul class="link-list">
                            <li><a href="<?php echo(base_url()) ?>admin/profile"><em class="icon ni ni-user-alt"></em><span>Voir le profile</span></a>
                            </li>
                            <li><a href="<?php echo(base_url()) ?>admin/basic"><em class="icon ni ni-setting-alt"></em><span>Paramètrage de mon compte</span></a>
                            </li>
                            <li><a href="<?php echo(base_url()) ?>admin/dashbord"><em class="icon ni ni-activity-alt"></em><span>Actualité à la une</span></a>
                            </li>
                            <li><a href="<?php echo(base_url()) ?>"><em class="icon ni ni-globe"></em><span>Visiter le site</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="dropdown-inner">
                        <ul class="link-list">
                            <li><a href="<?php echo(base_url()) ?>login/logout" onclick="return confirm('Etes-vous sûre de vouloir se déconnecter?')"><em class="icon ni ni-signout"></em><span>Se deconnecter</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main @s -->