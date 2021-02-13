<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    
    <?php include("_meta.php") ?>
</head>

<body class="nk-body layout-apps has-apps-sidebar npc-apps-messages ">
    <div class="nk-app-root">
        <?php include('_navigation.php') ?>
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include '_navMenu.php'; ?>
                <!-- main header @e -->

               <!-- mes script commencent -->
                <div class="nk-content nk-content-lg nk-content-fluid">
                    <div class="container-xl wide-lg">
                        <div class="nk-content-inner">
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
                                            
                                            <!-- mes script commencent -->
                                            <?php include("__qrcodePresence.php") ?>
                                            <!-- fin de mes scripts -->

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
    <?php include("_script.php") ?>


    <script type="text/javascript" src="<?php echo(base_url()) ?>js/js/qrcodelib.js"></script>
    <script type="text/javascript" src="<?php echo(base_url()) ?>js/js/qrcodescanjs.js"></script>
    
   <!--  -->
    <script type="text/javascript">

        $(document).ready(function() {
        	var arg = {
                resultFunction: function(result) {
                	
                    // $('tbody').append($('<tr><td>' + result.code + '</td>image:' + result.code + '</td><td>patrona shabani</td><td>M</td><td>2021-01-03</td></tr>'));
                    var personne = result.code;
                    // conversion de date
                    var dates = new Date();
                    var heure = dates.getHours() + 1;
                    var jour = dates.getDate()+'/'+dates.getDay()+'/'+dates.getFullYear()+' '+heure+':'+dates.getMinutes()+':'+dates.getSeconds();
                    // fin conversion de date

                    var personne_provisoire = 7;

                    $.ajax({  
                        url:"<?php echo base_url(); ?>admin/fetch_single_users",  
                        method:"POST",  
                        data:{id:personne_provisoire},  
                        dataType:"json",  
                        success:function(data)  
                        {  
                            $('#my_table').show();

                                var personne_provisoire_ok ="Qrc:"+personne_provisoire+"_/"+data.first_name;
                            
                                $.ajax({  
                                   url:"<?php echo base_url() . 'admin/operation_presence_qrcode'?>",
                                   method:'POST',  
                                   data:{
                                    id_user: personne_provisoire
                                   },  
                                   success:function(data2)  
                                   {  

                                        $('#qrcode_success').show();
                                        $('#qrcode_success').html(data2);
                                        // swal('succès', ''+data2, 'success');
                                        // dataTable.ajax.reload();  
                                   }  
                                });

                                $('tbody').append($('<tr><td>' + personne_provisoire_ok + '</td><td>' + data.user_image + '</td><td>'+data.first_name+'</td><td>'+data.sexe+'</td><td>'+jour+'</td></tr>')); 


                              
                        }  
                   });  

                    
                }
            };
            $("canvas").WebCodeCamJQuery(arg).data().plugin_WebCodeCamJQuery.play();

            function view_result($id_user){
            	var id = id_user;  
		           if (id !='') {

		           		$.ajax({  
			                url:"<?php echo base_url(); ?>admin/fetch_single_users",  
			                method:"POST",  
			                data:{id:id},  
			                dataType:"json",  
			                success:function(data)  
			                {  

			                	 $('tbody').append($('<tr><td>Qrcode:' + id + '_webF</td>'+data.image+'</td><td>'+data.first_name+'</td><td>'+data.sexe+'</td><td>2021-01-04</td></tr>'));
			                      
			                }  
			           });  
		           }
		           else{

		           		swal("Erreur!!!", "Veillez selectionner l'apprenant", "error");
		           }
            }

        });
    </script>

 

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
            $(document).on('click', '.play', function(event) {
            	event.preventDefault();
            	var camera = $('.my_webcame').show();
            	/* Act on the event */
            });
            $(document).on('click', '.pause', function(event) {
            	event.preventDefault();
            	var camera = $('.my_webcame').hide();
            	/* Act on the event */
            });
        });
    </script>





</body>

</html>