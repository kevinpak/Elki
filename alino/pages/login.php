<?php include('functions/connection.func.php'); ?>

<div class="connect_client connect_admin ">
	<h4>Вход </h4>
	<form method="post" autocomplete="off">
		<div class="form-group">
			<label for="login_2">Е-mail</label>
			<input type="text" id="login_2" name="email_client" >
		</div>
		<div class="form-group">
			<label for="passe_2">Пароль</label>
			<input type="password" id="passe_2" name="passe_client" >
		</div>
		<div class="btn_form">
			<button name="connectclient" type="submit">Войти</button>
		</div>
		<div class="center">
			<a href="index.php?page=register">Зарегестрироваться</a>
		</div>
		
	</form>
</div>
