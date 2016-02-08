<?php 
include('session_start.php');
 ?>


<?php 

	define('DB_HOST', 'mysql.hostinger.ru');
	define('DB_NAME', 'u650585835_elki');
	define('DB_URSER', 'u650585835_elki');
	define('DB_PASSWORD', 'boulot2016');
	

	try{
		$db = new PDO(
			"mysql:host=".DB_HOST.
			";dbname=".DB_NAME.
			";charset=utf8",
			DB_URSER,
			DB_PASSWORD
			);
		//$db->setAttribute(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); //mode par defaut qui affiche  les erreurs
	}catch(PDOException $e){
		die("
			-> Impossible de se connecter a la base de donnee <br/>
		 -> Verifier si votre base de donnee a ete bien cree; ou <br/> 
		 -> Verifier si elle ete bien ercrite dans : databases/connect_db.php");
	}

 ?>