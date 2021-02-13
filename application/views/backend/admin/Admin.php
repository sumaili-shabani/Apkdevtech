<?php 

defined('BASEPATH') OR exit('No direct script access allowed');  
class admin extends CI_Controller
{
		private $token;
		private $connected;
		public function __construct()
		{
		  parent::__construct();
		  if(!$this->session->userdata('admin_login'))
		  {
		      	redirect(base_url().'login');
		  }
		  $this->load->library('form_validation');
		  $this->load->library('encrypt');
	      $this->load->library('pdf');
		  $this->load->model('crud_model'); 

		  $this->load->helper('url');

		  $this->token = "sk_test_51GzffmHcKfZ3B3C9DATC3YXIdad2ummtHcNgVK4E5ksCLbFWWLYAyXHRtVzjt8RGeejvUb6Z2yUk740hBAviBSyP00mwxmNmP1";
		  $this->connected = $this->session->userdata('admin_login');

		}

		function index(){
			$data['title']="mon profile admin";
			// $this->load->view('backend/admin/dashbord', $data);
			redirect('admin/statistiques','refresh');
		}

		function dashbord(){
			$data['title']="mon profile admin";
			// $this->load->view('backend/admin/dashbord', $data);
			redirect('admin/panel','refresh');
		}


		
}



 ?>