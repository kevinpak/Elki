<!--====register page"====-->
<div class="content_register redister_2 ">
<div class="heider_register_2">
<?php include('includes/header_membre.php'); ?>
</div>
 <?php foreach ($infos_membres as $infos_membre): ?>
 	<?php if($infos_membre['otchestvo']=='neant'){ $infos_membre['otchestvo'] = '';} ?>
	<h3>Здравствуйте, <?= $infos_membre['prenoms']?> <?= $infos_membre['otchestvo']?>!   </h3>
	
	<p class="inf_register_2">Заполните, пожалуйста, дополнительную контактную информацию для доставки покупок!</p>
	<?php include('functions/connection.func.php'); ?>
	<div class="formulair_register">
		<form id="register2_form" method="post"  class="redd">
			<div class="form-group">
				<label for="phone">телефон</label>
				
				<input type="text" class="form-control" id="phone" name="phone" required>
				
			</div>
			<div class="form-group">
				<label for="indexx">Индекс</label>
				
				<input type="text" class="form-control" id="indexx" name="indexx" required>

			</div>
			<div class="form-group">
				<label for="city">Город</label>
				
				<input type="text" class="form-control" id="city" name="city" required>
				
			</div>

			<small id=""></small>
			<div class="form-group">
				<label for="rue">улица</label>
				<input type="text" class="form-control" id="rue" name="rue" required>
			</div>

			<div class="form-group">
				<label for="nber_maison">номер дома</label>	
				<input type="text" class="form-control" id="nber_maison" name="nber_maison" required>
			</div>
			<div class="form-group conf_passe">
			<label for="nber_apart">номер квартиры</label>
				<input type="text" class="form-control" id="nber_apart" name="nber_apart" required>
			</div>
			<div class="form-group_btn">
				<button type="submit" name="register2">Сохранить</button>
			</div>
		
		</form>

	</div>
	<?php endforeach ; ?>
</div>