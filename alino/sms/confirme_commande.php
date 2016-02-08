
<?php
//new_commade.php 
	$email ='zelenyeelki@gmail.com';
	//$email ='newgod2016@gmail.com';
	//$email ='kevinpak@yandex.ru';
		$date = date("d-m-Y");
	$heure = date("H:i");
	$to = $email;
		$from = "auto-elki@elki.ru";
		$subject = "Магазин новогодних товаров Ёлки зелёные - Подтверждение заказа";				
		$message = "<!DOCTYPE html>
					<html lang=\"ru\">
						<head>	
						<meta charset=\"UTF-8\">
						</head>
						<body>

						<div class=\"mail_vendeur\">
								<h1>Подтверждение заказа</h1>
						   <h2> Добрый день $nom_c !:</h2>
						   <p>Ваш заказ успешно принят, наш  Менеджер свяжется с Вами в ближайшее время. Спасибо за заказа . </p>
						   <br/>
						   <p><span>Выбор СПОСОБ ОПЛАТЫ :</span>$paye_group </p>
						   <p><span>Выбор  СПОСОБ ДОСТАВКИ :</span>$trans_groupb</p>
						   <small>Date:</span>$date в $heure</small>
								<br/>
								<br/>
						   <p><a href=\"http://elkyzelenye24.ru/index.php?page=login\">http://elkyzelenye24.ru/index.php?page=login</a></p>
						  </div>
						</body>
					</html>";

					$headers = "From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		if(mail($to, $subject, $message, $headers)){
		}else {
			
			echo "Ошибка при отправке электронной почты.";
		}

 ?>