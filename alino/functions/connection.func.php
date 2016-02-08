<?php 
//connection_admin
if(isset($_POST['connectadmin'])){
	if(!empty($_POST['user_admin'] )){
		if(!empty($_POST['passe_admin'])){
			extract($_POST);
			Global $db;
			$query = $db->query("SELECT pseaudo,passe FROM admin WhERE pseaudo= '$user_admin' AND  passe= '$passe_admin' ");
			$resultat = $query->rowCount();
			if($resultat){
				$_SESSION['admin'] = $_POST['user_admin'];
				//si register2 alor continuer si non redirection register 2
				header("Location:index.php?page=panel_admin");
				
			}else{ echo"<div class=\"erreur_conect\">Неправильно набран Логин</div>";}
		}
	}else{ echo"<div class=\"erreur_conect\">Неправильно набран пароль</div>";}					
}


//connection_client
if(isset($_POST['connectclient'])){
	if(!empty($_POST['email_client'] )){
		if(!empty($_POST['passe_client'])){
			extract($_POST);
			Global $db;
			$passe_clt =sha1($passe_client);
			$query = $db->query("SELECT email,passe,telephone FROM clients WhERE email= '$email_client' AND  passe= '$passe_clt' ");
			$resultat = $query->rowCount();
			if($resultat){
				$_SESSION['email'] = $_POST['email_client'];
				header("Location:index.php?page=membre");
			}
		}else{ echo"<div class=\"erreur_conect\">Не набран пароль</div>";}
	}else{ echo"<div class=\"erreur_conect\">Не набран E-mail</div>";}					
}


//update profil
if(isset($_POST['register2'])){
	extract($_POST);
	Global $db;
	$phone = preg_replace('#[^0-9]#i', '', $phone);
	$indexx = preg_replace('#[^0-9]#i', '', $indexx);
	if((!empty($phone)) || (!empty($indexx)) || (!empty($city)) || (!empty($rue)) || (!empty($nber_maison)) || (!empty($nber_apart)) ){
		 $query = $db->query("UPDATE clients SET telephone='$phone',indexx='$indexx',ville='$city',rue='$rue',num_maison='$nber_maison',num_appartement='$nber_apart' WHERE email='{$_SESSION['email']}' ")or die(mysql_error());
		 $_SESSION['statut']="active";
	header("Location:index.php?page=shop");
	}
}
?>
