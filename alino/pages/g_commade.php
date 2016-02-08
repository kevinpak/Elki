<?php include('formulaires/control_formadmin.php'); ?>
<?php
$query = $db->query("SELECT DISTINCT date_c FROM commandes WhERE statut= 'en cours' ");
$resultat = $query->rowCount();
?>
<div class="top_confi">
	<div class="panel_c">
		<p><a href="index.php?page=logout_admin">выйти</a></p>
		<p><a href="index.php?page=panel_admin">Назад</a></p>
	</div>
</div>
<?php 
if(isset($_POST['del_c'])){
	extract($_POST);
	if(($email)&&($date_cm)){
$query = $db->query("DELETE  FROM commandes WHERE client='$email' AND date_c='$date_cm' ");
header("location:index.php?page=g_commade");
	}
}
if(isset($_POST['livrer'])){
	extract($_POST);
	if(($email)&&($date_cm)){
		$query = $db->query("UPDATE commandes SET statut='liver' WHERE client='$email' AND date_c='$date_cm' ");
		header("location:index.php?page=g_commade");
	}
}

?>


<div class="cadre_gris">
	<div class="ttl_tabl cdre_blue">
		<div class="col_tbl">Фото</div>
		<div class="col_tbl">Товар</div>
		<div class="col_tbl">Ценна</div>
		<div class="col_tbl">Количество</div>
		<div class="col_tbl">Дата заказ</div>
	</div>
		<?php
		$date_groupe = all_date_c();
		foreach($date_groupe as $date_group): 
			$date_distinct = $date_group['date_c'];
			$sommes = total_sum($date_distinct);
		?>
		<div class="cdre_vert blckm_commande">
			<?php $end_commande=all_commades($date_distinct); ?>
			<?php foreach($end_commande as $end_command): ?>
				<?php $sum = $db->query("SELECT SUM('prix')  as somme FROM commandes WhERE date_c = '$date_distinct' "); ?>
				<?php 
				$id_prod = $end_command['id_prod']; 
				$tble_prod = $end_command['catheguorie'];
				$name_id_prod = $end_command['name_id'];
				$type_paye = $end_command['type_paye'];
				$type_transport = $end_command['type_transport'];

				$info_prod_cds = my_prodoct($name_id_prod,$id_prod,$tble_prod);
				foreach($info_prod_cds as $info_prod_cd):
					?>
				<?php 
				if(($tble_prod == 'ballons') || ($tble_prod == 'taille_elki') || ($tble_prod == 'longueur_guirlande') || ($tble_prod == 'couleur_jeux')){
					?>
					<div class="row_col">
						<div class="col_tbl"><img src="images/<?=$info_prod_cd['image']?>"></div>
						<?php 

						if($tble_prod == 'taille_elki'){
							$idp =$info_prod_cd['id_elki'];
							$name_ps = $db->query("SELECT nom FROM elki	WHERE id_eldki='$idp' ");
							foreach($name_ps as $name_p):
									echo "<div class=\"col_tbl\">".$name_p['nom']."</div>";
							endforeach;
							}else

							if($tble_prod == 'longueur_guirlande'){
							$idp =$info_prod_cd['id_guirland'];
							$name_ps = $db->query("SELECT nom FROM guirlande	WHERE id_guirland ='$idp' ");
							foreach($name_ps as $name_p):
									echo "<div class=\"col_tbl\">".$name_p['nom']."</div>";
							endforeach;
							}else

							if($tble_prod == 'couleur_jeux'){
							$idp =$info_prod_cd['id_jeux'];
							$name_ps = $db->query("SELECT nom FROM jeux	WHERE id_jeux='$idp' ");
							foreach($name_ps as $name_p):
									echo "<div class=\"col_tbl\">".$name_p['nom']."</div>";
							endforeach;
							}else{
								echo "<div class=\"col_tbl\">".$info_prod_cd['nom']."</div>";
							}
							 ?>
							
						<div class="col_tbl"><?=$end_command['prix']?> руб</div>
						<div class="col_tbl"><?=$end_command['quantite']?></div>
						<div class="col_tbl"><?=$end_command['date_c']?></div>
					</div>

					<?php
				}else{
					?>
					<div class="row_col">
						<div class="col_tbl"><img src="images/<?=$info_prod_cd['imgs']?>"></div>
						<div class="col_tbl"><?=$info_prod_cd['nom']?></div>
						<div class="col_tbl"><?=$end_command['prix']?> руб</div>
						<div class="col_tbl"><?=$end_command['quantite']?></div>
						<div class="col_tbl"><?=$end_command['date_c']?></div>
					</div>

					<?php
				}
				?>
				
			<?php endforeach; ?>
			<?php 
			$statut = $end_command['statut']; 
			$client = $end_command['client']; 
			?>
		<?php endforeach; ?>

		<div class="resume_c bg-success">
			<h4>Сумма заказа :
			<?php foreach($sommes as $somme): ?>
			<span><?=$somme['sum'];?></span> руб
		<?php endforeach; ?>
			</h4>
			<h5>Состояние :
				<?php if($statut =='en cours'){
					echo "<span class='_red'>Не оплочина !</span>";
				}else{
					echo "<span class='_green'>Оплочина !</span>";
					} ?>

			</h5>
			<h5><strong>СПОСОБ ОПЛАТЫ :</strong> <?=$type_paye ; ?></h5>
			<h5><strong>СПОСОБ ДОСТАВКИ :</strong><?=$type_transport ;?> </h5>
			<hr>
			<div class="infos_clnt">
			<?php $infos_clients = all_info_clients($client); ?>
			<?php foreach($infos_clients as $infos_client):?>
				<h4>Даные клиента </h4>
				<?php if($infos_client['otchestvo']=='neant'){ $infos_client['otchestvo'] = '';} ?>
				<?php if($infos_client['nom']=='neant'){ $infos_client['nom'] = '';} ?>
				<p><strong>ФИО :</strong><span><?=$infos_client['nom']; ?> <?=$infos_client['prenoms']; ?> <?=$infos_client['otchestvo']; ?></span></p>
				<p><strong>Тел :</strong> <span><?=$infos_client['telephone']; ?></span></p>
				<p><strong>E-MAIL :</strong> <span><?=$infos_client['email']; ?></span></p>
				<p><strong>Адрес :</strong> <span>Г.<?=$infos_client['ville']; ?> Ул.<?=$infos_client['rue']; ?> Д.<?=$infos_client['num_maison']; ?> Кв.<?=$infos_client['num_appartement']; ?></span></p>

			<?php endforeach; ?>
			<form method="post">
			<input type="hidden" value="<?=$client?>" name="email">
			<input type="hidden" value="<?=$date_distinct?>" name="date_cm">
				<div class="btn_act">
					<button name="livrer" type="submit">Завершить</button>
					<button name="del_c" type="submit">Удалить</button>
				</div>
			</form>
			</div>
		</div>
	</div>

<?php endforeach; ?>
</div>