<!DOCTYPE html>
<html lang="fr" class="js">

<head>
    
    <?php include("_meta.php") ?>
    <link rel="stylesheet" type="text/css" href="<?php echo(base_url()) ?>js/assets/css/chat.css">
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
               
               <?php include('patrona_chat.php') ?>
               <!-- fin mes scripts -->




            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <?php include("_script.php") ?>

    <!-- AdminLTE App -->
	<script src="<?= base_url('js/dist/js/adminlte.min.js')?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('js/dist/js/demo.js')?>"></script>

 


    <script type="text/javascript">
        $(document).ready(function(){
            //alert("boom");
        });
    </script>

     <script>
        $(document).ready(function(){

         function load_country_data(page)
         {
          $.ajax({
           url:"<?php echo base_url(); ?>admin/pagination_users_on_to/"+page,
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
               url:"<?php echo base_url(); ?>admin/fetch_search_user_follow_pagination",
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

    <script type="text/javascript">
	  $(document).ready(function(){

	      $(".reponse").hide();
	      $(document).on('click', '.affichier', function(event){
	        event.preventDefault();
	        $(this).parent().next().slideToggle();

	      });

	  });
	</script>

 <script>
	$(document).ready(function(){

	 function load_country_data(page)
	 {
	  $.ajax({
	   url:"<?php echo base_url(); ?>admin/pagination_users_on_line/"+page,
	   method:"GET",
	   dataType:"json",
	   success:function(data)
	   {
	    $('#country_table2').html(data.country_table);
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
		   url:"<?php echo base_url(); ?>admin/fetch_search_user_online_pagination2",
		   method:"POST",
		   data:{query:query},
		   success:function(data){
		    $('#country_table2').html(data);
		   }
		  });
	  }

	 $(document).on('keyup','#search_text2',function(){
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