<!--====register page"====-->
<div class="content_register redd ">
	<h2>РегИстрация </h2>
	<div class="formulair_register">
		<form  id="register_form" onsubmit="return false;" autocomplete="off">
			<div class="form-group">
				<label for="nom">Фамилия </label>
				<div class="confirm_img"></div>
				<input type="text" class="form-control" name="nom" id="nom" >
				
			</div>
			<div class="form-group">
				<label for="prenom">Имя <small>*</small></label>
				<div class="confirm_img"></div>
				<input type="text" class="form-control" name="prenom" id="prenom" >

			</div>
			<div class="form-group">
				<label for="otchestvo">Отчество</label>
				<div class="confirm_img"></div>
				<input type="text" class="form-control" name="otchestvo" id="otchestvo" >
				
			</div>

			<small id="output_email_error"></small>
			<div class="form-group">
				<label for="email">e-mail<small>*</small></label>
				<div class="confirm_img" id="output_email"></div>
				<input type="text" class="form-control" name="email" id="email" >
			</div>

			<div class="form-group">
				<label for="password">Пароль<small>*</small></label>
				<div class="confirm_img" id="output_pass1"></div>
				<input type="password" class="form-control" name="password" id="password" >
				
			</div>
			<div class="form-group conf_passe">
				<div class="confirm_img" id="output_pass2"></div>
				<input type="password" class="form-control" name="password_rep" id="password_rep" placeholder="Подтвердить пароль" >
			</div>
			<p id="status">Мы вышлем Вам письмо со ссылкой для подтверждения</p>
			<div class="form-group_btn form-group">
				<button type="submit" id="bRegister">Зарегистрироваться</button>
			</div>
		</form>
	</div>
</div>