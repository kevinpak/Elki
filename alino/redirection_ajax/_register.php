<?php 
//Vérification de l'email
if(!empty($_POST['email_check'])){
	$email = $_POST['email_check'];
	
	//Vérifier l'adresse mail
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)){  
		echo '<br/>Неверный адрес электронной почты!';
		exit();
	}
//Connexion à la base de données
	require "../databases/connect_db.php";
	global $db;
	$q = $db->prepare('SELECT id_client FROM clients WHERE email = ?');
	$q->execute(array($email));
	
	$numRows = $q->rowCount();
	if($numRows > 0){
		echo '<br/>E-mail адрес уже существует !';
		exit();
	} else {
		echo 'success';
		exit();
	}
}




//Vérification des mots de passe
if(!empty($_POST['pass1_check']) && !empty($_POST['pass2_check'])){
	if(strlen($_POST['pass1_check']) < 6 || strlen($_POST['pass1_check'])  < 6){
		echo 'Слишком короткий (минимум 6 символов)';
		exit();
	} else if($_POST['pass1_check'] == $_POST['pass2_check']){
		echo 'success';
		exit();
	} else {
		echo 'Пароли отличаются';
		exit();
	}

}


//Traitement de l'inscription
if(isset($_POST['prenom'])){
	require "../databases/connect_db.php";
	global $db;
	extract($_POST);
	$prenom = preg_replace('#[^a-z0-9]#i', '', $prenom); // filter everything but letters and numbers
	$q = $db->prepare('SELECT id_client FROM clients WHERE prenoms = ?');
	$q->execute(array($prenom));
	$prenom_check = $q->rowCount();
	
	$q = $db->prepare('SELECT id_client FROM clients WHERE email = ?');
	$q->execute(array($email));
	$email_check = $q->rowCount();
	
	if(empty($nom) || empty($prenom) || empty($otchestvo)|| empty($password) || empty($password_rep) || empty($email)){
		echo "Tous les champs n'ont pas été remplis.";
	} else if($email_check > 0) {
		echo "Cette adresse mail est déjà utilisée";
	} else if(strlen($prenom) < 3 || strlen($prenom) > 16) {
		echo "prenom éronné !";
	}  else if(is_numeric($prenom[0])) {
		echo "Le prenom doit commencer par une lettre.";
	}  else if($password != $password_rep) {
		echo "Les mots de passe ne correspondent pas.";
	} else {
		$password = sha1($password);
		$phone = 0;
		$q = $db->prepare("INSERT INTO clients(nom,prenoms, otchestvo,email ,passe ,telephone ,date_ins,statut)
			VALUES(:nom, :prenoms, :otchestvo, :email, :passe, :phone, now(), 'not_active')");
		$q->execute(array(
			'nom' => $nom,
			'prenoms' => $prenom,
			'otchestvo' => $otchestvo,
			'email' => $email,
			'passe' => $password,
			'phone' => $phone
			));	
		
		$user_id = $db->lastInsertId();

		if(!file_exists( "membres/$user_id")){
			mkdir("membres/$user_id", 0755);
		}
		if($nom == "neant"){ $nom ='';}
	if($otchestvo == "neant"){ $otchestvo ='';}

		$to = $email;
		$from = "auto-elki@elki.ru";
		$subject = "Магазин новогодних товаров Ёлки зелёные - Активация свой аккаунт";				
		$message = "<!DOCTYPE html>
		<html lang=\"ru\">
		<head>	
			<meta charset=\"UTF-8\">
		</head>
		<body>
			Hi $nom $prenom $otchestvo,<br/><br/>

			<h2>Fill out this last step to activate your account !</h2>
			<p>To do this, simply click on the link:<br/>
				<a href=\"  http://elkyzelenye24.ru/index.php?page=activation&amp;id_clent=$user_id&amp;u=$prenom&amp;e=$email&amp;ssl=$password\"> http://elkyzelenye24.ru/index.php?page=activation&amp;id_clent=$user_id&amp;u=$prenom&amp;e=$email&amp;ssl=$password</a>
				<br/>
				If the URL-address will not be displayed as an active link, please copy and paste the
				in your browser.</p>

				<h2>Login credentials:</h2>  
				<p>
					E-mail: $email<br/> 
					Password:       $password_rep<br/>
				</p> 
				<p><a href=\"http://elkyzelenye24.ru\">http://elkyzelenye24.ru/</a></p>
			</body>
			</html>";

			$headers = "From: $from\n";
			$headers .= "MIME-Version: 1.0\n";
			$headers .= "Content-type: text/html; charset=iso-8859-1\n";
			if(mail($to, $subject, $message, $headers)){
				echo 'register_success';
			}else {
			//On supprime le compte de la bdd vu qu'il ne sert plus à rien
				$q = $db->prepare("DELETE FROM clients WHERE id_client = ?");
				$q->execute(array($user_id));
				echo "Ошибка при отправке электронной почты.";
			}
			exit();

		}
		exit();
	}


//





	?>