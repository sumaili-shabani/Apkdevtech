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


 $nombre_de_notification;
  $message;
  $url_notification;
  $created_at_notification;
  $this->db->where('id_user', $connected);
  $this->db->order_by('created_at', 'desc');
  $Notifications= $this->db->get("notification");
  if ($Notifications->num_rows() > 0) {
      $nombre_de_notification = $Notifications->num_rows();

      foreach ($Notifications->result_array() as $not) {
        $message  = $not['message'];
        $url_notification   =   $not['url'];
        $created_at_notification = $not['created_at'];
        
      }

  }
  else{
  $nombre_de_notification=0;
  }


  $nombre_de_message;
  $messagerie = $this->db->query("SELECT idmessage,id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message FROM messagerie INNER JOIN users ON  users.id= messagerie.id_user WHERE messagerie.id_recever = '".$connected."'  ORDER BY messagerie.created_at DESC LIMIT  20");
  if ($messagerie->num_rows() > 0) {
    $nombre_de_message= $messagerie->num_rows();
  }
  else{
    $nombre_de_message= 0;
  }

 ?>
<!-- insertion de navmeniu -->
<div class="nk-header nk-header-fixed is-light">
    <div class="container-xl wide-lg">
        <div class="nk-header-wrap">
            <div class="nk-menu-trigger mr-sm-2 d-lg-none">
                <a href="javascript:void(0);" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-menu"></em></a>
            </div>
            <div class="nk-header-brand">
                <a href="javascript:void(0);" class="logo-link">
                     <img class="logo-light logo-img" src="<?= base_url('js/images/logo.png')?>" srcset="<?= base_url('js/images/logo2x.png 2x')?>" alt="">
                    <img class="logo-dark logo-img" src="<?= base_url('js/images/logo-dark.png')?>" srcset="<?= base_url('js/images/logo-dark2x.png 2x')?>" alt="">
                    <span class="nio-version">
                        <span style="color: rgb(204, 205, 207);"><font class="text-warning">Dev</font><font class="text-info">tech</font><font class="text-success">ology</font></span>
                    </span>
                </a>
            </div>
            <!-- .nk-header-brand -->
            <div class="nk-header-menu mobile-menu" data-content="headerNav">
                <div class="nk-header-mobile">
                    <div class="nk-header-brand">
                        <a href="javascript:void(0);" class="logo-link">
                            <img class="logo-light logo-img" src="<?= base_url('js/images/logo.png')?>" srcset="<?= base_url('js/images/logo2x.png 2x')?>" alt="">
                            <img class="logo-dark logo-img" src="<?= base_url('js/images/logo-dark.png')?>" srcset="<?= base_url('js/images/logo-dark2x.png 2x')?>" alt="">
                            <span class="nio-version">
                                <span style="color: rgb(204, 205, 207);"><font class="text-warning">Dev</font><font class="text-info">tech</font><font class="text-success">ology</font></span>
                            </span>
                        </a>
                    </div>
                    <div class="nk-menu-trigger mr-n2">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="headerNav"><em class="icon ni ni-arrow-left"></em></a>
                    </div>
                </div>
                <!-- Menu -->
                <ul class="nk-menu nk-menu-main">
                   
                    <li class="nk-menu-item">

                        <a href="<?php echo(base_url()) ?>admin/message_count" class="nk-menu-link" data-original-title="" title="">
                            <span class="nk-menu-text">Message</span>
                        </a>
                    </li>

                    <li class="nk-menu-item has-sub">
                        <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-text">Landing page</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>admin/info_personnel" class="nk-menu-link" data-original-title="information" title="information">
                                    <span class="nk-menu-text"><i class="fa fa-hacker-news"></i> Information personnele</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>admin/info_service" class="nk-menu-link" data-original-title="service" title="service">
                                    <span class="nk-menu-text"><i class="fa fa-paper-plane"></i> Information service</span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>admin/info_choix" class="nk-menu-link" data-original-title="pourquoi nous choisir?" title="pourquoi nous choisir?">
                                    <span class="nk-menu-text"><i class="fa fa-history"></i> Tout notre choix </span>
                                </a>
                            </li>
                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>admin/info_technologique" class="nk-menu-link" data-original-title="Nos services technologiques" title="Nos services technologiques">
                                    <span class="nk-menu-text"><i class="fa fa-slideshare"></i> Service technologique </span>
                                </a>
                            </li>
                            
                            <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-dribbble"></i> Nos opérations  </span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/info_membre"  class="nk-menu-link" data-original-title="Nos membres" title="Nos membres">
                                            <span class="nk-menu-text"><i class="fa fa-trello"></i> Notre famille</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/video"  class="nk-menu-link" data-original-title="Nos membres" title="Nos membres">
                                            <span class="nk-menu-text"><i class="fa fa-video-camera"></i> Nos vidéos</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>
                            <!-- <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text">Dashboard <em class="icon ni ni-external"></em> </span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="javascript:void(0);" target="_blank" class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text">Crypto - Buy Sell</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="javascript:void(0);" target="_blank" class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text">General Dashboard</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="javascript:void(0);" target="_blank" class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text">Subscription - SaaS</span>
                                            
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nk-menu-item">
                                <a href="javascript:void(0);" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                                    <span class="nk-menu-text">Components</span>
                                </a>
                            </li> -->
                        </ul>
                    </li>


                   <!--  <li class="nk-menu-item">
                        <a href="javascript:void(0);" class="nk-menu-link" data-original-title="" title="">
                            <span class="nk-menu-text">Invest</span>
                        </a>
                    </li> -->
                    
                    <li class="nk-menu-item has-sub">
                        <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                            <span class="nk-menu-text">Formation</span>
                        </a>
                        <ul class="nk-menu-sub">
                            <!-- <li class="nk-menu-item">
                                <a href="javascript:void(0);" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text">Welcome / Intro</span>
                                </a>
                            </li> -->
                            
                            <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-pied-piper"></i>  Présence apprenant</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/users"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-group"></i> Gestions utilisateur</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/presence"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-drupal"></i> Présence</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/qrcodepresence"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-qrcode"></i> Qrcode Présence</span>
                                        </a>
                                    </li>
                                    
                                    
                                </ul>
                            </li>



                            <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-area-chart"></i>  Comptabilité</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/compte"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-ils"></i> Paiement apprenants</span>
                                        </a>
                                    </li>
                                   
                                    
                                </ul>
                            </li>
                            

                            <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-tag"></i>  Opérations</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/formation"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-eyedropper"></i> Formation</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/edition"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-birthday-cake"></i> Edition</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/cat_apprenant"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-bicycle"></i> Catégorie Apprenant </span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/inscription_apprenant"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-bus"></i>  Inscription Apprenant </span>
                                        </a>
                                    </li>


                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/tranches"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-magnet"></i>  Les tranches </span>
                                        </a>
                                    </li>


                                    
                                    
                                </ul>
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-line-chart"></i>  Les statistiques</span>
                                </a>
                                <ul class="nk-menu-sub">
                                
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/stat_users"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-pie-chart"></i> Stat sur les utilisateurs</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/stat_filtrage_inscription_ap"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-bar-chart-o"></i> Stat sur les apprenants par formation</span>
                                        </a>
                                    </li>

                                     <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/stat_paiement"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-line-chart"></i> Stat sur paiement</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/stat_presence_apprenant"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-area-chart"></i> Stat sur Présence</span>
                                        </a>
                                    </li>

                                     <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/stat_filtrage_reponse_ap"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-bar-chart-o"></i> Stat sur évaluation</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-cog"></i> Paramètrage  </span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/role"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-cog"></i> Paramètrage rôle</span>
                                        </a>
                                    </li>
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/site"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-globe"></i> Paramètrage du site</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/contact_info"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-indent"></i> Contact information</span>
                                        </a>
                                    </li>

                                     <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/recouvrement"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-gears"></i> Recouvrement forcé</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/derogation"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-tag"></i> Dérogation apprenant</span>
                                        </a>
                                    </li>
                                    
                                </ul>
                            </li>

                            <div class="dropdown-divider"></div>
                            <li class="nk-menu-item">
                                <a href="<?php echo(base_url()) ?>admin/qrcoderecouvrement" class="nk-menu-link" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-money"></i> Recouvrement Forcé</span>
                                </a>
                            </li>

                            <div class="dropdown-divider"></div>

                             <li class="nk-menu-item has-sub">
                                <a href="javascript:void(0);" class="nk-menu-link nk-menu-toggle" data-original-title="" title="">
                                    <span class="nk-menu-text"><i class="fa fa-hacker-news"></i>  Evaluation des Form</span>
                                </a>
                                <ul class="nk-menu-sub">
                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/rubrique"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-ils"></i> Nos Rubrique</span>
                                        </a>
                                    </li>

                                     <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/question"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-question"></i> Les questions</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/reponse"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-wechat"></i> Les Réponses aux quiz</span>
                                        </a>
                                    </li>

                                    <li class="nk-menu-item">
                                        <a href="<?php echo(base_url()) ?>admin/teste_suggestion"  class="nk-menu-link" data-original-title="" title="">
                                            <span class="nk-menu-text"><i class="fa fa-quote-left"></i>  Teste de sugestion</span>
                                        </a>
                                    </li>
                                   
                                    
                                </ul>
                            </li>


                            
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- .nk-header-menu -->
            <div class="nk-header-tools">
                <ul class="nk-quick-nav">

                    <li class="dropdown notification-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                            <div class="icon-status icon-status-info"><i class="fa fa-comments-o"></i>
                                <sup>
                                    <span class="badge badge-light badge-xs">2</span>
                                </sup>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="javascript:void(0);">Vous avez <?php echo($nombre_de_message) ?> message(s)</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">

                                    
                                    <?php
                                     $nombre_de_message;
                                     $message_description;
                                     $created_at_message;
                                     $idcours_favory;

                                     $message = $this->db->query("SELECT idmessage,id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message FROM messagerie INNER JOIN users ON  users.id= messagerie.id_user WHERE messagerie.id_recever = '".$connected."'  ORDER BY messagerie.created_at DESC LIMIT 6 ");

                                     if ($message->num_rows() > 0) {
                                      $nombre_de_favory = $message->num_rows();

                                      foreach ($message->result_array() as $not5) {
                                        
                                        ?>

                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <img alt="avatar" class="img img-cirle" src="<?php echo(base_url()) ?>upload/photo/<?php echo($not5['image']) ?>" style="width: 40px; height: 40px; border-radius: 60%;">
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">
                                                    <a href="<?php echo(base_url()) ?>admin/chat_admin/<?php echo($connected) ?>/<?php echo($not5['id_user']) ?>">
                                                       <span> <?php echo($not5['first_name']); ?> <?php echo($not5['last_name']); ?></span>
                                                    </a>
                                                </div>
                                                <div class="nk-notification-time"><?php echo(substr($not5['message'], 0,10).'... &nbsp;&nbsp;'.substr(date(DATE_RFC822, strtotime($not5['created_at'])), 0, 23)); ?></div>
                                            </div>
                                        </div>

                                        <?php
                                      }

                                      

                                     }
                                     else{
                                      $nombre_de_message=0;
                                     } 


                                   ?>

                                </div>
                                <!-- .nk-notification -->
                            </div>
                            <!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="<?php echo(base_url()) ?>admin/message"><i class="fa fa-envelope"></i> Voir tous les messages</a>
                            </div>
                        </div>
                    </li>
                    <!-- .messages -->

                    <li class="dropdown notification-dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle nk-quick-nav-icon" data-toggle="dropdown">
                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em>
                                <sup>
                                    <span class="badge badge-light badge-xs"><?php echo($nombre_de_notification) ?></span>
                                </sup>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                            <div class="dropdown-head">
                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                <a href="javascript:void(0);">Vous avez <?php echo($nombre_de_notification) ?> notification(s)</a>
                            </div>
                            <div class="dropdown-body">
                                <div class="nk-notification">

                                    <?php

                                     $this->db->where('id_user', $connected);
                                     $this->db->order_by('created_at', 'desc');
                                     $this->db->limit(6);
                                     $Notifications= $this->db->get("notification");
                                     if ($Notifications->num_rows() > 0) {
                                      

                                      foreach ($Notifications->result_array() as $not) {
                                       
                                        ?>

                                        <div class="nk-notification-item dropdown-inner">
                                            <div class="nk-notification-icon">
                                                <i class="<?php echo($not["icone"]) ?> fa-lg bg-light py-1" style="border-radius: 30%;"></i>
                                            </div>
                                            <div class="nk-notification-content">
                                                <div class="nk-notification-text">
                                                    <a href="<?php echo(base_url()) ?><?php echo($not['url']) ?>">
                                                       <span> <?php echo($not["titre"]) ?> <?php echo(substr($not["message"], 0,20)) ?>...</span>
                                                    </a>
                                                </div>
                                                <div class="nk-notification-time"><?php echo(substr(date(DATE_RFC822, strtotime($not['created_at'])), 0, 23)); ?></div>
                                            </div>
                                        </div>
                                       
                                        <?php
                                      }

                                     }
                                     else{
                                      $nombre_de_notification=0;
                                     } 

                                   ?>


                                </div>
                                <!-- .nk-notification -->
                            </div>
                            <!-- .nk-dropdown-body -->
                            <div class="dropdown-foot center">
                                <a href="<?php echo(base_url()) ?>admin/notification"><i class="fa fa-eye"></i> Voir toutes les notifications</a>
                            </div>
                        </div>
                    </li>
                    <!-- .dropdown -->
                    <li class="hide-mb-sm"><a href="<?php echo(base_url()) ?>login/logout" onclick="return confirm('Etes-vous sûre de vouloir se déconnecter?')" class="nk-quick-nav-icon"><em class="icon ni ni-signout"></em></a>
                    </li>

                    <li class="dropdown user-dropdown order-sm-first">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatar sm">
                                    <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($photo) ?>">
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-unverified">admin</div>
                                    <div class="user-name dropdown-indicator"><?php echo($nom_connected) ?></div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1 is-light">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatar">
                                        <span><img src="<?php echo(base_url()) ?>upload/photo/<?php echo($photo) ?>"></span>
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"><?php echo($nom_connected) ?></span>
                                        <span class="sub-text"><?php echo($email_ok) ?></span>
                                    </div>
                                    <div class="user-action">
                                        <a class="btn btn-icon mr-n2" href="javascript:void(0);"><em class="icon ni ni-setting"></em></a>
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
                                    <li><a href="javascript:void(0);"><em class="icon ni ni-globe"></em><span>Visiter le site</span></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="<?php echo(base_url()) ?>login/logout" onclick="return confirm('Etes-vous sûre de vouloir se déconnecter?')"><em class="icon ni ni-signout"></em><span>Se deconnecter</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <!-- .dropdown -->
                </ul>
                <!-- .nk-quick-nav -->
            </div>
            <!-- .nk-header-tools -->
        </div>
        <!-- .nk-header-wrap -->
    </div>
    <!-- .container-fliud -->
</div>
<!-- fin insertion navmenu -->