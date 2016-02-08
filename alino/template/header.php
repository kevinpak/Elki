<!--== header ==-->
<div id="header" class="redd">
	<div class="content_header content_block">
		<div class="logo ">
			<a href="index.php"><img src="images/logo.png" alt="logo"></a>
		</div>
		<div class="z_header_imp">
			<div class="bg_hornement-001"></div>
			<div class="z_hi_left ">
				<h1 class="redd">
					Магазин новогодних товаров <span>Ёлки зелёные</span>
				</h1>

			</div>
			<div class="z_hi_right ">
				<div class="z_connetion">
					<p class="">
						<a href="<?=URL_BASE?>login" class="login">Войти</a> / 
						<a href="<?=URL_BASE?>register" class="register"> Зарегестрироваться</a>
					</p>
				</div>
				<div class="z_market">
					<div class="z_panier z_00">
						<div class="conta_panier">
							<p>товаров: 
	<?php 
//include('functions/shop.func.php');

	echo 	$qtotal = array_sum($_SESSION['elki'])+$qtotal = array_sum($_SESSION['elki2'])+$qtotal = array_sum($_SESSION['ballon'])+$qtotal = array_sum($_SESSION['jeux'])+$qtotal = array_sum($_SESSION['jeux2'])+$qtotal = array_sum($_SESSION['guirlande'])+$qtotal = array_sum($_SESSION['guirlande2']);

	 ?>
							</p>
						</div>
					</div>
					<a href="index.php?page=shop">
					<div class="z_btn_commande z_00">
						Оформить заказ
					</div>
					</a>
				</div>
				<div class="z_search  ">
					<form method="POST" autocomplete="off" >
						<input type="text" name="search" placeholder="Поиск" id="search" required/>
						<button class="btn_search">Искать</button>
					</form>
				</div>
				<div class="resultat_recherche">
					<div class="centent_search"></div>
				</div>
				<p class="telephone ">
					<img src="images/img_phone.png" alt="img_phone">
					<span>8 981-900-70-33</span>
				</p>
			</div>
		</div>
	</div>
</div>
<!--== End header ==-->
<!--== main ==-->
	<div id="main" class="col-12">
		<!--== menu ==-->
		<?php include('template/menu.php'); ?>
		<!--== End menu ==-->
