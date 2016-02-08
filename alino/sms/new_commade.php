
<?php
//new_commade.php 
	$email ='zelenyeelki@gmail.com';
	//$email ='newgod2016@gmail.com';
	//$email ='kevinpak@yandex.ru';
		$date = date("d-m-Y");
	$heure = date("H:i");
	$to = $email;
		$from = "auto-elki@elki.ru";
		$subject = "Магазин новогодних товаров Ёлки зелёные - Поступление Новый заказ";				
		$message = "<!DOCTYPE html>
					<html lang=\"ru\">
						<head>	
						<meta charset=\"UTF-8\">
						</head>
						<body>

						<div class=\"mail_vendeur\">
								<h1>Поступление Новый заказ!</h1>
						   <h2> Данные о заказе:</h2>
						   <p><span>Клиент :</span>$nom_c</p>
						   <p><span>Телефон :</span>$telephone_c</p>
						   <p><span>Выбор СПОСОБ ОПЛАТЫ :</span>$paye_group </p>
						   <p><span>Выбор СПОСОБ ДОСТАВКИ :</span>$trans_groupb</p>
						   <small>Date:</span>$date в $heure</small>
								<br/>
								<br/>
						   <p><a href=\"http://elkyzelenye24.ru/index.php?page=panel_admin\">http://elkyzelenye24.ru/index.php?page=panel_admin</a></p>
						  </div>
						</body>
					</html>";

					$headers = "From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		if(mail($to, $subject, $message, $headers)){
			$_SESSION['success_new_commande']='success';
		}else {
			
			echo "Ошибка при отправке электронной почты.";
		}

 ?>