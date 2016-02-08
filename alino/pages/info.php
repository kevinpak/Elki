<?php 
if(!empty($_GET['msg'])){
	$msg = preg_replace('#[^a-z 0-9.:_()]#i', '', $_GET['msg']);
	
	if($msg == "activation_error"){
		$message = "<h2>Erreur lors de l'activation</h2>
					<p>Произошла ошибка при активации аккаунта.<br/>
					Пожалуйста, повторите попытку позже.</p>";
					
	} else if($msg == "activation_success") {
		$message = '<h2>Активация успешно</h2>
					<p>Ваша учетная запись активирована.<br/>
			
					Вы можете нажать на <a  href="index.php?page=login">ссылку</a> для подключения.</p>';
	} else if($msg == "fake_parameters") {
		$message = '<h2>Неправильные параметры</h2>
					<p>Параметры, представленные в URL неправильно<br/>
				Убедитесь, что у вас есть на ссылку активации паста правильную копию</p>';
	} else {
		$message = $msg;
	}
	
} else {
	$message = "Нет сообщений";
}
?>

		<div class="info_register"><?php echo $message; ?></div></div>
