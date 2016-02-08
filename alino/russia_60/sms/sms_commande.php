<?php 
	//$email ='zelenyeelki@gmail.com';
	$email ='newgod2016@gmail.com';
	//$email ='kevinpak@yandex.ru';
		$date = date("d-m-Y");
	$heure = date("H:i");
	$to = $email;
		$from = "auto-elki@elki.ru";
		$subject = "Магазин новогодних товаров Ёлки зелёные - Новая заявка";				
		$message = "<!DOCTYPE html>
					<html lang=\"ru\">
						<head>	
						<meta charset=\"UTF-8\">
						</head>
						<body>
						<div class=\"mail_vendeur\">
								<h1>Поступление новой заявки !</h1>
						   <h2> Данные клиента:</h2>
						   <p><span>Как к ним обращаться :</span>$name_client</p>
						   <p><span>Телефон:</span>$phone_client </p>
						   <p><span>Выбранный товар :</span>$prodoct</p>
						   <p><span>Город:</span>$city</p>
						   <small>Date:</span>$date в $heure</small>
								<br/>
								<br/>
						   <p><a href=\"http://elkyzelenye24.ru/msk_60\">http://elkyzelenye24.ru/msk_60</a></p>
						  </div>
						</body>
					</html>";

					$headers = "From: $from\n";
		$headers .= "MIME-Version: 1.0\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\n";
		if(mail($to, $subject, $message, $headers)){
			echo 'success';
		}else {
			
			echo "Ошибка при отправке электронной почты.";
		}

 ?>