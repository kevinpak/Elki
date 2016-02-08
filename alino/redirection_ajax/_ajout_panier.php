<?php 
//Vérification de l'email
if(!empty($_POST['id_prodoct'])){
	$id_prodocte = $_POST['id_prodoct'];
	
	//Vérifier l'adresse mail
	if($id_prodocte){  
		$idpt = $id_prodocte;
		$_SESSION['elki'][$idpt]=1;
		echo 'success';
		exit();

	} else {
		echo '<br/>Неверный адрес электронной почты!';
		exit();
	}
}

?>