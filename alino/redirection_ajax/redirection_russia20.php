<?php 
	if((!empty($_POST['name_client'])) || (!empty($_POST['phone_client'])) || (!empty($_POST['prodoct'])) ){
		$name_client = $_POST['name_client'];
		$phone_client = $_POST['phone_client'];
		$prodoct = $_POST['prodoct'];
		$city ="ПО ВСЕЙ РОССИИ for russia20";
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
	if((!empty($_POST['name_clientr'])) || (!empty($_POST['phone_clientr']))){
		$name_client = $_POST['name_clientr'];
		$phone_client = $_POST['phone_clientr'];
		$city ="ПО ВСЕЙ РОССИИ for russia20";
		$code="20%";
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