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

		function dashbord(){
			$data['title']="Mon profile utilisateur";
		    $data['users'] = $this->crud_model->fetch_connected($this->connected);
		    $this->load->view('backend/user/panel', $data);
		}

		function chat_admin($param1, $param2){
	        $data['title']="Discution instantané";
	        $data['id_user']= $param1;
	        $data['id_recever']= $param2;
	        $data['id_recever2']= $param2;
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);

	        $this->load->view('backend/user/messagerie', $data);
	    }

	    function message_count($param1=''){
	        $data['id_user']= $param1;
	        $data['title']="Mes messages";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/user/message_count', $data);
	    }

	    function notification($param1=''){
	      $data['title']    ="Listes des formations";
	      $data['users']    = $this->crud_model->fetch_connected($this->connected);
	      $this->load->view('backend/user/notification', $data);
	    }

	    function message($param1=''){
	        $data['id_user']= $param1;
	        $data['title']="Mes messages";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/user/message', $data);
	    }

	    function profile(){
	      $data['title']="mon profile user";
	      $data['users'] = $this->crud_model->fetch_connected($this->connected);
	      // $this->load->view('backend/admin/viewx', $data);
	      $this->load->view('backend/user/profile', $data);
	    }

	    function detail_users_profile($param1=''){

	        $data['title']="Détail de profile utilisateur";
	        $data['user_search'] =$param1;
	        $data['users'] = $this->crud_model->fetch_connected($param1);
	        // $data['publicites'] = $this->crud_model->publicite_alleatoire();
	        $this->load->view('backend/user/detail_users_profile', $data);

	    }

	    function basic(){
	        $data['title']="Information basique";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/user/basic', $data);
	    }

	    function basic_notification_param(){
	        $data['title']="Paramètrage des Informations des notifications";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/user/basic_not_plus', $data);
	    }

	    function basic_notification_social(){
	        $data['title']="Paramètrage des Informations des notifications";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/user/basic_not_social', $data);
	    }

	    function basic_image(){
	        $data['title']="Information basique de ma photo";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/user/basic_image', $data);
	    }

	    function basic_secure(){
	        $data['title']="Paramètrage de sécurité de mon compte";
	        $data['users'] = $this->crud_model->fetch_connected($this->connected);
	        $this->load->view('backend/user/basic_secure', $data);
	    }



	    function modification_panel($param1='', $param2='', $param3=''){

	      if ($param1="option1") {
	         $data = array(
	            'first_name'        => $this->input->post('first_name'),
	            'last_name'       => $this->input->post('last_name'),
	            'telephone'       => $this->input->post('telephone'),
	            'full_adresse'      => $this->input->post('full_adresse'),
	            'biographie'        => $this->input->post('biographie'),
	            'date_nais'       => $this->input->post('date_nais'),
	            'sexe'          => $this->input->post('sexe'),
	            'email'         => $this->input->post('mail_ok'), 

	            'facebook'        => $this->input->post('facebook'),
	            'linkedin'        => $this->input->post('linkedin'),
	            'twitter'         => $this->input->post('twitter')
	        );

	        $id_user= $this->connected;
	        $query = $this->crud_model->update_crud($id_user, $data);
	        $this->session->set_flashdata('message', 'votre profile a été mis à jour avec succès!!!🆗');
	         redirect('user/basic', 'refresh');
	      }

	  }

	  function modification_photo(){

	     $id_user= $this->connected;
	     if ($_FILES['user_image']['size'] > 0) {
	       # code...
	        $data = array(
	          'image'     => $this->upload_image()
	        );
	       $query = $this->crud_model->update_crud($id_user, $data);
	       $this->session->set_flashdata('message', 'modification avec succès');
	           redirect('user/basic_image', 'refresh');
	     }
	     else{

	        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
	        redirect('user/basic_image', 'refresh');

	     }
	     
	  }


	  function upload_image()  
	  {  
	       if(isset($_FILES["user_image"]))  
	       {  
	            $extension = explode('.', $_FILES['user_image']['name']);  
	            $new_name = rand() . '.' . $extension[1];  
	            $destination = './upload/photo/' . $new_name;  
	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
	            return $new_name;  
	       }  
	  }

	  function modification_account($param1=''){
	       $id_user= $this->connected;
	       $first_name;

	       $passwords = md5($this->input->post('user_password_ancien'));
	       
	       $users = $this->db->query("SELECT * FROM users WHERE passwords='".$passwords."' AND id='".$id_user."' ");

	       if ($users->num_rows() > 0) {
	          
	          foreach ($users->result_array() as $row) {
	            $first_name = $row['first_name'];
	            // echo($first_name);
	             $nouveau   =  $this->input->post('user_password_nouveau');
	             $confirmer =  $this->input->post('user_password_confirmer');
	             if ($nouveau == $confirmer) {
	              $new_pass= md5($nouveau);

	              $data = array(
	                  'passwords'  => $new_pass
	                );

	                 $query = $this->crud_model->update_crud($id_user, $data);
	                 $this->session->set_flashdata('message', 'votre clée de sécurité a été changer avec succès '.$first_name);
	                   redirect('user/basic_secure', 'refresh');

	               }
	               else{
	   
	                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
	                redirect('user/basic_secure', 'refresh');
	               }
	         
	          }

	       }
	       else{

	          $this->session->set_flashdata('message2', 'information incorecte');
	          redirect('user/basic_secure', 'refresh');
	       }
	     
	  } 









	 function view_1($param1='', $param2='', $param3=''){
      
      if($param1=='display_delete') {

        $query = $this->crud_model->delete_notifacation_tag($param2);
        redirect('user/notification');
      }

      if($param1=='display_delete_message') {

        $query = $this->crud_model->delete_message_tag($param3);
        redirect('user/message/'.$param2);
      }
      else{

      }

      
    } 

	function chat_local_view($param1, $param2){
      $data['title']="Discution instantané";
      $data['id_user']= $param1;
      $data['id_recever']= $param2;

      $code = substr(md5(rand(100000000, 200000000)), 0, 10);

      if ($this->input->post('Message_text') !='') {

        $chat['id_user'] = $param1;
        $chat['id_recever'] = $param2;
        $chat['message'] = $this->input->post('Message_text');
        $chat['code'] = $code;

        $md5 = md5(date('d-m-y H:i:s'));


        
        if($_FILES['user_image']['size'] > 0){

          $chat['fichier'] =  $md5.str_replace(' ', '', $_FILES['user_image']['name']);

                // $chat['fichier'] = $this->upload_image_chat_envoie();
                move_uploaded_file($_FILES['user_image']['tmp_name'], 'upload/groupe/fichier/' . $md5.str_replace(' ', '', $_FILES['user_image']['name']));
        }

        $this->crud_model->insert_message($chat);
        
        redirect('user/chat_admin/'.$param1.'/'.$param2);
      }
      else{
        redirect('user/chat_admin/'.$param1.'/'.$param2);
      }
      
      
    }
		// pour les follower
   function pagination_users_on_to()
   {

    $this->load->library("pagination");
    $config = array();
    $config["base_url"] = "#";
    $config["total_rows"] = $this->crud_model->fetch_pagination_ti_followe_count();
    $config["per_page"] = 5;
    $config["uri_segment"] = 3;
    $config["use_page_numbers"] = TRUE;
    $config["full_tag_open"] = '<ul class="pagination">';
    $config["full_tag_close"] = '</ul>';
    $config["first_tag_open"] = '<li class="page-item">';
    $config["first_tag_close"] = '</li>';
    $config["last_tag_open"] = '<li class="page-item">';
    $config["last_tag_close"] = '</li>';
    $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
    $config["next_tag_open"] = '<li class="page-item">';
    $config["next_tag_close"] = '</li>';
    $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
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
     'country_table'   => $this->crud_model->fetch_details_pagination_to_users_count2($config["per_page"], $start)
    );
    echo json_encode($output);
   }

    // recherche de formations des produits
   function fetch_search_user_follow_pagination()
   {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_online_user_follow($query);
      
      if($data->num_rows() > 0)
      {

        $id = $this->connected;
        $etat = '';
        $etat2 = '';

          foreach($data->result() as $row)
          {

            

             if ($row->id != $id) {
                $etat = '
                <a href="'.base_url().'user/chat_admin/'.$id.'/'.$row->id.'"><i class="fa fa-comment"></i></a>';
              }
              else{

                $etat = '
                <a href="'.base_url().'user/detail_users_profile/'.$row->id.'"><i class="fa fa-user"></i></a> ';
                
              }

            
             $output .= '

             <div class="nk-msg-item" data-msg-id="2">
                  <div class="nk-msg-media user-avatar">
                      <img src="'.base_url().'upload/photo/'.$row->image.'" alt="">
                  </div>
                  <div class="nk-msg-info">
                      <div class="nk-msg-from">
                          <div class="nk-msg-sender">
                              <div class="name"><a href="javascrit:void(0);">'.$row->first_name.' '.substr($row->last_name, 0,25).'</a></div>
                          </div>
                          <div class="nk-msg-meta">
                              <div class="date">'.$etat.'</div>
                          </div>
                      </div>
                      <div class="nk-msg-context">
                          <div class="nk-msg-text">
                              <h6 class="title">'.$row->email.'</h6>
                              <p>'.substr($row->biographie, 0,50).'...</p>
                          </div>
                          <div class="nk-msg-lables">
                              <div class="asterisk"><a class="active" href="#"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
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
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 100%; height: auto;" src="data:'.base_url().'upload/annumation/a.gif" srcset="'.base_url().'upload/annumation/a.gif" data-holder-rendered="true">
                
              </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }

   // pagination information sur les produits
    function pagination_users_on_line()
   {

      $this->load->library("pagination");
      $config = array();
      $config["base_url"] = "#";
      $config["total_rows"] = $this->crud_model->fetch_pagination_online();
      $config["per_page"] = 6;
      $config["uri_segment"] = 3;
      $config["use_page_numbers"] = TRUE;
      $config["full_tag_open"] = '<ul class="pagination">';
      $config["full_tag_close"] = '</ul>';
      $config["first_tag_open"] = '<li class="page-item">';
      $config["first_tag_close"] = '</li>';
      $config["last_tag_open"] = '<li class="page-item">';
      $config["last_tag_close"] = '</li>';
      $config['next_link'] = '<li class="page-item active"><i class="btn btn-info">&gt;&gt;</i>';
      $config["next_tag_open"] = '<li class="page-item">';
      $config["next_tag_close"] = '</li>';
      $config["prev_link"] = '<li class="page-item active"><i class="btn btn-info">&lt;&lt;</i>';
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
       'country_table'   => $this->crud_model->fetch_details_pagination_online_connected2($config["per_page"], $start)
      );
      echo json_encode($output);
     }

     // recherche de formations des produits
   function fetch_search_user_online_pagination2()
   {
      $output = '';
      $query = '';
      if($this->input->post('query'))
      {
       $query = $this->input->post('query');
      }
      $data = $this->crud_model->fetch_data_search_online_user($query);
      
      if($data->num_rows() > 0)
      {

        $id = $this->connected;
        $etat = '';

         foreach($data->result() as $row)
         {

          if ($row->id != $id) {
              $etat = '<span class="message">
                <a href="'.base_url().'user/chat_admin/'.$id.'/'.$row->id.'">
              &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                  </a> 
                </span>';
            }
            else{

              $etat = '

              <span class="message">
                <a href="'.base_url().'user/detail_users_profile/'.$row->id.'" class="text-warning">
              &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                  </a> 
                </span>

              ';

              
            }



          $output .= '

           <li class="online">
                <a href="javascript:void(0);">
                    <div class="media">
                        <div class="avtar-pic w35 bg-red">
                          <span>
                          <img src="'.base_url().'upload/photo/'.$row->image.'" class="img img-responsive img-circle" style="width: 50px; height: 40px; border-radius: 70%;">
                            </span>
                        </div>

                        <div class="contacts-list-info">
                            <span class="contacts-list-name">
                              <span class="name text-info">&nbsp;&nbsp;@'.$row->first_name.' '.substr($row->last_name, 0,25).' </span><br>
                            '.$etat.'
                              
                            </span>
                            
                        </div>

                        
                    </div>
                </a>
            </li>
            

          ';
         }
      }
      else
      {
          $output .= '
            <div class="media text-muted pt-3">
                <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 50px; height: 50;" src="data:'.base_url().'upload/annumation/b.gif" srcset="'.base_url().'upload/annumation/b.gif" data-holder-rendered="true">
                
              </div>
          ';
          // $this->db->pagination_information();
      }

      echo $output;
   }








		


		


}


 ?>