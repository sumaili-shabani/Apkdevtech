<?php 
class crud_model extends CI_Model{


	// opertion role
	var $table1 = "role";  
	var $select_column1 = array("idrole", "nom", "created_at");  
	var $order_column1 = array(null, "nom", "created_at");
	  // fin de la role
	// opertion tbl_info
	var $table2 = "tbl_info";  
	var $select_column2 = array("idinfo", "nom_site", "icone", "adresse", "tel1","tel2","facebook","twitter", "linkedin", "email", "termes", "confidentialite", 
		"description", "mission", "objectif","blog");  
	var $order_column2 = array(null, "nom_site", "adresse","tel1","tel2", 
		"description", "mission", "objectif","blog", null, null);
	  // fin de la tbl_info

	// opertion edution
	var $table3 = "edition";  
	var $select_column3 = array("idedition", "nom", "created_at");  
	var $order_column3 = array(null, "nom", "created");
	// fin de la edution

	// opertion edution
	var $table4 = "categorie_aprenant";  
	var $select_column4 = array("idcat", "nom", "created_at");  
	var $order_column4 = array(null, "nom", "created");
	// fin de la edution

	// opertion edution
	var $table5 = "formation";  
	var $select_column5 = array("idformation", "nom","description","image", "created_at");  
	var $order_column5 = array(null, "nom","description", "created");
	// fin de la edution

	// opertion profile_inscription
	var $table6 = "profile_inscription";  
	var $select_column6 = array("idinscription", "idedition","idformation","idcat",
		"id_user","date_inscription","nom_edition","nom_formation","nom_categorie ","id",
		"first_name ","last_name","email","image","telephone","sexe","created_at");  
	var $order_column6 = array(null, "first_name ","last_name","email","image","telephone","sexe","date_inscription", "created");
	// fin de la profile_inscription

	 // opertion paie
  	var $table7 = "profile_paiement";  
  	var $select_column7 = array("idp", "montant","motif","idpersonne","date_paie",
  		"first_name ","last_name","email","image","telephone","sexe",
  		"created_at");  
  	var $order_column7 = array(null, "montant","motif","image","idpersonne","date_paie",
  		"first_name ","last_name","email","image","telephone","sexe","created_at",null, null);
    // fin de la paie
  	//users
  	var $table8 = "users";  
    var $select_column8 = array("id", "first_name", "last_name", "email","image","telephone","full_adresse","biographie","date_nais","facebook","twitter","linkedin","qrcode","idrole");  
    var $order_column8 = array(null, "first_name", "last_name","telephone","sexe","id", null, null);
    // fin information

    // opertion paie
  	var $table9 = "profile_presence";  
  	var $select_column9 = array("idp", "id_user","jour",
  		"first_name ","last_name","email","image","telephone","sexe",
  		"created_at");  
  	var $order_column9 = array(null, "jour",
  		"first_name ","last_name","email","image","telephone","sexe",
  		"created_at", null);
    // fin de la paie

    // opertion edution
	var $table10 = "profile_tranche";  
	var $select_column10 = array("idt", "nomt","montant","total_montant","active","idformation","idedition","nom_formation", "nom_edition");  
	var $order_column10 = array(null, "nomt","montant","active","idformation","idedition","nom_formation", "nom_edition","total_montant",null,null);
	// fin de la edution

	// opertion edution
	var $table11 = "profile_recouvrement";  
	var $select_column11 = array("idr","date_debit","date_fin","idt", "nomt","montant","total_montant","active","idformation","idedition","nom_formation", "nom_edition");  
	var $order_column11 = array(null, "idr","date_debit","date_fin","nomt","montant","active","idformation","idedition","nom_formation", "nom_edition","total_montant",null,null);
	// fin de la edution

	// opertion edution
	var $table12 = "profile_derogation";  
	var $select_column12 = array("idd","date_debit","date_fin","id_user", "active","first_name","last_name","sexe","email","telephone", "image");  
	var $order_column12 = array(null, "date_debit","date_fin","id_user", "active","first_name","last_name","sexe","email","telephone",null);
	// fin de la edution

	// opertion rubrique
	var $table13 = "profile_rubrique";  
	var $select_column13 = array("idr", "nomr","token","active","idformation","idedition","nom_formation", "nom_edition");  
	var $order_column13 = array(null, "nomr","token","active","idformation","idedition","nom_formation", "nom_edition",null,null);
	// fin de la rubrique

	// opertion rubrique
	var $table14 = "profile_question";  
	var $select_column14 = array("idq","nomq","idr", "nomr","token","active","idformation","idedition","nom_formation", "nom_edition");  
	var $order_column14 = array(null, "nomq","nomr","token","active","idformation","idedition","nom_formation", "nom_edition",null,null);
	// fin de la rubrique

	// opertion reponse
	var $table15 = "profile_reponse";  
	var $select_column15 = array("idrep","valeur","created_at", "idq","nomq","idr", "nomr","token","active","idformation","idedition","nom_formation", "nom_edition");  
	var $order_column15 = array(null, "valeur","created_at","nomq","nomr","token","active","idformation","idedition","nom_formation", "nom_edition",null,null);
	// fin de la reponse


	// opertion tinfo_personnel
	var $table16 = "tinfo_personnel";  
	var $select_column16 = array("idtinfo_personnel", "titre","description","icone", "created_at");  
	var $order_column16 = array(null, "titre","description","icone", "created_at");
	// fin de la tinfo_personnel

	// opertion tinfo_service
	var $table17 = "tinfo_service";  
	var $select_column17 = array("idtinfo_service", "titre","description","image", "created_at");  
	var $order_column17 = array(null, "titre","description","image", "created_at");
	// fin de la tinfo_service

	// opertion tinfo_choix
	var $table18 = "tinfo_choix";  
	var $select_column18 = array("idtinfo_choix", "titre","description","icone", "created_at");  
	var $order_column18 = array(null, "titre","description","icone", "created_at");
	// fin de la tinfo_choix

	// opertion tinfo_techno
	var $table19 = "tinfo_techno";  
	var $select_column19 = array("idtinfo_techno", "titre","icone", "created_at");  
	var $order_column19 = array(null, "titre","icone", "created_at");
	// fin de la tinfo_techno

	//tinfo_user
  	var $table20 = "tinfo_user";  
    var $select_column20 = array("idtinfo_user", "first_name", "last_name","sexe", "email","image","telephone","facebook","twitter","linkedin","poste","created_at");  
    var $order_column20 = array(null, "first_name", "last_name","telephone","sexe","email",
    	"created_at",null, null);
    // fin tinfo_user

    // opertion video information
	var $table21 = "video";  
	var $select_column21 = array("idv", "nom","description","lien","image", "created_at");  
	var $order_column21 = array(null, "nom","description","lien", "created_at");
	// fin video

	// opertion tinfo_projet
	var $table22 = "tinfo_projet";  
	var $select_column22 = array("idtinfo_projet", "lien","titre","description","image", "created_at");  
	var $order_column22 = array(null, "lien","titre","description","image", "created_at");
	// fin de la tinfo_projet

	// opertion tinfo_projet_mini
	var $table23 = "tinfo_projet_mini";  
	var $select_column23 = array("idtinfo_projet_mini","montant", "titre","description","image", "created_at");  
	var $order_column23 = array(null, "montant","titre","description","image", "created_at");
	// fin de la tinfo_projet_mini


	
	function Select_articles_tinfo_personnel()
	{
	      return $this->db->query('SELECT * FROM tinfo_personnel ORDER BY created_at DESC LIMIT 10');
	}

	function fetch_pagination_online(){
	    $query = $this->db->get("profile_online");
	    return $query->num_rows();
	}

	function fetch_show_projets(){
		$this->db->order_by('idtinfo_projet_mini','DESC');
		$this->db->limit(50);
	    $query = $this->db->get("tinfo_projet_mini");
	    return $query;
	}

	 //insertion des photos pour la galerie
	function insert_galery($data)  
	{  
	    $this->db->insert('galery', $data);  
	}

	// contact 
	function insert_contact($data)  
	{  
	    $this->db->insert('contact', $data);  
	}
	//suppression des photos pour la galerie
	function delete_photo_galery($idg)  
    {  
         $this->db->where("idg", $idg);  
         $this->db->delete("galery");  
    }

    //suppression des photos pour la projet d'ulistration
	function delete_photo_picture($idd)  
    {  
         $this->db->where("idd", $idd);  
         $this->db->delete("detail_projet");  
    }
	  // recherche des produits par fultres
    function fetch_data_search_online_user($query)
    {
      $this->db->select("*");
      $this->db->from("users");
      $this->db->limit(9);
      if($query != '')
      {
       $this->db->like('id', $query);
       $this->db->or_like('first_name', $query);
       $this->db->or_like('last_name', $query);
       $this->db->or_like('full_adresse', $query);
       $this->db->or_like('telephone', $query);

      }
      $this->db->order_by('first_name', 'ASC');
      return $this->db->get();
    }


	function get_fomation_by_app($id_user)
	{
		$idformation;
	    $requete = $this->db->query("SELECT * FROM profile_inscription WHERE id_user=".$id_user." ")->result_array();
	    foreach ($requete as $key) {
	    	$idformation = $key['idformation'];
	    }

	    return $idformation;
	   
	}

	function get_categorie_by_app($id_user)
	{
		$idcat;
	    $requete = $this->db->query("SELECT * FROM profile_inscription WHERE id_user=".$id_user." ")->result_array();
	    foreach ($requete as $key) {
	    	$idcat = $key['idcat'];
	    }

	    return $idcat;
	   
	}

	function get_edition_by_app($id_user)
	{
		$idedition;
	    $requete = $this->db->query("SELECT * FROM profile_inscription WHERE id_user=".$id_user." ")->result_array();
	    foreach ($requete as $key) {
	    	$idedition = $key['idedition'];
	    }

	    return $idedition;
	   
	}

	function get_derogation_by_app($id_user)
	{
		$date_fin;
	    $requete = $this->db->query("SELECT * FROM derogation WHERE id_user=".$id_user." AND active=1 ");
	    if ($requete->num_rows() > 0) {
	    	foreach ($requete->result_array() as $key) {
		    	$date_fin = $key['date_fin'];
		    }
	    }
	    else{
	    	$date_fin = '2019-01-01';
	    }
	    

	    return $date_fin;
	   
	}

