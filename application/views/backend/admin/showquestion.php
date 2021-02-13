<?php 

if ($questions->num_rows() > 0) {
	$count2 = $questions->num_rows();

	if ($question_one->num_rows() > 0) {
		foreach ($question_one->result_array() as $row) {
			?>

			<!-- /.col-md-6 -->
            <div class="col-lg-12">
             	<div class="card card-primary card-outline resultat_ok" id="resultat_ok">
                  <div class="card-header">
                    <h5 class="card-title m-0" id="question_numerotation">

                      <table>
                        <thead>
                          <tr>
                            <td></td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>Veillez crocher un seul Choix et valider la réponse <i class="fa fa-check"></i></td>
                              <td><a href="#" class="btn btn-primary valider_plus" idr="<?php echo($row['idr']) ?>"><i class="fa fa-save"></i>Valider</a></td>
                            </tr>
                        </tbody>
                        
                        <tr></tr>
                      </table>


                    </h5>
                  </div>
                  <div class="card-body">
	                    <h6 class="card-title"> 
	                      <?php echo($row['nomq']); ?>
	                    </h6>

	                    <label class="control-label text-info">
	                      
	                      <a href="#" class="control-label text-info common_selector_reponse" idq="<?php echo($row['idq']) ?>" valeur="très bien" ><input type="checkbox" class="common_selector brand" value="très bien"> très bien ;</a> 
	                      
	                    </label>


	                    <label class="control-label text-info">
	                     <a href="#" class="control-label text-info common_selector_reponse" idq="<?php echo($row['idq']) ?>" valeur="bien" ><input type="checkbox" class="common_selector brand" value="bien"> bien ;</a> 

	                      
	                    </label>

	                    <label class="control-label text-info">
	                      <a href="#" class="control-label text-info common_selector_reponse" idq="<?php echo($row['idq']) ?>" valeur="mal" ><input type="checkbox" class="common_selector brand" value="mal"> mal ;</a> 

	                    </label>

                  </div>

                  

             	</div>
            </div>

              <!-- /.col-md-6 -->
			
			<?php
		}
	}

	?>
	<div class="form-group">
      <input type="hidden" name="hidden" class="count2" id="count2" value="<?php echo($count2) ?>" >
      <input type="hidden" name="token" id="token" class="token" value="<?php echo($token) ?>">
    </div>
	<?php
}
else{
	?>
	<h6>vider</h6>
	<?php
}

 ?>