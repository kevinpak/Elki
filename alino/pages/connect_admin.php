<?php include('functions/connection.func.php'); ?>

<div class="connect_admin">
	<h4>Вход в административную панель</h4>
	<form method="post">
		<div class="form-group">
			<label for="login_1">Логин</label>
			<input type="text" id="login_1" name="user_admin" required>
		</div>
		<div class="form-group">
			<label for="passe_1">Пароль</label>
			<input type="password" id="passe_1" name="passe_admin" required>
		</div>
		<div class="btn_form">
			<button name="connectadmin" type="submit">Войти</button>
		</div>
	</form>
</div>

