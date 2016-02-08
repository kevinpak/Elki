<?php include('template/panier.class.panier.php') ?>
<?php 
		global $db;
		$idprt = array_keys($_SESSION['elki']);
		$produites = (implode("','", $idprt));
		$id_s = $db->query("SELECT * FROM elki WHERE id_ildki IN ('$produites') ");
		//$totals = $db->query("SELECT SUM(prix) AS prix_t FROM produits WHERE type IN ('$produites') ");
 ?>

 