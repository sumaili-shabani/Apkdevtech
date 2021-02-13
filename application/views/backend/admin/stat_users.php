<?php 
                  
    $chart_data = '';

    $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM users GROUP BY sexe");
    
    if ($detail3->num_rows() > 0) {
            foreach ($detail3->result_array() as $key) {

               $label = $key["nombre"]." personnes de sexe ".$key["sexe"];
               $chart_data .= "{ indexLabel:'".$label."', y:".$key["nombre"]."}, ";
            }
            $chart_data = substr($chart_data, 0, -2);

            // echo($chart_data);
    }
    else{

    }
?>
<?php 

    $chart_data2 = '';
    $chart_data3 = '';

    $detail2 = $this->db->query("SELECT * FROM users ORDER BY date_nais DESC");
    if ($detail2->num_rows() > 0) {
        foreach ($detail2->result_array() as $key) {

           $chart_data2 .= "{ indexLabel:'".$key["first_name"]."', y:".$key["id"]."}, ";

            $chart_data3 .= "{ indexLabel:'".$key["first_name"]."', y:".$key["id"]."}, ";
        }

        $chart_data2 = substr($chart_data2, 0, -2);
        $chart_data3 = substr($chart_data3, 0, -2);
        // echo($chart_data2);
	}
	else{

	}
?>
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
                                            <?php include("__stat_users_.php") ?>
                                            <!-- fin de mes scripts -->

                                        </div>
                                        
                                    </div>
                                </div><!-- nk-block -->

                                <div class="nk-block-head text-center">
                               <!--      <div class="nk-block-head-content">
                                        <div class="nk-block-head-sub"><span>Effectuez l'opération.</span></div>
                                        <div class="nk-block-head-content">
                                            <h4 class="nk-block-title fw-normal"><?php echo($title) ?></h4>
                                            
                                        </div>
                                    </div>
                                </div> --><!-- nk-block -->


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
            type: "pie",                
            dataPoints: [<?php echo $chart_data; ?>]
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
            type: "line",                
            dataPoints: [<?php echo $chart_data; ?>]
        }
        ]
    });
    chart.render();

 </script>





</body>

</html>