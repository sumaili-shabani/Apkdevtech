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
	  $config['next_link'] = '<li class="page-item active"><i class="">&gt;&gt;</i>';
	  $config["next_tag_open"] = '<li class="page-item">';
	  $config["next_tag_close"] = '</li>';
	  $config["prev_link"] = '<li class="page-item active"><i class="">&lt;&lt;</i>';
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


		
}




 ?>

