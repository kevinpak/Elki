<div class="menu_membre">
<?php include('functions/membre.func.php') ?>
<div class="heider_register_2">
<?php 
if(!isset($_SESSION['email'])){//permet une redirection si on tente d'entrer sans se connecter
header("Location:index.php?page=login");
}
 ?>
 <?php $infos_membres = infos_membre_connecte(); ?>
 <?php foreach ($infos_membres as $infos_membre): ?>
	<?php $phone = $infos_membre['telephone'];
	if ($phone == 0) {
		$_SESSION['statut']="null";
	}else{
		$_SESSION['statut']="active";
	}
	?>
	<p>Вы вошли как <?= $infos_membre['email']?>   <a href="index.php?page=logout">Выйти ></a></p>
	<div class="profil_menu">

		<ul>
			<li <?php if ($name_page == 'membre') {echo ' class="active_shop"';} ?>><a href="index.php?page=membre">Мой профиль</a></li>
			<li <?php if ($name_page == 'shop') {echo ' class="active_shop"';} ?>><img src="images/panier_2.png" alt="panier_2"><a href="index.php?page=shop"> Моя корзина</a></li>
			<li <?php if ($name_page == 'my_commades') {echo ' class="active_shop"';} ?>><img src="images/sac_2.png" alt="sac_2"><a href="index.php?page=my_commades"> Мои заказы</a></li>
		</ul>
	</div>

<?php endforeach ; ?>
</div>
</div>