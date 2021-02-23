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
                                <?php include("__panel_users.php") ?>
                                <!-- fin panel message users -->


                                <div class="nk-msg-body bg-white profile-shown">
                                   
                                    
                                    <!-- bloc header title -->
                                    <?php include("__panel_header_title.php") ?>
                                    <!-- fin bloc header -->

                                    <!-- panel chat message -->
                                    <?php include('__panel_chat_message.php') ?>
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

    <script>
        $(document).ready(function(){

         function load_country_data(page)
         {
          $.ajax({
           url:"<?php echo base_url(); ?>user/pagination_users_on_to/"+page,
           method:"GET",
           dataType:"json",
           success:function(data)
           {
            $('#country_table').html(data.country_table);
            $('#pagination_link').html(data.pagination_link);
           }
          });
         }
         
         load_country_data(1);

         $(document).on("click", ".pagination li a", function(event){
          event.preventDefault();
          var page = $(this).data("ci-pagination-page");
          load_country_data(page);
         });


         function load_data(query)
         {
              $.ajax({
               url:"<?php echo base_url(); ?>user/fetch_search_user_follow_pagination",
               method:"POST",
               data:{query:query},
               success:function(data){
                $('#country_table').html(data);
               }
              });
          }

         $(document).on('keyup','#search_text',function(){
            var search = $(this).val();
            if(search != '')
            {
               load_data(search);
               // $('#pagination_link').html('');
            }
            else
            {
               load_country_data(1);
            }
        });

        

        
        });

    </script>


</body>

</html>