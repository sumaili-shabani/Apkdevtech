<?php 


defined('BASEPATH') OR exit('No direct script access allowed');  
class home extends CI_Controller
{
		private $token;
		private $connected;
		public function __construct()
		{
		  parent::__construct();
		  // if($this->session->userdata('id')) {
			 //  redirect("user");
		  // }
		  // if($this->session->userdata('admin_login')) {
		 	//  redirect("admin");
		  // }
		 
		  $this->load->library('form_validation');
		  $this->load->library('encrypt');
	      $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('id');

		}

		function index(){
			$data['title']="Accueil vous sois doux!";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['mini_projets']  = $this->crud_model->Select_contact_tinfo_projet_mini();

			$data['menu']  = "/";
			$this->load->view('frontend/home_default', $data);
			// $this->load->view('frontend/templete', $data);
		}

		function blog(){
			$data['title']="Blog pour information";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "blog";
			$this->load->view('frontend/blog', $data);
			
		}

		function contact(){
			$data['title']="Contact pour information";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "contact";
			$this->load->view('frontend/contact', $data);
			
		}

		function service(){
			$data['title']="Explorez nos services!";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "service";
			$this->load->view('frontend/service', $data);
			
		}

		function projets(){
			$data['title']="Nos projets recents!";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "projets";
			$this->load->view('frontend/projets', $data);
			
		}

		
		function galery(){
			$data['title']="Nos souvenirs photos!";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "galery";
			$this->load->view('frontend/galery', $data);
			
		}

		function video(){
			$data['title']="Notre playliste vidéos !";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "video";
			$this->load->view('frontend/video', $data);
			
		}

		function projet($param1=''){
			$data['title']="Détail du projet!";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['projects_detail']  = $this->crud_model->Select_contact_projets_detail($param1);


			$data['menu']  = "projets";
			$this->load->view('frontend/detail_projet', $data);
			
		}

		function condition(){
			$data['title']="Conditions générales d'utilisation du site";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "blog";
			$this->load->view('frontend/condition', $data);
			
		}

		function politique(){
			$data['title']="Politique de protection des données personnelles";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "blog";
			$this->load->view('frontend/politique', $data);
			
		}

		function log(){
			$data['title']="Authentification et droit droit d'accès au système";
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$data['personelles'] = $this->crud_model->Select_articles_tinfo_personnel();

			$data['contact_info_site']  = $this->crud_model->Select_contact_info_site();
			$data['familles']  = $this->crud_model->Select_contact_membre();
			$data['services']  = $this->crud_model->Select_contact_service();
			// statistiques
			$data['nombre_users']   		= $this->crud_model->statistiques_nombre("users");
			$data['nombre_services']   		= $this->crud_model->statistiques_nombre("tinfo_service");
			$data['nombre_tinfo_projet']   	= $this->crud_model->statistiques_nombre("tinfo_projet");
			$data['nombre_tinfo_user']   	= $this->crud_model->statistiques_nombre("tinfo_user");
			// finstatistique

			$data['projects_cool']  = $this->crud_model->Select_contact_projets_cool();
			$data['services_techno']  = $this->crud_model->Select_contact_service_techno();
			$data['services_choix']  = $this->crud_model->Select_contact_tinfo_choix();

			$data['menu']  = "blog";
			$this->load->view('frontend/login', $data);
			
		}







		//operation du formulaire de contact

