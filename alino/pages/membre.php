<?php include('includes/header_membre.php'); ?>
<?php 

$query = $db->query("SELECT DISTINCT date_c FROM commandes WhERE client= '{$_SESSION['email']}' AND  statut= 'en cours' ");
$resultat = $query->rowCount();

if($resultat  > 0){
	echo "<div class='info_alert'>У вас не оплочино <span>".$resultat."</span> товаров<br><p>В течение 2 месяца неоплаченные заказы будут удалены .</p></div>";
}else{
	echo "<div class='info_alert2'><h1>Добро пожаловать</h1></div>";
}
 ?>

