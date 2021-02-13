
 <div class="nk-ibx-list" data-simplebar>

    <?php

         $nombre_de_message;
         $message_description;
         $created_at_message;
         $idcours_favory;

         $id = $this->session->userdata('admin_login');

         $message = $this->db->query("SELECT idmessage,id_user,id_recever, messagerie.created_at, users.first_name,users.last_name, users.image, message FROM messagerie INNER JOIN users ON  users.id= messagerie.id_user WHERE messagerie.id_recever = '".$id."'  ORDER BY messagerie.created_at DESC LIMIT 10 ");

         if ($message->num_rows() > 0) {
          $nombre_de_favory = $message->num_rows();

          foreach ($message->result_array() as $not) {
            
            ?>

            <!--  -->


             <!-- debut blog -->
            <div class="nk-ibx-item">
                <a href="#" class="nk-ibx-link"></a>
                <div class="nk-ibx-item-elem nk-ibx-item-check">
                    <div class="custom-control custom-control-sm custom-checkbox">
                        <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem01">
                        <label class="custom-control-label" for="conversionItem01"></label>
                    </div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-star">
                    <div class="asterisk"><a href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-user">
                    <div class="user-card">
                        <div class="user-avatar">
                            <img src="<?php echo(base_url()) ?>upload/photo/<?php echo($not['image']) ?>" alt="">
                        </div>
                        <div class="user-name">
                            <div class="lead-text"><?php echo($not['first_name']) ?> <?php echo($not['last_name']) ?></div>
                        </div>
                    </div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                    <div class="nk-ibx-context-group">
                        <div class="nk-ibx-context">
                            <span class="nk-ibx-context-text">
                                <span class="heading"><?php echo(substr($not['message'], 0,150)); ?>...   </span>
                        </div>
                    </div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-attach">
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-time">
                    <div class="sub-text"><?php echo(substr(date(DATE_RFC822, strtotime($not['created_at'])), 0, 23)); ?></div>
                </div>
                <div class="nk-ibx-item-elem nk-ibx-item-tools">
                    <div class="ibx-actions">
                        <ul class="ibx-actions-hidden gx-1">
                            <li>
                                <a href="<?php echo(base_url()) ?>admin/chat_admin/<?php echo($id) ?>/<?php echo($not['id_user']) ?>" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                            </li>
                            <li>
                                <a onclick="return confirm('Etes-vous sûre de vouloire Supprimer ce message?')" href="<?php echo(base_url()) ?>admin/view_1/display_delete_message/<?php echo($id) ?>/<?php echo($not['idmessage']) ?>" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                            </li>
                        </ul>
                        <ul class="ibx-actions-visible gx-2">
                            <li>
                                <div class="dropdown">
                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <ul class="link-list-opt no-bdr">

                                            <li><a class="dropdown-item" href="<?php echo(base_url()) ?>admin/chat_admin/<?php echo($id) ?>/<?php echo($not['id_user']) ?>"><em class="icon ni ni-eye"></em><span>Voir</span></a></li>

                                            <li><a class="dropdown-item" onclick="return confirm('Etes-vous sûre de vouloire Supprimer ce message?')" href="<?php echo(base_url()) ?>admin/view_1/display_delete_message/<?php echo($id) ?>/<?php echo($not['idmessage']) ?>"><em class="icon ni ni-trash"></em><span>Supprimer</span></a></li>
                                          
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- .fin blog -->

            <?php
          }

          

         }
         else{
          $nombre_de_message=0;
         } 


        ?>

   

</div>