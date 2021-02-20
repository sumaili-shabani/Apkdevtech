<?php 
    if($this->session->userdata('admin_login')) {
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
            </li><!-- .dropdown -->
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
	 	 <?php
	}

     ?>