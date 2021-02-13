<div class="col-md-12">
	<div class="row">
		<div class="col-md-12 mb-2">
			<div class="alert alert-success text-center" id="qrcode_success" style="display: none; background-color: white;">
				<button class="close" data-dismiss="alert">x</button>
				présence ajoutée avec succès!!!
			</div>
		</div>
		<div class="col-md-6">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8 my_webcame" style="display: none;">
						<canvas></canvas>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-12">
						<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-4">
								<a href="javascript:void(0);" class="btn btn-info play"><i class="fa fa-play"></i></a>

								<a href="javascript:void(0);" class="btn btn-warning pause"><i class="fa fa-pause" title="Pause" id="pause" type="button" data-toggle="tooltip"></i></a>
							</div>
							<div class="col-md-4"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			
			<div class="col-md-12 afficher_info" style="display: none;">

				<div class="col-md-12">
                    <div class="row">

                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="row">
                              
                              <div class="col-md-6" style="margin-top: 7px;">
                                <span id="user_uploaded_image"></span>
                              </div>
                              <div class="col-md-6" style="margin-top: 7px;">
                                <span id="user_uploaded_image2"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-12">
                            <label><i class="fa fa-user"></i> nom: <span class="text-muted" id="first_name"></span></label> 
                          </div>

                          <div class="col-md-12">
                            <label><i class="fa fa-pencil"></i> postnom: <span class="text-muted" id="last_name"></span></label> 
                          </div>

                          <div class="col-md-12">
                            <label><i class="fa fa-google"></i> email: <span class="text-primary" id="email"></span></label> 
                          </div>

                        </div>
                        
                      </div>
                      <div class="col-md-12">
                        <div class="row">

                          <div class="col-md-6">
                            <label><i class="fa fa-calendar"></i> date de naissace: <span class="text-muted" id="date_nais"></span></label> 
                          </div>
                          <div class="col-md-3">
                            <label><i class="fa fa-phone"></i> N°tél: <span class="text-muted" id="telephone"></span></label> 
                          </div>
                          <div class="col-md-3">
                            <label><i class="fa fa-male"></i> Sexe: <span class="text-danger" id="sexe"></span></label> 
                          </div>

                          <div class="col-md-12">
                          <label><i class="fa fa-map-marker"></i>  Adresse domicile: <span class="text-muted" id="full_adresse"></span></label> 
                        </div>

                        </div>
                      </div>

                      
                      

                    </div>
                  </div>

                  
                  <div class="col-md-12">
                    <div class="row">
                      <div class="col-md-4"></div>
                      <div class="col-md-4">
                        <div class="buysell-field form-action text-center mb-2">
                              <div>

                        <input type="hidden" name="id" id="id" />
                        <input type="hidden" name="operation" id="operation" />

                        <!-- <input type="submit" name="action" id="action" class="btn btn-primary" value="Add" /> -->
                              </div>
                              <div class="pt-3">
                                  <a href="javascript:void(0);"  class="btn btn-danger btn-xs show_info"><i class="fa fa-close"></i> Fermer
                                  </a>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4"></div>
                    </div>
                </div>

			</div>
        
		</div>
	</div>
</div>