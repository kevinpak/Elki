<?php 
	if((!empty($_POST['name_client'])) || (!empty($_POST['phone_client'])) || (!empty($_POST['prodoct'])) ){
		$name_client = $_POST['name_client'];
		$phone_client = $_POST['phone_client'];
		$prodoct = $_POST['prodoct'];
		$city ="Москва for msk60";
		if($name_client){  
		include"../sms/sms_commande.php";
			echo "success";
			exit();
		} else {
			echo 'error';
			exit();
		}
	}
 ?>

 <?php 
//Vérification de l'email
	if((!empty($_POST['name_clientr'])) || (!empty($_POST['phone_clientr']))){
		$name_client = $_POST['name_clientr'];
		$phone_client = $_POST['phone_clientr'];
		$code="60%";
		$city ="Москва for msk60";
		if($name_client){  
		include"../sms/sms_reduction.php";
			echo "success";
			exit();
		} else {
			echo 'error';
			exit();
		}
	}
 ?>



