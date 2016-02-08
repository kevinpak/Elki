<?php 
if ($_SESSION['email']) {
	include('includes/header_membre.php');
}
?>
<div class="cdre_gris">
<?php 
if(!empty($_SESSION['success_new_commande'])){
echo "<div class='info-success'>Спасибо за покупку! Мы вышлем Вам письмо для подтверждения</div>";
} ?>
	<div class="all_cmd">
		<div class="ttl_tabl cdre_blue">
		
					<div class="col_tbl">Фото</div>
					<div class="col_tbl">Товар</div>
					<div class="col_tbl">Ценна</div>
					<div class="col_tbl">Количество</div>
					<div class="col_tbl">Дата заказ</div>
			
		</div>
		<?php
		$date_groupe = my_date_c();
		foreach($date_groupe as $date_group): 
			$date_distinct = $date_group['date_c'];
			$sommes = total_sum($date_distinct);
		?>
		<div class="cdre_vert blckm_commande">
			<?php $end_commande=my_commades($date_distinct); ?>
			<?php foreach($end_commande as $end_command): ?>
				<?php $sum = $db->query("SELECT SUM('prix')  as somme FROM commandes WhERE date_c = '$date_distinct' "); ?>
				<?php 
				$id_prod = $end_command['id_prod']; 
				$tble_prod = $end_command['catheguorie'];
				$name_id_prod = $end_command['name_id'];

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
							$name_ps = $db->query("SELECT nom FROM guirlande	WHERE id_guirland='$idp' ");
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
			<?php $statut = $end_command['statut']; ?>
		<?php endforeach; ?>

		<div class="resume_c">
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
		</div>
	</div>

<?php endforeach; ?>
</div>
</div>