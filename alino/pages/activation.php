<?php 
if(!empty($_GET['id_clent']) && !empty($_GET['u']) && !empty($_GET['e']) && !empty($_GET['ssl'])){
	//Connexion à la base de données et assainissement des variables
	require "databases/connect_db.php";
	global $db;
	extract($_GET);
	$id_clent = preg_replace('#[^0-9]#i', '', $id_clent); 
	$prenom = preg_replace('#[^a-z0-9]#i', '', $u);

	//Evaluation de la longueur des variables $_GET
	if(empty($id_clent) || strlen($prenom) < 3 || strlen($e) < 5 || strlen($ssl) < 5){
		header("Location: index.php?page=info?msg=activation_length");
		exit();
	}//&amp;
	
	//On vérifie la concordance avec la base de données
	$q = $db->prepare('SELECT id_client FROM clients WHERE id_client = :id_clent AND prenoms = :prenom AND email = :email AND passe = :password LIMIT 1');
	$q->execute(array(
			'id_clent' => $id_clent,
			'prenom' => $prenom,
			'email' => $e,
			'password' => $ssl
		));	
	$numRows = $q->rowCount();
	if($numRows == 0){
		header("Location: index.php?page=info&msg=fake_parameters");
		exit();
	}
	
	//Tout est bon, on active le compte
	$q = $db->prepare("UPDATE clients SET statut = 'active' WHERE id_client = ?");
	$q->execute(array($id_clent));

	//Double vérification
	$q = $db->prepare("SELECT * FROM clients WHERE statut = 'active' AND id_client = ?");
	$q->execute(array($id_clent));
	$numRows = $q->rowCount();
	
	if($numRows == 0){
		header("Location: index.php?page=info&msg=activation_error");
		exit();
	} else {
		header("Location: index.php?page=info&msg=activation_success");
		exit();
	}
	

} else {
	
	header("Location: index.php?page=info&msg=get_vars_missing");
}
?> 
