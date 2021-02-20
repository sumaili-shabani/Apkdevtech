<div class="col-md-12 mb-2">
    <div class="row">
        <!-- img services -->
       <!--  <div class="col-md-4">
            
        </div> -->
        <!-- fin services -->
        <!-- service bloc -->
        <div class="col-md-12">
            <div class="row resultat_service">

            	<?php
                    /*
                        
    		            	$nb1 = '
    		            	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118" style="height: 50px;">
    			                <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff"></path>
    			                <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff"></rect>
    			                <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
    			                <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
    			                <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
    			                <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
    			                <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe"></rect>
    			                <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff"></path>
    			                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff"></path>
    			                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></path>
    			                <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
    			                <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
    			                <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
    			                <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
    			                <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
    			                <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
    			                <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round"></line>
    			                <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10"></circle>
    			                <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10"></circle>
    		                </svg>';

    		                $nb2 = '
    		            	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" style="height: 50px;">
                                <rect x="13" y="16" width="68" height="66" rx="6" ry="6" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <rect x="24" y="82" width="11" height="5" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <rect x="60" y="82" width="11" height="5" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <path d="M47,70.15S61.89,62.49,61.89,51V37.6L47,31.85,32.11,37.6V51C32.11,62.49,47,70.15,47,70.15Z" fill="#eff1ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M41.56,48H52.44A1.6,1.6,0,0,1,54,49.59v5.73A1.6,1.6,0,0,1,52.44,57H41.56A1.6,1.6,0,0,1,40,55.32V49.59A1.6,1.6,0,0,1,41.56,48Z" fill="#6576ff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <path d="M43,48V45a4,4,0,0,1,8,0v3" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                                <circle cx="46.67" cy="52.79" r="0.91" fill="#fff" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                <circle cx="23" cy="17" r="14" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></circle>
                                <circle cx="23" cy="17" r="10.5" fill="#e3e7fe"></circle>
                                <path d="M28.46,20.47l-4.41-4.41a3.4,3.4,0,0,0,.26-1.31A3.34,3.34,0,1,0,21,18.1a3.41,3.41,0,0,0,1.31-.27l1.44,1.45a.33.33,0,0,0,.23.09l.79,0,0,.79a.32.32,0,0,0,.09.23.27.27,0,0,0,.23.08l.79,0,0,.79a.31.31,0,0,0,.09.22.29.29,0,0,0,.22.09l.79,0,0,.79a.3.3,0,0,0,.09.24.32.32,0,0,0,.21.08h0l1.21-.14a.3.3,0,0,0,.27-.33l-.13-1.48Z" fill="#6576ff"></path>
                                <path d="M20.56,14.09a1,1,0,0,1-1.34,0,1,1,0,0,1,0-1.35,1,1,0,1,1,1.34,1.35Z" fill="#fff"></path>
                                <path d="M23.72,16.39h0l3.79,3.79a.22.22,0,0,1,0,.32h0a.24.24,0,0,1-.32,0l-3.75-3.76Z" fill="#fff"></path>
                                <rect x="17.32" y="11.6" width="11" height="11" fill="none"></rect>
                            </svg>';

                            $nb3 = '
    		            	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" style="height: 50px;">
                                <rect x="7" y="10" width="76" height="50" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <rect x="32" y="69" width="28" height="7" rx="1.5" ry="1.5" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <line x1="40" y1="60" x2="40" y2="69" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="52" y1="60" x2="52" y2="69" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="42" y1="24" x2="70" y2="24" fill="#c4cefe" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="42" y1="30" x2="70" y2="30" fill="#c4cefe" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="42" y1="36" x2="70" y2="36" fill="#c4cefe" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <rect x="24" y="23" width="12" height="14" fill="none" stroke="#c4cefe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <rect x="69" y="50" width="18" height="30" rx="3" ry="3" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <line x1="78.09" y1="75.56" x2="78.09" y2="75.56" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <rect x="3" y="46" width="24" height="34" rx="3" ry="3" fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <line x1="14.69" y1="76.66" x2="14.69" y2="76.66" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></line>
                                <line x1="13.5" y1="49.5" x2="16.5" y2="49.5" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"></line>
                                <line x1="3.5" y1="73.5" x2="26.5" y2="73.5" fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"></line>
                            </svg>';
                            $nb4 = ' 
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90" style="height: 50px;">
                                <rect x="3" y="12.5" width="64" height="63.37" rx="7" ry="7" fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></rect>
                                <path d="M10,13.49H60a6,6,0,0,1,6,6v3.9a0,0,0,0,1,0,0H4a0,0,0,0,1,0,0v-3.9A6,6,0,0,1,10,13.49Z" fill="#e3e7fe"></path>
                                <rect x="3" y="23.39" width="64" height="1.98" fill="#6576ff"></rect>
                                <path d="M65.37,31.31H76.81A12.24,12.24,0,0,0,87,42S88.12,66.31,65.37,77.5C42.62,66.31,43.75,42,43.75,42A12.23,12.23,0,0,0,53.93,31.31Z" fill="#fff" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></path>
                                <path d="M66,72.62c19-9.05,18.1-28.71,18.1-28.71s-7.47-.94-8.52-8.64H66Z" fill="#e3e7fe"></path>
                                <polygon points="56 46.16 55 46.16 55 42.2 59 42.2 59 43.2 56 43.2 56 46.16" fill="#010863"></polygon>
                                <polygon points="59 65.97 55 65.97 55 62.01 56 62.01 56 64.98 59 64.98 59 65.97" fill="#010863"></polygon>
                                <polygon points="78 65.97 74 65.97 74 64.98 77 64.98 77 62.01 78 62.01 78 65.97" fill="#010863"></polygon>
                                <polygon points="78 46.16 77 46.16 77 43.2 74 43.2 74 42.2 78 42.2 78 46.16" fill="#010863"></polygon>
                                <path d="M70,51.12H62V48.86a3.74,3.74,0,0,1,3.17-3.57c2.56-.46,4.83,1.28,4.83,3.49Zm-7-1h6V48.56a2.78,2.78,0,0,0-2-2.63,3,3,0,0,0-4,2.64Z" fill="#6576ff"></path>
                                <path d="M58,57.28V50.13H74V57.5c0,4.62-4.65,8.26-9.86,7.17A7.63,7.63,0,0,1,58,57.28Z" fill="#e5effe"></path>
                                <path d="M59,51.12v6.7A7,7,0,0,0,73,58V51.12Z" fill="#6576ff"></path>
                                <ellipse cx="66" cy="55.08" rx="2" ry="1.98" fill="#fff"></ellipse>
                                <polygon points="68.91 62.01 63.84 62.01 65.18 56.07 67.57 56.07 68.91 62.01" fill="#fff"></polygon>
                                <path d="M72,51.12H60V48.66a5.41,5.41,0,0,1,4.06-5.14c4.13-1.14,7.94,1.54,7.94,5Zm-11-1H71V48.49A4.69,4.69,0,0,0,67.08,44c-3.23-.6-6.08,1.58-6.08,4.33Z" fill="#6576ff"></path>
                                <rect x="13" y="32.3" width="22" height="5.94" rx="1" ry="1" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></rect>
                                <rect x="12" y="45.17" width="22" height="5.94" rx="1" ry="1" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></rect>
                                <rect x="12" y="57.06" width="12" height="5.94" rx="1" ry="1" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2"></rect>
                            </svg>
                            ';
                            $icone_service_ok ='';

                            if ($services->num_rows() > 0) {
                            	foreach ($services->result_array() as $key) {

                            		if ($key['idtinfo_service'] == 1) {
                            			$icone_service_ok = $nb1;
                            		}
                            		elseif ($key['idtinfo_service'] == 2) {
                            			$icone_service_ok = $nb2;
                            		}
                            		elseif ($key['idtinfo_service'] == 3) {
                            			$icone_service_ok = $nb3;
                            		}
                            		elseif ($key['idtinfo_service'] == 4) {
                            			$icone_service_ok = $nb4;
                            		}
                            		else{
                            			$icone_service_ok = $nb1;
                            		}

                            		?>
                            		<!-- bloc 1 -->
    				                <div class="col-md-6 mb-2">

    				                	<div class="card card-bordered">
    				                        <div class="card-inner card-inner-lg">
    				                            <div class="align-center flex-wrap flex-md-nowrap g-4">
    				                                <div class="nk-block-image w-120px flex-shrink-0">
    				                                   <!--  <?php echo($icone_service_ok) ?> -->
    				                                   <img src="<?php echo(base_url()) ?>upload/service/<?php echo($key['image']) ?>" class="img img-fluid">
    				                                   
    				                                </div>
    				                                <div class="nk-block-content">
    				                                    <div class="nk-block-content-head px-lg-4" style="height: 260px;">
    				                                    	<h5><?php echo($key['titre']) ?></h5>
    				                                        <p class="text-soft"> <?php echo($key['description']) ?></p>
    				                                    </div>
    				                                </div>
    				                                
    				                            </div>
    				                        </div>
    				                    </div>
    				                   
    				                </div>
    				                <!-- fin -->
                            		<?php

                            		# code...
                            	}
                            	# code...
                            }
                            else{

                            }

                    */
            	 ?>

                
            </div>
        </div>
        <div class="col-md-12">
        	<div class="row">
        		<div class="col-4"></div>
        		<div class="col-4">
        			<!-- pagination box -->
					<div class="pagination-box" id="pagination_link">
						
					</div>
					<!-- End Pagination box -->
        		</div>
        		<div class="col-4"></div>
        	</div>
        </div>
        <!-- fin service -->

    </div>
</div>
