<!-- debit de statistique -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">

        	<div class="col-md-12 mb-2">
        		<div class="row">
        			<div class="col-12">
        				<h5><?php echo($nombre_apprenant); ?></h5>
        			</div>
        			<div class="col-9">
        				<p>Nombre des apprenants</p>
        			</div>
        			<div class="col-3">
        				<h5>
        					<i class="fa fa-graduation-cap fa-lg"></i>
        				</h5>
        			</div>
        			<div class="col-12">
        				<a href="<?php echo(base_url()) ?>admin/inscription_apprenant" class="small-box-footer">
           				 <i class="fa fa-hand-o-right"></i> Plus d'info 
          				</a>
        			</div>	
        		</div>
        	</div>
         
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">

        	<div class="col-md-12">
        		<div class="row">
        			<div class="col-12">
        				<h5><?php echo($nombre_paiement); ?></h5>
        			</div>
        			<div class="col-9">
        				<p>Nombre des paiements</p>
        			</div>
        			<div class="col-3">
        				<h5>
        					<i class="fa fa-money fa-lg"></i>
        				</h5>
        			</div>
        			<div class="col-12">
        				<a href="<?php echo(base_url()) ?>admin/compte" class="small-box-footer">
           				 <i class="fa fa-hand-o-right"></i> Plus d'info 
          				</a>
        			</div>	
        		</div>
        	</div>
         
          
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">

        	<div class="col-md-12">
        		<div class="row">
        			<div class="col-12">
        				<h5><?php echo($nombre_formation); ?></h5>
        			</div>
        			<div class="col-9">
        				<p>Nombre des formations</p>
        			</div>
        			<div class="col-3">
        				<h5>
        					<i class="fa fa-eyedropper fa-lg"></i>
        				</h5>
        			</div>
        			<div class="col-12">
        				<a href="<?php echo(base_url()) ?>admin/formation" class="small-box-footer">
           				 <i class="fa fa-hand-o-right"></i> Plus d'info 
          				</a>
        			</div>	
        		</div>
        	</div>
         
          
        </div>
      </div>
      <!-- ./col -->

      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">

        	<div class="col-md-12">
        		<div class="row">
        			<div class="col-12">
        				<h5><?php echo($nombre_users); ?></h5>
        			</div>
        			<div class="col-9">
        				<p>Nombre des utilisateurs</p>
        			</div>
        			<div class="col-3">
        				<h5>
        					<i class="fa fa-user fa-lg"></i>
        				</h5>
        			</div>
        			<div class="col-12">
        				<a href="javascript:void(0);" class="small-box-footer">
           				 <i class="fa fa-hand-o-right"></i> Plus d'info 
          				</a>
        			</div>	
        		</div>
        	</div>
         
          
        </div>
      </div>
      <!-- ./col -->

    </div>
<!-- fin de statistique -->

<div class="row">

		 <?php        
		  $chart_data = '';

		  $detail3 = $this->db->query("SELECT COUNT(sexe) AS nombre, sexe FROM profile_inscription GROUP BY sexe");
		  
		 
		  if ($detail3->num_rows() > 0) {
		          foreach ($detail3->result_array() as $key) {

		          	$sexe = "personnes de sexe:".$key["sexe"];

		             $chart_data .= "{ indexLabel:'".$sexe."', y:".$key["nombre"]."}, ";
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


		  
		   $detail2 = $this->db->query("SELECT COUNT(motif) AS nombre, motif,(SELECT SUM(montant)) as total,date_paie,sexe FROM profile_paiement GROUP BY date_paie");
		  if ($detail2->num_rows() > 0) {
		      foreach ($detail2->result_array() as $key) {

		      	$libelle = $key["date_paie"];

		         $chart_data2 .= "{ indexLabel:'".$libelle."', y:".$key["total"]."}, ";

		          $chart_data3 .= "{ indexLabel:'".$libelle."', y:".$key["total"]."}, ";

		         
		      }

		      
		      $chart_data2 = substr($chart_data2, 0, -2);
		      $chart_data3 = substr($chart_data3, 0, -2);

		      // echo($chart_data2);
		}
		else{

		}
		?>




			<div class="col-md-6 mb-2">
			  <div class="card">
			    <div class="card-header text-center">
			      Statistique de paiement par raport aux differentes dates
			    </div>
			    <div class="card-body">
			      <div id="chartContainer3" style="height: 300px; width: 100%;"></div>
			    </div>
			  </div>
			</div>

			<div class="col-md-6">

				 <div class="card">
				    <div class="card-header text-center">
				      Statistique de paiement par raport aux differentes dates
				    </div>
				    <div class="card-body">
				      <div id="chartContainer4" style="height: 300px; width: 100%;"></div>
				    </div>
				  </div>
			</div>

			<div class="col-md-6">

				 <div class="card">
				    <div class="card-header text-center">
				      Statistique de paiement par raport aux differentes dates
				    </div>
				    <div class="card-body">
				      <div id="chartContainer" style="height: 300px; width: 100%;"></div>
				    </div>
				  </div>
			</div>

			<div class="col-md-6">
			  <div class="card">
			    <div class="card-header text-center">
			      Statistique de paiement par raport au genre de sexe
			    </div>
			    <div class="card-body">
			      <div id="chartContainer2" style="height: 300px; width: 100%;"></div>
			    </div>
			  </div>
			</div>



		</div>