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
                               
                                <div class="nk-block">
                                    <div  class="plan-iv">
                                        
                                        <div class="plan-iv-list nk-slider nk-slider-s2">
                                            
                                            <!-- mes script commencent -->
                                            <?php include('__stat_paie.php') ?>
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

    <script type="text/javascript">
  var chart = new CanvasJS.Chart("chartContainer", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
	        {
	            type: "column",
	            showInLegend: true,
                legendText: "{indexLabel}",                
	            dataPoints: [<?php echo $chart_data2; ?>]
	        }
        ]
    });
    chart.render();

    var chart = new CanvasJS.Chart("chartContainer2", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
	        {
	            type: "pie",
	            showInLegend: true,
                legendText: "{indexLabel}",                
	            dataPoints: [<?php echo $chart_data; ?>]
	        }
        ]
    });
    chart.render();


    var chart3 = new CanvasJS.Chart("chartContainer3", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
	        {
	            type: "bar",
	            showInLegend: true,
                legendText: "{indexLabel}",                
	            dataPoints: [<?php echo $chart_data2; ?>]
	        }
        ]
    });
    chart3.render();


    var chart4 = new CanvasJS.Chart("chartContainer4", {
        theme: "theme2",
        animationEnabled: true,
        title: {
            text: ""
        },
        data: [
	        {
	            type: "area",
	            showInLegend: true,
                legendText: "{indexLabel}",                
	            dataPoints: [<?php echo $chart_data3; ?>]
	        }
        ]
    });
    chart4.render();


    


 </script>






</body>

</html>