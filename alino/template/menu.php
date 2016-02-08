<div class="menu">
	<ul class="redd">
		<li <?php if ($name_page == 'home') {echo ' class="active"';} ?>><a href="index.php">Главная</a></li>
		<li <?php if (($name_page == 'catalogue' )|| ($name_page == 'sapin')|| ($name_page == 'hornement_ballon')|| ($name_page == 'guirlande')|| ($name_page == 'jeux')|| ($name_page == 'dev_prod_sapin')|| ($name_page == 'dev_prod_ballon')|| ($name_page == 'dev_prod_guirlande')|| ($name_page == 'dev_prod_jeux')) {echo ' class="active"';} ?>><a href="<?=URL_BASE?>catalogue">Каталог</a></li>
		<li <?php if ($name_page == 'contacts') {echo ' class="active"';} ?>><a href="<?=URL_BASE?>contacts">Контакты</a></li>
		<li <?php if ($name_page == 'how_to_order') {echo ' class="active"';} ?>><a href="<?=URL_BASE?>how_to_order">Как заказать</a></li>
		<li <?php if ($name_page == 'articles') {echo ' class="active"';} ?>><a href="<?=URL_BASE?>articles">Полезные статьи</a></li>
	</ul>
</div>
<?php include('panier.class.php'); ?>