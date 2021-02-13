<!DOCTYPE html>
<html lang="fr" class="js">

<head>

    <?php $this->load->view('backend/admin/_meta') ?>
</head>

<body class="nk-body layout-apps has-apps-sidebar npc-apps-messages ">
    <div class="nk-app-root">
        <?php $this->load->view('backend/admin/_navigation') ?>
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                 <?php $this->load->view('backend/admin/_navMenu') ?>
                <!-- main header @e -->

               <!-- mes script commencent -->
                <div class="nk-content nk-content-lg nk-content-fluid">
                    <div class="container-xl wide-lg card">
                        <div class="nk-content-inner card-body">
                            <div class="nk-content-body">
                                <div class="nk-block-head text-center">
                                    <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><span>Effectuez l'opération.</span></div>
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title fw-normal"><?php echo($title) ?></h4>
                                            
                                        </div>
                                    </div>
                                </div><!-- nk-block -->
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <div class="col-md-12">
                                                <div class="row">
                                                    
                                                    <!-- mes script commencent -->

                                                    <!-- fin de mes scripts -->

                                                </div>
                                            </div>

                                        </div>
                                        
                                    </div>
                                </div><!-- nk-block -->
                            </div>
                        </div>
                    </div>
                </div>

               <!-- fin mes scripts -->




            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php $this->load->view('backend/admin/_script') ?>

 

     <!-- modal ajout radio -->
    <div class="modal fade" tabindex="-1" role="dialog" id="userModal">
        <div class="modal-dialog modal-dialog-centered modal-md" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <div class="nk-block-head nk-block-head-xs text-center">
                        <span class="nk-block-title modal-title">Paramètrage admin</span>
                        
                    </div>
                    <div class="nk-block">

                        <form method="post" id="user_form" enctype="multipart/form-data" class="col-md-12 row">
                            
                        




                        </form>
                        
                        
                        
                    </div><!-- .nk-block -->
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modla-dialog -->
    </div>
    <!-- fin modal-->



    <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");
        });
    </script>





</body>

</html>