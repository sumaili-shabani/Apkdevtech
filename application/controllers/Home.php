<?php 


defined('BASEPATH') OR exit('No direct script access allowed');  
class home extends CI_Controller
{
		private $token;
		private $connected;
		public function __construct()
		{
		  parent::__construct();
		  if($this->session->userdata('id')) {
			  redirect("user");
		  }
		  if($this->session->userdata('admin_login')) {
		 	 redirect("admin");
		  }
		 
		  $this->load->library('form_validation');
		  $this->load->library('encrypt');
	      $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('id');

		}

		function index(){
			$data['title']="Accueil vous sois doux";
			$data['categories'] = $this->crud_model->fetch_categores();
			$data['users'] = $this->crud_model->fetch_connected($this->connected);
			$this->load->view('frontend/accueil', $data);
		}

		
}




 ?>