<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    
    <?php include("_meta.php") ?>
</head>

<body class="nk-body layout-apps has-apps-sidebar npc-apps-messages">
    <div class="nk-app-root">
    	<?php include('_navigation.php') ?>
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include '_navMenu.php'; ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content p-0">
                    <div class="nk-content-inner">
                        <div class="nk-content-body">
                            <div class="nk-msg">


                                <!-- panel message users -->
                                <?php //include("__panel_users.php") ?>
                                <!-- fin panel message users -->


                                <div class="nk-msg-body bg-white profile-shown">
                                   
                                    
                                    <!-- bloc header title -->
                                    <?php include("__panel_header_title.php") ?>
                                    <!-- fin bloc header -->

                                    <!-- panel chat message -->
                                    <?php //include('__panel_chat_message.php') ?>
                                    
                                    <div class="container mb-2" style="margin-top: 15px;">
                                        <div class="container-fluid">

                                            <!-- insertion des objets -->
                                            <div class="col-md-12">
                                                <div class="row">
                                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                                </div>
                                            </div>
                                            <!-- fin insertion des objes -->


                                            
                                        </div>
                                    </div>
                                    <!-- fin panel chat message -->


                                    <!-- petit panel user -->
                                    <?php include("__panel_user_connected.php") ?>
                                    <!-- fin petit panel user -->
                                    
                                </div><!-- .nk-msg-body -->
                            </div><!-- .nk-msg -->
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
      <?php include("__scriptPanel.php") ?>
</body>

</html>