		function operation_contact(){

	  	if ($_FILES['user_image']['size'] > 0) {
	 		
	 		$logo = $this->upload_image_fichier_contact_radio();
	 		$insert_data = array(  

		           'nom'           =>     $this->input->post('name'),  
		           'sujet'         =>     $this->input->post("subject"),
		           'email'         =>     $this->input->post("email"),  
		           'message'       =>     $this->input->post("message"),
		           'fichier'       =>     $logo  
		           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	echo("Nous vous répondrons dans un instant");	
	 	}
	 	else{
	 		$insert_data = array(  

		           'nom'           =>     $this->input->post('name'),  
		           'sujet'         =>     $this->input->post("subject"),
		           'email'         =>     $this->input->post("email"),  
		           'message'       =>     $this->input->post("message")		           
			 ); 

	      	$requete=$this->crud_model->insert_contact($insert_data);
	      	echo("Nous vous répondrons dans un instant");
	 	}
  
      }


      function upload_image_fichier_contact_radio()  
	  {  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/contact/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	  }















		/*

		les script commence pour les offres
		===================================

		*/
	// pagination de services
	 function pagination_access_our_services()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_services();
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_details_pagination_offres($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }

	 // pagination de services de la pages service
	 function pagination__services_ok()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_services();
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_pagination_services_page($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }

	 // pagination de services de la pages service
	 function pagination__projects()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_project();
	  $config["per_page"] = 2;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_pagination_projects_page($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }

	 // recherche de projets
	 function fetch_search_our_projects()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_projects($query);
		  $today = date('Y-m-d');
          $status = '';
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {



			        if ($key->lien !='') {
						$url_site ='
						<a target="_blank" href="'.$key->lien.'" class="btn btn-outline-info">
				    		<i class="fa fa-globe"></i> &nbsp;
				    	visiter le site</a>';
					}
					else
					{
						$url_site ='';
					}

			        $output .= '

			        <div class="col-md-12 mb-2">

			        	<div class="card card-bordered">

			        		<div class="card-header text-center" style="background-color: rgb(41, 52, 122);">
			        			<h5 class="text-white">'.$key->titre.'</h5>
			        			
			        		</div>

			                <div class="card-inner card-inner-lg bg-lighter">
			                    <div class="align-center flex-wrap flex-md-nowrap g-4">
			                        <div class="nk-block-image w-120px flex-shrink-0">

			                           <img src="'.base_url().'upload/projet/'.$key->image.'" class="img img-fluid">
			                           
			                        </div>
			                        <div class="nk-block-content">
			                            <div class="nk-block-content-head px-lg-4">
			                            	
			                                <p class="text-soft">'.nl2br(substr($key->description, 0,450)).'  ... &nbsp;&nbsp;
			                                	'.$url_site.'
			                                </p>
			                                
			                            </div>
			                        </div>
			                        
			                    </div>
			                </div>

			                <div class="card-header text-center" style="background-color: rgb(41, 52, 122);">
			        			<p class="sub-text ">
			                    	<a href="'.base_url().'home/projet/'.$key->idtinfo_projet.'" class="btn btn-primary btn-sm">
			                    		<i class="fa fa-eye"></i>&nbsp; Voir le détail
			                    	</a>
			                    </p>

			        		</div>

			            </div>
			           
			        </div>

			     ';
			   }
		  }
		  else
		  {
		   		$output .= '
		            <div class="col-md-12 media text-muted pt-2 bg-white">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: 200px;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
		        ';
		  }

	  	echo $output;
	 }

	 // pagination de galery de la pages
	 function pagination__galeries()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_galeries();
	  $config["per_page"] = 4;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_pagination_galery_page($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }

	  // pagination de galery de la pages
	 function pagination__videos()
	 {

	  $this->load->library("pagination");
	  $config = array();
	  $config["base_url"] = "#";
	  $config["total_rows"] = $this->crud_model->fetch_pagination_videos();
	  $config["per_page"] = 2;
	  $config["uri_segment"] = 3;
	  $config["use_page_numbers"] = TRUE;
	  $config["full_tag_open"] = '<ul class="pagination">';
	  $config["full_tag_close"] = '</ul>';
	  $config["first_tag_open"] = '<li class="page-item">';
	  $config["first_tag_close"] = '</li>';
	  $config["last_tag_open"] = '<li class="page-item">';
	  $config["last_tag_close"] = '</li>';
	  $config['next_link'] = '<li class="page-item active"><i class="btn btn-primary">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="btn btn-primary">&lt;&lt;</i>';
	  $config["prev_tag_open"] = "<li class='page-item'>";
	  $config["prev_tag_close"] = "</li>";
	  $config["cur_tag_open"] = "<li class='page-item active'><a href='#' class='page-link'>";
	  $config["cur_tag_close"] = "</a></li>";
	  $config["num_tag_open"] = "<li class='page-item'>";
	  $config["num_tag_close"] = "</li>";
	  $config["num_links"] = 1;
	  $this->pagination->initialize($config);
	  $page = $this->uri->segment(3);
	  $start = ($page - 1) * $config["per_page"];

	  $output = array(
	   'pagination_link' => $this->pagination->create_links(),
	   'country_table'   => $this->crud_model->fetch_pagination_videos_page($config["per_page"], $start)
	  );
	  echo json_encode($output);
	 }

	 // recherche de videos
	 function fetch_search_our_videos()
	 {
		  $output = '';
		  $query = '';
		  if($this->input->post('query'))
		  {
		   $query = $this->input->post('query');
		  }
		  $data = $this->crud_model->fetch_data_search_videos($query);
		  $today = date('Y-m-d');
          $status = '';
		  
		  if($data->num_rows() > 0)
		  {

		  	  
			   foreach($data->result() as $key)
			   {



			        $output .= '

			         <div class="col-md-6 mb-2 p-2">
						<div class="row">
							
							<div class="col-md-12">
								<div class="embed-responsive embed-responsive-16by9">
								  	<iframe class="embed-responsive-item" src="'.$key->lien.'" allowfullscreen></iframe>
								</div>

								<div class="card-title">
									<strong>'.$key->nom.'</strong>
									
								</div>
								<div class="card-text">
									<p>
									'.nl2br(substr($key->description, 0,500)).' ...
									
								</p>
								</div>

							</div>
						</div>
					</div>

			     ';
			   }
		  }
		  else
		  {
		   		$output .= '
		            <div class="col-md-12 media text-muted pt-2 bg-white">
		                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: 200px;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
		                
		              </div>
		        ';
		  }

	  	echo $output;
	 }















		
}

?>

