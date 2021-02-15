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
		      	redirect(base_url().'login', 'refresh');
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

    function info_personnel(){
      $data['title']="Information personnel";
      $this->load->view('backend/admin/landing/info_personnel', $data);
    }

    function info_service(){
      $data['title']="Information sur les services";
      $this->load->view('backend/admin/landing/info_service', $data);
    }

    function info_projet(){
    	$data['title']="Information sur les projets";
      	$this->load->view('backend/admin/landing/info_projet', $data);
    }

    function info_mini_projet(){
    	$data['title']="Information sur les projets";
      	$this->load->view('backend/admin/landing/info_mini_projet', $data);
    }

    function info_choix(){
      $data['title']="Pourquoi nous choisir?";
      $this->load->view('backend/admin/landing/info_choix', $data);
    }

    function info_technologique(){
      $data['title']="Information sur les services technologiques";
      $this->load->view('backend/admin/landing/info_technologique', $data);
    }

    function info_membre(){
      $data['title']="Information sur les services technologiques";
      $this->load->view('backend/admin/landing/info_membre', $data);
    }



    function video(){
      $data['title']="Paramétrage  de nos vidéos";  
      $this->load->view('backend/admin/landing/video', $data);  
    }

    function galery(){
    	$data['title']="Paramétrage  des galeries photos";  
      $this->load->view('backend/admin/landing/galery', $data); 
    }



    function contact_info(){
      $data['title']="Les informations de contact";
      $this->load->view('backend/admin/landing/contact_info', $data);
    }


		function dashbord(){
			$data['title']="mon profile admin";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
			$this->load->view('backend/admin/panel', $data);
			// $this->load->view('backend/admin/templete', $data);

      // $this->load->view('backend/admin/viewx', $data);
			// redirect('admin/role','refresh');
			
		}

    // script pour la sauvegarge de données 
    function database($param1 = '', $param2 = '')
    {
        
        if($param1 == 'restore')
        {
            // $this->crud_model->import_db();
            $this->session->set_flashdata('message',"Importation de la base des données avec succès!!!");
            redirect(base_url() . 'admin/database/', 'refresh');
        }
        if($param1 == 'create')
        {
          $this->crud_model->create_backup();
          $this->session->set_flashdata('message',"Sauvegarde de la base des données avec succès!!!");
          redirect(base_url() . 'admin/database/', 'refresh');
        }

        $data['title'] = "Sauvegarde et restauration de la base des données";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/database', $data);
    }
    // fin script sauvegarde des données 

    function notification_user(){
       $users_cool = $this->crud_model->get_info_user();
        foreach ($users_cool as $key) {

            if ($key['idrole'] == 2) {
              $url ="user/teste_suggestion";

              $id_user_recever = $key['id'];

              $nom   = $this->crud_model->get_name_user($id_user_recever);
              $message ="salut ".$nom." vous avez peut-être raté une information";

              $notification = array(
                'titre'     =>    "nouvelle notificaton",
                'icone'     =>    "fa fa-bell",
                'message'   =>     $message,
                'url'       =>     $url,
                'id_user'   =>     $id_user_recever
              );
              
              for ($i=0; $i < 5 ; $i++) { 
                # code...
                // $not = $this->crud_model->insert_notification($notification);
              }

            }
            
              # code...
        }
    }


    function profile(){
      $data['title']="mon profile admin";
      $data['users'] = $this->crud_model->fetch_connected($this->connected);
      // $this->load->view('backend/admin/viewx', $data);
      $this->load->view('backend/admin/profile', $data);
    }

    function detail_users_profile($param1=''){

        $data['title']="Détail de profile utilisateur";
        $data['user_search'] =$param1;
        $data['users'] = $this->crud_model->fetch_connected($param1);
        // $data['publicites'] = $this->crud_model->publicite_alleatoire();
        $this->load->view('backend/admin/detail_users_profile', $data);

    }

    function basic(){
        $data['title']="Information basique";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic', $data);
    }

    function basic_notification_param(){
        $data['title']="Paramètrage des Informations des notifications";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic_not_plus', $data);
    }

    function basic_notification_social(){
        $data['title']="Paramètrage des Informations des notifications";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic_not_social', $data);
    }

    function basic_image(){
        $data['title']="Information basique de ma photo";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic_image', $data);
    }

    function basic_secure(){
        $data['title']="Paramètrage de sécurité de mon compte";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/basic_secure', $data);
    }

		function role(){
			$data['title']="Paramétrage  privilège  au système";
			$this->load->view('backend/admin/role', $data);		
		}

		function site(){
			$data['title']="Paramétrage  du site";
			$this->load->view('backend/admin/site', $data);		
		}

		function edition(){
			$data['title']="Paramétrage  des éditions pour formation";
			$this->load->view('backend/admin/edition', $data);	
		}

		function formation(){
			$data['title']="Paramétrage  des formations";
			$this->load->view('backend/admin/formation', $data);	
		}

		function cat_apprenant(){
			$data['title']="Paramétrage  des catégories des apprenants";
			$this->load->view('backend/admin/cat_apprenant', $data);
		}

    function presence(){
      $data['title']="Gestion de présence pour les apprenants";
      $data['users']  = $this->crud_model->Select_apprenants();
      $data['dates']  = $this->crud_model->fetch_categores_dates_presence();
      $this->load->view('backend/admin/presence', $data);
    }

    function qrcodepresence(){

      $data['title']  = "Gestion de présence avec la technologie qrcode";
      $data['users']  = $this->crud_model->Select_apprenants();
      $data['dates']  = $this->crud_model->fetch_categores_dates_presence();
      $this->load->view('backend/admin/qrcodepresence', $data);
    }

    function qrcoderecouvrement(){

      $data['title']  = "Recouvrement forcé des tranches";
      $data['users']  = $this->crud_model->Select_apprenants();
      $data['dates']  = $this->crud_model->fetch_categores_dates_presence();
      $this->load->view('backend/admin/qrcoderecouvrement', $data);
    }

    function notification($param1=''){
      $data['title']    ="Listes des formations";
      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $this->load->view('backend/admin/notification', $data);
    }

    function message($param1=''){
        $data['id_user']= $param1;
        $data['title']="Mes messages";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/message', $data);
    }

    function message_count($param1=''){
        $data['id_user']= $param1;
        $data['title']="Mes messages";
        $data['users'] = $this->crud_model->fetch_connected($this->connected);
        $this->load->view('backend/admin/message_count', $data);
    }

    function chat_admin($param1, $param2){
        $data['title']="Discution instantané";
        $data['id_user']= $param1;
        $data['id_recever']= $param2;
        $data['id_recever2']= $param2;
        $data['users'] = $this->crud_model->fetch_connected($this->connected);

        // $this->load->view('backend/admin/templete', $data);

        // $this->load->view('backend/admin/view_chat', $data);
        $this->load->view('backend/admin/messagerie', $data);
    }



    function users(){
      $data['title']="Nos utilisateurs";
      $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
      $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
      $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
      $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
      $data['users']  = $this->crud_model->Select_users();      
      $this->load->view('backend/admin/users', $data);
    }

    function stat_users(){
      $data['title']="Statistique sur nos utilisateurs";
      $data['nombre_users']   = $this->crud_model->statistiques_nombre("users");
      $data['nombre_users_m'] = $this->crud_model->statistiques_nombre_where("users","sexe","M");
      $data['nombre_users_f'] = $this->crud_model->statistiques_nombre_where("users","sexe","F");
      $data['nombre_users_a'] = $this->crud_model->statistiques_nombre_where_null("users","sexe","NULL");
      $this->load->view('backend/admin/stat_users', $data);
    }



    function stat_paiement(){
      $data['title']="statistique sur le paiement";
      $data['nombre_apprenant'] = $this->crud_model->statistiques_nombre("profile_inscription");

      $data['nombre_paiement'] = $this->crud_model->statistiques_nombre("paiement");

      $data['nombre_formation'] = $this->crud_model->statistiques_nombre("formation");
      $data['nombre_users'] = $this->crud_model->statistiques_nombre("users");
      $this->load->view('backend/admin/stat_paiement', $data);
    }

		function inscription_apprenant(){
			$data['title']			  = "Paramétrage  inscription des apprenants";
			$data['users'] 			  = $this->crud_model->fetch_connected($this->connected);
			$data['apprenants'] 	= $this->crud_model->fetch_membre_apprenant();
			$data['formations'] 	= $this->crud_model->fetch_membre_formation();
			$data['categories'] 	= $this->crud_model->fetch_membre_categorie();
			$data['editions'] 		= $this->crud_model->fetch_membre_edition();

      $data['n_formations'] = $this->crud_model->fetch_categores_nom_formation("formation");
      $data['n_editions']   = $this->crud_model->fetch_categores_nom_formation("edition");
			$this->load->view('backend/admin/inscription_apprenant', $data);
		}

    function tranches(){
      $data['title']      ="Paramétrage  des tranches à payer pour la formation";
      $data['formations']   = $this->crud_model->fetch_membre_formation();
      $data['editions']     = $this->crud_model->fetch_membre_edition();
      $this->load->view('backend/admin/tranches', $data);
    }

    function rubrique(){
      $data['title']      ="Paramétrage  des rubriques";
      $data['formations']   = $this->crud_model->fetch_membre_formation();
      $data['editions']     = $this->crud_model->fetch_membre_edition();
      $this->load->view('backend/admin/rubrique', $data);
    }

    function question(){
      $data['title']      ="Paramétrage  des questions";
      $data['rubriques']   = $this->crud_model->fetch_membre_rubrique();
      $this->load->view('backend/admin/question', $data);
    }

    function reponse(){
      $data['title']       = "Paramétrage  des réponses";
      $data['questions']   = $this->crud_model->fetch_membre_question();
      $this->load->view('backend/admin/reponse', $data);
    }

    function teste_suggestion(){
      $data['title']       = "Paramétrage  des réponses";
      $data['questions']   = $this->crud_model->fetch_membre_question();



      if ($this->input->post('idedition')) {

        $token = $this->input->post('idedition');
        echo($token);
        # code...
      }
      else{
        $this->load->view('backend/admin/teste_suggestion', $data);
      }

    }

    function teste_suggestion_param($param1=''){
      $data['title']       = "Paramétrage  des réponses";
      $data['questions']   = $this->crud_model->fetch_membre_question();


      $param1 = $this->input->post('token');
     
      if ($param1 !='') {

        $token = $param1;
        // tester si existe
        $question_one = $this->crud_model->fetch_membre_question_param_one($token);
        // fin de tester
        $data['questions'] = $this->crud_model->fetch_membre_question_param($token);
        $data['question_one'] = $this->crud_model->fetch_membre_question_param_one($token);
        $data['token'] = $token;
        if ($question_one->num_rows() >0) {
          $this->load->view('backend/admin/test_sugestion_valider', $data);
        }
        else{
          $result ="Token incorect!!!";
          $this->session->set_flashdata('message2',$result);
          $this->load->view('backend/admin/teste_suggestion', $data);
        }
        
      }
      else{
        $result ="Veillez completer le token!!!";
        $this->session->set_flashdata('message2',$result);
        $this->load->view('backend/admin/teste_suggestion', $data);
      }


    }

    function show_plus_question(){

      $htmlData = '';
      $token = $this->input->post('token');
      $CommentNewCount = $this->input->post('CommentNewCount');
      $data = $this->crud_model->fetch_membre_question_param_limit($token, $CommentNewCount);
      foreach ($data->result_array() as $row ) {
        $htmlData .='

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
                      <td><a href="#" class="btn btn-primary valider_plus" idq="'.$row['idq'].'"><i class="fa fa-save"></i>Valider</a></td>
                    </tr>
                </tbody>
                
                <tr></tr>
              </table>


            </h5>
          </div>

          <div class="card-body>
           <h6 class="card-title"> 
              '.$row["nomq"].'
            </h6>

            <label class="control-label text-info">
              
              <a href="#" class="control-label text-info common_selector_reponse" idq="'.$row['idq'].'" valeur="très bien" ><input type="checkbox" class="common_selector brand" value="très bien"> très bien ;</a> 
              
            </label>


            <label class="control-label text-info">
             <a href="#" class="control-label text-info common_selector_reponse" idq="'.$row['idq'].'" valeur="bien" ><input type="checkbox" class="common_selector brand" value="bien"> bien ;</a> 

              
            </label>

            <label class="control-label text-info">
              <a href="#" class="control-label text-info common_selector_reponse" idq="'.$row['idq'].'" valeur="mal" ><input type="checkbox" class="common_selector brand" value="mal"> mal ;</a> 

            </label>

            <hr>
          </div>

          

        ';
      }

      echo($htmlData);
    }





    function recouvrement(){
      $data['title'] ="Paramétrage  des recouvrements des frais à payer pour la formation";
      $data['formations']   = $this->crud_model->fetch_membre_formation();
      $data['editions']     = $this->crud_model->fetch_membre_edition();
      $data['tranches']     = $this->crud_model->fetch_membre_tranche();
      $this->load->view('backend/admin/recouvrement', $data);
    }

    function derogation(){
      $data['title'] ="Paramétrage  des dérogation pour la formation";
      $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();
      $this->load->view('backend/admin/derogation', $data);
    }


    function filtrage_inscription_ap(){
        $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');

        $data['dates1'] = $param1;
        $data['dates2'] = $param2;

        $data['idformation'] = $this->crud_model->fetch_id_formation_by_name($param1);
        $data['idedition'] = $this->crud_model->fetch_id_edition_by_name($param2);
        

        $data['title']="Filtre pour la gestion de formation des apprenants";

        $data['users']      = $this->crud_model->fetch_connected($this->connected);
        $data['apprenants']   = $this->crud_model->fetch_membre_apprenant();
        $data['formations']   = $this->crud_model->fetch_membre_formation();
        $data['categories']   = $this->crud_model->fetch_membre_categorie();
        $data['editions']     = $this->crud_model->fetch_membre_edition();

        $data['n_formations']  = $this->crud_model->fetch_categores_nom_formation("formation");
        $data['n_editions']  = $this->crud_model->fetch_categores_nom_formation("edition");

        if ($param1 !='' && $param2 !='') {
          
          $data['donnees'] = $this->crud_model->fetch_all_apprenants_inscrits($param1,$param2);
          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_inscription("profile_inscription",$param1,$param2);
        }
        else{

          $data['donnees'] = $this->crud_model->fetch_all_apprenants_inscrits($param1,$param2);
          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_inscription("profile_inscription",$param1,$param2);
          // redirect('admin/inscription_apprenant','refresh');
        }
       

        $this->load->view('backend/admin/filtrage_inscription_ap', $data);

    }

    function stat_filtrage_inscription_ap(){
        $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');

        $data['dates1'] = $param1;
        $data['dates2'] = $param2;

        $data['idformation'] = $this->crud_model->fetch_id_formation_by_name($param1);
        $data['idedition'] = $this->crud_model->fetch_id_edition_by_name($param2);
        

        $data['title']="Statistique des apprenants par rapport à leur sexe aux différentes formations";

        $data['users']      = $this->crud_model->fetch_connected($this->connected);
        $data['apprenants']   = $this->crud_model->fetch_membre_apprenant();
        $data['formations']   = $this->crud_model->fetch_membre_formation();
        $data['categories']   = $this->crud_model->fetch_membre_categorie();
        $data['editions']     = $this->crud_model->fetch_membre_edition();

        $data['n_formations']  = $this->crud_model->fetch_categores_nom_formation("formation");
        $data['n_editions']  = $this->crud_model->fetch_categores_nom_formation("edition");

        if ($param1 !='' && $param2 !='') {
          
          $data['donnees'] = $this->crud_model->fetch_all_apprenants_inscrits($param1,$param2);
          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_inscription("profile_inscription",$param1,$param2);
        }
        else{

          $data['donnees'] = $this->crud_model->fetch_all_apprenants_inscrits($param1,$param2);
          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_inscription("profile_inscription",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_inscription("profile_inscription",$param1,$param2);
          // redirect('admin/inscription_apprenant','refresh');
        }
       

        $this->load->view('backend/admin/stat_filtrage_inscription_ap', $data);

    }

    function stat_filtrage_reponse_ap(){
      $data['title']       = "Statistique sur évaluation des réponses";

      $param1 = $this->input->post('date1');
      $data['dates1'] = $param1;

      if ($param1 !='') {
        $data['nombre_personne_tb']   = $this->crud_model->statistiques_nombre_reponse_rubrique("très bien",$param1);
        $data['nombre_personne_b']    = $this->crud_model->statistiques_nombre_reponse_rubrique("bien", $param1);
        $data['nombre_personne_mal']  = $this->crud_model->statistiques_nombre_reponse_rubrique("mal", $param1);
        $data['nombre_personne_general'] = $this->crud_model->statistiques_reponses_generale_rubrique($param1);

      }
      else{

        $data['nombre_personne_tb']       = $this->crud_model->statistiques_nombre_reponse_tb("très bien");
        $data['nombre_personne_b']        = $this->crud_model->statistiques_nombre_reponse_tb("bien");
        $data['nombre_personne_mal']      = $this->crud_model->statistiques_nombre_reponse_tb("mal");
        $data['nombre_personne_general']  = $this->crud_model->statistiques_reponses_generale();
      }

      $data['rubriques']  = $this->crud_model->fetch_membre_rubrique();
      $this->load->view('backend/admin/stat_filtrage_reponse_ap', $data);
    }




    function compte(){
      $data['title']    ="Paramétrage  de paiement des apprenants";

      $data['users']    = $this->crud_model->fetch_connected($this->connected);
      $data['Hommes']   = $this->crud_model->fetch_membre_apprenant_inscrit();

      $data['dates']    = $this->crud_model->fetch_categores_dates_compt();
      
      $this->load->view('backend/admin/compte', $data);
    }


    function filtrage_comptabilite(){
        $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');

        $data['title']="Paramètrage de la comptabilité";


        $data['Hommes']     = $this->crud_model->fetch_membre_apprenant_inscrit();

        $data['dates']    = $this->crud_model->fetch_categores_dates_compt();

        if ($param1 > $param2) {
          $data['dates1'] = $param2;
          $data['dates2'] = $param1;
          $data['donnees'] = $this->crud_model->fetch_all_paiements($param2,$param1);
        }
        else{
          $data['dates1'] = $param1;
          $data['dates2'] = $param2;
          $data['donnees'] = $this->crud_model->fetch_all_paiements($param1,$param2);
        }

        $this->load->view('backend/admin/filtrage_comptabilite', $data);

    }

    function filtrage_presence_ap(){
        $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');

        $data['title']="Filtre pour la gestion de présence des apprenants";


        $data['users']  = $this->crud_model->Select_apprenants();
        $data['dates']  = $this->crud_model->fetch_categores_dates_presence();

        if ($param1 > $param2) {
          $data['dates1'] = $param2;
          $data['dates2'] = $param1;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param2,$param1);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2);

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2);

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);

        }
        else{
          $data['dates1'] = $param1;
          $data['dates2'] = $param2;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param1,$param2);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);
        }

        $this->load->view('backend/admin/filtrage_presence_ap', $data);

    }

    function stat_filtrage_presence_ap(){
        $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');

        $data['title']="Filtre pour la gestion de présence des apprenants";


        $data['users']  = $this->crud_model->Select_apprenants();
        $data['dates']  = $this->crud_model->fetch_categores_dates_presence();

        if ($param1 > $param2) {
          $data['dates1'] = $param2;
          $data['dates2'] = $param1;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param2,$param1);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2);

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2);

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);

        }
        else{
          $data['dates1'] = $param1;
          $data['dates2'] = $param2;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param1,$param2);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);
        }

        $this->load->view('backend/admin/stat_presence_apprenant', $data);

    }

    function stat_presence_apprenant(){
      $param1 = $this->input->post('date1');
        $param2 = $this->input->post('date2');

        $data['title']="Statistique sur la présence des apprenants";

        $data['users']  = $this->crud_model->Select_apprenants();
        $data['dates']  = $this->crud_model->fetch_categores_dates_presence();

        if ($param1 > $param2) {
          $data['dates1'] = $param2;
          $data['dates2'] = $param1;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param2,$param1);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2);

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2);

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);

        }
        else{
          $data['dates1'] = $param1;
          $data['dates2'] = $param2;
          $data['donnees'] = $this->crud_model->fetch_all_presence_ap($param1,$param2);

          $data['nombre_personne_m'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $param1,$param2,"M");

          $data['nombre_personne_f'] = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$param1,$param2,"F");

          $data['nombre_total_presence'] = $this->crud_model->statistiques_nombre_fultrage_presence("profile_presence",$param1,$param2);
        }

        $this->load->view('backend/admin/stat_presence_apprenant', $data);
    }

    function impression_pdf_paiement_au_system_filtrage($param1='', $param2=''){
       $customer_id = "liste des paiements par fultrage du ".$param1."jusqu'au ".$param2;
       $html_content = "<h3 align='center'><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span> liste entiere de paiement du ".$param1."jusqu'au ".$param2." </h3>";
       $html_content .= $this->crud_model->fetch_single_details_comptabilite_filtre_paiement($param1,$param2);

       // echo($html_content);


       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("liste".$customer_id.".pdf", array("Attachment"=>0));
    }

     function impression_pdf_presence_filtrage($param1='', $param2=''){
       $customer_id = "liste de présence par fultrage du ".$param1."jusqu'au ".$param2;
       $html_content = "<h3 align='center'><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span> liste de présence par fultrage du ".$param1."jusqu'au ".$param2." </h3>";
       $html_content .= $this->crud_model->fetch_single_details_presence_filtre($param1,$param2);

       // echo($html_content);

       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("liste".$customer_id.".pdf", array("Attachment"=>0));
    }

    function impression_pdf_formations_filtrage($param1='', $param2=''){

       $nom_formation = $this->crud_model->fetch_nom_formation_by_id($param1);
       $nom_edition   = $this->crud_model->fetch_nom_edition_by_id($param2);

       $customer_id = "liste des apprenants de la formation ".$nom_formation." ".$nom_edition;
       $html_content = "";
       $html_content .= $this->crud_model->fetch_single_details_formations_filtre(htmlspecialchars($param1),htmlspecialchars($param2));

       // echo($html_content);

       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
    }

    function pdf_presence_apprenant($id_user){
       $customer_id = "liste de présence de l'apprenant";
       $html_content = "";
       $html_content .= $this->crud_model->fetch_single_presence_apprenant($id_user);

       // echo($html_content);

       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("liste de presence de l'apprenant_".$customer_id.".pdf", array("Attachment"=>0));
    }




    function impression_pdf_paiemant_list($param1=''){
       $customer_id = "paiement facture ".$param1;
       $html_content = '<h3 align="center">
       <span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span> </h3>';
       $html_content .= $this->crud_model->fetch_single_details_comptabilite_system_mariage($param1);

       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("paiement reçu_".$customer_id.".pdf", array("Attachment"=>0));
    }


    function pdf_card($param1=''){
       $customer_id = "carte d'apprenant ".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_pdf_card($param1);

       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("carte d'apprenant_".$customer_id.".pdf", array("Attachment"=>0));
    }

    function pdf_reponse($param1=''){
       $customer_id = "pdf reponses pour les apprenants de rubrique formation_".$param1;
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_pdf_reponse($param1);

       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("pdf reponses pour les apprenants de rubrique formation_".$customer_id.".pdf", array("Attachment"=>0));
    }

    function pdf_tranche(){
       $customer_id = "Echeance de paiement";
       $html_content = '';
       $html_content .= $this->crud_model->fetch_single_details_pdf_tranche();

       // echo($html_content);
       $this->pdf->loadHtml($html_content);
       $this->pdf->render();
       $this->pdf->stream("".$customer_id.".pdf", array("Attachment"=>0));
    }


		

		// script de role
      function fetch_role(){  

           $fetch_data = $this->crud_model->make_datatables_role();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                $sub_array[] = nl2br(substr($row->nom, 0,50)); 
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
               
 
                $sub_array[] = '<button type="button" name="update" idrole="'.$row->idrole.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idrole="'.$row->idrole.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_role(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_role(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_role()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_role($_POST["idrole"]);  
           foreach($data as $row)  
           {  
                $output['nom'] 		= $row->nom;  
                
               
           }  
           echo json_encode($output);  
      }  


      function operation_role(){

          $insert_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );  

	      $requete=$this->crud_model->insert_role($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_role(){
  
          $updated_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );
  
          $this->crud_model->update_role($this->input->post("idrole"), $updated_data);

          echo("modification avec succès");
      }

      function supression_role(){
 
          $this->crud_model->delete_role($this->input->post("idrole"));
          echo("suppression avec succès");
        
      }

      // script de tbl_info
    function fetch_tbl_info(){  

           $fetch_data = $this->crud_model->make_datatables_tbl_info();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->nom_site, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->email, 0,10)).'...';  
                $sub_array[] = nl2br(substr($row->tel1, 0,10)).'...'; 
                // $sub_array[] = nl2br(substr($row->tel2, 0,5)).'...'; 
                $sub_array[] = nl2br(substr($row->adresse, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->facebook, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->twitter, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->linkedin, 0,10)).'...'; 
                // $sub_array[] = nl2br(substr($row->termes, 0,10)).'...'; 
                // $sub_array[] = nl2br(substr($row->confidentialite, 0,10)).'...'; 
                
 
                $sub_array[] = '<button type="button" name="update" idinfo="'.$row->idinfo.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idinfo="'.$row->idinfo.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_tbl_info(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tbl_info(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_tbl_info()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_tbl_info($_POST["idinfo"]);  
           foreach($data as $row)  
           {  
                $output['nom_site'] 		= $row->nom_site;  
                $output['adresse'] 			= $row->adresse; 
                $output['tel1'] 			= $row->tel1; 
                $output['tel2'] 			= $row->tel2; 
                $output['email'] 			= $row->email; 
                $output['facebook'] 		= $row->facebook; 
                $output['twitter'] 			= $row->twitter; 
                $output['linkedin'] 		= $row->linkedin;

                $output['termes'] 			= $row->termes;
                $output['confidentialite']  = $row->confidentialite;

                $output['description']   = $row->description;
                $output['mission']       = $row->mission;
                $output['objectif']      = $row->objectif;
                $output['blog']      = $row->blog;


                if($row->icone != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/tbl_info/'.$row->icone.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->icone.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
           }  
           echo json_encode($output);  
      }  


      function operation_tbl_info(){


      	  if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
		           'nom_site'           	=>     $this->input->post('nom_site'),  
		           'tel1'           		=>     $this->input->post("tel1"), 
		           'tel2'         		    =>     $this->input->post('tel2'), 
		           'adresse'           		=>     $this->input->post("adresse"), 
		           'facebook'           	=>     $this->input->post("facebook"), 
		           'twitter'           		=>     $this->input->post("twitter"),
		           'linkedin'           	=>     $this->input->post("linkedin"), 
		           'email'           		=>     $this->input->post("email"),
		           'termes'           		=>     $this->input->post("termes"),
		           'confidentialite'        =>     $this->input->post("confidentialite"), 
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"),
               'blog'               =>     $this->input->post("blog"), 
		           'icone'              =>     $this->upload_image_tbl_info()
			  	);    
          }  
          else  
          {  
               $user_image = "icone-user.png";  
               $insert_data = array(  
		           'nom_site'           	=>     $this->input->post('nom_site'),  
		           'tel1'           		=>     $this->input->post("tel1"), 
		           'tel2'         		    =>     $this->input->post('tel2'), 
		           'adresse'           		=>     $this->input->post("adresse"), 
		           'facebook'           	=>     $this->input->post("facebook"), 
		           'twitter'           		=>     $this->input->post("twitter"),
		           'linkedin'           	=>     $this->input->post("linkedin"), 
		           'email'           		=>     $this->input->post("email"),
		           'termes'           		=>     $this->input->post("termes"),
		           'confidentialite'        =>     $this->input->post("confidentialite"), 
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"), 
               'blog'               =>     $this->input->post("blog"),
		           'icone'                  =>     $user_image
			  	);   
          }

	      
	       
	      $requete=$this->crud_model->insert_tbl_info($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_tbl_info(){
  
          if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
		           'nom_site'           	=>     $this->input->post('nom_site'),  
		           'tel1'           		=>     $this->input->post("tel1"), 
		           'tel2'         		    =>     $this->input->post('tel2'), 
		           'adresse'           		=>     $this->input->post("adresse"), 
		           'facebook'           	=>     $this->input->post("facebook"), 
		           'twitter'           		=>     $this->input->post("twitter"),
		           'linkedin'           	=>     $this->input->post("linkedin"), 
		           'email'           		=>     $this->input->post("email"),
		           'termes'           		=>     $this->input->post("termes"),
		           'confidentialite'        =>     $this->input->post("confidentialite"), 
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"),
               'blog'               =>     $this->input->post("blog"), 
		           'icone'                  =>     $this->upload_image_tbl_info()
			  	);    
          }  
          else  
          {  
               $updated_data = array(  
		           'nom_site'           	=>     $this->input->post('nom_site'),  
		           'tel1'           		=>     $this->input->post("tel1"), 
		           'tel2'         		    =>     $this->input->post('tel2'), 
		           'adresse'           		=>     $this->input->post("adresse"), 
		           'facebook'           	=>     $this->input->post("facebook"), 
		           'twitter'           		=>     $this->input->post("twitter"),
		           'linkedin'           	=>     $this->input->post("linkedin"), 
		           'email'           		=>     $this->input->post("email"),
		           'termes'           		=>     $this->input->post("termes"),
               'description'        =>     $this->input->post("description"), 
               'mission'            =>     $this->input->post("mission"), 
               'objectif'           =>     $this->input->post("objectif"), 
               'blog'               =>     $this->input->post("blog"),
		           'confidentialite'        =>     $this->input->post("confidentialite")
			  	);    
          }
  
          $this->crud_model->update_tbl_info($this->input->post("idinfo"), $updated_data);

          echo("modification avec succès");
      }

      


      function supression_tbl_info(){
 
          $this->crud_model->delete_tbl_info($this->input->post("idinfo"));

          echo("suppression avec succès");
        
      }

      // fin script tbl_info

      // script de edition
      function fetch_edition(){  

           $fetch_data = $this->crud_model->make_datatables_edition();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                $sub_array[] = nl2br(substr($row->nom, 0,50)); 
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
               
 
                $sub_array[] = '<button type="button" name="update" idedition="'.$row->idedition.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idedition="'.$row->idedition.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_edition(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_edition(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_edition()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_edition($_POST["idedition"]);  
           foreach($data as $row)  
           {  
                $output['nom'] 		= $row->nom;  
                
               
           }  
           echo json_encode($output);  
      }  


      function operation_edition(){

          $insert_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );  

	      $requete=$this->crud_model->insert_edition($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_edition(){
  
          $updated_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );
  
          $this->crud_model->update_edition($this->input->post("idedition"), $updated_data);

          echo("modification avec succès");
      }

      function supression_edition(){
 
          $this->crud_model->delete_edition($this->input->post("idedition"));
          echo("suppression avec succès");
        
      }
      // fin script edition


      // script de categorie_aprenant
      function fetch_categorie_aprenant(){  

           $fetch_data = $this->crud_model->make_datatables_categorie_aprenant();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                $sub_array[] = nl2br(substr($row->nom, 0,50)); 
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
               
 
                $sub_array[] = '<button type="button" name="update" idcat="'.$row->idcat.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idcat="'.$row->idcat.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_categorie_aprenant(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_categorie_aprenant(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_categorie_aprenant()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_edition($_POST["idcat"]);  
           foreach($data as $row)  
           {  
                $output['nom'] 		= $row->nom;  
                
               
           }  
           echo json_encode($output);  
      }  


      function operation_categorie_aprenant(){

          $insert_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );  

	      $requete=$this->crud_model->insert_categorie_aprenant($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_categorie_aprenant(){
  
          $updated_data = array(  
	           'nom'           	=>     $this->input->post('nom')
		  );
  
          $this->crud_model->update_categorie_aprenant($this->input->post("idcat"), $updated_data);

          echo("modification avec succès");
      }

      function supression_categorie_aprenant(){
 
          $this->crud_model->delete_categorie_aprenant($this->input->post("idcat"));
          echo("suppression avec succès");
        
      }
      // fin script categorie_aprenant

      // script de formation
      function fetch_formation(){  

           $fetch_data = $this->crud_model->make_datatables_formation();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
               
                 $sub_array[] = '<img src="'.base_url().'upload/tbl_info/'.$row->image.'" class="img-thumbnail" width="50" height="35" />'; 
                $sub_array[] = nl2br(substr($row->nom, 0,50));
                $sub_array[] = nl2br(substr($row->description, 0,50));  
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
               
 
                $sub_array[] = '<button type="button" name="update" idformation="'.$row->idformation.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idformation="'.$row->idformation.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_formation(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_formation(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_formation()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_formation($_POST["idformation"]);  
           foreach($data as $row)  
           {  
                $output['nom'] 				= $row->nom;  
                $output['description'] 		= $row->description;  
                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/tbl_info/'.$row->image.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
               
           }  
           echo json_encode($output);  
      }  


      function operation_formation(){

      	  if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
		           'nom'           	=>     $this->input->post('nom'),  
		           'description'    =>     $this->input->post("description"), 
		           'image'          =>     $this->upload_image_tbl_info()
			  	);    
          }  
          else  
          {  
               $user_image = "icone-user.png";  
               $insert_data = array(  
		           'nom'           	=>     $this->input->post('nom'),  
		           'description'    =>     $this->input->post("description"), 
		           'image'          =>     $user_image
			  	);   
          }

	      $requete=$this->crud_model->insert_formation($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_formation(){

      	  if($_FILES["user_image"]["size"] > 0)  
          {  
               $updated_data = array(  
		           'nom'           	=>     $this->input->post('nom'),  
		           'description'    =>     $this->input->post("description"), 
		           'image'          =>     $this->upload_image_tbl_info()
			  	);    
          }  
          else  
          {   
               $updated_data = array(  
		           'nom'           	=>     $this->input->post('nom'),  
		           'description'    =>     $this->input->post("description")
			  	);   
          }
  
          
          $this->crud_model->update_formation($this->input->post("idformation"), $updated_data);

          echo("modification avec succès");
      }

      function supression_formation(){
 
          $this->crud_model->delete_formation($this->input->post("idformation"));
          echo("suppression avec succès");
        
      }

      // fin script formation 


      // script de inscription
      function fetch_inscription(){  

           $fetch_data = $this->crud_model->make_datatables_inscription();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                $sub_array[] = '<a href="'.base_url().'admin/pdf_card/'.$row->id_user.'" type="button" name="pdf" id="'.$row->id_user.'" class="btn btn-primary btn-sm pdf"><i class="fa fa-print"></i></a>';  

                $sub_array[] = nl2br(substr($row->nom_categorie  , 0,20)).'...'; 
               
                $sub_array[] = nl2br(substr($row->first_name .' '.$row->last_name, 0,50)).' 
                ...'; 
                $sub_array[] = nl2br(substr($row->sexe, 0,10)).'';  
                $sub_array[] = nl2br(substr($row->nom_formation, 0,20)).'...'; 
                $sub_array[] = nl2br(substr($row->nom_edition, 0,10)).'...'; 
                $sub_array[] = nl2br(substr($row->date_inscription , 0,10)).'...';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));
               
 
                $sub_array[] = '<button type="button" name="update" idinscription="'.$row->idinscription.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idinscription="'.$row->idinscription.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_inscription(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_inscription(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_inscription()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_inscription($_POST["idinscription"]);  
           foreach($data as $row)  
           {  
                $output['idedition'] 				= $row->idedition;
                $output['idformation'] 				= $row->idformation;
                $output['idcat'] 					= $row->idcat;
                $output['id_user'] 					= $row->id_user; 
                $output['date_inscription'] 		= $row->date_inscription; 
               
           }  
           echo json_encode($output);  
      }  


      function operation_inscription(){

      	  $insert_data = array(  
	           'idedition'           	=>     $this->input->post('idedition'),
	           'idformation'           	=>     $this->input->post('idformation'),
	           'idcat'           		=>     $this->input->post('idcat'),
	           'id_user'           		=>     $this->input->post('id_user'),
	           'date_inscription'       =>     $this->input->post('date_inscription')  
	           
		  	); 

	      $requete=$this->crud_model->insert_inscription($insert_data);
	      echo("Ajout information avec succès");
	      
      }

      function modification_inscription(){

      		$updated_data = array(  
	           'idedition'           	=>     $this->input->post('idedition'),
	           'idformation'           	=>     $this->input->post('idformation'),
	           'idcat'           		=>     $this->input->post('idcat'),
	           'id_user'           		=>     $this->input->post('id_user'),
	           'date_inscription'       =>     $this->input->post('date_inscription')  
	           
		  	); 

          	$this->crud_model->update_inscription($this->input->post("idinscription"), $updated_data);

          	echo("modification avec succès");
      }

      function supression_inscription(){
 
          $this->crud_model->delete_inscription($this->input->post("idinscription"));
          echo("suppression avec succès");
        
      }

       function fetch_single_personne_user()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_personne_user($_POST["id"]);  
           foreach($data as $row)  
           {  
                $output['first_name'] 		= $row->first_name;  
                $output['last_name'] 		= $row->last_name; 
                $output['email'] 			= $row->email; 
                $output['date_nais'] 		= $row->date_nais; 
                $output['telephone'] 		= $row->telephone; 
                $output['full_adresse'] 	= $row->full_adresse; 

                $output['sexe'] 			= $row->sexe;
                
                if($row->image != '')  
                {  
                    $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                    $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
           }  
           echo json_encode($output);  
      }  
      // fin script inscription 

        // script de paiement
    function fetch_paiement(){  

           $fetch_data = $this->crud_model->make_datatables_paiement();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                $sub_array[] = '<a href="'.base_url().'admin/impression_pdf_paiemant_list/'.$row->idp.'" name="update" id="'.$row->idp.'" class="btn btn-primary btn-xs print"><i class="fa fa-print"></i></a>';

                $sub_array[] = nl2br(substr($row->sexe, 0,10)).''; 
                
                $sub_array[] = nl2br(substr($row->first_name.' '.$row->last_name, 0,50)).' 
                ...'; 
                
                $sub_array[] = nl2br(substr($row->montant, 0,10)).''; 
                $sub_array[] = nl2br(substr($row->motif, 0,10)).''; 

                $sub_array[] = nl2br(substr($row->telephone, 0,10)).''; 


                $sub_array[] = nl2br(substr($row->date_paie, 0,10)).'...';  

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));
                
 
                $sub_array[] = '<button type="button" name="update" idp="'.$row->idp.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                // $sub_array[] = '<button type="button" name="delete" idp="'.$row->idp.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_paiement(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_paiement(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_paiement()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_paiement($_POST["idp"]);  
           foreach($data as $row)  
           {  
                $output['first_name']        = $row->first_name;  
                $output['last_name']      = $row->last_name;  
                $output['idpersonne']     = $row->idpersonne; 
                $output['sexe']       = $row->sexe; 
                $output['date_paie']    = $row->date_paie; 

                $output['montant']      = $row->montant;  
                $output['motif']      = $row->motif; 
               
                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="70" height="70" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  
           }  
           echo json_encode($output);  
      }  


      function operation_paiement(){

          $idpersonne   = $this->input->post('idpersonne');
          $montant      = $this->input->post('montant');
          $insert_data = array(  
               'idpersonne'         =>     $this->input->post('idpersonne'),  
               'date_paie'          =>     $this->input->post("date_paie"), 
               'montant'            =>     $this->input->post("montant"), 
               'motif'              =>     $this->input->post("motif")
          );


          $users_cool = $this->crud_model->get_info_user();
          foreach ($users_cool as $key) {

              if ($key['idrole'] == 1) {
                $url ="admin/compte";

                $id_user_recever = $key['id'];

                $nom   = $this->crud_model->get_name_user($idpersonne);
                $message =$nom." vient de payer ".$montant."$";

                $notification = array(
                  'titre'     =>    "nouveau paiement",
                  'icone'     =>    "fa fa-bell",
                  'message'   =>     $message,
                  'url'       =>     $url,
                  'id_user'   =>     $id_user_recever
                );
                
                $not = $this->crud_model->insert_notification($notification);

              }
              
                # code...
          }


        $requete=$this->crud_model->insert_paiement($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_paiement(){
  
            $updated_data = array(  
                 'idpersonne'     =>     $this->input->post('idpersonne'),  
                 'date_paie'      =>     $this->input->post("date_paie"), 
                 'montant'        =>     $this->input->post("montant"), 
                 'motif'          =>     $this->input->post("motif")
            ); 
  
          $this->crud_model->update_paiement($this->input->post("idp"), $updated_data);
          echo("modification avec succès");
      }

      function supression_paiement(){ 
          $this->crud_model->delete_paiement($this->input->post("idp"));
          echo("suppression avec succès");
        
      }
      // fin des scripts paiement 

      // script des utilisateurs 
      function fetch_users(){  

           $fetch_data = $this->crud_model->make_datatables_users();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  
                $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
                $sub_array[] = nl2br(substr($row->first_name, 0,50)).'...';  
                $sub_array[] = nl2br(substr($row->last_name, 0,50)).'...'; 

                $sub_array[] = nl2br(substr($row->sexe, 0,50)).'';

                $sub_array[] = nl2br(substr($row->email, 0,50));

                $sub_array[] = nl2br(substr($row->telephone, 0,50));
                $sub_array[] = nl2br(substr($row->id.'_/'.$row->image, 0,10));

                
 
                $sub_array[] = '<button type="button" name="update" id="'.$row->id.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>'; 

                $sub_array[] = '<button type="button" name="delete" id="'.$row->id.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';
                
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_users(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_users(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function operation_users(){

          if($_FILES["user_image"]["size"] > 0)  
          {  
               $insert_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'idrole'         =>     2,
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'passwords'      =>     md5(123456),
                   'image'          =>     $this->upload_image_users()
                );    
          }  
          else  
          {  
                 $user_image = "icone-user.png";  
                 $insert_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'idrole'         =>     2,
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'image'          =>     $user_image
                );   
          }

        $requete=$this->crud_model->insert_users($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_users(){

          if($_FILES["user_image"]["size"] > 0 && $_FILES["user_image2"]["size"] <= 0)  
          {  
               $updated_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'image'          =>     $this->upload_image_users()
                );    
          }  
          elseif($_FILES["user_image"]["size"] > 0 && $_FILES["user_image2"]["size"] > 0 )  
          {  
               $updated_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'qrcode'         =>     $this->upload_image_qrcode(),
                   'image'          =>     $this->upload_image_users()
                );    
          } 

          elseif($_FILES["user_image2"]["size"] > 0 && $_FILES["user_image"]["size"] <= 0 )  
          {  
               $updated_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin"),
                   'qrcode'         =>     $this->upload_image_qrcode()
                );    
          }

          else  
          {   
               $updated_data = array(  
                   'first_name'     =>     $this->input->post('first_name'),  
                   'last_name'      =>     $this->input->post("last_name"),
                   'email'          =>     $this->input->post("email"),
                   'telephone'      =>     $this->input->post("telephone"),
                   'full_adresse'   =>     $this->input->post("full_adresse"),
                   'date_nais'      =>     $this->input->post("date_nais"), 
                   'sexe'           =>     $this->input->post("sexe"),
                   'facebook'       =>     $this->input->post("facebook"),
                   'twitter'        =>     $this->input->post("twitter"),
                   'linkedin'       =>     $this->input->post("linkedin")
                );   
          }
  
          
          $this->crud_model->update_users($this->input->post("id"), $updated_data);

          echo("modification avec succès");
      }

      function supression_users(){
 
          $this->crud_model->delete_users($this->input->post("id"));
          echo("suppression avec succès");
        
      }

      function fetch_single_users()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_users($this->input->post('id'));  
           foreach($data as $row)  
           {  
                $output['first_name'] = $row->first_name;  
                $output['last_name'] = $row->last_name; 

                $output['email'] = $row->email;
                $output['telephone'] = $row->telephone;
                $output['full_adresse'] = $row->full_adresse;
                $output['biographie'] = $row->biographie;
                $output['date_nais'] = $row->date_nais;
                $output['sexe'] = $row->sexe;
                $output['idrole'] = $row->idrole;
                $output['qrcode'] = $row->qrcode;

                $output['facebook'] = $row->facebook;
                $output['linkedin'] = $row->linkedin;
                $output['twitter'] = $row->twitter;
                $output['image'] = $row->image;

                if($row->image != '')  
                {  
                     $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
                }  
                else  
                {  
                     $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
                }  

                if($row->qrcode != '')  
                {  
                     $output['user_image2'] = '<img src="'.base_url().'upload/qrcode/'.$row->qrcode.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image2" value="'.$row->qrcode.'" />';  
                }  
                else  
                {  
                     $output['user_image2'] = '<img src="'.base_url().'upload/qrcode/coucouqrcode.PNG" class="img-thumbnail" width="300" height="250" alt="Qrcode photo" /><input type="hidden" name="hidden_user_image" value="" />';  
                }  
           }  
           echo json_encode($output);  
      }

      // fun script utilisateurs

       // script de presence
      function fetch_presence(){  

           $fetch_data = $this->crud_model->make_datatables_presence();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array();  

                $sub_array[] = nl2br(substr($row->id_user.'_web1'.$row->first_name  , 0,20)).'...'; 
               
                $sub_array[] = nl2br(substr($row->first_name .' '.$row->last_name, 0,50)).' 
                ...'; 
                $sub_array[] = nl2br(substr($row->sexe, 0,10)).'';  
                $sub_array[] = nl2br(substr($row->jour, 0,20)).'...'; 
                
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23));
               
                $sub_array[] = '<a href="'.base_url().'admin/pdf_presence_apprenant/'.$row->id_user.'" type="button" name="pdf"  class="btn btn-primary btn-sm pdf"><i class="fa fa-print"></i></a>'; 

                 $sub_array[] = '<button type="button" name="delete" id="'.$row->id_user.'" class="btn btn-warning btn-sm update"><i class="fa fa-user"></i></button>'; 
                 
                $sub_array[] = '<button type="button" name="delete" idp="'.$row->idp.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_inscription(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_inscription(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_presence()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_presence($_POST["idp"]);  
           foreach($data as $row)  
           {  
                $output['jour']         = $row->jour;
                $output['id_user']      = $row->id_user; 
                $output['id']           = $row->id; 
               
           }  
           echo json_encode($output);  
      }  


      function operation_presence(){
          
          $to_day =  $this->crud_model->show_day();
          $name_day;
          $jour = $this->crud_model->tester_de_jour($to_day);

          $id_user        = $this->input->post('id_user');
          $idformation    = $this->crud_model->get_fomation_by_app($id_user);
          $idedition      = $this->crud_model->get_edition_by_app($id_user);
          $idcat          = $this->crud_model->get_categorie_by_app($id_user);

          $derrogation    = $this->crud_model->get_derogation_by_app($id_user);


          $total_montant  = $this->crud_model->get_recouvrement_by_app($idformation,$idedition);
          $App_total_payer = $this->crud_model->get_paiement_by_app($id_user,$idformation,$idedition);

           // echo("idcat:".$idcat." idformation:".$idformation." idedition:".$idedition." montant:".$total_montant."$ montant total payé:".$App_total_payer);

          if ($idcat == 1) {
              foreach ($jour->result_array() as $key) {
                  $name_day= $key['nom_jour'];

                  if ($name_day=="Saturday" || $name_day=="Sunday") {

                    echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                  }
                  else{

                        // echo($name_day.' id_user:'.$id_user);
                        // echo("Ajourd'hui le ".$to_day);

                        $prsence_par_jour = $this->crud_model->tester_presence_de_jour($id_user,$to_day);
                        if ($prsence_par_jour > 0) {
                          echo "🗽 la présence existe déjà 🗽";
                        }
                        else{

                            try {

                              $insert_data = array(  
                                 'id_user'     =>     $id_user,
                                 'jour'        =>     $to_day
                              );

                              $requete=$this->crud_model->insert_presence($insert_data);
                              echo("Présence ajoutée avec succès");
                                      
                            } catch (PDOException $e) {
                              echo("impossible ".$e->getMessage());
                            }

                        }
                    
                  }
              }
          }
          else{

              if ($App_total_payer < $total_montant) {

                // echo("date fin derrogation: ".$derrogation);
                if ($derrogation >= $to_day) {
                    
                    foreach ($jour->result_array() as $key) {
                      $name_day= $key['nom_jour'];

                      if ($name_day=="Saturday" || $name_day=="Sunday") {
                        echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                      }
                      else{

                            // echo($name_day.' id_user:'.$id_user);
                            // echo("Ajourd'hui le ".$to_day);

                            $prsence_par_jour = $this->crud_model->tester_presence_de_jour($id_user,$to_day);
                            if ($prsence_par_jour > 0) {
                              echo "🗽 la présence existe déjà 🗽";
                            }
                            else{

                                try {

                                  $insert_data = array(  
                                     'id_user'     =>     $id_user,
                                     'jour'        =>     $to_day
                                  );

                                  $requete=$this->crud_model->insert_presence($insert_data);
                                  echo("Présence ajoutée avec succès");
                                          
                                } catch (PDOException $e) {
                                  echo("impossible ".$e->getMessage());
                                }

                            }
                        
                      }
                    }
                }
                else{

                  echo("🙆 Désolé!!! vous êtes en retard de paiement 🙆");

                }

                
              }
              elseif ($App_total_payer >= $total_montant) {
                
                  foreach ($jour->result_array() as $key) {
                      $name_day= $key['nom_jour'];

                      if ($name_day=="Saturday" || $name_day=="Sunday") {
                        echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                      }
                      else{

                            // echo($name_day.' id_user:'.$id_user);
                            // echo("Ajourd'hui le ".$to_day);

                            $prsence_par_jour = $this->crud_model->tester_presence_de_jour($id_user,$to_day);
                            if ($prsence_par_jour > 0) {
                              echo "🗽 la présence existe déjà 🗽";
                            }
                            else{

                                try {

                                  $insert_data = array(  
                                     'id_user'     =>     $id_user,
                                     'jour'        =>     $to_day
                                  );

                                  $requete=$this->crud_model->insert_presence($insert_data);
                                  echo("Présence ajoutée avec succès");
                                          
                                } catch (PDOException $e) {
                                  echo("impossible ".$e->getMessage());
                                }

                            }
                        
                      }
                  }

              }
              else{

                echo("🙆 Désolé!!! 🙆");
              }

          }
      }

      function operation_presence_qrcode(){


          $to_day =  $this->crud_model->show_day();
          $name_day;
          $jour = $this->crud_model->tester_de_jour($to_day);

          $id_user        = $this->input->post('id_user');
          $idformation    = $this->crud_model->get_fomation_by_app($id_user);
          $idedition      = $this->crud_model->get_edition_by_app($id_user);
          $idcat          = $this->crud_model->get_categorie_by_app($id_user);

          $derrogation    = $this->crud_model->get_derogation_by_app($id_user);


          $total_montant  = $this->crud_model->get_recouvrement_by_app($idformation,$idedition);
          $App_total_payer = $this->crud_model->get_paiement_by_app($id_user,$idformation,$idedition);

           // echo("idcat:".$idcat." idformation:".$idformation." idedition:".$idedition." montant:".$total_montant."$ montant total payé:".$App_total_payer);

          if ($idcat == 1) {
              foreach ($jour->result_array() as $key) {
                  $name_day= $key['nom_jour'];

                  if ($name_day=="Saturday" || $name_day=="Sunday") {

                    echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                  }
                  else{

                        // echo($name_day.' id_user:'.$id_user);
                        // echo("Ajourd'hui le ".$to_day);

                        $prsence_par_jour = $this->crud_model->tester_presence_de_jour($id_user,$to_day);
                        if ($prsence_par_jour > 0) {
                          echo "🗽 la présence existe déjà 🗽";
                        }
                        else{

                            try {

                              $insert_data = array(  
                                 'id_user'     =>     $id_user,
                                 'jour'        =>     $to_day
                              );

                              $requete=$this->crud_model->insert_presence($insert_data);
                              echo("Présence ajoutée avec succès");
                                      
                            } catch (PDOException $e) {
                              echo("impossible ".$e->getMessage());
                            }

                        }
                    
                  }
              }
          }
          else{

              if ($App_total_payer < $total_montant) {

                // echo("date fin derrogation: ".$derrogation);
                if ($derrogation >= $to_day) {
                    
                    foreach ($jour->result_array() as $key) {
                      $name_day= $key['nom_jour'];

                      if ($name_day=="Saturday" || $name_day=="Sunday") {
                        echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                      }
                      else{

                            // echo($name_day.' id_user:'.$id_user);
                            // echo("Ajourd'hui le ".$to_day);

                            $prsence_par_jour = $this->crud_model->tester_presence_de_jour($id_user,$to_day);
                            if ($prsence_par_jour > 0) {
                              echo "🗽 la présence existe déjà 🗽";
                            }
                            else{

                                try {

                                  $insert_data = array(  
                                     'id_user'     =>     $id_user,
                                     'jour'        =>     $to_day
                                  );

                                  $requete=$this->crud_model->insert_presence($insert_data);
                                  echo("Présence ajoutée avec succès");
                                          
                                } catch (PDOException $e) {
                                  echo("impossible ".$e->getMessage());
                                }

                            }
                        
                      }
                    }
                }
                else{

                  echo("🙆 Désolé!!! vous êtes en retard de paiement 🙆");

                }

                
              }
              elseif ($App_total_payer >= $total_montant) {
                
                  foreach ($jour->result_array() as $key) {
                      $name_day= $key['nom_jour'];

                      if ($name_day=="Saturday" || $name_day=="Sunday") {
                        echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                      }
                      else{

                            // echo($name_day.' id_user:'.$id_user);
                            // echo("Ajourd'hui le ".$to_day);

                            $prsence_par_jour = $this->crud_model->tester_presence_de_jour($id_user,$to_day);
                            if ($prsence_par_jour > 0) {
                              echo "🗽 la présence existe déjà 🗽";
                            }
                            else{

                                try {

                                  $insert_data = array(  
                                     'id_user'     =>     $id_user,
                                     'jour'        =>     $to_day
                                  );

                                  $requete=$this->crud_model->insert_presence($insert_data);
                                  echo("Présence ajoutée avec succès");
                                          
                                } catch (PDOException $e) {
                                  echo("impossible ".$e->getMessage());
                                }

                            }
                        
                      }
                  }

              }
              else{

                echo("🙆 Désolé!!! 🙆");
              }

          }
      }

      function operation_recouvrement_qrcode(){


          $to_day =  $this->crud_model->show_day();
          $name_day;
          $jour = $this->crud_model->tester_de_jour($to_day);

          $id_user        = $this->input->post('id_user');
          $idformation    = $this->crud_model->get_fomation_by_app($id_user);
          $idedition      = $this->crud_model->get_edition_by_app($id_user);
          $idcat          = $this->crud_model->get_categorie_by_app($id_user);

          $derrogation    = $this->crud_model->get_derogation_by_app($id_user);


          $total_montant  = $this->crud_model->get_recouvrement_by_app($idformation,$idedition);
          $App_total_payer = $this->crud_model->get_paiement_by_app($id_user,$idformation,$idedition);

           // echo("idcat:".$idcat." idformation:".$idformation." idedition:".$idedition." montant:".$total_montant."$ montant total payé:".$App_total_payer);

          if ($idcat == 1) {
              foreach ($jour->result_array() as $key) {
                  $name_day= $key['nom_jour'];

                  if ($name_day=="Saturday" || $name_day=="Sunday") {

                    echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                  }
                  else{

                        // echo($name_day.' id_user:'.$id_user);
                        // echo("Ajourd'hui le ".$to_day);

                        echo "🆗 succès!!! 🆗";
                    
                  }
              }
          }
          else{

              if ($App_total_payer < $total_montant) {

                // echo("date fin derrogation: ".$derrogation);
                if ($derrogation >= $to_day) {
                    
                    foreach ($jour->result_array() as $key) {
                      $name_day= $key['nom_jour'];

                      if ($name_day=="Saturday" || $name_day=="Sunday") {
                        echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                      }
                      else{

                            // echo($name_day.' id_user:'.$id_user);
                            // echo("Ajourd'hui le ".$to_day);

                            echo "🆗 succès!!! 🆗";
                        
                      }
                    }
                }
                else{

                  echo("🙆 Désolé!!! vous êtes en retard de paiement 🙆");

                }

                
              }
              elseif ($App_total_payer >= $total_montant) {
                
                  foreach ($jour->result_array() as $key) {
                      $name_day= $key['nom_jour'];

                      if ($name_day=="Saturday" || $name_day=="Sunday") {
                        echo "le samedi et le dimanche sont exclus pour faire les opérations car aujourd'hui nous sommes le ".$name_day;            
                      }
                      else{

                            // echo($name_day.' id_user:'.$id_user);
                            // echo("Ajourd'hui le ".$to_day);

                            echo "🆗 succès!!! 🆗";
                        
                      }
                  }

              }
              else{

                echo("🙆 Désolé!!! 🙆");
              }

          }
      }




      function supression_presence(){
 
          $this->crud_model->delete_presence($this->input->post("idp"));
          echo("suppression avec succès");
        
      }
 
      // fin script presence 


      // script de tranches
      function fetch_tranche(){  

           $fetch_data = $this->crud_model->make_datatables_tranche();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->active == 1) {
                  $etat = '<a href="javascript:void(0);" type="button" name="pdf" idt="'.$row->idt.'" class="btn btn-success btn-xs desactiver"><i class="fa fa-check"></i> Activé</a>';
                }
                else{

                    $etat = '<a href="javascript:void(0);" type="button" name="pdf" idt="'.$row->idt.'" class="btn btn-danger btn-xs  activer"><i class="fa fa-close"></i> Desactivé</a>';
                }

                $sub_array[] = $etat;  

                $sub_array[] = nl2br(substr($row->nomt  , 0,30)).' ...'; 
                
                $sub_array[] = nl2br(substr($row->nom_formation, 0,30)).' ...'; 
                $sub_array[] = nl2br(substr($row->nom_edition, 0,20)).' ...'; 
                $sub_array[] = nl2br(substr($row->montant , 0,10)).' $';

                $sub_array[] = nl2br(substr($row->total_montant , 0,10)).' $';

                
                $sub_array[] = '<button type="button" name="update" idt="'.$row->idt.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idt="'.$row->idt.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_tranche(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tranche(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_tranche()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_tranche($_POST["idt"]);  
           foreach($data as $row)  
           {  
                $output['idedition']        = $row->idedition;
                $output['idformation']      = $row->idformation;
                $output['nomt']             = $row->nomt;
                $output['montant']          = $row->montant;
                $output['total_montant']    = $row->total_montant; 
                
           }  
           echo json_encode($output);  
      }  


      function operation_tranche(){

          $insert_data = array(  
             'idedition'            =>     $this->input->post('idedition'),
             'idformation'          =>     $this->input->post('idformation'),
             'nomt'                 =>     $this->input->post('nomt'),
             'montant'              =>     $this->input->post('montant'),
             'total_montant'        =>     $this->input->post('total_montant')   
          ); 

        $requete=$this->crud_model->insert_tranche($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_tranche(){

          $updated_data = array(  
             'idedition'            =>     $this->input->post('idedition'),
             'idformation'          =>     $this->input->post('idformation'),
             'nomt'                 =>     $this->input->post('nomt'),
             'montant'              =>     $this->input->post('montant'),
             'total_montant'        =>     $this->input->post('total_montant') 
          ); 

          $this->crud_model->update_tranche($this->input->post("idt"), $updated_data);
          echo("modification avec succès");
      }

      function activation_tranche(){

          $updated_data = array(  
             'active'  =>     1
          ); 

          $this->crud_model->update_tranche($this->input->post("idt"), $updated_data);
          echo("la tranche est activée avec succès 👌");
      }

      function desactivation_tranche(){

          $updated_data = array(  
             'active'  =>     0
          ); 

          $this->crud_model->update_tranche($this->input->post("idt"), $updated_data);
          echo("🏧la tranche est desactivée avec succès🏧");
      }

      function supression_tranche(){
 
          $this->crud_model->delete_tranche($this->input->post("idt"));
          echo("suppression avec succès");
        
      }
      // fin de script des tranches 


      // script de recouvrement
      function fetch_recouvrement(){  

           $fetch_data = $this->crud_model->make_datatables_recouvrement();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->active == 1) {
                  $etat = '<a href="javascript:void(0);" type="button" name="pdf" idt="'.$row->idt.'" class="btn btn-success btn-xs desactiver"><i class="fa fa-check"></i> Activé</a>';
                }
                else{

                    $etat = '<a href="javascript:void(0);" type="button" name="pdf" idt="'.$row->idt.'" class="btn btn-danger btn-xs  activer"><i class="fa fa-close"></i> Desactivé</a>';
                }

                $sub_array[] = $etat; 

                $sub_array[] = nl2br(substr($row->date_debit  , 0,30)).' ...';
                $sub_array[] = nl2br(substr($row->date_fin  , 0,30)).' ...'; 

                $sub_array[] = nl2br(substr($row->nomt  , 0,30)).' ...'; 
                
                $sub_array[] = nl2br(substr($row->nom_formation, 0,30)).' ...'; 
                $sub_array[] = nl2br(substr($row->nom_edition, 0,20)).' ...'; 
                $sub_array[] = nl2br(substr($row->montant , 0,10)).' $';

                $sub_array[] = nl2br(substr($row->total_montant , 0,10)).' $';

                
                $sub_array[] = '<button type="button" name="update" idr="'.$row->idr.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idr="'.$row->idr.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"             =>     intval($_POST["draw"]),  
                "recordsTotal"     =>     $this->crud_model->get_all_data_recouvrement(),  
                "recordsFiltered"  =>     $this->crud_model->get_filtered_data_recouvrement(),  
                "data"             =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_recouvrement()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_recouvrement($_POST["idr"]);  
           foreach($data as $row)  
           {  
                $output['idedition']        = $row->idedition;
                $output['idformation']      = $row->idformation;
                $output['nomt']             = $row->nomt;
                $output['montant']          = $row->montant;
                $output['total_montant']    = $row->total_montant; 

                $output['idt']              = $row->idt;
                $output['date_debit']       = $row->date_debit;
                $output['date_fin']         = $row->date_fin;
                
           }  
           echo json_encode($output);  
      }  


      function operation_recouvrement(){

          $insert_data = array(  
             'idt'                  =>     $this->input->post('idt'),
             'date_debit'           =>     $this->input->post('date_debit'),
             'date_fin'             =>     $this->input->post('date_fin')   
          ); 

        $requete=$this->crud_model->insert_recouvrement($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_recouvrement(){

          $updated_data = array(  
             'idt'                  =>     $this->input->post('idt'),
             'date_debit'           =>     $this->input->post('date_debit'),
             'date_fin'             =>     $this->input->post('date_fin') 
          ); 

          $this->crud_model->update_recouvrement($this->input->post("idr"), $updated_data);
          echo("modification avec succès");
      }

      
      function supression_recouvrement(){
 
          $this->crud_model->delete_recouvrement($this->input->post("idr"));
          echo("suppression avec succès");
        
      }
      // fin de script des recouvrement 


      // script de derogation
      function fetch_derogation(){  

           $fetch_data = $this->crud_model->make_datatables_derogation();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->active == 1) {
                  $etat = '<a href="javascript:void(0);" type="button" name="pdf" idd="'.$row->idd.'" class="btn btn-success btn-xs desactiver"><i class="fa fa-check"></i> Activé</a>';
                }
                else{

                    $etat = '<a href="javascript:void(0);" type="button" name="pdf" idd="'.$row->idd.'" class="btn btn-danger btn-xs  activer"><i class="fa fa-close"></i> Desactivé</a>';
                }

                $sub_array[] = $etat; 

                $sub_array[] = nl2br(substr($row->first_name.' '.$row->last_name  , 0,50)).' ...';

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_debit)), 0, 23));

                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->date_fin)), 0, 23)); 

               
                
                $sub_array[] = '<button type="button" name="update" idd="'.$row->idd.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idd="'.$row->idd.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"             =>     intval($_POST["draw"]),  
                "recordsTotal"     =>     $this->crud_model->get_all_data_recouvrement(),  
                "recordsFiltered"  =>     $this->crud_model->get_filtered_data_recouvrement(),  
                "data"             =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_derogation()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_derogation($_POST["idd"]);  
           foreach($data as $row)  
           {  
                $output['id_user']        = $row->id_user;
                $output['date_debit']       = $row->date_debit;
                $output['date_fin']         = $row->date_fin;
                
           }  
           echo json_encode($output);  
      }  


      function operation_derogation(){

          $insert_data = array(  
             'id_user'              =>     $this->input->post('id_user'),
             'date_debit'           =>     $this->input->post('date_debit'),
             'date_fin'             =>     $this->input->post('date_fin')   
          ); 

        $requete=$this->crud_model->insert_derogation($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_derogation(){

          $updated_data = array(  
             'id_user'              =>     $this->input->post('id_user'),
             'date_debit'           =>     $this->input->post('date_debit'),
             'date_fin'             =>     $this->input->post('date_fin') 
          ); 

          $this->crud_model->update_derogation($this->input->post("idd"), $updated_data);
          echo("modification avec succès");
      }
      
      function supression_derogation(){
 
          $this->crud_model->delete_derogation($this->input->post("idd"));
          echo("suppression avec succès");
        
      }


      function activation_derogation(){

          $updated_data = array(  
             'active'  =>     1
          ); 

          $this->crud_model->update_derogation($this->input->post("idd"), $updated_data);
          echo("la dérogation est activée avec succès 👌");
      }

      function desactivation_derogation(){

          $updated_data = array(  
             'active'  =>     0
          ); 

          $this->crud_model->update_derogation($this->input->post("idd"), $updated_data);
          echo("🏧 la dérogation est desactivée avec succès🏧");
      }
      // fin de script des derogation 


      // script de rubrique
      function fetch_rubrique(){  

           $fetch_data = $this->crud_model->make_datatables_rubrique();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                if ($row->active == 1) {
                  $etat = '<a href="javascript:void(0);" type="button" name="pdf" idr="'.$row->idr.'" class="btn btn-success btn-xs desactiver"><i class="fa fa-check"></i> Activé</a>';
                }
                else{

                    $etat = '<a href="javascript:void(0);" type="button" name="pdf" idr="'.$row->idr.'" class="btn btn-danger btn-xs  activer"><i class="fa fa-close"></i> Desactivé</a>';
                }

                $sub_array[] = $etat;  

                $sub_array[] = nl2br(substr($row->nomr  , 0,30)).' ...'; 
                
                $sub_array[] = nl2br(substr($row->nom_formation, 0,30)).' ...'; 
                $sub_array[] = nl2br(substr($row->nom_edition, 0,20)).' ...'; 
                $sub_array[] = nl2br(substr($row->token , 0,20)).' ...';

                $sub_array[] = '<button type="button" name="update" idr="'.$row->idr.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idr="'.$row->idr.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_rubrique(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_rubrique(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_rubrique()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_rubrique($_POST["idr"]);  
           foreach($data as $row)  
           {  
                $output['idedition']        = $row->idedition;
                $output['idformation']      = $row->idformation;
                $output['nomr']             = $row->nomr;
                $output['token']          = $row->token;
               
           }  
           echo json_encode($output);  
      }  


      function operation_rubrique(){

          $insert_data = array(  
             'idedition'            =>     $this->input->post('idedition'),
             'idformation'          =>     $this->input->post('idformation'),
             'nomr'                 =>     $this->input->post('nomr'),
             'token'                =>     $this->input->post('token')   
          ); 

        $requete=$this->crud_model->insert_rubrique($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_rubrique(){

          $updated_data = array(  
             'idedition'            =>     $this->input->post('idedition'),
             'idformation'          =>     $this->input->post('idformation'),
             'nomr'                 =>     $this->input->post('nomr'),
             'token'                =>     $this->input->post('token') 
          ); 

          $this->crud_model->update_rubrique($this->input->post("idr"), $updated_data);
          echo("modification avec succès");
      }

      function activation_rubrique(){

          $updated_data = array(  
             'active'  =>     1
          ); 

          $this->crud_model->update_rubrique($this->input->post("idr"), $updated_data);
          echo("l'opération est activée avec succès 👌");
      }

      function desactivation_rubrique(){

          $updated_data = array(  
             'active'  =>     0
          ); 

          $this->crud_model->update_rubrique($this->input->post("idr"), $updated_data);
          echo("🏧l'opération est desactivée avec succès🏧");
      }

      function supression_rubrique(){
 
          $this->crud_model->delete_rubrique($this->input->post("idr"));
          echo("suppression avec succès");
        
      }
      // fin de script des rubrique 


      // script de question
      function fetch_question(){  

           $fetch_data = $this->crud_model->make_datatables_question();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                
                $sub_array[] = nl2br(substr($row->nomq  , 0,50)).' ...';
                $sub_array[] = nl2br(substr($row->nomr  , 0,25)).' ...'; 
                
                $sub_array[] = nl2br(substr($row->nom_formation, 0,30)).' ...'; 
                $sub_array[] = nl2br(substr($row->nom_edition, 0,20)).' ...'; 

                $sub_array[] = '<button type="button" name="update" idq="'.$row->idq.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idq="'.$row->idq.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_question(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_question(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_question()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_question($_POST["idq"]);  
           foreach($data as $row)  
           {  
                $output['idr']        = $row->idr;
                $output['nomq']       = $row->nomq;
               
           }  
           echo json_encode($output);  
      }  


      function operation_question(){

          $insert_data = array(  
             'nomq'               =>     $this->input->post('nomq'),
             'idr'                =>     $this->input->post('idr')   
          ); 

        $requete=$this->crud_model->insert_question($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_question(){

          $updated_data = array(  
              'nomq'               =>     $this->input->post('nomq'),
              'idr'                =>     $this->input->post('idr') 
          ); 

          $this->crud_model->update_question($this->input->post("idq"), $updated_data);
          echo("modification avec succès");
      }

      function supression_question(){
 
          $this->crud_model->delete_question($this->input->post("idq"));
          echo("suppression avec succès");
        
      }
      // fin de script des question

      // script de reponse
      function fetch_reponse(){  

           $fetch_data = $this->crud_model->make_datatables_reponse();  
           $data = array();  
           foreach($fetch_data as $row)  
           {  
                $sub_array = array(); 

                
               
                $sub_array[] = '<input type="checkbox" class="delete_checkbox" value="'.$row->idrep.'" /> &nbsp;&nbsp;&nbsp; <a href="'.base_url().'admin/pdf_reponse/'.$row->idr.'" class="btn btn-primary btn-xs print"><i class="fa fa-print"></i></a>'; 

                $sub_array[] = nl2br(substr($row->nomq  , 0,50)).' ...';
                $sub_array[] = nl2br(substr($row->valeur  , 0,20)).' ...';
                $sub_array[] = nl2br(substr($row->nomr  , 0,25)).' ...'; 
                
               
                $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

                $sub_array[] = '<button type="button" name="update" idrep="'.$row->idrep.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
                $sub_array[] = '<button type="button" name="delete" idrep="'.$row->idrep.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
                $data[] = $sub_array;  
           }  
           $output = array(  
                "draw"                =>     intval($_POST["draw"]),  
                "recordsTotal"        =>     $this->crud_model->get_all_data_reponse(),  
                "recordsFiltered"     =>     $this->crud_model->get_filtered_data_reponse(),  
                "data"                =>     $data  
           );  
           echo json_encode($output);  
      }

      function fetch_single_reponse()  
      {  
           $output = array();  
           $data = $this->crud_model->fetch_single_reponse($_POST["idrep"]);  
           foreach($data as $row)  
           {  
                $output['idq']        = $row->idq;
                $output['valeur']     = $row->valeur;
               
           }  
           echo json_encode($output);  
      }  


      function operation_reponse(){

          $insert_data = array(  
             'valeur'             =>     $this->input->post('valeur'),
             'idq'                =>     $this->input->post('idq')   
          ); 

        $requete=$this->crud_model->insert_reponse($insert_data);
        echo("Ajout information avec succès");
        
      }

      function modification_reponse(){

          $updated_data = array(  
              'valeur'             =>     $this->input->post('valeur'),
              'idq'                =>     $this->input->post('idq') 
          ); 

          $this->crud_model->update_reponse($this->input->post("idrep"), $updated_data);
          echo("modification avec succès");
      }

      function supression_reponse(){
 
          $this->crud_model->delete_reponse($this->input->post("idrep"));
          echo("suppression avec succès");
        
      }

      function Delete_multiple_reponse()
     {
        if($this->input->post('checkbox_value'))
        {
         $id = $this->input->post('checkbox_value');
         for($count = 0; $count < count($id); $count++)
         {
          $this->crud_model->Delete_reponse_tag($id[$count]);
         }
         echo("suppression avec succès");
        }

     }
      // fin de script des reponse


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
         redirect('admin/basic', 'refresh');
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
           redirect('admin/basic_image', 'refresh');
     }
     else{

        $this->session->set_flashdata('message2', 'Veillez selectionner la photo');
        redirect('admin/basic_image', 'refresh');

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
                   redirect('admin/basic_secure', 'refresh');

               }
               else{
   
                $this->session->set_flashdata('message2', 'les deux mot de passe doivent être identiques');
                redirect('admin/basic_secure', 'refresh');
               }
         
          }

       }
       else{

          $this->session->set_flashdata('message2', 'information incorecte');
          redirect('admin/basic_secure', 'refresh');
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
     'country_table'   => $this->crud_model->fetch_details_pagination_to_users_count($config["per_page"], $start)
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
                <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id.'"><i class="fa fa-comment"></i></a>';
              }
              else{

                $etat = '
                <a href="'.base_url().'admin/detail_users_profile/'.$row->id.'"><i class="fa fa-user"></i></a> ';
                
              }

            
             $output .= '

             <div class="nk-msg-item" data-msg-id="2">
                  <div class="nk-msg-media user-avatar">
                      <img src="'.base_url().'upload/photo/'.$row->image.'" alt="">
                  </div>
                  <div class="nk-msg-info">
                      <div class="nk-msg-from">
                          <div class="nk-msg-sender">
                              <div class="name"><a href="'.base_url().'admin/detail_users_profile/'.$row->id.'">'.$row->first_name.' '.substr($row->last_name, 0,25).'</a></div>
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

   function view_1($param1='', $param2='', $param3=''){
      
      if($param1=='display_delete') {

        $query = $this->crud_model->delete_notifacation_tag($param2);
        redirect('admin/notification');
      }

      if($param1=='display_delete_message') {

        $query = $this->crud_model->delete_message_tag($param3);
        redirect('admin/message/'.$param2);
      }
      else{

      }

      
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
       'country_table'   => $this->crud_model->fetch_details_pagination_online_connected($config["per_page"], $start)
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
                <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id.'">
              &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
                  </a> 
                </span>';
            }
            else{

              $etat = '

              <span class="message">
                <a href="'.base_url().'admin/detail_users_profile/'.$row->id.'" class="text-warning">
              &nbsp;&nbsp;<i class="fa fa-user"></i> profile
                  </a> 
                </span>

              ';

              
            }



          $output .= '

           <li class="online">
                <a href="'.base_url().'admin/detail_users_profile/'.$row->id.'">
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
        
        redirect('admin/chat_admin/'.$param1.'/'.$param2);
      }
      else{
        redirect('admin/chat_admin/'.$param1.'/'.$param2);
      }
      
      
    }

     /* script pour lanfing pag commence
    ================================
    tout le landing page 

    */

    // script de  tinfo_personnel
    function fetch_tinfo_personnel(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_personnel();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';
              $sub_array[] = '<i class="fa '.$row->icone.'"></i> '; 
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_personnel="'.$row->idtinfo_personnel.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_personnel="'.$row->idtinfo_personnel.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_personnel(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_personnel(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_personnel()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_personnel($_POST["idtinfo_personnel"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;
              $output['icone']    = $row->icone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_personnel(){

        $insert_data = array(  
           'titre'            =>     $this->input->post('titre'),
           'description'            =>     $this->input->post('description'),
           'icone'            =>     $this->input->post('icone')
    );  

      $requete=$this->crud_model->insert_tinfo_personnel($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_personnel(){

        $updated_data = array(  
            'titre'            =>     $this->input->post('titre'),
            'description'      =>     $this->input->post('description'),
            'icone'            =>     $this->input->post('icone')
        );

        $this->crud_model->update_tinfo_personnel($this->input->post("idtinfo_personnel"), $updated_data);

        echo("modification avec succès");
    }

    function supression_tinfo_personnel(){

        $this->crud_model->delete_tinfo_personnel($this->input->post("idtinfo_personnel"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_personnel

    // script de  tinfo_service
    function fetch_tinfo_service(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_service();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/service/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_service="'.$row->idtinfo_service.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_service="'.$row->idtinfo_service.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_service(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_service(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_service()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_service($_POST["idtinfo_service"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;

              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/service/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_service(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_service()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.jpg";  
             $insert_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description'),
                   'image'            =>     $user_image
            );  
      }

        

      $requete=$this->crud_model->insert_tinfo_service($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_service(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_service()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description')
            );  
      }

      $this->crud_model->update_tinfo_service($this->input->post("idtinfo_service"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_service(){

        $this->crud_model->delete_tinfo_service($this->input->post("idtinfo_service"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_service

    // script de  tinfo_choix
    function fetch_tinfo_choix(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_choix();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';
              $sub_array[] = '<i class="fa '.$row->icone.'"></i> '; 
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_choix="'.$row->idtinfo_choix.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_choix="'.$row->idtinfo_choix.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_choix(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_choix(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_choix()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_choix($_POST["idtinfo_choix"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;
              $output['icone']    = $row->icone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_choix(){

        $insert_data = array(  
           'titre'            =>     $this->input->post('titre'),
           'description'      =>     $this->input->post('description'),
           'icone'            =>     $this->input->post('icone')
    );  

      $requete=$this->crud_model->insert_tinfo_choix($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_choix(){

        $updated_data = array(  
            'titre'            =>     $this->input->post('titre'),
            'description'      =>     $this->input->post('description'),
            'icone'            =>     $this->input->post('icone')
        );

        $this->crud_model->update_tinfo_choix($this->input->post("idtinfo_choix"), $updated_data);

        echo("modification avec succès");
    }

    function supression_tinfo_choix(){

        $this->crud_model->delete_tinfo_choix($this->input->post("idtinfo_choix"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_choix

    // script de  tinfo_techno
    function fetch_tinfo_techno(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_techno();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
             
              $sub_array[] = nl2br(substr($row->titre, 0,80)).' ...';
              $sub_array[] = '<i class="fa '.$row->icone.'"></i> '; 
              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_techno="'.$row->idtinfo_techno.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_techno="'.$row->idtinfo_techno.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_techno(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_techno(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_techno()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_techno($_POST["idtinfo_techno"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['icone']    = $row->icone; 
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_techno(){

        $insert_data = array(  
           'titre'            =>     $this->input->post('titre'),
           'icone'            =>     $this->input->post('icone')
    );  

      $requete=$this->crud_model->insert_tinfo_techno($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_techno(){

        $updated_data = array(  
            'titre'            =>     $this->input->post('titre'),
            'icone'            =>     $this->input->post('icone')
        );

        $this->crud_model->update_tinfo_techno($this->input->post("idtinfo_techno"), $updated_data);

        echo("modification avec succès");
    }

    function supression_tinfo_techno(){

        $this->crud_model->delete_tinfo_techno($this->input->post("idtinfo_techno"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_techno

    // script de  tinfo_user
    function fetch_tinfo_user(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_user();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->first_name.''.$row->last_name, 0,22)).' ...';
              $sub_array[] = nl2br(substr($row->email, 0,20)).' ...';

              $sub_array[] = nl2br(substr($row->poste, 0,20)).' ...';
              $sub_array[] = nl2br(substr($row->telephone, 0,15));

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_user="'.$row->idtinfo_user.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_user="'.$row->idtinfo_user.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_user(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_user(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_user()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_user($_POST["idtinfo_user"]);  
         foreach($data as $row)  
         {  
              $output['first_name']    = $row->first_name; 
              $output['last_name']    = $row->last_name;
              $output['email']    = $row->email;
              $output['telephone']    = $row->telephone;
              $output['sexe']    = $row->sexe;
              $output['facebook']    = $row->facebook;
              $output['twitter']    = $row->twitter;
              $output['linkedin']    = $row->linkedin;
              $output['poste']    = $row->poste;


              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/photo/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_user(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'first_name'     =>     $this->input->post('first_name'),
               'last_name'      =>     $this->input->post('last_name'),
               'email'          =>     $this->input->post('email'),
               'sexe'           =>     $this->input->post('sexe'),
               'telephone'      =>     $this->input->post('telephone'),
               'poste'          =>     $this->input->post('poste'),
               'facebook'       =>     $this->input->post('facebook'),
               'twitter'        =>     $this->input->post('twitter'),
               'linkedin'       =>     $this->input->post('linkedin'),
               'image'          =>     $this->upload_image_users()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.png";   
             $insert_data = array(  
                 'first_name'     =>     $this->input->post('first_name'),
                 'last_name'      =>     $this->input->post('last_name'),
                 'email'          =>     $this->input->post('email'),
                 'sexe'           =>     $this->input->post('sexe'),
                 'telephone'      =>     $this->input->post('telephone'),
                 'poste'          =>     $this->input->post('poste'),
                 'facebook'       =>     $this->input->post('facebook'),
                 'twitter'        =>     $this->input->post('twitter'),
                 'linkedin'       =>     $this->input->post('linkedin'),
                 'image'          =>     $user_image
              );  
      }

        

      $requete=$this->crud_model->insert_tinfo_user($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_user(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'first_name'     =>     $this->input->post('first_name'),
               'last_name'      =>     $this->input->post('last_name'),
               'email'          =>     $this->input->post('email'),
               'sexe'           =>     $this->input->post('sexe'),
               'telephone'      =>     $this->input->post('telephone'),
               'poste'          =>     $this->input->post('poste'),
               'facebook'       =>     $this->input->post('facebook'),
               'twitter'        =>     $this->input->post('twitter'),
               'linkedin'       =>     $this->input->post('linkedin'),
               'image'            =>     $this->upload_image_users()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                 'first_name'     =>     $this->input->post('first_name'),
                 'last_name'      =>     $this->input->post('last_name'),
                 'email'          =>     $this->input->post('email'),
                 'sexe'           =>     $this->input->post('sexe'),
                 'telephone'      =>     $this->input->post('telephone'),
                 'poste'          =>     $this->input->post('poste'),
                 'facebook'       =>     $this->input->post('facebook'),
                 'twitter'        =>     $this->input->post('twitter'),
                 'linkedin'       =>     $this->input->post('linkedin')
            );  
      }

      $this->crud_model->update_tinfo_user($this->input->post("idtinfo_user"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_user(){

        $this->crud_model->delete_tinfo_user($this->input->post("idtinfo_user"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_user

    // script de video
    function fetch_video(){  

         $fetch_data = $this->crud_model->make_datatables_video();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  
              $sub_array[] = '<img src="'.base_url().'upload/video/'.$row->image.'" class="img-thumbnail user-avatar bg-success  d-sm-flex" width="50" height="35" />';  
              $sub_array[] = nl2br(substr($row->nom, 0,20)).'...';  
              $sub_array[] = nl2br(substr($row->description, 0,20)).'...'; 

              $sub_array[] = nl2br(substr($row->lien, 0,20)).'';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 

             
              $sub_array[] = '<button type="button" name="update" idv="'.$row->idv.'" class="btn btn-warning btn-sm update"><i class="fa fa-edit"></i></button>'; 

              $sub_array[] = '<button type="button" name="delete" idv="'.$row->idv.'" class="btn btn-danger btn-sm delete"><i class="fa fa-trash"></i></button>';
              
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_video(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_video(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function operation_video(){

        if($_FILES["user_image"]["size"] > 0)  
        {  
             $insert_data = array(  
                 'nom'                  =>     $this->input->post('nom'),  
                 'description'    =>     $this->input->post("description"),
                 'lien'           =>     $this->input->post("lien"),
                 'image'          =>     $this->upload_image_video()
              );    
        }  
        else  
        {  
               $user_image = "icone-user.png";  
               $insert_data = array(  
                 'nom'                  =>     $this->input->post('nom'),  
                 'description'    =>     $this->input->post("description"),
                 'lien'           =>     $this->input->post("lien"),
                 'image'          =>     $user_image
              );   
        }

      $requete=$this->crud_model->insert_video($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_video(){

        if($_FILES["user_image"]["size"] > 0)  
        {  
             $updated_data = array(  
                 'nom'                  =>     $this->input->post('nom'),  
                 'description'    =>     $this->input->post("description"),
                 'lien'           =>     $this->input->post("lien"),
                 'image'          =>     $this->upload_image_video()
              );    
        }  
        
        else  
        {   
             $updated_data = array(  
                 'nom'                  =>     $this->input->post('nom'),  
                 'description'    =>     $this->input->post("description"),
                 'lien'           =>     $this->input->post("lien")
              );   
        }

        
        $this->crud_model->update_video($this->input->post("idv"), $updated_data);

        echo("modification avec succès");
    }

    function supression_video(){

        $this->crud_model->delete_video($this->input->post("idv"));
        echo("suppression avec succès");
      
    }

    function fetch_single_video()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_video($this->input->post('idv'));  
         foreach($data as $row)  
         {  
              $output['nom'] = $row->nom;  
              $output['description'] = $row->description; 

              $output['lien'] = $row->lien;
              
              $output['image'] = $row->image;

              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/video/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  

              
         }  
         echo json_encode($output);  
    }

  // fin de sript video 

    // script de  tinfo_projet
    function fetch_tinfo_projet(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_projet();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/projet/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,50)).' ...';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_projet="'.$row->idtinfo_projet.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_projet="'.$row->idtinfo_projet.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_projet(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_projet(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_projet()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_projet($_POST["idtinfo_projet"]);  
         foreach($data as $row)  
         {  
              $output['titre']    = $row->titre; 
              $output['description']    = $row->description;

              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/projet/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_projet(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_projet()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.jpg";  
             $insert_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description'),
                   'image'            =>     $user_image
            );  
      }

        

      $requete=$this->crud_model->insert_tinfo_projet($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_projet(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'image'            =>     $this->upload_image_projet()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description')
            );  
      }

      $this->crud_model->update_tinfo_projet($this->input->post("idtinfo_projet"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_projet(){

        $this->crud_model->delete_tinfo_projet($this->input->post("idtinfo_projet"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_projet

     // script de  tinfo_projet_mini
    function fetch_tinfo_projet_mini(){  

         $fetch_data = $this->crud_model->make_datatables_tinfo_projet_mini();  
         $data = array();  
         foreach($fetch_data as $row)  
         {  
              $sub_array = array();  

              $sub_array[] = '<img src="'.base_url().'upload/projet/'.$row->image.'" class="img-thumbnail" width="50" height="35" />';  
             
              $sub_array[] = nl2br(substr($row->titre, 0,50)).' ...';
              $sub_array[] = nl2br(substr($row->description, 0,40)).' ...';

              $sub_array[] = nl2br(substr($row->montant, 0,10)).' $';

              $sub_array[] = nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)); 
             

              $sub_array[] = '<button type="button" name="update" idtinfo_projet_mini="'.$row->idtinfo_projet_mini.'" class="btn btn-warning btn-xs update"><i class="fa fa-edit"></i></button>';  
              $sub_array[] = '<button type="button" name="delete" idtinfo_projet_mini="'.$row->idtinfo_projet_mini.'" class="btn btn-danger btn-xs delete"><i class="fa fa-trash"></i></button>';  
              $data[] = $sub_array;  
         }  
         $output = array(  
              "draw"                =>     intval($_POST["draw"]),  
              "recordsTotal"        =>     $this->crud_model->get_all_data_tinfo_projet_mini(),  
              "recordsFiltered"     =>     $this->crud_model->get_filtered_data_tinfo_projet_mini(),  
              "data"                =>     $data  
         );  
         echo json_encode($output);  
    }

    function fetch_single_tinfo_projet_mini()  
    {  
         $output = array();  
         $data = $this->crud_model->fetch_single_tinfo_projet_mini($_POST["idtinfo_projet_mini"]);  
         foreach($data as $row)  
         {  
              $output['titre']    		= $row->titre; 
              $output['description']    = $row->description;

              if($row->image != '')  
              {  
                   $output['user_image'] = '<img src="'.base_url().'upload/projet/'.$row->image.'" class="img-thumbnail" width="300" height="250" /><input type="hidden" name="hidden_user_image" value="'.$row->image.'" />';  
              }  
              else  
              {  
                   $output['user_image'] = '<input type="hidden" name="hidden_user_image" value="" />';  
              }  
              
             
         }  
         echo json_encode($output);  
    }  


    function operation_tinfo_projet_mini(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $insert_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'montant'          =>     $this->input->post('montant'),
               'image'            =>     $this->upload_image_projet()
            );    
      }  
      else  
      {  
             $user_image = "icone-user.jpg";  
             $insert_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'description'      =>     $this->input->post('description'),
                   'montant'          =>     $this->input->post('montant'),
                   'image'            =>     $user_image
            );  
      }

        

      $requete=$this->crud_model->insert_tinfo_projet_mini($insert_data);
      echo("Ajout information avec succès");
      
    }

    function modification_tinfo_projet_mini(){

      if($_FILES["user_image"]["size"] > 0)  
      {  
           $updated_data = array(  
               'titre'            =>     $this->input->post('titre'),
               'description'      =>     $this->input->post('description'),
               'montant'          =>     $this->input->post('montant'),
               'image'            =>     $this->upload_image_projet()
            );    
      }  
      else  
      {    
             $updated_data = array(  
                   'titre'            =>     $this->input->post('titre'),
                   'montant'          =>     $this->input->post('montant'),
                   'description'      =>     $this->input->post('description')
            );  
      }

      $this->crud_model->update_tinfo_projet_mini($this->input->post("idtinfo_projet_mini"), $updated_data);

      echo("modification avec succès");

    }

    function supression_tinfo_projet_mini(){

        $this->crud_model->delete_tinfo_projet_mini($this->input->post("idtinfo_projet_mini"));
        echo("suppression avec succès");
      
    }
    // fin informations tinfo_projet_mini






// script pour formulaire de contact 
// recherche de contact
 function fetch_search_contact_message_auteur()
 {
    $output = '';
    $query = '';
    if($this->input->post('query'))
    {
     $query = $this->input->post('query');
    }
    $data = $this->crud_model->fetch_data_search_contactAuditeur_to_lean($query);
    
    if($data->num_rows() > 0)
    {


       foreach($data->result() as $row)
       {
          $etat;
            if ($row->fichier !='') {
              $etat ='
                <a href="'.base_url().'upload/contact/'.$row->fichier.'" class="link link-light">
                          <em class="icon ni ni-clip-h"></em>
                      </a>
              '; 
            }
            else{
              $etat ='
                <a href="javascript:void(0);" class="link link-light">
                          
                      </a>
              ';
            }


        $output .= '
          <div class="nk-ibx-item is-unread">

        <input type="checkbox" name="checkbox_id" class="checkbox_id" value="'.$row->email.'">
              
              <div class="nk-ibx-item-elem nk-ibx-item-user">
                  <div class="user-card">
                      <div class="user-avatar">
                          <img src="'.base_url().'/upload/photo/icone-user.png" alt="">
                      </div>
                      <div class="user-name">
                          <div class="lead-text">'.$row->nom.'</div>
                      </div>
                  </div>
              </div>
              <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                  <div class="nk-ibx-context-group">
                      <div class="nk-ibx-context-badges"><span class="badge badge-primary">'.substr($row->sujet, 0,11).'...</span></div>
                      <div class="nk-ibx-context">
                          <span class="nk-ibx-context-text">
                              <span class="heading">'.$row->sujet.' </span>
                      </div>
                  </div>
              </div>
              <div class="nk-ibx-item-elem nk-ibx-item-attach">
                  '.$etat.'
              </div>
              <div class="nk-ibx-item-elem nk-ibx-item-time">
                  <div class="sub-text">'.nl2br(substr(date(DATE_RFC822, strtotime($row->created_at)), 0, 23)).'</div>
              </div>
              <div class="nk-ibx-item-elem nk-ibx-item-tools">
                  <div class="ibx-actions">
                      <ul class="ibx-actions-hidden gx-1">
                          <li>
                              <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-trigger update" id="'.$row->id.'" data-toggle="tooltip" data-placement="top" title="" data-original-title="voir le détail"><em class="icon ni ni-archived"></em>


                              </a>
                          </li>
                          <li>
                              <a href="javascript:void(0);" class="btn btn-sm btn-icon btn-trigger delete" id="'.$row->id.'" data-toggle="tooltip" data-placement="top" title="" data-original-title="Supprimer"><em class="icon ni ni-trash"></em>

                              </a>
                          </li>
                      </ul>
                      <ul class="ibx-actions-visible gx-2">
                          <li>
                              <div class="dropdown">
                                  <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                  <div class="dropdown-menu dropdown-menu-right">
                                      <ul class="link-list-opt no-bdr">
                                          <li>

                                          <a class="dropdown-item update" href="javascript:void(0);" id="'.$row->id.'"><em class="icon ni ni-eye"></em><span>voir le détail</span></a></li>
                                          <li><a class="dropdown-item delete" href="javascript:void(0);" id="'.$row->id.'"><em class="icon ni ni-trash"></em><span>Supprimer</span></a></li>
                                          
                                      </ul>
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div><!-- .nk-ibx-item -->

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

	   // pagination contact 
	 function pagination_contact_auditeurs()
	{

	$this->load->library("pagination");
	$config = array();
	$config["base_url"] = "#";
	$config["total_rows"] = $this->crud_model->fetch_pagination_message_auditeur();
	$config["per_page"] = 4;
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
	 'country_table'   => $this->crud_model->fetch_details_pagination_contact_message_auditeur($config["per_page"], $start)
	);
	echo json_encode($output);
	}
	  // fin pagination


	function fetch_single_information_contact()  
	  {  
	       $output = array();  
	       $data = $this->crud_model->fetch_single_contact_information($this->input->post('id'));  
	       foreach($data as $row)  
	       {  
	            $output['nom'] = $row->nom; 
	            $output['sujet'] = $row->sujet;
	            $output['email'] = $row->email; 
	            $output['message'] = $row->message; 

	       }  
	       echo json_encode($output);  
	  } 


	  function infomation_par_mail_contact()
	 {
	    if($this->input->post('checkbox_value'))
	    {
	       $id = $this->input->post('checkbox_value');
	       for($count = 0; $count < count($id); $count++)
	       {
	           
	            $mail    = $id[$count];
	            $website = "ubfm@gmail.com";

	            $to =$id[$count];
	            $subject = $this->input->post('sujet');
	            $message2 = $this->input->post('message');
	             

	            $headers= "MIME Version 1.0\r\n";
	            $headers .= "Content-type: text/html; charset=UTF-8\r\n";
	            $headers .= "From: no-reply@ubfm.com" . "\r\n" ."Reply-to: sumailiroger681@gmail.com"."\r\n"."X-Mailer: PHP/".phpversion();

	            mail($to,$subject,$message2,$headers);

	       }

	       if(mail($to,$subject,$message2,$headers) > 0){
	            echo("message envoyé avec succès");
	       } 
	       else {
	            echo("Problème de connexion veillez  patienter!!!!!!!!!!!!");
	       }


	    }
	 }

	 function supression_information_contact_visite()
	 {

	      if($this->input->post('checkbox_value'))
	      {
	         $id = $this->input->post('checkbox_value');
	         for($count = 0; $count < count($id); $count++)
	         {
	             
	              $mail    = $id[$count];
	              $this->crud_model->delete_information_contact_send($mail);

	            echo("suppression avec succès");

	         }

	         


	      } 
	 }


	 function download_photo_galery()
	 {
		  if($this->input->post('images'))
		  {
		   	$this->load->library('zip');
		   	$images = $this->input->post('images');
		    foreach($images as $image)
		    {
		    	$this->zip->read_file($image);
		    	// echo($image);
		    }
		    $this->zip->download(''.time().'.zip');
		  }
	 }

	 function upload_galery()
	 {
		  sleep(3);
		  if($_FILES["files"]["name"] != '')
		  {
		   $output = '';
		   $config["upload_path"] = './upload/galery/';
		   $config["allowed_types"] = 'gif|jpg|png|webp';
		   $this->load->library('upload', $config);
		   $this->upload->initialize($config);
		   for($count = 0; $count<count($_FILES["files"]["name"]); $count++)
		   {
		   	$extension = explode('.', $_FILES["files"]["name"][$count]);  
	      $new_name = rand() . '.' . $extension[1];

		    $_FILES["file"]["name"] = $new_name;
		    $_FILES["file"]["type"] = $_FILES["files"]["type"][$count];
		    $_FILES["file"]["tmp_name"] = $_FILES["files"]["tmp_name"][$count];
		    $_FILES["file"]["error"] = $_FILES["files"]["error"][$count];
		    $_FILES["file"]["size"] = $_FILES["files"]["size"][$count];

		    // echo($_FILES["files"]["name"][$count]).'<br>';
	      // echo($new_name).PHP_EOL;


		    if($this->upload->do_upload('file'))
		    {
		     $data = $this->upload->data();

		     $insert_data = array(  
	           'image'         =>     $new_name              
			   ); 
		     $requete=$this->crud_model->insert_galery($insert_data);

		     $output .= '
		     <div class="col-md-3" align="center" style="margin-bottom:24px;">
		      <img src="'.base_url().'upload/galery/'.$data["file_name"].'" class="img-thumbnail img-responsive" style="height: 200px;" />
		      	<br />
						<input type="checkbox" name="images[]" class="select" value="upload/galery/'.$data["file_name"].'" />
		     </div>
		     ';
		    }
		   }
		   echo $output;   
		  }
	 }

	   // pagination contact 
	 function pagination_galery_member()
	{

	$this->load->library("pagination");
	$config = array();
	$config["base_url"] = "#";
	$config["total_rows"] = $this->crud_model->fetch_pagination_galery();
	$config["per_page"] = 4;
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
	 'country_table'   => $this->crud_model->fetch_details_pagination_galery($config["per_page"], $start)
	);
	echo json_encode($output);
	}
	  // fin pagination

	function supression_photo_galery(){

	  $this->crud_model->delete_photo_galery($this->input->post("idg"));
	  echo("suppression avec succès");

	}


















      function upload_image_users()  
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

      function upload_image_video()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/video/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_service()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/service/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_projet()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/projet/' . $new_name;  
                move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_qrcode()  
      {  
           if(isset($_FILES["user_image"]))  
           {  
                $extension = explode('.', $_FILES['user_image2']['name']);  
                $new_name = rand() . '.' . $extension[1];  
                $destination = './upload/qrcode/' . $new_name;  
                move_uploaded_file($_FILES['user_image2']['tmp_name'], $destination);  
                return $new_name;  
           }  
      }

      function upload_image_tbl_info()  
  	  {  
  	       if(isset($_FILES["user_image"]))  
  	       {  
  	            $extension = explode('.', $_FILES['user_image']['name']);  
  	            $new_name = rand() . '.' . $extension[1];  
  	            $destination = './upload/tbl_info/' . $new_name;  
  	            move_uploaded_file($_FILES['user_image']['tmp_name'], $destination);  
  	            return $new_name;  
  	       }  
  	  }


















		
}



 ?>