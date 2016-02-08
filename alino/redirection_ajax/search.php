<?php 
if(!empty($_POST['mot_clee'])){
	$mot_clee = $_POST['mot_clee'];
	
	if ($mot_clee) {
	//Connexion à la base de données
	require "../databases/connect_db.php";
	global $db;
	$q = $db->prepare('SELECT * FROM elki WHERE nom LIKE ?');
	$q->execute(array('%'.$mot_clee.'%'));
	$numRows = $q->rowCount();

	$q_b = $db->prepare('SELECT * FROM ballons WHERE nom LIKE ?');
	$q_b->execute(array('%'.$mot_clee.'%'));
	$numRows_b = $q_b->rowCount();

	$q_j = $db->prepare('SELECT * FROM jeux WHERE nom LIKE ?');
	$q_j->execute(array('%'.$mot_clee.'%'));
	$numRows_j = $q_j->rowCount();

	$q_g = $db->prepare('SELECT * FROM guirlande WHERE nom LIKE ?');
	$q_g->execute(array('%'.$mot_clee.'%'));
	$numRows_g = $q_g->rowCount();

	if ($numRows_g > 0) {
			while ($resultat_g= $q_g->fetch(PDO::FETCH_OBJ)) {
				echo "<a href=\"index.php?page=dev_prod_guirlande&&id_el=".$resultat_g->id_guirland."\"><div class=\"result\">
				<div class=\"result-img\"><img src=\"../images/".$resultat_g->imgs."\"></div>
				<div class=\"result-content\"><p>Назвоние:".$resultat_g->nom."</p><p>Цена:".$resultat_g->prix_fa." руб</p></div></div></a>";
			}
		exit();
		}else

	if ($numRows_j > 0) {
			while ($resultat_j = $q_j->fetch(PDO::FETCH_OBJ)) {
				echo "<a href=\"index.php?page=dev_prod_jeux&&id_el=".$resultat_j->id_jeux."\"><div class=\"result\">
				<div class=\"result-img\"><img src=\"../images/".$resultat_j->imgs."\"></div>
				<div class=\"result-content\"><p>Назвоние:".$resultat_j->nom."</p><p>Цена:".$resultat_j->prix_fa." руб</p></div></div></a>";
			}
		exit();
		}else

	if ($numRows_b > 0) {
			while ($resultat_b = $q_b->fetch(PDO::FETCH_OBJ)) {
				echo "<a href=\"index.php?page=dev_prod_ballon&&id_ballon=".$resultat_b->id_ballon."\"><div class=\"result\">
				<div class=\"result-img\"><img src=\"../images/".$resultat_b->image."\"></div>
				<div class=\"result-content\"><p>Назвоние:".$resultat_b->nom."</p><p>Цена:".$resultat_b->prix." руб</p></div></div></a>";
			}
		exit();
		}else
		
		if ($numRows > 0) {
			while ($resultat = $q->fetch(PDO::FETCH_OBJ)) {
				echo "<a href=\"index.php?page=dev_prod_sapin&&id_el=".$resultat->id_eldki."\"><div class=\"result\">
				<div class=\"result-img\"><img src=\"../images/".$resultat->imgs."\"></div>
				<div class=\"result-content\"><p>Назвоние:".$resultat->nom."</p><p>Цена:".$resultat->prix_fa." руб</p></div></div></a>";
			}
			
		exit();

		}else{
			echo "Не существует товара ";
		exit();
		}

		

	}else{
		echo "mot clee invalide!";
	}

}

?>