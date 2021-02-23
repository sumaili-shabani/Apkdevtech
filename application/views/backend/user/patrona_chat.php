 <!-- content @s -->
<div class="nk-content p-0">
    <div class="nk-content-inner">
        <div class="nk-content-body">
            <div class="nk-ibx">
            	<!-- forom -->
                <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                    
                    <div class="nk-ibx-nav" data-simplebar>

                    	 <?php include("__panel_users.php") ?>
                        
                        <div class="nk-ibx-status">
                            <div class="nk-ibx-status-info">
                                <em class="icon ni ni-hard-drive"></em>
                                <span><strong>2 MB</strong> (5%) au Maximoum</span>
                            </div>
                            <div class="progress progress-md bg-light">
                                <div class="progress-bar" data-progress="50"></div>
                            </div>
                        </div><!-- .nk-ibx-status -->
                    </div>
                </div>
                <!-- .fin faroom -->
                <div class="nk-ibx-body bg-white">

                	<!-- menu chat operation -->

                    <?php include('header_menu_chat.php') ?>

                    <!-- menu chat operation -->

                    <!-- menu chat detail -->

                    <?php //include('message_detail.php') ?>

                    <!-- menu chat detail -->

                   <div class="col-md-12 py-3" style="background-color: rgb(245, 246, 250);">
                   	 <?php include('objet_basic_messagerie.php') ?>
                   </div>

                   <!-- .nk-ibx-list -->
                    
                </div><!-- .nk-ibx-body -->
            </div><!-- .nk-ibx -->
        </div>
    </div>
</div>
<!-- content @e -->