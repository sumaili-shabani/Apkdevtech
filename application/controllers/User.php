<?php 


defined('BASEPATH') OR exit('No direct script access allowed');  
class user extends CI_Controller
{
		private $token;
		private $connected;
		public function __construct()
		{
		  parent::__construct();
		  if(!$this->session->userdata('id'))
		  {
		      	redirect(base_url().'login');
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
			$data['title']="Mon profile utilisateur";
		    $data['users'] = $this->crud_model->fetch_connected($this->connected);
		    $this->load->view('backend/user/profile', $data);
		}

		


		


}


 ?>