	function get_paiement_by_app($id_user,$idformation,$idedition)
	{
		$montant;
	    $requete = $this->db->query("SELECT SUM(montant) AS total_payer FROM profile_paiement_recouvrement WHERE idpersonne=".$id_user." AND
	     (idformation=".$idformation."  AND idedition=".$idedition.") ");
	    if ($requete->num_rows() > 0) {
	    	
    		foreach ($requete->result_array() as $key) {
		    	$montant = $key['total_payer'];
		    }
	    }
	    else{

	    	$montant = 0;	
	    }

	    return $montant;
	   
	}

	function get_recouvrement_by_app($idformation,$idedition)
	{
		$total_montant;
	    $requete = $this->db->query("SELECT * FROM profile_recouvrement WHERE idformation=".$idformation." AND (idedition=".$idedition." AND active=1) ");
	    if ($requete->num_rows() > 0) {
	    	
    		foreach ($requete->result_array() as $key) {
		    	$total_montant = $key['total_montant'];
		    }
	    }
	    else{

	    	$total_montant = 0;	
	    }

	    return $total_montant;
	}


  	function tester_de_jour($jour)
	{
	    $requete = $this->db->query("SELECT DAYNAME('".$jour."') AS nom_jour");
	    return $requete;
	}

	function show_day()
	{
		$jour;
	    $requete = $this->db->query("SELECT CURRENT_DATE() AS jour")->result_array();
	    foreach ($requete as $key) {
	    	$jour = $key['jour'];
	    }
	    return $jour;
	}

	function get_info_user(){
	    $nom = $this->db->get("users")->result_array();
	    return $nom;
	}

	function get_name_user($id){
	    $this->db->where("id", $id);
	    $nom = $this->db->get("users")->result_array();
	    foreach ($nom as $key) {
	      return $key["first_name"];
	    }

	}

	function insert_notification($data)  
	{  
	   $this->db->insert('notification', $data);  
	}

	// messagerie
	function insert_message($data){
	    $this->db->insert('messagerie', $data);
	}


	function tester_presence_de_jour($id_user,$jour)
	{
	    $requete = $this->db->query("SELECT * FROM presence WHERE id_user=".$id_user." AND jour='".$jour."' ");
	    $nombre = $requete->num_rows();
	    return $nombre;
	}

    function Select_users()
	{
	    $this->db->order_by('first_name','ASC');
	    $this->db->limit(50);
	    return $this->db->get('users');
	}

	function Select_apprenants()
	{
	    $this->db->order_by('first_name','ASC');
	    $this->db->limit(50);
	    return $this->db->get('profile_inscription');
	}

	function fetch_connected($id){
	    $this->db->where('id',$id);
	    return $this->db->get('users')->result_array();
	}

	function fetch_data_tinfo_projet(){
	    $this->db->limit(50);
	    $this->db->order_by('titre','ASC');
	    return $this->db->get('tinfo_projet');
	}

	function fetch_id_formation_by_name($nom){
	    $this->db->where('nom_formation',$nom);
	    $query =$this->db->get("profile_inscription")->result_array();
	    foreach ($query as $key) {
	    	$idformation = $key['idformation'];
	    	return $idformation;
	    }
	}

	function fetch_nom_formation_by_id($idformation){
	    $this->db->where('idformation',$idformation);
	    $query =$this->db->get("profile_inscription")->result_array();
	    foreach ($query as $key) {
	    	$nom_formation = $key['nom_formation'];
	    	return $nom_formation;
	    }
	}

	function fetch_nom_edition_by_id($idedition){
	    $this->db->where('idedition',$idedition);
	    $query =$this->db->get("profile_inscription")->result_array();
	    foreach ($query as $key) {
	    	$nom_edition = $key['nom_edition'];
	    	return $nom_edition;
	    }
	}

	function fetch_id_edition_by_name($nom){
	    $this->db->where('nom_edition',$nom);
	    $query =$this->db->get("profile_inscription")->result_array();
	    foreach ($query as $key) {
	    	$idedition = $key['idedition'];
	    	return $idedition;
	    }
	}

	function fetch_membre_apprenant()
	{
		$idrole = 2;
	    $this->db->order_by('first_name','ASC');
	    $this->db->where("idrole",$idrole);
	    return $this->db->get('users');
	}

	function fetch_categores_dates_compt()
	{
	    $this->db->group_by('date_paie');
	    $this->db->order_by('date_paie','DESC');
	    return $this->db->get('paiement');
	}

	function fetch_categores_dates_presence()
	{
	    $this->db->group_by('jour');
	    $this->db->order_by('jour','DESC');
	    return $this->db->get('presence');
	}

	function fetch_categores_nom_formation($table)
	{
	    $this->db->group_by('nom');
	    $this->db->order_by('nom','ASC');
	    return $this->db->get($table);
	}


	function fetch_membre_apprenant_inscrit()
	{
	    $this->db->order_by('first_name','ASC');
	    return $this->db->get('profile_inscription');
	}

	function fetch_membre_formation()
	{
	    $this->db->order_by('nom','ASC');
	    return $this->db->get('formation');
	}

	function fetch_membre_rubrique()
	{
	    $this->db->order_by('nomr','ASC');
	    return $this->db->get('rubrique');
	}

	function fetch_membre_question()
	{
	    $this->db->order_by('nomq','ASC');
	    return $this->db->get('question');
	}

	function fetch_membre_question_param($token)
	{	
		$this->db->order_by('nomq','ASC');
	    return $this->db->get_where('profile_question', array(
	    	'token' 	=> $token,
	    	'active'	=>	1
	    ));
	}

	function fetch_membre_question_param_one($token)
	{	
	    $this->db->order_by('nomq','ASC');
	    $this->db->limit(1);
	    return $this->db->get_where('profile_question', array(
	    	'token' 	=> $token,
	    	'active'	=>	1
	    ));
	}

	function fetch_membre_question_param_limit($token, $limit)
	{	
		$this->db->where('token',$token);
	    $this->db->order_by('nomq','ASC');
	    $this->db->limit($limit);
	    return $this->db->get('profile_question');
	}

	function fetch_membre_categorie()
	{
	    $this->db->order_by('nom','ASC');
	    return $this->db->get('categorie_aprenant');
	}

	function fetch_membre_edition()
	{
	    $this->db->order_by('nom','ASC');
	    return $this->db->get('edition');
	}

	function fetch_membre_tranche()
	{
	    $this->db->order_by('nom_formation','ASC');
	    return $this->db->get('profile_tranche');
	}

	function fetch_single_personne_user($id)  
    {  
         $this->db->where("id", $id);  
         $query=$this->db->get('users');  
         return $query->result();  
    } 

    function statistiques_nombre_m_plus_presence($query, $dates1, $dates2, $sexe){
        $my_nombre;

        if ($dates1 < $dates2) {
        	$data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE sexe='".$sexe."' AND (jour BETWEEN '".$dates1."' 
        	AND '".$dates2."') ");

	        	if ($data_ok->num_rows() > 0) {

		          foreach ($data_ok->result_array() as $key) {
		            $my_nombre = $key['nombre'];
		          }
		          # code...
		        }
		        else{
		             $my_nombre = 0;
		        }
        }
        else{

        	$data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE sexe='".$sexe."' AND (jour BETWEEN '".$dates2."' 
        	AND '".$dates1."') ");

        		if ($data_ok->num_rows() > 0) {

		          foreach ($data_ok->result_array() as $key) {
		            $my_nombre = $key['nombre'];
		          }
		          # code...
		        }
		        else{
		             $my_nombre = 0;
		        }
        }
        
        

        return $my_nombre;
    }

    function fetch_all_apprenants_inscrits($nom_formation, $nom_edition)
	{

	      return $this->db->query("SELECT * FROM profile_inscription WHERE nom_formation='".$nom_formation."'  AND nom_edition='".$nom_edition."' 
	         LIMIT 50");
	}

    function statistiques_nombre_m_plus_inscription($query, $nom_formation, $nom_edition, $sexe){
        $my_nombre;

        $data_ok = $this->db->query("SELECT COUNT(*) AS nombre FROM profile_inscription WHERE nom_formation='".$nom_formation."'  AND (nom_edition='".$nom_edition."'  AND sexe='".$sexe."') ");

    	if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
            $my_nombre = 0;
        }

        return $my_nombre;
    }

    function statistiques_nombre_plus_inscription($query, $idformation, $idedition, $sexe){
        $my_nombre;

        $data_ok = $this->db->query("SELECT COUNT(*) AS nombre FROM profile_inscription WHERE idformation=".$idformation."  AND (idedition=".$idedition."  AND sexe='".$sexe."') ");

    	if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
            $my_nombre = 0;
        }

        return $my_nombre;
    }

    function statistiques_nombre_fultrage_inscription($query, $nom_formation, $nom_edition){
        $my_nombre;
        $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." 
          WHERE nom_formation='".$nom_formation."'  AND nom_edition='".$nom_edition."' ");
        if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
             $my_nombre = 0;
        }

        return $my_nombre;

    }

    function statistiques_nombre_fultrage_presence($query, $dates1,$dates2){
        $my_nombre;
        $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." 
          WHERE jour BETWEEN '".$dates1."' AND '".$dates2."' ");
        if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
             $my_nombre = 0;
        }

        return $my_nombre;

    }


    function statistiques_nombre_reponse_tb($valeur){
        $my_nombre;

        $data_ok = $this->db->query("SELECT COUNT(*) AS nombre FROM profile_reponse WHERE valeur='".$valeur."' ");

    	if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
            $my_nombre = 0;
        }

        return $my_nombre;
    }

    function statistiques_nombre_reponse_rubrique($valeur, $idr){
        $my_nombre;

        $data_ok = $this->db->query("SELECT COUNT(*) AS nombre FROM profile_reponse WHERE valeur='".$valeur."' AND idr=".$idr." ");

    	if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
            $my_nombre = 0;
        }

        return $my_nombre;
    }

    function statistiques_reponses_generale_rubrique($idr){
        $my_nombre;

        $data_ok = $this->db->query("SELECT COUNT(*) AS nombre FROM profile_reponse WHERE  idr=".$idr." ");

    	if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
            $my_nombre = 0;
        }

        return $my_nombre;
    }

    function statistiques_reponses_generale(){
        $my_nombre;

        $data_ok = $this->db->query("SELECT COUNT(*) AS nombre FROM profile_reponse ");

    	if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
            $my_nombre = 0;
        }

        return $my_nombre;
    }



    function fetch_all_paiements($dates1, $dates2)
	{

	      return $this->db->query("SELECT * FROM profile_paiement WHERE date_paie BETWEEN '".$dates1."' 
	        AND '".$dates2."' LIMIT 40");
	}

	function fetch_all_presence_ap($dates1, $dates2)
	{

	      return $this->db->query("SELECT * FROM profile_presence WHERE jour BETWEEN '".$dates1."' 
	        AND '".$dates2."' LIMIT 40");
	}

	function statistiques_nombre($query){
        $my_nombre;
        $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." ");
        if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
             $my_nombre = 0;
        }

        return $my_nombre;

    }

    function statistiques_nombre_where($query, $colone,$value){
        $my_nombre;
        $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone."='".$value."' ");
        if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
             $my_nombre = 0;
        }

        return $my_nombre;

    }

    function statistiques_nombre_where_null($query, $colone,$value){
        $my_nombre;
        $data_ok = $this->db->query("SELECT count(*) AS nombre from ".$query." WHERE ".$colone." is ".$value." ");
        if ($data_ok->num_rows() > 0) {

          foreach ($data_ok->result_array() as $key) {
            $my_nombre = $key['nombre'];
          }
          # code...
        }
        else{
             $my_nombre = 0;
        }

        return $my_nombre;

    }





	function insert_user($data)
	{
	  $this->db->insert('users', $data);
	  return $this->db->insert_id();
	}

	// online 
	function insert_online($data){
	    $this->db->insert('online', $data);
	}
	
	function delete_online($id_user){
	    $this->db->where('id_user', $id_user);
	    $this->db->delete("online");
	}

	function insert_recupere($data){
	     $this->db->insert('recupere', $data);
	}

	function update_user($email, $data)
	{
	  $this->db->where('email', $email);
	  return $this->db->update('users', $data);
	}




	// script pour role du site
	 function make_query_role()  
	 {  
	        
	       $this->db->select($this->select_column1);  
	       $this->db->from($this->table1);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idrole", $_POST["search"]["value"]);  
	            $this->db->or_like("nom", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column1[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idrole', 'DESC');  
	       }  
	  }

	 function make_datatables_role(){  
	       $this->make_query_role();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_role(){  
	       $this->make_query_role();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_role()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table1);  
	       return $this->db->count_all_results();  
	  }

	  function insert_role($data)  
	  {  
	       $this->db->insert('role', $data);  
	  }

	  
	  function update_role($idrole, $data)  
	  {  
	       $this->db->where("idrole", $idrole);  
	       $this->db->update("role", $data);  
	  }


	  function delete_role($idrole)  
	  {  
	       $this->db->where("idrole", $idrole);  
	       $this->db->delete("role");  
	  }

	  function fetch_single_role($idrole)  
	  {  
	       $this->db->where("idrole", $idrole);  
	       $query=$this->db->get('role');  
	       return $query->result();  
	  } 
	// fin de script role

	  // script pour information du site
	  function make_query_tbl_info()  
	  {  
	        
	       $this->db->select($this->select_column2);  
	       $this->db->from($this->table2);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("adresse", $_POST["search"]["value"]);  
	            $this->db->or_like("nom_site", $_POST["search"]["value"]);
	            $this->db->or_like("tel1", $_POST["search"]["value"]); 
	            $this->db->or_like("tel2", $_POST["search"]["value"]);
	            $this->db->or_like("email", $_POST["search"]["value"]);
	            $this->db->or_like("idinfo", $_POST["search"]["value"]);
	            $this->db->or_like("termes", $_POST["search"]["value"]);
	            $this->db->or_like("confidentialite", $_POST["search"]["value"]);  
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column2[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idinfo', 'DESC');  
	       }  
	  }

	 function make_datatables_tbl_info(){  
	       $this->make_query_tbl_info();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tbl_info(){  
	       $this->make_query_tbl_info();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tbl_info()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table2);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tbl_info($data)  
	  {  
	       $this->db->insert('tbl_info', $data);  
	  }

	  
	  function update_tbl_info($idinfo, $data)  
	  {  
	       $this->db->where("idinfo", $idinfo);  
	       $this->db->update("tbl_info", $data);  
	  }


	  function delete_tbl_info($idinfo)  
	  {  
	       $this->db->where("idinfo", $idinfo);  
	       $this->db->delete("tbl_info");  
	  }

	  function delete_compte_utilisateur($id)  
	  {  
	       $this->db->where("id", $id);  
	       $this->db->delete("users");  
	  }

	  function fetch_single_tbl_info($idinfo)  
	  {  
	       $this->db->where("idinfo", $idinfo);  
	       $query=$this->db->get('tbl_info');  
	       return $query->result();  
	  } 

	  // fin de tbl_info 


	  // script pour edition 
	 function make_query_edition()  
	 {  
	        
	       $this->db->select($this->select_column3);  
	       $this->db->from($this->table3);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idedition", $_POST["search"]["value"]);  
	            $this->db->or_like("nom", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column3[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idedition', 'DESC');  
	       }  
	  }

	 function make_datatables_edition(){  
	       $this->make_query_edition();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_edition(){  
	       $this->make_query_edition();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_edition()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table3);  
	       return $this->db->count_all_results();  
	  }

	  function insert_edition($data)  
	  {  
	       $this->db->insert('edition', $data);  
	  }

	  
	  function update_edition($idedition, $data)  
	  {  
	       $this->db->where("idedition", $idedition);  
	       $this->db->update("edition", $data);  
	  }


	  function delete_edition($idedition)  
	  {  
	       $this->db->where("idedition", $idedition);  
	       $this->db->delete("edition");  
	  }

	  function fetch_single_edition($idedition)  
	  {  
	       $this->db->where("idedition", $idedition);  
	       $query=$this->db->get('edition');  
	       return $query->result();  
	  } 
	// fin de script edition


	   // script pour categorie_aprenant 
	 function make_query_categorie_aprenant()  
	 {  
	        
	       $this->db->select($this->select_column4);  
	       $this->db->from($this->table4);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idcat", $_POST["search"]["value"]);  
	            $this->db->or_like("nom", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column4[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idcat', 'DESC');  
	       }  
	  }

	 function make_datatables_categorie_aprenant(){  
	       $this->make_query_categorie_aprenant();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_categorie_aprenant(){  
	       $this->make_query_categorie_aprenant();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_categorie_aprenant()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table4);  
	       return $this->db->count_all_results();  
	  }

	  function insert_categorie_aprenant($data)  
	  {  
	       $this->db->insert('categorie_aprenant', $data);  
	  }

	  
	  function update_categorie_aprenant($idcat, $data)  
	  {  
	       $this->db->where("idcat", $idcat);  
	       $this->db->update("categorie_aprenant", $data);  
	  }


	  function delete_categorie_aprenant($idcat)  
	  {  
	       $this->db->where("idcat", $idcat);  
	       $this->db->delete("categorie_aprenant");  
	  }

	  function fetch_single_categorie_aprenant($idcat)  
	  {  
	       $this->db->where("idcat", $idcat);  
	       $query=$this->db->get('categorie_aprenant');  
	       return $query->result();  
	  } 
	 // fin de script categorie_aprenant

	  // script pour formation du site
	 function make_query_formation()  
	 {  
	        
	       $this->db->select($this->select_column5);  
	       $this->db->from($this->table5);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idformation", $_POST["search"]["value"]);  
	            $this->db->or_like("nom", $_POST["search"]["value"]);
	            $this->db->or_like("description", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column5[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idformation', 'DESC');  
	       }  
	  }

	 function make_datatables_formation(){  
	       $this->make_query_formation();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_formation(){  
	       $this->make_query_formation();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_formation()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table5);  
	       return $this->db->count_all_results();  
	  }

	  function insert_formation($data)  
	  {  
	       $this->db->insert('formation', $data);  
	  }

	  
	  function update_formation($idformation, $data)  
	  {  
	       $this->db->where("idformation", $idformation);  
	       $this->db->update("formation", $data);  
	  }


	  function delete_formation($idformation)  
	  {  
	       $this->db->where("idformation", $idformation);  
	       $this->db->delete("formation");  
	  }

	  function fetch_single_formation($idformation)  
	  {  
	       $this->db->where("idformation", $idformation);  
	       $query=$this->db->get('formation');  
	       return $query->result();  
	  } 
	// fin de script formation


	   // script pour inscription aux formations 
	 function make_query_inscription()  
	 {  
	        
	       $this->db->select($this->select_column6);  
	       $this->db->from($this->table6);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idinscription", $_POST["search"]["value"]);  
	            $this->db->or_like("first_name", $_POST["search"]["value"]);
	            $this->db->or_like("last_name", $_POST["search"]["value"]);
	            $this->db->or_like("nom_edition ", $_POST["search"]["value"]);
	            $this->db->or_like("nom_formation", $_POST["search"]["value"]);
	            $this->db->or_like("sexe", $_POST["search"]["value"]);
	            $this->db->or_like("date_inscription ", $_POST["search"]["value"]);
	            $this->db->or_like("telephone", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column6[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idinscription', 'DESC');  
	       }  
	  }

	 function make_datatables_inscription(){  
	       $this->make_query_inscription();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_inscription(){  
	       $this->make_query_inscription();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_inscription()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table6);  
	       return $this->db->count_all_results();  
	  }

	  function insert_inscription($data)  
	  {  
	       $this->db->insert('inscription_formation', $data);  
	  }

	  
	  function update_inscription($idinscription, $data)  
	  {  
	       $this->db->where("idinscription", $idinscription);  
	       $this->db->update("inscription_formation", $data);  
	  }


	  function delete_inscription($idinscription)  
	  {  
	       $this->db->where("idinscription", $idinscription);  
	       $this->db->delete("inscription_formation");  
	  }

	  function fetch_single_inscription($idinscription)  
	  {  
	       $this->db->where("idinscription", $idinscription);  
	       $query=$this->db->get('profile_inscription');  
	       return $query->result();  
	  } 
	  // fin de script inscription aux formations

	  // script pour information sur le paiement 
	  function make_query_paiement()  
	  {  
	          
	         $this->db->select($this->select_column7);  
	         $this->db->from($this->table7);  
	         if(isset($_POST["search"]["value"]))  
	         {  
	              $this->db->like("first_name", $_POST["search"]["value"]);  
	              $this->db->or_like("last_name", $_POST["search"]["value"]);
	              $this->db->or_like("telephone", $_POST["search"]["value"]); 
	              $this->db->or_like("montant", $_POST["search"]["value"]);
	              $this->db->or_like("sexe", $_POST["search"]["value"]);
	              $this->db->or_like("date_paie", $_POST["search"]["value"]);
	              
	         }  
	         if(isset($_POST["order"]))  
	         {  
	              $this->db->order_by($this->order_column7[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	         }  
	         else  
	         {  
	              $this->db->order_by('idp', 'DESC');  
	         }  
	    }

	   function make_datatables_paiement(){  
	         $this->make_query_paiement();  
	         if($_POST["length"] != -1)  
	         {  
	              $this->db->limit($_POST['length'], $_POST['start']);  
	         }  
	         $query = $this->db->get();  
	         return $query->result();  
	    }

	    function get_filtered_data_paiement(){  
	         $this->make_query_paiement();  
	         $query = $this->db->get();  
	         return $query->num_rows();  
	    }       
	    function get_all_data_paiement()  
	    {  
	         $this->db->select("*");  
	         $this->db->from($this->table7);  
	         return $this->db->count_all_results();  
	    }

	    function insert_paiement($data)  
	    {  
	         $this->db->insert('paiement', $data);  
	    }

	    
	    function update_paiement($idp, $data)  
	    {  
	         $this->db->where("idp", $idp);  
	         $this->db->update("paiement", $data);  
	    }


	    function delete_paiement($idp)  
	    {  
	         $this->db->where("idp", $idp);  
	         $this->db->delete("paiement");  
	    }

	    function fetch_single_paiement($idp)  
	    {  
	         $this->db->where("idp", $idp);  
	         $query=$this->db->get('profile_paiement');  
	         return $query->result();  
	    }
	    // fin script pour information sur le paiement

	     function fetch_single_details_comptabilite_system_mariage($idp)
     	{

	      $this->db->where('idp', $idp);
	      $data = $this->db->get('profile_paiement');

	      $output = '';
	      $nomf;
	      $created_at;
	      $nom;
	      $icone;

	       

	       $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
	       <h3>
	       RECU DE PAIEMENT POUR LA FORMATION
	       <h3>
	       ";

	       $output = '<div align="right">';
	       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
	       $output .= '
	       <tr>
	        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
	        <td width="50%" align="center">
	         <p><b>'.$message.' </b></p>
	         <p><b>Mise à jour : </b>'.date('d/m/y').'</p>

	         <hr>
	         
	        </td>

	        <td width="25%">
	        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
	        </td>


	       </tr>
	       ';
      
	      $output .= '</table>';

	       $output .= '</div>';

	       $output .= '
	          <div class="table-responsive">
	           
	           <br />
	           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
	            <tr>
	             <th width="5%">Image</th>
	             <th width="30%">Nom de l\'apprenant</th>
	             <th width="5%">Sexe</th>

	             <th width="15%">Montant</th>
	             <th width="25%">Designation</th>

	             <th width="20%">Date</th>
	             
	            </tr>

	        ';

	          foreach($data->result_array() as $items)
	          {
	            $image = $items["image"];
	            $idpersonne = $items["idpersonne"];
	            $montantT;
	            $montantRestant;

	            $montant_a_payer = 30;


	      		$data_paie = $this->db->query("SELECT SUM(montant) AS montant FROM paiement WHERE idpersonne=".$idpersonne." ");
	      		if ($data_paie->num_rows() > 0) {
	      			# code...
		      		foreach($data_paie->result_array() as $items2)
		          	{
		          		$montantT	=	 $items2["montant"];
		          	}
	      		}
	      		else{
	      			$montantT = 0;
	      		}

	      		$montantRestant =  $montant_a_payer - $montantT;
	      		$retour = "javascript:history.go(-1);";



	            $nom_complet = $items["first_name"].' '.$items["last_name"];
	             $output .= '
	             <tr>
	              <td width="25%"><img src="'.base_url().'upload/photo/'.$image.'" width="50" height="35"/></td> 
	              <td>'.$nom_complet.'</td>
	              <td>'.$items["sexe"].'</td>
	              <td>'.$items["montant"].'$</td>
	              <td>'.$items["motif"].'</td>

	              <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>


	             </tr>
	             ';

	             $output .= '
	             <tr>
	              <td colspan="5">
	              	<div align="right">Total montant payé</div>
	              </td> 
	              <td >'.$montantT.'$</td>
	              
	             </tr>
	             ';

	             $output .= '
	             <tr>
	              <td colspan="5">
	              	<div align="right">Total Reste à payer</div>
	              </td> 
	              <td >'.$montantRestant.'$</td>
	              
	             </tr>
	             ';
	          }
          	$output .= '
             
    		</table>

    		</div>

    		<hr>
    
   			<div align="right" style="margin-botton:20px;">

      			<a href="'.base_url().'admin/compte" style="text-decoration: none; color: black;">signature:</a>
      
    		</div>
    		<div align="center">
    			<span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span><br>

    			<a href="javascript:history.go(-1);">
    			<img src="'.base_url().'upload/annumation/qrcode.png" width="70" height="50" />
    			</a>

    			
    		</div>
  			';


      
        return $output;
      }


     function fetch_single_details_comptabilite_filtre_paiement($dates1, $dates2)
     {

      
      $data = $this->db->query("SELECT * FROM profile_paiement WHERE date_paie BETWEEN '".$dates1."' AND '".$dates2."' ");
      $montant_total;

      $tot = $this->db->query("SELECT SUM(montant) AS total FROM profile_paiement WHERE date_paie BETWEEN '".$dates1."' AND '".$dates2."'");
      if ($tot->num_rows() > 0) {
        foreach ($tot->result_array() as $key) {
          $montant_total = $key['total'];
        }
      }
      else{
        $montant_total = 0;
      }

      $output = '';
      $nomf;
      $created_at;
      $nom;
      $icone;

       

        $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
	       <h3>
	       RECU DE PAIEMENT POUR LA FORMATION
	       <h3>
	       ";

       $output = '<div align="right">';
       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
       $output .= '
       <tr>
        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
        <td width="50%" align="center">
         <p><b>'.$message.' </b></p>
         <p><b>Mise à jour : </b>'.date('d/m/y').'</p>

         <hr>
         
        </td>

        <td width="25%">
        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
        </td>


       </tr>
       ';
      
      $output .= '</table>';

       $output .= '</div>';

       $output .= '
          <div class="table-responsive">
           
           <br />
           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5" id="user_data" border="0">
            <tr>
             <th width="5%">Image</th>
             <th width="30%">Nom de l\'apprenant</th>
             <th width="5%">Sexe</th>

             <th width="15%">Montant</th>
             <th width="25%">Designation</th>

             <th width="20%">Date</th>
             
            </tr>

        ';

          foreach($data->result_array() as $items)
          {
            $image = $items["image"];

            $nom_complet = $items["first_name"].' '.$items["last_name"];
             $output .= '
             <tr>
              <td width="25%"><img src="'.base_url().'upload/photo/'.$image.'" width="50" height="35"/></td> 
              <td>'.$nom_complet.'</td>
              <td>'.$items["sexe"].'</td>
              <td>'.$items["montant"].'$</td>
              <td>'.$items["motif"].'</td>

              <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

             </tr>
             ';
          }
          $output .= '

            <tr>
              <td colspan="3"><div align="">Montant total de paiement</div></td>
              <td>'.$montant_total.'$</td>
              <td></td>
              <td></td>

            </tr>
             
            </table>

            </div>

            <hr>

            <div align="right" style="margin-botton:20px;">

      			<a href="'.base_url().'admin/compte" style="text-decoration: none; color: black;">signature:</a>
      
    		</div>
    		<div align="center">
    			<span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span><br>

    			<a href="javascript:history.go(-1);">
    			<img src="'.base_url().'upload/annumation/qrcode.png" width="70" height="50" />
    			</a>

    			
    		</div>
          ';


      
        return $output;
      }


     function fetch_single_details_presence_filtre($dates1, $dates2)
     {

      
      $data = $this->db->query("SELECT * FROM profile_presence WHERE jour BETWEEN '".$dates1."' AND '".$dates2."' ");
      $montant_total;

      $nombre_personne_m = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence", $dates1,$dates2,"M");

      $nombre_personne_f = $this->crud_model->statistiques_nombre_m_plus_presence("profile_presence",$dates1,$dates2,"F");

      $tot = $this->db->query("SELECT COUNT(*) AS total,sexe FROM profile_presence WHERE jour BETWEEN '".$dates1."' AND '".$dates2."'");
      if ($tot->num_rows() > 0) {
        foreach ($tot->result_array() as $key) {
          $montant_total = $key['total'];
        }
      }
      else{
        $montant_total = 0;
      }

      $output = '';
      $nomf;
      $created_at;
      $nom;
      $icone;

        $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
	       <h3>
	       LISTE ENTIERE DE PRESENCE DES APPRENANTS
	       <h3>
	       ";

       $output = '<div align="right">';
       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
       $output .= '
       <tr>
        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
        <td width="50%" align="center">
         <p><b>'.$message.' </b></p>
         <p><b>Mise à jour : </b>'.date('d/m/y').'</p>

         <hr>
         
        </td>

        <td width="25%">
        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
        </td>


       </tr>
       ';
      
      $output .= '</table>';

       $output .= '</div>';

       $output .= '
          <div class="table-responsive">
           
           <br />
           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5" id="user_data" border="0">
            <tr>
             <th width="5%">Image</th>
             <th width="30%">Nom de l\'apprenant</th>
             <th width="5%">Sexe</th>

             <th width="30%">Jour</th>

             <th width="30%">Mise à jour</th>
             
            </tr>

        ';

          foreach($data->result_array() as $items)
          {
            $image = $items["image"];

            $nom_complet = $items["first_name"].' '.$items["last_name"];
             $output .= '
             <tr>
              <td width="25%"><img src="'.base_url().'upload/photo/'.$image.'" width="50" height="35"/></td> 
              <td>'.$nom_complet.'</td>
              <td>'.$items["sexe"].'</td>
              <td>'.$items["jour"].'</td>

              <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

             </tr>
             ';
          }
          $output .= '

            <tr>
              <td colspan="4"><div align="">Nombre total des personnes présentes</div></td>
              <td>'.$montant_total.'</td>
              

            </tr>

             <tr>
              <td colspan="4"><div align="">Dont le nombre total des personnes présentes de sexe masculin est:</div></td>
              <td>'.$nombre_personne_m.'</td>
              

            </tr>

            <tr>
              <td colspan="4"><div align="">Dont le nombre total des personnes présentes de sexe fiminin est:</div></td>
              <td>'.$nombre_personne_f.'</td>
              

            </tr>
             
            </table>

            </div>

            <hr>

            <div align="right" style="margin-botton:20px;">

      			<a href="'.base_url().'admin/presence" style="text-decoration: none; color: black;">signature:</a>
      
    		</div>
    		<div align="center">
    			<span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span><br>

    			<a href="javascript:history.go(-1);">
    			<img src="'.base_url().'upload/annumation/qrcode.png" width="70" height="50" />
    			</a>

    			
    		</div>
          ';


      
        return $output;
      }


     function fetch_single_details_formations_filtre($idformation, $idedition)
     {

      
      $data = $this->db->query("SELECT * FROM profile_inscription WHERE idformation=".$idformation." AND idedition=".$idedition." ");
      $montant_total;

      $nombre_personne_m = $this->statistiques_nombre_plus_inscription("profile_inscription", $idformation,$idedition,"M");

      $nombre_personne_f = $this->statistiques_nombre_plus_inscription("profile_inscription",$idformation,$idedition,"F");

      $nom_formation = $this->fetch_nom_formation_by_id($idformation);
      $nom_edition = $this->fetch_nom_edition_by_id($idedition);

      $tot = $this->db->query("SELECT COUNT(*) AS total,sexe FROM profile_inscription WHERE idformation=".$idformation." AND idedition=".$idedition." ");
      if ($tot->num_rows() > 0) {
        foreach ($tot->result_array() as $key) {
          $montant_total = $key['total'];
        }
      }
      else{
        $montant_total = 0;
      }

      $output = '';
      $nomf;
      $created_at;
      $nom;
      $icone;

        $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
         <h3>
         LISTE ENTIERE DES APPRENANTS DE LA FORMATION ".$nom_formation." ".$nom_edition."
         <h3>
         ";

       $output = '<div align="right">';
       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
       $output .= '
       <tr>
        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
        <td width="50%" align="center">
         <p><b>'.$message.' </b></p>
         <p><b>Mise à jour : </b>'.date('d/m/y').'</p>

         <hr>
         
        </td>

        <td width="25%">
        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
        </td>


       </tr>
       ';
      
      $output .= '</table>';

       $output .= '</div>';

       $output .= '
          <div class="table-responsive">
           
           <br />
           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5" id="user_data" border="0">
            <tr>
             <th width="5%">Image</th>
             <th width="30%">Nom de l\'apprenant</th>
             <th width="5%">Sexe</th>

             <th width="30%">Téléphone</th>

             <th width="30%">Inscription Mise à jour</th>
             
            </tr>

        ';

          foreach($data->result_array() as $items)
          {
            $image = $items["image"];

            $nom_complet = $items["first_name"].' '.$items["last_name"];
             $output .= '
             <tr>
              <td width="25%"><img src="'.base_url().'upload/photo/'.$image.'" width="50" height="35"/></td> 
              <td>'.$nom_complet.'</td>
              <td>'.$items["sexe"].'</td>
              <td>'.$items["telephone"].'</td>

              <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

             </tr>
             ';
          }
          $output .= '

            <tr>
              <td colspan="4"><div align="">Nombre total des personnes présentes</div></td>
              <td>'.$montant_total.'</td>
              

            </tr>

             <tr>
              <td colspan="4"><div align="">Dont le nombre total des apprenants de sexe masculin est:</div></td>
              <td>'.$nombre_personne_m.'</td>
              

            </tr>

            <tr>
              <td colspan="4"><div align="">Dont le nombre total des des apprenants de sexe fiminin est:</div></td>
              <td>'.$nombre_personne_f.'</td>
              

            </tr>
             
            </table>

            </div>

            <hr>

            <div align="right" style="margin-botton:20px;">

            <a href="'.base_url().'admin/stat_filtrage_inscription_ap" style="text-decoration: none; color: black;">signature:</a>
      
        </div>
        <div align="center">
          <span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span><br>

          <a href="javascript:history.go(-1);">
          <img src="'.base_url().'upload/annumation/qrcode.png" width="70" height="50" />
          </a>

          
        </div>
          ';


      
        return $output;
      }


      function fetch_single_presence_apprenant($id_user)
     {

      
      $data = $this->db->query("SELECT * FROM profile_presence WHERE id_user=".$id_user." ORDER BY jour DESC");
      $montant_total;

      
      $tot = $this->db->query("SELECT COUNT(*) AS total FROM profile_presence WHERE id_user=".$id_user." ");
      if ($tot->num_rows() > 0) {
        foreach ($tot->result_array() as $key) {
          $montant_total = $key['total'];
        }
      }
      else{
        $montant_total = 0;
      }

      $output = '';
      $nomf;
      $created_at;
      $nom;
      $icone;

        $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
	       <h3>
	       LISTE ENTIERE DE PRESENCE DE L'APPRENANT
	       <h3>
	       ";

       $output = '<div align="right">';
       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
       $output .= '
       <tr>
        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
        <td width="50%" align="center">
         <p><b>'.$message.' </b></p>
         <p><b>Mise à jour : </b>'.date('d/m/y').'</p>

         <hr>
         
        </td>

        <td width="25%">
        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
        </td>


       </tr>
       ';
      
      $output .= '</table>';

       $output .= '</div>';

       $output .= '
          <div class="table-responsive">
           
           <br />
           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5" id="user_data" border="0">
            <tr>
             <th width="5%">Image</th>
             <th width="30%">Nom de l\'apprenant</th>
             <th width="5%">Sexe</th>

             <th width="30%">Jour</th>

             <th width="30%">Mise à jour</th>
             
            </tr>

        ';

          foreach($data->result_array() as $items)
          {
            $image = $items["image"];

            $nom_complet = $items["first_name"].' '.$items["last_name"];
             $output .= '
             <tr>
              <td width="25%"><img src="'.base_url().'upload/photo/'.$image.'" width="50" height="35"/></td> 
              <td>'.$nom_complet.'</td>
              <td>'.$items["sexe"].'</td>
              <td>'.$items["jour"].'</td>

              <td>'.nl2br(substr(date(DATE_RFC822, strtotime($items["created_at"])), 0, 23)).'</td>

             </tr>
             ';
          }
          $output .= '

            <tr>
              <td colspan="4"><div align="">Nombre total des Présences Enregistrées: </div></td>
              <td>'.$montant_total.' fois</td>
              

            </tr>

             
             
            </table>

            </div>

            <hr>

            <div align="right" style="margin-botton:20px;">

      			<a href="'.base_url().'admin/presence" style="text-decoration: none; color: black;">signature:</a>
      
    		</div>
    		<div align="center">
    			<span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span><br>

    			<a href="javascript:history.go(-1);">
    			<img src="'.base_url().'upload/annumation/qrcode.png" width="70" height="50" />
    			</a>

    			
    		</div>
          ';


      
        return $output;
      }




      // impression de la carte 
       function fetch_single_details_pdf_card($id)
     	{

	      $this->db->where('id', $id);
	      $data = $this->db->get('profile_inscription');

	      $output = '';
	      $nomf;
	      $created_at;
	      $nom;
	      $icone;

	       

	       $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
	       <h3>
	       CARTE D'APPRENANT
	       <h3>
	       ";

	       $output = '<div align="right">';
	       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
	       $output .= '
	       <tr>
	        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
	        <td width="50%" align="center">
	         <p><b>'.$message.' </b></p>
	         <hr>
	         
	        </td>

	        <td width="25%">
	        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
	        </td>


	       </tr>
	       ';
      
	      $output .= '</table>';

	       $output .= '</div>';

	       $output .= '
	          <div class="table-responsive">
	           
	           <br />
	           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
	            

	        ';

	          foreach($data->result_array() as $items)
	          {

	          	$image 	= $items["image"];
	            $qrcode = $items["qrcode"];


	            if ($qrcode !='') {
	            	$qrc = '
	            	<img src="'.base_url().'upload/qrcode/'.$qrcode.'" width="150" height="150" />
	            	 ';
	            }
	            else{
	            	$qrc = '
	            	<img src="'.base_url().'upload/qrcode/cool.png" width="150" height="150" alt="qrcode vide" />
	            	 ';
	            }

	      		
	            $nom_complet = $items["first_name"].' '.$items["last_name"];




	             $output .= '

	             <tr>
			        <td width="10%"></td>
			        <td width="60%" align="left">

			        <p>
			        <img src="'.base_url().'upload/photo/'.$image.'" width="150" height="150" style="float:left;padding-right: 20px;"/>

				        <p><b>Nom: </b>'.$items["first_name"].' '.$items["last_name"].'</p>
				         <p><b>Fomation faite: </b>'.$items["nom_formation"].' '.$items["nom_edition"].'</p>
				         <p><b>N° téléphone: </b>'.$items["telephone"].'  <b>Sexe:</b>'.$items["sexe"].'</p>
				         <p><b>Catégorie apprenant: </b>'.$items["nom_categorie"].'</p>

				         <div align="center">
				           <p><b>Adresse e-mail de l\'apprenant:</b><a href="#">  '.$items["email"].'</a></p>
				           <div align="center">
					         	<font color="red">
				    			les autorités tant civiles que militaires et celles de la police 
				    			et celles de la police nationale sont priées d\'apporter leur secours au porteur de la présente en cas de nécessité.
				    			</font>
					        </div>
				         	
				         </div>
				         
				        
			        </p>

			         
			        </td>

			        <td width="15%">
			        '.$qrc.'
			        </td>

			        <td width="15%"></td>


			       </tr>




	             
	             ';

	             
	          }
          	$output .= '
             
    		</table>

    		</div>

    		<hr>

   			<div align="right" style="margin-botton:20px;">

      			<a href="'.base_url().'admin/inscription_apprenant" style="text-decoration: none; color: black;">signature:</a>
      
    		</div>
    		
  			';


      
        return $output;
      }
      // fin impression de la carte apprennant

      // impression d'echeance de tranches
      function fetch_single_details_pdf_tranche()
      {

	      $data = $this->db->get('profile_tranche');

	      $output = '';
	      $nomf;
	      $created_at;
	      $nom;
	      $icone;

	       

	       $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
	       <h3>
	       MODALITE DE PAIEMENT DE FRAIS AUX DIFFERENTES FORMATIONS
	       <h3>
	       ";

	       $output = '<div align="right">';
	       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
	       $output .= '
	       <tr>
	        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
	        <td width="50%" align="center">
	         <p><b>'.$message.' </b></p>
	         <p><b>Mise à jour : </b>'.date('d/m/y').'</p>

	         <hr>
	         
	        </td>

	        <td width="25%">
	        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
	        </td>


	       </tr>
	       ';
      
	      $output .= '</table>';

	       $output .= '</div>';

	       $output .= '
	          <div class="table-responsive">
	           
	           <br />
	           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
	            <tr>
	             <th width="30%">Nom de la tranche</th>
	             <th width="30%">Nom de la formation</th>
	             <th width="20%">Nom de l\'édition</th>
	             <th width="20%">Montant à papyer</th>
	            </tr>

	        ';

	          foreach($data->result_array() as $items)
	          {
	            
	             $output .= '
	             <tr>
	               
	              <td>'.$items["nomt"].'</td>
	              <td>'.$items["nom_formation"].'</td>
	              <td>'.$items["nom_edition"].'</td>
	              <td>'.$items["montant"].'$ (dollards)</td>
	              
	             </tr>
	             ';

	             
	          }
          	$output .= '
             
    		</table>

    		</div>

    		<hr>
    
   			<div align="right" style="margin-botton:20px;">

      			<a href="'.base_url().'admin/tranches" style="text-decoration: none; color: black;">signature:</a>
      
    		</div>
    		<div align="center">
    			<span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span><br>

    			<a href="javascript:history.go(-1);">
    			<img src="'.base_url().'upload/annumation/qrcode.png" width="70" height="50" />
    			</a>

    			
    		</div>
  			';


      
        return $output;

	      
      }
      // fin impression d'echeance de tranches


       // impression pdf reponse  de tranches
      function fetch_single_details_pdf_reponse($idr)
      {
      	  $this->db->where('idr', $idr);
	      $data = $this->db->get('profile_reponse');


	      $nombre_personne_tb   	= $this->statistiques_nombre_reponse_rubrique("très bien",$idr);
          $nombre_personne_b    	= $this->statistiques_nombre_reponse_rubrique("bien", $idr);
          $nombre_personne_mal  	= $this->statistiques_nombre_reponse_rubrique("mal", $idr);
          $nombre_personne_general  = $this->statistiques_reponses_generale_rubrique($idr);

	      $output = '';
	      $nomf;
	      $created_at;
	      $nom;
	      $icone;

	       

	       $message = "REPUBLIQUE DEMOCRATIQUE DU CONGO "."<br>CENTRE DE FORMATION POUR L'APPRENTISSAGE DE NUMERIQUE ET LA TECHNOLOGIE ACTUELLE<br><span style='color: rgb(204, 205, 207);'><font color='yellow'>Dev</font><font color='blue'>tech</font><font color='green'>nology</font></span><br>
	       <h3>
	       LISTE DES REPONSES GENERALES
	       <h3>
	       ";

	       $output = '<div align="right">';
	       $output .= '<table width="100%" cellspacing="5" cellpadding="5" id="user_data">';
	       $output .= '
	       <tr>
	        <td width="25%"><img src="'.base_url().'upload/annumation/logo.png" width="150" height="100"/></td>
	        <td width="50%" align="center">
	         <p><b>'.$message.' </b></p>
	         <p><b>Mise à jour : </b>'.date('d/m/y').'</p>

	         <hr>
	         
	        </td>

	        <td width="25%">
	        <img src="'.base_url().'upload/annumation/logo.png" width="150" height="100" />
	        </td>


	       </tr>
	       ';
      
	      $output .= '</table>';

	       $output .= '</div>';

	       $output .= '
	          <div class="table-responsive">
	           
	           <br />
	           <table class="table table-bordered panier_table" width="100%" cellspacing="5" cellpadding="5"  id="user_data" border="0">
	            <tr>
	             <th width="30%">Question</th>
	             <th width="30%">Reponse</th>
	             <th width="20%">Formation</th>
	             <th width="20%">Edition</th>
	            </tr>

	        ';

	          foreach($data->result_array() as $items)
	          {
	            
	             $output .= '
	             <tr>
	               
	              <td>'.$items["nomq"].'</td>
	              <td>'.$items["valeur"].'</td>
	              <td>'.$items["nom_formation"].'</td>
	              <td>'.$items["nom_edition"].'</td>
	              
	             </tr>
	             ';

	             
	          }

	          $output .= '
	             <tr>
	               
	              <td colspan="3">Nombre total des réponses Très bien répondues</td>
	              <td>'.$nombre_personne_tb.' réponse(s)</td>
	              
	             </tr>
	             ';

	             $output .= '
	             <tr>
	               
	              <td colspan="3">Nombre total des réponses Bien répondues</td>
	              <td>'.$nombre_personne_b.' réponse(s)</td>
	              
	             </tr>
	             ';

	             $output .= '
	             <tr>
	               
	              <td colspan="3">Nombre total des réponses Mal répondues</td>
	              <td>'.$nombre_personne_mal.' réponse(s)</td>
	              
	             </tr>
	             ';

	              $output .= '
	             <tr>
	               
	              <td colspan="3">Nombre total des réponses recceillues</td>
	              <td>'.$nombre_personne_general.' réponse(s)</td>
	              
	             </tr>
	             ';

	             
          	$output .= '
             
    		</table>

    		</div>

    		<hr>
    
   			<div align="right" style="margin-botton:20px;">

      			<a href="'.base_url().'admin/stat_filtrage_reponse_ap" style="text-decoration: none; color: black;">signature:</a>
      
    		</div>
    		<div align="center">
    			<span style="color: rgb(204, 205, 207);"><font color="yellow">Dev</font><font color="blue">tech</font><font color="green">nology</font></span><br>

    			<a href="javascript:history.go(-1);">
    			<img src="'.base_url().'upload/annumation/qrcode.png" width="70" height="50" />
    			</a>

    			
    		</div>
  			';


      
        return $output;

	      
      }
      // fin impression pdf reponse  de tranches


      // script users
       function make_query_users()  
      {  
            
           $this->db->select($this->select_column8);  
           $this->db->from($this->table8);  
           if(isset($_POST["search"]["value"]))  
           {  
                $this->db->like("first_name", $_POST["search"]["value"]);  
                $this->db->or_like("last_name", $_POST["search"]["value"]); 
                $this->db->or_like("full_adresse", $_POST["search"]["value"]); 
                $this->db->or_like("biographie", $_POST["search"]["value"]);  
           }  
           if(isset($_POST["order"]))  
           {  
                $this->db->order_by($this->order_column[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
           }  
           else  
           {  
                $this->db->order_by('id', 'DESC');  
           }  
      }

     function make_datatables_users(){  
           $this->make_query_users();  
           if($_POST["length"] != -1)  
           {  
                $this->db->limit($_POST['length'], $_POST['start']);  
           }  
           $query = $this->db->get();  
           return $query->result();  
      }

      function get_filtered_data_users(){  
           $this->make_query_users();  
           $query = $this->db->get();  
           return $query->num_rows();  
      }       
      function get_all_data_users()  
      {  
           $this->db->select("*");  
           $this->db->from($this->table8);  
           return $this->db->count_all_results();  
      }

      function insert_users($data)  
	  {  
	       $this->db->insert('users', $data);  
	  }

	  
	  function update_users($id, $data)  
	  {  
	       $this->db->where("id", $id);  
	       $this->db->update("users", $data);  
	  }


	  function delete_users($id)  
	  {  
	       $this->db->where("id", $id);  
	       $this->db->delete("users");  
	  }

      function fetch_single_users($id)  
      {  
           $this->db->where("id", $id);  
           $query=$this->db->get('users');  
           return $query->result();  
      }

      //fin de script users

       // script pour presence 
	 function make_query_presence()  
	 {  
	        
	       $this->db->select($this->select_column9);  
	       $this->db->from($this->table9);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idp", $_POST["search"]["value"]);  
	            $this->db->or_like("first_name", $_POST["search"]["value"]);
	            $this->db->or_like("last_name", $_POST["search"]["value"]);
	            $this->db->or_like("telephone", $_POST["search"]["value"]);
	            $this->db->or_like("jour", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column9[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idp', 'DESC');  
	       }  
	  }

	 function make_datatables_presence(){  
	       $this->make_query_presence();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_presence(){  
	       $this->make_query_presence();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_presence()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table9);  
	       return $this->db->count_all_results();  
	  }

	  function insert_presence($data)  
	  {  
	       $this->db->insert('presence', $data);  
	  }

	  
	  function update_presence($idp, $data)  
	  {  
	       $this->db->where("idp", $idp);  
	       $this->db->update("presence", $data);  
	  }


	  function delete_presence($idp)  
	  {  
	       $this->db->where("idp", $idp);  
	       $this->db->delete("presence");  
	  }

	  function fetch_single_presence($idp)  
	  {  
	       $this->db->where("idp", $idp);  
	       $query=$this->db->get('profile_presence');  
	       return $query->result();  
	  } 
	// fin de script presence

	 // script pour tranche aux formations 
	 function make_query_tranche()  
	 {  
	        
	       $this->db->select($this->select_column10);  
	       $this->db->from($this->table10);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idt", $_POST["search"]["value"]);  
	            $this->db->or_like("nomt", $_POST["search"]["value"]);
	            $this->db->or_like("montant", $_POST["search"]["value"]);
	            $this->db->or_like("nom_edition ", $_POST["search"]["value"]);
	            $this->db->or_like("nom_formation", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column10[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idt', 'DESC');  
	       }  
	  }

	 function make_datatables_tranche(){  
	       $this->make_query_tranche();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tranche(){  
	       $this->make_query_tranche();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tranche()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table10);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tranche($data)  
	  {  
	       $this->db->insert('tranche', $data);  
	  }

	  
	  function update_tranche($idt, $data)  
	  {  
	       $this->db->where("idt", $idt);  
	       $this->db->update("tranche", $data);  
	  }


	  function delete_tranche($idt)  
	  {  
	       $this->db->where("idt", $idt);  
	       $this->db->delete("tranche");  
	  }

	  function fetch_single_tranche($idt)  
	  {  
	       $this->db->where("idt", $idt);  
	       $query=$this->db->get('tranche');  
	       return $query->result();  
	  } 
	  // fin de script tranche aux formations

	   // script pour recouvrement aux formations 
	 function make_query_recouvrement()  
	 {  
	        
	       $this->db->select($this->select_column11);  
	       $this->db->from($this->table11);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idr", $_POST["search"]["value"]); 
	            $this->db->like("idt", $_POST["search"]["value"]);  
	            $this->db->or_like("nomt", $_POST["search"]["value"]);
	            $this->db->or_like("montant", $_POST["search"]["value"]);
	            $this->db->or_like("nom_edition ", $_POST["search"]["value"]);
	            $this->db->or_like("nom_formation", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column11[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idr', 'DESC');  
	       }  
	  }

	 function make_datatables_recouvrement(){  
	       $this->make_query_recouvrement();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_recouvrement(){  
	       $this->make_query_recouvrement();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_recouvrement()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table11);  
	       return $this->db->count_all_results();  
	  }

	  function insert_recouvrement($data)  
	  {  
	       $this->db->insert('recouvrement', $data);  
	  }

	  
	  function update_recouvrement($idr, $data)  
	  {  
	       $this->db->where("idr", $idr);  
	       $this->db->update("recouvrement", $data);  
	  }


	  function delete_recouvrement($idr)  
	  {  
	       $this->db->where("idr", $idr);  
	       $this->db->delete("recouvrement");  
	  }

	  function fetch_single_recouvrement($idr)  
	  {  
	       $this->db->where("idr", $idr);  
	       $query=$this->db->get('profile_recouvrement');  
	       return $query->result();  
	  } 
	  // fin de script recouvrement aux formations

	  // script pour derogation aux formations 
	 function make_query_derogation()  
	 {  
	        
	       $this->db->select($this->select_column12);  
	       $this->db->from($this->table12);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idd", $_POST["search"]["value"]);   
	            $this->db->or_like("id_user", $_POST["search"]["value"]);
	            $this->db->or_like("date_debit", $_POST["search"]["value"]);
	            $this->db->or_like("date_fin ", $_POST["search"]["value"]);
	            $this->db->or_like("active", $_POST["search"]["value"]);
	            $this->db->or_like("first_name ", $_POST["search"]["value"]);
	            $this->db->or_like("last_name ", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column12[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idd', 'DESC');  
	       }  
	  }

	 function make_datatables_derogation(){  
	       $this->make_query_derogation();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_derogation(){  
	       $this->make_query_derogation();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_derogation()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table12);  
	       return $this->db->count_all_results();  
	  }

	  function insert_derogation($data)  
	  {  
	       $this->db->insert('derogation', $data);  
	  }

	  
	  function update_derogation($idd, $data)  
	  {  
	       $this->db->where("idd", $idd);  
	       $this->db->update("derogation", $data);  
	  }


	  function delete_derogation($idd)  
	  {  
	       $this->db->where("idd", $idd);  
	       $this->db->delete("derogation");  
	  }

	  function fetch_single_derogation($idd)  
	  {  
	       $this->db->where("idd", $idd);  
	       $query=$this->db->get('derogation');  
	       return $query->result();  
	  } 
	  // fin de script derogation aux formations

	   // script pour rubrique aux formations 
	 function make_query_rubrique()  
	 {  
	        
	       $this->db->select($this->select_column13);  
	       $this->db->from($this->table13);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idr", $_POST["search"]["value"]);  
	            $this->db->or_like("nomr", $_POST["search"]["value"]);
	            $this->db->or_like("token", $_POST["search"]["value"]);
	            $this->db->or_like("nom_edition ", $_POST["search"]["value"]);
	            $this->db->or_like("nom_formation", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column13[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idr', 'DESC');  
	       }  
	  }

	 function make_datatables_rubrique(){  
	       $this->make_query_rubrique();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_rubrique(){  
	       $this->make_query_rubrique();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_rubrique()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table13);  
	       return $this->db->count_all_results();  
	  }

	  function insert_rubrique($data)  
	  {  
	       $this->db->insert('rubrique', $data);  
	  }

	  
	  function update_rubrique($idr, $data)  
	  {  
	       $this->db->where("idr", $idr);  
	       $this->db->update("rubrique", $data);  
	  }


	  function delete_rubrique($idr)  
	  {  
	       $this->db->where("idr", $idr);  
	       $this->db->delete("rubrique");  
	  }

	  function fetch_single_rubrique($idr)  
	  {  
	       $this->db->where("idr", $idr);  
	       $query=$this->db->get('rubrique');  
	       return $query->result();  
	  } 
	  // fin de script rubrique aux formations

	    // script pour question aux formations 
	 function make_query_question()  
	 {  
	        
	       $this->db->select($this->select_column14);  
	       $this->db->from($this->table14);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idr", $_POST["search"]["value"]); 
	            $this->db->or_like("nomq", $_POST["search"]["value"]); 
	            $this->db->or_like("nomr", $_POST["search"]["value"]);
	            $this->db->or_like("token", $_POST["search"]["value"]);
	            $this->db->or_like("nom_edition ", $_POST["search"]["value"]);
	            $this->db->or_like("nom_formation", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column14[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idq', 'DESC');  
	       }  
	  }

	 function make_datatables_question(){  
	       $this->make_query_question();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_question(){  
	       $this->make_query_question();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_question()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table14);  
	       return $this->db->count_all_results();  
	  }

	  function insert_question($data)  
	  {  
	       $this->db->insert('question', $data);  
	  }

	  
	  function update_question($idq, $data)  
	  {  
	       $this->db->where("idq", $idq);  
	       $this->db->update("question", $data);  
	  }


	  function delete_question($idq)  
	  {  
	       $this->db->where("idq", $idq);  
	       $this->db->delete("question");  
	  }

	  function fetch_single_question($idq)  
	  {  
	       $this->db->where("idq", $idq);  
	       $query=$this->db->get('question');  
	       return $query->result();  
	  } 
	  // fin de script question aux formations

	 // script pour reponse aux formations 
	 function make_query_reponse()  
	 {  
	        
	       $this->db->select($this->select_column15);  
	       $this->db->from($this->table15);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idrep", $_POST["search"]["value"]);
	            $this->db->like("valeur", $_POST["search"]["value"]);  
	            $this->db->or_like("nomq", $_POST["search"]["value"]); 
	            $this->db->or_like("nomr", $_POST["search"]["value"]);
	            $this->db->or_like("token", $_POST["search"]["value"]);
	            $this->db->or_like("nom_edition ", $_POST["search"]["value"]);
	            $this->db->or_like("nom_formation", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column15[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idrep', 'DESC');  
	       }  
	  }

	 function make_datatables_reponse(){  
	       $this->make_query_reponse();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_reponse(){  
	       $this->make_query_reponse();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_reponse()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table15);  
	       return $this->db->count_all_results();  
	  }

	  function insert_reponse($data)  
	  {  
	       $this->db->insert('reponse', $data);  
	  }

	  
	  function update_reponse($idrep, $data)  
	  {  
	       $this->db->where("idrep", $idrep);  
	       $this->db->update("reponse", $data);  
	  }


	  function delete_reponse($idrep)  
	  {  
	       $this->db->where("idrep", $idrep);  
	       $this->db->delete("reponse");  
	  }

	  function fetch_single_reponse($idrep)  
	  {  
	       $this->db->where("idrep", $idrep);  
	       $query=$this->db->get('reponse');  
	       return $query->result();  
	  } 

	  function Delete_reponse_tag($idrep)
      {
         $this->db->where("idrep", $idrep);  
	     $this->db->delete("reponse"); 
      }
	  // fin de script reponse aux formations

	  function update_crud($user_id, $data)  
	  {  
	       $this->db->where("id", $user_id);  
	       $this->db->update("users", $data);  
	  }

	  // pagination des utilisateurs connectés
	  function fetch_pagination_ti_followe_count()
	  {
			$query = $this->db->get("users");
			return $query->num_rows();
	  }

	  // pagination des utilisateurs connecters
	  function fetch_details_pagination_to_users_count($limit, $start)
	  {
	  	  $output = '';
	      $this->db->select("*");
	      $this->db->from("users");
	      $this->db->order_by("first_name", "ASC");
	      $this->db->limit($limit, $start);
	      $query = $this->db->get();

	      $id = $this->session->userdata('admin_login');
	      $etat = '';
	      
	      foreach($query->result() as $row)
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
	      
	      return $output;
	  }
	  // fin pagination

	  function delete_notifacation_tag($id){
	  	$this->db->where('id', $id);
        $this->db->delete('notification');
	  }
	  // suppression de messages 
	  function delete_message_tag($idmessage){
	  	$this->db->where('idmessage', $idmessage);
        $this->db->delete('messagerie');
	  }

	  // recherche des utilisateurs par fultres
	function fetch_data_search_online_user_follow($query)
	{
		$this->db->select("*");
		$this->db->from("users");
		$this->db->limit(9);
		if($query != '')
		{
		 $this->db->like('id', $query);
		 $this->db->or_like('first_name', $query);
		 $this->db->or_like('last_name', $query);
		 $this->db->or_like('full_adresse', $query);
		 $this->db->or_like('telephone', $query);

		}
		$this->db->order_by('first_name', 'ASC');
		return $this->db->get();
		}

		 // pagination des utilisateurs connecters
	      function fetch_details_pagination_online_connected($limit, $start){
	          $output = '';
	        $this->db->select("*");
	        $this->db->from("profile_online");
	        $this->db->order_by("first_name", "ASC");
	        $this->db->limit($limit, $start);
	        $query = $this->db->get();

	        $id = $this->session->userdata('admin_login');
	        $etat = '';
	        
	        foreach($query->result() as $row)
	        {

	          if ($row->id_user != $id) {
	              $etat = '<span class="message">
	                <a href="'.base_url().'admin/chat_admin/'.$id.'/'.$row->id_user.'">
	              &nbsp;&nbsp;<i class="fa fa-comments-o"></i> message
	                  </a> 
	                </span>';
	            }
	            else{

	              $etat = '

	              <span class="message">
	                <a href="'.base_url().'admin/detail_users_profile/'.$row->id_user.'" class="text-warning">
	              &nbsp;&nbsp;<i class="fa fa-user"></i> profile
	                  </a> 
	                </span>

	              ';

	              
	            }

	         $output .= '
	         
	        <li class="online">
	                <a href="'.base_url().'admin/detail_users_profile/'.$row->id_user.'">
	                    <div class="media">
	                        <div class="avtar-pic w35 bg-red">
	                          <span>
	                          <img src="'.base_url().'upload/photo/'.$row->image.'" class="img img-responsive img-circle" style="width: 50px; height: 40px; border-radius: 70%;">
	                          <span class="badge badge-success status badge-sm" >en ligne</span>
	                            </span>
	                        </div>
	                        <div class="media-body" style="padding-right: 10px;">
	                            <span class="name text-info">&nbsp;&nbsp;@'.$row->first_name.' '.substr($row->last_name, 0,25).' </span> <br>
	                            '.$etat.'

	                            
	                        </div>
	                    </div>
	                </a>
	            </li>
	            

	         ';
	        }
	        
	        return $output;
    }

    // script pour tinfo_personnel 
	 function make_query_tinfo_personnel()  
	 {  
	        
	       $this->db->select($this->select_column16);  
	       $this->db->from($this->table16);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idtinfo_personnel", $_POST["search"]["value"]);  
	            $this->db->or_like("titre", $_POST["search"]["value"]);
	            $this->db->or_like("icone", $_POST["search"]["value"]);
	            $this->db->or_like("description", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column16[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idtinfo_personnel', 'DESC');  
	       }  
	  }

	 function make_datatables_tinfo_personnel(){  
	       $this->make_query_tinfo_personnel();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tinfo_personnel(){  
	       $this->make_query_tinfo_personnel();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tinfo_personnel()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table16);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tinfo_personnel($data)  
	  {  
	       $this->db->insert('tinfo_personnel', $data);  
	  }

	  
	  function update_tinfo_personnel($idtinfo_personnel, $data)  
	  {  
	       $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
	       $this->db->update("tinfo_personnel", $data);  
	  }


	  function delete_tinfo_personnel($idtinfo_personnel)  
	  {  
	       $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
	       $this->db->delete("tinfo_personnel");  
	  }

	  function fetch_single_tinfo_personnel($idtinfo_personnel)  
	  {  
	       $this->db->where("idtinfo_personnel", $idtinfo_personnel);  
	       $query=$this->db->get('tinfo_personnel');  
	       return $query->result();  
	  } 
	// fin de script tinfo_personnel

	  // script pour tinfo_service 
	 function make_query_tinfo_service()  
	 {  
	        
	       $this->db->select($this->select_column17);  
	       $this->db->from($this->table17);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idtinfo_service", $_POST["search"]["value"]);  
	            $this->db->or_like("titre", $_POST["search"]["value"]);
	            $this->db->or_like("description", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column17[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idtinfo_service', 'DESC');  
	       }  
	  }

	 function make_datatables_tinfo_service(){  
	       $this->make_query_tinfo_service();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tinfo_service(){  
	       $this->make_query_tinfo_service();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tinfo_service()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table17);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tinfo_service($data)  
	  {  
	       $this->db->insert('tinfo_service', $data);  
	  }

	  
	  function update_tinfo_service($idtinfo_service, $data)  
	  {  
	       $this->db->where("idtinfo_service", $idtinfo_service);  
	       $this->db->update("tinfo_service", $data);  
	  }


	  function delete_tinfo_service($idtinfo_service)  
	  {  
	       $this->db->where("idtinfo_service", $idtinfo_service);  
	       $this->db->delete("tinfo_service");  
	  }

	  function fetch_single_tinfo_service($idtinfo_service)  
	  {  
	       $this->db->where("idtinfo_service", $idtinfo_service);  
	       $query=$this->db->get('tinfo_service');  
	       return $query->result();  
	  } 
	// fin de script tinfo_personnel


	  // script pour tinfo_choix 
	 function make_query_tinfo_choix()  
	 {  
	        
	       $this->db->select($this->select_column18);  
	       $this->db->from($this->table18);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idtinfo_choix", $_POST["search"]["value"]);  
	            $this->db->or_like("titre", $_POST["search"]["value"]);
	            $this->db->or_like("icone", $_POST["search"]["value"]);
	            $this->db->or_like("description", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column18[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idtinfo_choix', 'DESC');  
	       }  
	  }

	 function make_datatables_tinfo_choix(){  
	       $this->make_query_tinfo_choix();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tinfo_choix(){  
	       $this->make_query_tinfo_choix();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tinfo_choix()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table18);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tinfo_choix($data)  
	  {  
	       $this->db->insert('tinfo_choix', $data);  
	  }

	  
	  function update_tinfo_choix($idtinfo_choix, $data)  
	  {  
	       $this->db->where("idtinfo_choix", $idtinfo_choix);  
	       $this->db->update("tinfo_choix", $data);  
	  }


	  function delete_tinfo_choix($idtinfo_choix)  
	  {  
	       $this->db->where("idtinfo_choix", $idtinfo_choix);  
	       $this->db->delete("tinfo_choix");  
	  }

	  function fetch_single_tinfo_choix($idtinfo_choix)  
	  {  
	       $this->db->where("idtinfo_choix", $idtinfo_choix);  
	       $query=$this->db->get('tinfo_choix');  
	       return $query->result();  
	  } 
	// fin de script tinfo_choix

	  // script pour tinfo_techno 
	 function make_query_tinfo_techno()  
	 {  
	        
	       $this->db->select($this->select_column19);  
	       $this->db->from($this->table19);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idtinfo_techno", $_POST["search"]["value"]);  
	            $this->db->or_like("titre", $_POST["search"]["value"]);
	            $this->db->or_like("icone", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column19[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idtinfo_techno', 'DESC');  
	       }  
	  }

	 function make_datatables_tinfo_techno(){  
	       $this->make_query_tinfo_techno();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tinfo_techno(){  
	       $this->make_query_tinfo_techno();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tinfo_techno()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table19);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tinfo_techno($data)  
	  {  
	       $this->db->insert('tinfo_techno', $data);  
	  }

	  
	  function update_tinfo_techno($idtinfo_techno, $data)  
	  {  
	       $this->db->where("idtinfo_techno", $idtinfo_techno);  
	       $this->db->update("tinfo_techno", $data);  
	  }


	  function delete_tinfo_techno($idtinfo_techno)  
	  {  
	       $this->db->where("idtinfo_techno", $idtinfo_techno);  
	       $this->db->delete("tinfo_techno");  
	  }

	  function fetch_single_tinfo_techno($idtinfo_techno)  
	  {  
	       $this->db->where("idtinfo_techno", $idtinfo_techno);  
	       $query=$this->db->get('tinfo_techno');  
	       return $query->result();  
	  } 
	// fin de script tinfo_techno

	   // script pour tinfo_user 
	 function make_query_tinfo_user()  
	 {  
	        
	       $this->db->select($this->select_column20);  
	       $this->db->from($this->table20);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idtinfo_user", $_POST["search"]["value"]);  
	            $this->db->or_like("poste", $_POST["search"]["value"]);
	            $this->db->or_like("first_name", $_POST["search"]["value"]);
	            $this->db->or_like("last_name", $_POST["search"]["value"]);
	            $this->db->or_like("email", $_POST["search"]["value"]);
	            $this->db->or_like("sexe", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column20[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idtinfo_user', 'DESC');  
	       }  
	  }

	 function make_datatables_tinfo_user(){  
	       $this->make_query_tinfo_user();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tinfo_user(){  
	       $this->make_query_tinfo_user();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tinfo_user()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table20);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tinfo_user($data)  
	  {  
	       $this->db->insert('tinfo_user', $data);  
	  }

	  
	  function update_tinfo_user($idtinfo_user, $data)  
	  {  
	       $this->db->where("idtinfo_user", $idtinfo_user);  
	       $this->db->update("tinfo_user", $data);  
	  }


	  function delete_tinfo_user($idtinfo_user)  
	  {  
	       $this->db->where("idtinfo_user", $idtinfo_user);  
	       $this->db->delete("tinfo_user");  
	  }

	  function fetch_single_tinfo_user($idtinfo_user)  
	  {  
	       $this->db->where("idtinfo_user", $idtinfo_user);  
	       $query=$this->db->get('tinfo_user');  
	       return $query->result();  
	  } 
	// fin de script tinfo_user

	  // script pour nos video 
	  function make_query_video()  
	  {  
	      
	     $this->db->select($this->select_column21);  
	     $this->db->from($this->table21);
	     
	     if(isset($_POST["search"]["value"]))  
	     {  
	          $this->db->like("idv", $_POST["search"]["value"]);  
	          $this->db->or_like("nom", $_POST["search"]["value"]);
	          $this->db->or_like("description", $_POST["search"]["value"]);
	          $this->db->or_like("lien", $_POST["search"]["value"]);
	     }  
	     if(isset($_POST["order"]))  
	     {  
	          $this->db->order_by($this->order_column21[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	     }  
	     else  
	     {  
	          $this->db->order_by('idv', 'DESC');  
	     }  
	  }

	   function make_datatables_video(){  
	         $this->make_query_video();  
	         if($_POST["length"] != -1)  
	         {  
	              $this->db->limit($_POST['length'], $_POST['start']);  
	         }  
	         $query = $this->db->get();  
	         return $query->result();  
	    }

	    function get_filtered_data_video(){  
	         $this->make_query_video();  
	         $query = $this->db->get();  
	         return $query->num_rows();  
	    }       
	    function get_all_data_video()  
	    {  
	         $this->db->select("*");  
	         $this->db->from($this->table21);  
	         return $this->db->count_all_results();  
	    }

	    function insert_video($data)  
	    {  
	         $this->db->insert('video', $data);  
	    }

	    
	    function update_video($idv, $data)  
	    {  
	         $this->db->where("idv", $idv);  
	         $this->db->update("video", $data);  
	    }


	    function delete_video($idv)  
	    {  
	         $this->db->where("idv", $idv);  
	         $this->db->delete("video");  
	    }

	    function fetch_single_video($idv)  
	    {  
	         $this->db->where("idv", $idv);  
	         $query=$this->db->get('video');  
	         return $query->result();  
	    } 
	  ///fin de la video information

	// information de contact 
    // pagination contact
    function fetch_pagination_message_auditeur(){
      $this->db->order_by("id", "DESC");
      $query = $this->db->get("contact");
      return $query->num_rows();
    }

    // pagination contact
    function fetch_pagination_galery(){
      $this->db->order_by("idg", "DESC");
      $query = $this->db->get("galery");
      return $query->num_rows();
    }

    // pagination picture
    function fetch_pagination_picture(){
      $this->db->order_by("idd", "DESC");
      $query = $this->db->get("detail_projet");
      return $query->num_rows();
    }

    // pagination message utulisateur
      function fetch_details_pagination_contact_message_auditeur($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("contact");
        // $this->db->order_by("nom", "ASC");
        $this->db->order_by("id", "DESC");

        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
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
        
        return $output;
      }
      // fin pagination

      // pagination galery utilisateur
      function fetch_details_pagination_galery($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("galery");
        // $this->db->order_by("nom", "ASC");
        $this->db->order_by("idg", "DESC");

        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
        {
          
         $output .= '

        <div class="col-md-3" align="center" style="margin-bottom:24px;">
	      <img src="'.base_url().'upload/galery/'.$row->image.'" class="img-thumbnail img-responsive" style="height: 200px;" />
	      	<br />
			<input type="checkbox" name="images[]" idg="'.$row->idg.'" class="select checkbox_id image_galery" value="upload/galery/'.$row->image.'" /> &nbsp;
			<a href="javascript:void(0);" class="text-danger supprimer" idg="'.$row->idg.'">
				<i class="fa fa-trash"></i> supprimer
			</a>
	     </div>
         ';
        }
        
        return $output;
      }
      // fin pagination

      // pagination picture des projet
      function fetch_details_pagination_picture($limit, $start){
          $output = '';
        $this->db->select("*");
        $this->db->from("detail_projet");
        // $this->db->order_by("nom", "ASC");
        $this->db->order_by("idd", "DESC");

        $this->db->limit($limit, $start);
        $query = $this->db->get();
        
        foreach($query->result() as $row)
        {
          
         $output .= '

        <div class="col-md-3" align="center" style="margin-bottom:24px;">
	      <img src="'.base_url().'upload/projet/'.$row->image.'" class="img-thumbnail img-responsive" style="height: 200px;" />
	      	<br />
			<input type="checkbox" name="images[]" idd="'.$row->idd.'" class="select checkbox_id image_galery" value="upload/projet/'.$row->image.'" /> &nbsp;
			<a href="javascript:void(0);" class="text-danger supprimer" idd="'.$row->idd.'">
				<i class="fa fa-trash"></i> supprimer
			</a>
	     </div>
         ';
        }
        
        return $output;
      }
      // fin pagination

      // recherche des contacts
     function fetch_data_search_contactAuditeur_to_lean($query)
     {
      $this->db->select("*");
      $this->db->from("contact");
      $this->db->limit(9);
      if($query != '')
      {
       $this->db->like('id', $query);
       $this->db->or_like('nom', $query);
       $this->db->or_like('created_at', $query);

      }
      $this->db->order_by('nom', 'ASC');
      return $this->db->get();
     }

    function fetch_single_contact_information($id)  
    {  
         $this->db->where("id", $id);  
         $query=$this->db->get('contact');  
         return $query->result();  
    }

    function delete_information_contact_send($email)  
    {  
         $this->db->where("email", $email);  
         $this->db->delete("contact");  
    }

    // fin operation script contact

     // script pour les projets du landing tinfo_projet 
	 function make_query_tinfo_projet()  
	 {  
	        
	       $this->db->select($this->select_column22);  
	       $this->db->from($this->table22);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idtinfo_projet", $_POST["search"]["value"]);  
	            $this->db->or_like("titre", $_POST["search"]["value"]);
	            $this->db->or_like("description", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column22[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idtinfo_projet', 'DESC');  
	       }  
	  }

	 function make_datatables_tinfo_projet(){  
	       $this->make_query_tinfo_projet();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tinfo_projet(){  
	       $this->make_query_tinfo_projet();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tinfo_projet()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table22);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tinfo_projet($data)  
	  {  
	       $this->db->insert('tinfo_projet', $data);  
	  }

	  
	  function update_tinfo_projet($idtinfo_projet, $data)  
	  {  
	       $this->db->where("idtinfo_projet", $idtinfo_projet);  
	       $this->db->update("tinfo_projet", $data);  
	  }


	  function delete_tinfo_projet($idtinfo_projet)  
	  {  
	       $this->db->where("idtinfo_projet", $idtinfo_projet);  
	       $this->db->delete("tinfo_projet");  
	  }

	  function fetch_single_tinfo_projet($idtinfo_projet)  
	  {  
	       $this->db->where("idtinfo_projet", $idtinfo_projet);  
	       $query=$this->db->get('tinfo_projet');  
	       return $query->result();  
	  } 
	// fin de script tinfo_projet

	  // script pour les projets du landing tinfo_projet_mini 
	 function make_query_tinfo_projet_mini()  
	 {  
	        
	       $this->db->select($this->select_column23);  
	       $this->db->from($this->table23);  
	       if(isset($_POST["search"]["value"]))  
	       {  
	            $this->db->like("idtinfo_projet_mini", $_POST["search"]["value"]);  
	            $this->db->or_like("titre", $_POST["search"]["value"]);
	            $this->db->or_like("montant", $_POST["search"]["value"]);
	            $this->db->or_like("description", $_POST["search"]["value"]);
	       }  
	       if(isset($_POST["order"]))  
	       {  
	            $this->db->order_by($this->order_column23[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);  
	       }  
	       else  
	       {  
	            $this->db->order_by('idtinfo_projet_mini', 'DESC');  
	       }  
	  }

	 function make_datatables_tinfo_projet_mini(){  
	       $this->make_query_tinfo_projet_mini();  
	       if($_POST["length"] != -1)  
	       {  
	            $this->db->limit($_POST['length'], $_POST['start']);  
	       }  
	       $query = $this->db->get();  
	       return $query->result();  
	  }

	  function get_filtered_data_tinfo_projet_mini(){  
	       $this->make_query_tinfo_projet_mini();  
	       $query = $this->db->get();  
	       return $query->num_rows();  
	  }       
	  function get_all_data_tinfo_projet_mini()  
	  {  
	       $this->db->select("*");  
	       $this->db->from($this->table23);  
	       return $this->db->count_all_results();  
	  }

	  function insert_tinfo_projet_mini($data)  
	  {  
	       $this->db->insert('tinfo_projet_mini', $data);  
	  }

	  function insert_detail_galery_ok($data)  
	  {  
	       $this->db->insert('detail_projet', $data);  
	  }


	  
	  function update_tinfo_projet_mini($idtinfo_projet_mini, $data)  
	  {  
	       $this->db->where("idtinfo_projet_mini", $idtinfo_projet_mini);  
	       $this->db->update("tinfo_projet_mini", $data);  
	  }


	  function delete_tinfo_projet_mini($idtinfo_projet_mini)  
	  {  
	       $this->db->where("idtinfo_projet_mini", $idtinfo_projet_mini);  
	       $this->db->delete("tinfo_projet_mini");  
	  }

	  function fetch_single_tinfo_projet_mini($idtinfo_projet_mini)  
	  {  
	       $this->db->where("idtinfo_projet_mini", $idtinfo_projet_mini);  
	       $query=$this->db->get('tinfo_projet_mini');  
	       return $query->result();  
	  } 
	  // fin de script tinfo_projet_mini

	  /*
	  script pour la partie front-end
	  et la visualisation des elements
	  du cote visiteur
	  ========================================
	  ========================================
	  *****************************************
	  ===========================================

	  */

	function Select_contact_info_site()
    {
      	return $this->db->query('SELECT * FROM tbl_info  LIMIT 1');
    }
    //famille
    function Select_contact_membre()
    {
      	return $this->db->query('SELECT * FROM tinfo_user  LIMIT 6');
    }

    //projets
    function Select_contact_projets_cool()
    {
      	return $this->db->query('SELECT * FROM tinfo_projet ORDER BY titre ASC  LIMIT 10');
    }

    //projets
    function Select_contact_projets_detail($idtinfo_projet)
    {
    	$this->db->limit(1);
    	return $this->db->get_where("tinfo_projet", array(
    		'idtinfo_projet'	=>	$idtinfo_projet
    	));
      	
    }

    //service technlogique
    function Select_contact_service_techno()
    {
      	return $this->db->query('SELECT * FROM tinfo_techno  LIMIT 10');
    }

    //votre choix
    function Select_contact_tinfo_choix()
    {
      	return $this->db->query('SELECT * FROM tinfo_choix  LIMIT 10');
    }

    //minis projets
    function Select_contact_tinfo_projet_mini()
    {
      	return $this->db->query('SELECT * FROM tinfo_projet_mini ORDER BY created_at DESC  LIMIT 6');
    }

    // service
    function Select_contact_service()
    {
      	return $this->db->query('SELECT * FROM tinfo_service ORDER BY titre ASC  LIMIT 6');
    }

    // debit script services 
   function fetch_pagination_services()
   {
      $query = $this->db->query("SELECT * FROM tinfo_service");
      return $query->num_rows();
   }

    // debit script projets 
   function fetch_pagination_project()
   {
      $query = $this->db->query("SELECT * FROM tinfo_projet");
      return $query->num_rows();
   }

    // debit script galery 
   function fetch_pagination_galeries()
   {
      $query = $this->db->query("SELECT * FROM galery");
      return $query->num_rows();
   }

    // debit script video 
   function fetch_pagination_videos()
   {
      $query = $this->db->query("SELECT * FROM video");
      return $query->num_rows();
   }

   // detail de script services
   function fetch_details_pagination_offres($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("tinfo_service");
    $this->db->order_by("titre", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';

    foreach($query->result() as $key)
    {

      
     $output .= '

        <div class="col-md-6 mb-2">

        	<div class="card card-bordered">
                <div class="card-inner card-inner-lg">
                    <div class="align-center flex-wrap flex-md-nowrap g-4">
                        <div class="nk-block-image w-120px flex-shrink-0">

                           <img src="'.base_url().'upload/service/'.$key->image.'" class="img img-fluid">
                           
                        </div>
                        <div class="nk-block-content">
                            <div class="nk-block-content-head px-lg-4" style="height: 260px;">
                            	<h5>'.$key->titre.'</h5>
                                <p class="text-soft"> '.$key->description.'</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           
        </div>
      
     ';
    }
    
    return $output;
   }

   // fin script appel des services

   // detail de script services de la page
   function fetch_pagination_services_page($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("tinfo_service");
    $this->db->order_by("titre", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';

    foreach($query->result() as $key)
    {

      
     $output .= '

        <div class="col-md-12 mb-2">

        	<div class="card card-bordered">
                <div class="card-inner card-inner-lg">
                    <div class="align-center flex-wrap flex-md-nowrap g-4">
                        <div class="nk-block-image w-120px flex-shrink-0">

                           <img src="'.base_url().'upload/service/'.$key->image.'" class="img img-fluid">
                           
                        </div>
                        <div class="nk-block-content">
                            <div class="nk-block-content-head px-lg-4">
                            	<h5>'.$key->titre.'</h5>
                                <p class="text-soft"> '.$key->description.'</p>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
           
        </div>
      
     ';
    }
    
    return $output;
   }

   // recherche de projets
   function fetch_data_search_projects($query)
   {
    $this->db->select("*");
    $this->db->from("tinfo_projet");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('titre', $query);
     $this->db->or_like('description', $query);

    }
    $this->db->order_by('titre', 'ASC');
    return $this->db->get();
   }

   // recherche de videos
   function fetch_data_search_videos($query)
   {
    $this->db->select("*");
    $this->db->from("video");
    $this->db->limit(8);
    if($query != '')
    {
     $this->db->like('nom', $query);
     $this->db->or_like('description', $query);

    }
    $this->db->order_by('nom', 'ASC');
    return $this->db->get();
   }

   // detail de script projets de la page
   function fetch_pagination_projects_page($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("tinfo_projet");
    $this->db->order_by("titre", "ASC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';

    foreach($query->result() as $key)
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
    
    return $output;
   }
   // fin script projet de la page

   // detail de script galery de la page
   function fetch_pagination_galery_page($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("galery");
    $this->db->order_by("created_at", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';

    foreach($query->result() as $key)
    {

    	
     $output .= '
     <div class="col-md-6 mb-2">
        <a download="'.base_url().'upload/galery/'.$key->image.'" href="'.base_url().'upload/galery/'.$key->image.'">
            <img src="'.base_url().'upload/galery/'.$key->image.'" alt="" style="height: 190px; width: 100%;">
            <em class="icon ni ni-download"></em>

        </a>
    </div>

     ';

    }
    
    return $output;
   }
   // fin script galery de la page

   // detail de script videos de la page
   function fetch_pagination_videos_page($limit, $start)
   {
    $output = '';
    $this->db->select("*");
    $this->db->from("video");
    $this->db->order_by("created_at", "DESC");
    $this->db->limit($limit, $start);
    $query = $this->db->get();

    $today = date('Y-m-d');
    $status = '';


    foreach($query->result() as $key)
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
    
    return $output;
   }
   // fin script videos de la page


	 





























      // sauvegarde des donnees 
    function create_backup() 
    {
        $this->load->dbutil();
        $options = array(
            'format' => 'txt', 
            'add_drop' => TRUE,
            'add_insert' => TRUE,
            'newline' => "\n"
        );
        $tables = array('');
        $file_name = 'system_backup';
        $backup = & $this->dbutil->backup(array_merge($options, $tables));
        $this->load->helper('download');
        force_download($file_name . '.sql', $backup);
    }

    function import_db()
    {
        $this->load->database();
        // $this->db->truncate('users');
        // $this->db->truncate('categorie_aprenant');
        // $this->db->truncate('derogation');
        // $this->db->truncate('edition');
        // $this->db->truncate('formation');
        // $this->db->truncate('inscription_formation');
        // $this->db->truncate('messagerie');
        // $this->db->truncate('notification');
        // $this->db->truncate('online');
        // $this->db->truncate('paiement');
        // $this->db->truncate('presence');
        // $this->db->truncate('question');
        // $this->db->truncate('recouvrement');
        // $this->db->truncate('recupere');
        // $this->db->truncate('reponse');
        // $this->db->truncate('role');
        // $this->db->truncate('rubrique');
        // $this->db->truncate('tbl_info');
        // $this->db->truncate('tranche');
        

        $file_n = $_FILES["file_name"]["name"];
        move_uploaded_file($_FILES["file_name"]["tmp_name"], "upload/" . $_FILES["file_name"]["name"]);
        $filename = "upload/".$file_n;
        $mysql_host = 'localhost';
        $mysql_username = 'root';
        $mysql_password = '';
        $mysql_database = 'devtech';
        mysql_connect($mysql_host, $mysql_username, $mysql_password) or die('Error connect to MySQL: ' . mysql_error());
        mysql_select_db($mysql_database) or die('Error to connect MySQL: ' . mysql_error());
        $templine = '';
        $lines = file($filename);
        foreach ($lines as $line)
        {
                if (substr($line, 0, 2) == '--' || $line == '')
                {
                    continue;
                }
                $templine .= $line;
                if (substr(trim($line), -1, 1) == ';')
                {
                    mysql_query($templine) or print('Error \'<strong>' . $templine . '\': ' . mysql_error() . '<br /><br />');
                    $templine = '';
                if (mysql_errno() == 1062) 
                {
                print 'no way!';
                }
            }
        }
        unlink("upload/" . $file_n);

    }

	function can_login($email, $password_ok)
	{
	  $this->db->where('email', $email);
	  $query = $this->db->get('users');
	  if($query->num_rows() > 0)
	  {
	   foreach($query->result() as $row)
	   {
	      if($row->idrole == '1')
	      {

	         $password = md5($password_ok);
	         $store_password = $row->passwords;
	         if($password == $store_password)
	         {
	          $this->session->set_userdata('admin_login', $row->id);
	         }
	         else
	         {
	          return 'mot de passe incorrect';
	         }

	      }
	      elseif($row->idrole == '2')
	      {
	         $password = md5($password_ok);
	         $store_password = $row->passwords;
	         if($password == $store_password)
	         {
	          $this->session->set_userdata('id', $row->id);
	         }
	         else
	         {
	          return 'mot de passe incorrect';
	         }

	      }
	      elseif($row->idrole == '3')
	      {
	         $password = md5($password_ok);
	         $store_password = $row->passwords;
	         if($password == $store_password)
	         {
	          $this->session->set_userdata('instuctor_login', $row->id);
	         }
	         else
	         {
	          return 'mot de passe incorrect';
	         }

	        }
	      else
	      {
	       return 'les informations incorrectes';
	      }
	      
	   }

	  }
	  else
	  {
	   return 'adresse email incorrecte';
	  }
	  
	}


	function can_recuperation($email)
	{
	    $this->db->where('email', $email);
	    $query = $this->db->get('users');
	    if($query->num_rows() > 0)
	    {
	        foreach($query->result() as $row)
	        {
	           
	        }
	    }
	    else
	    {
	    return 'Adresse email non trouvée!!!!';
	    }
	}














	

}


 ?>