<?php 
if ($_SESSION['email']) {
	include('includes/header_membre.php');

	$telephone_c = $infos_membre['telephone'];
	$nom_c = $infos_membre['nom'].' '.$infos_membre['prenoms'].' '.$infos_membre['otchestvo'];

	$compt_active='active';
}else{
	$compt_active='not_active';
}
?>
<?php 
//verification du choix de payement
if ($_SESSION['type_paye'] =="Наличными при получении") { $chk1 = 'checked'; }
if ($_SESSION['type_paye'] =="Оплата картами Visa/MasterCard") { $chk2 = 'checked'; }
if ($_SESSION['type_paye'] =="Квитанцией через Сбербанк") { $chk3 = 'checked'; }
if ($_SESSION['type_paye'] =="Яндекс Деньги") { $chk4 = 'checked'; }
if ($_SESSION['type_paye'] =="Webmoney") { $chk5 = 'checked'; }

//verification du choix de transport
if ($_SESSION['type_transport'] =="Доставка курьером по городу и области") { $chke1 = 'checked'; }
if ($_SESSION['type_transport'] =="Самовывоз со склада (Посмотреть на карте)") { $chke2 = 'checked'; }
if ($_SESSION['type_transport'] =="Доставка транспортной компанией") { $chke3 = 'checked'; }
if ($_SESSION['type_transport'] =="Доставка до пункта выдачи (по России)") { $chke4 = 'checked'; }
if ($_SESSION['type_transport'] =="Курьерская служба (EMS Почта)") { $chke5 = 'checked'; }

?>

<?php //unset($_SESSION['elki'][5]); ?>
<div class="content_shop">
	<div class="message"></div>
	<div class="panier">
		<?php //print_r($_SESSION);?>



		<?php 
//=======================================>DECLARATION GENERAL<=========================================//
		if (($_SESSION['elki']) || ($_SESSION['elki2']) || ($_SESSION['ballon']) || ($_SESSION['guirlande']) || ($_SESSION['guirlande2']) || ($_SESSION['jeux']) || ($_SESSION['jeux2'])) {

			if((!empty($_SESSION['elki'])) || (!empty($_SESSION['elki2'])) || (!empty($_SESSION['ballon'])) || (!empty($_SESSION['jeux'])) || (!empty($_SESSION['jeux2'])) || (!empty($_SESSION['guirlande'])) || (!empty($_SESSION['guirlande2']))){

//=======================================>elki<=========================================//
				$idprt = array_keys($_SESSION['elki']);
				$produites = (implode("','", $idprt));
				$id_s = $db->query("SELECT * FROM elki	WHERE id_eldki  IN ('$produites') ");

				$idprt2 = array_keys($_SESSION['elki2']);
				$produites = (implode("','", $idprt2));
				$id_s2 = $db->query("SELECT * FROM taille_elki	WHERE id_telki  IN ('$produites') ");

//=======================================>Ballon<=========================================//
				$idprt_b = array_keys($_SESSION['ballon']);
				$produites = (implode("','", $idprt_b));
				$id_sb = $db->query("SELECT * FROM ballons	WHERE id_ballon  IN ('$produites') ");

//=======================================>guirlande<=========================================//
				$idprt = array_keys($_SESSION['guirlande']);
				$produites = (implode("','", $idprt));
				$id_gs = $db->query("SELECT * FROM guirlande	WHERE id_guirland  IN ('$produites') ");

				$idprt2 = array_keys($_SESSION['guirlande2']);
				$produites = (implode("','", $idprt2));
				$id_g2s = $db->query("SELECT * FROM longueur_guirlande	WHERE id_longueur  IN ('$produites') ");	

//=======================================>jeux<=========================================//
				$idprt = array_keys($_SESSION['jeux']);
				$produites = (implode("','", $idprt));
				$id_js = $db->query("SELECT * FROM jeux	WHERE id_jeux  IN ('$produites') ");

				$idprt2 = array_keys($_SESSION['jeux2']);
				$produites = (implode("','", $idprt2));
				$id_j2s = $db->query("SELECT * FROM couleur_jeux	WHERE id_color  IN ('$produites') ");				
				?>


				<?php 
//=======================================>Traitement<=========================================//

				if (isset($_POST['save_commande'])) {
					if(isset($_SESSION['admin'])){
							echo "<div class='message alert'>Выйдите пожалуйста из админ сессии перед выполнение покупки!</div>";
					}else{
						extract($_POST);
						if(!empty($paye_group)){
							$_SESSION['type_paye'] = $paye_group;
							if(!empty($trans_groupb)){
								$_SESSION['type_transport'] = $trans_groupb;
								if ($compt_active=='active') {

									if ($_SESSION['statut']=="null") {
										header("Location:index.php?page=register_2");
									}else{
										$email= $_SESSION['email'];



//====================>elkki<======================//
										if (($_SESSION['elki'])) {
											$id_prod_elki = array_keys($_SESSION['elki']);
											$produites = (implode("','", $id_prod_elki));
											$elkis = $db->query("SELECT * FROM elki	WHERE id_eldki  IN ('$produites') ");


											foreach ($elkis as $elki):
												$id_prod = $elki['id_eldki'];
											$quantite = $_SESSION['elki'][$elki['id_eldki']];
											$prix= $_SESSION['elki'][$elki['id_eldki']]*$elki['prix_fa'];

											$query = $db->query("INSERT INTO commandes(id_c,catheguorie,name_id,id_prod,quantite,prix,client,date_c,type_paye,type_transport,statut)
												VALUES('','elki','id_eldki','$id_prod','$quantite','$prix','$email',NOW(),'$paye_group','$trans_groupb','en cours')")or die('ca marche pas');
											endforeach;
										}
//====================>elkki2<======================//
										if (($_SESSION['elki2'])) {
											$id_prod_elki2 = array_keys($_SESSION['elki2']);
											$produites = (implode("','", $id_prod_elki2));
											$elki2s = $db->query("SELECT * FROM taille_elki	WHERE id_telki  IN ('$produites') ");


											foreach ($elki2s as $elki2):
												$id_prod = $elki2['id_telki'];
											$quantite = $_SESSION['elki2'][$elki2['id_telki']];
											$prix= $_SESSION['elki2'][$elki2['id_telki']]*$elki2['prix'];

											$query = $db->query("INSERT INTO commandes(id_c,catheguorie,name_id,id_prod,quantite,prix,client,date_c,type_paye,type_transport,statut)
												VALUES('','taille_elki','id_telki','$id_prod','$quantite','$prix','$email',NOW(),'$paye_group','$trans_groupb','en cours')")or die('ca marche pas');
											endforeach;
										}
//====================>ballon<======================//
										if (($_SESSION['ballon'])) {
											$id_prod_ballon = array_keys($_SESSION['ballon']);
											$produites = (implode("','", $id_prod_ballon));
											$ballons = $db->query("SELECT * FROM ballons	WHERE id_ballon  IN ('$produites') ");


											foreach ($ballons as $ballon):
												$id_prod = $ballon['id_ballon'];
											$quantite = $_SESSION['ballon'][$ballon['id_ballon']];
											$prix= $_SESSION['ballon'][$ballon['id_ballon']]*$ballon['prix'];

											$query = $db->query("INSERT INTO commandes(id_c,catheguorie,name_id,id_prod,quantite,prix,client,date_c,type_paye,type_transport,statut)
												VALUES('','ballons','id_ballon','$id_prod','$quantite','$prix','$email',NOW(),'$paye_group','$trans_groupb','en cours')")or die('ca marche pas');
											endforeach;
										}

//====================>jeux<======================//
										if (($_SESSION['jeux'])) {
											$id_prod_jeux = array_keys($_SESSION['jeux']);
											$produites = (implode("','", $id_prod_jeux));
											$jeuxs = $db->query("SELECT * FROM jeux	WHERE id_jeux  IN ('$produites') ");


											foreach ($jeuxs as $jeux):
												$id_prod = $jeux['id_jeux'];
											$quantite = $_SESSION['jeux'][$jeux['id_jeux']];
											$prix= $_SESSION['jeux'][$jeux['id_jeux']]*$jeux['prix_fa'];

											$query = $db->query("INSERT INTO commandes(id_c,catheguorie,name_id,id_prod,quantite,prix,client,date_c,type_paye,type_transport,statut)
												VALUES('','jeux','id_jeux','$id_prod','$quantite','$prix','$email',NOW(),'$paye_group','$trans_groupb','en cours')")or die('ca marche pas');
											endforeach;
										}
//====================>jeux2<======================//
										if (($_SESSION['jeux2'])) {
											$id_prod_jeux2 = array_keys($_SESSION['jeux2']);
											$produites = (implode("','", $id_prod_jeux2));
											$jeux2s = $db->query("SELECT * FROM couleur_jeux	WHERE id_color  IN ('$produites') ");


											foreach ($jeux2s as $jeux2):
												$id_prod = $jeux2['id_telki'];
											$quantite = $_SESSION['jeux2'][$jeux2['id_color']];
											$prix= $_SESSION['jeux2'][$jeux2['id_color']]*$jeux2['prix'];

											$query = $db->query("INSERT INTO commandes(id_c,catheguorie,name_id,id_prod,quantite,prix,client,date_c,type_paye,type_transport,statut)
												VALUES('','couleur_jeux','id_color','$id_prod','$quantite','$prix','$email',NOW(),'$paye_group','$trans_groupb','en cours')")or die('ca marche pas');
											endforeach;
										}						

			//====================>guirlande<======================//
										if (($_SESSION['guirlande'])) {
											$id_prod_guirlande = array_keys($_SESSION['guirlande']);
											$produites = (implode("','", $id_prod_guirlande));
											$guirlandes = $db->query("SELECT * FROM guirlande	WHERE id_guirland  IN ('$produites') ");


											foreach ($guirlandes as $guirlande):
												$id_prod = $guirlande['id_guirland'];
											$quantite = $_SESSION['guirlande'][$guirlande['id_guirland']];
											$prix= $_SESSION['guirlande'][$guirlande['id_guirland']]*$guirlande['prix_fa'];

											$query = $db->query("INSERT INTO commandes(id_c,catheguorie,name_id,id_prod,quantite,prix,client,date_c,type_paye,type_transport,statut)
												VALUES('','guirlande','id_guirland','$id_prod','$quantite','$prix','$email',NOW(),'$paye_group','$trans_groupb','en cours')")or die('ca marche pas');
											endforeach;
										}
//====================>guirlande2<======================//
										if (($_SESSION['guirlande2'])) {
											$id_prod_guirlande2 = array_keys($_SESSION['guirlande2']);
											$produites = (implode("','", $id_prod_guirlande2));
											$guirlandes = $db->query("SELECT * FROM longueur_guirlande	WHERE id_longueur  IN ('$produites') ");


											foreach ($guirlandes as $guirlande2):
												$id_prod = $guirlande2['id_longueur'];
											$quantite = $_SESSION['guirlande2'][$guirlande2['id_longueur']];
											$prix= $_SESSION['guirlande2'][$guirlande2['id_longueur']]*$guirlande2['prix'];

											$query = $db->query("INSERT INTO commandes(id_c,catheguorie,name_id,id_prod,quantite,prix,client,date_c,type_paye,type_transport,statut)
												VALUES('','longueur_guirlande','id_longueur','$id_prod','$quantite','$prix','$email',NOW(),'$paye_group','$trans_groupb','en cours')")or die('ca marche pas');
											endforeach;
										}
										$_SESSION['elki']=array();
										$_SESSION['elki2']=array();
										$_SESSION['ballon']=array();
										$_SESSION['ballon2']=array();
										$_SESSION['jeux']=array();
										$_SESSION['jeux2']=array();
										$_SESSION['guirlande']=array();
										$_SESSION['guirlande2']=array();

										$_SESSION['type_paye'] =array();
										$_SESSION['type_transport'] = array();

										include('sms/new_commade.php');
										include('sms/confirme_commande.php');
										header("Location:index.php?page=my_commades");

									}
								}else{
									header("Location:index.php?page=login");
								}


							}else{echo "<div class='message alert'>Выбирайте пожалуйсто Способ доставки!</div>";}

						}else{echo "<div class='message alert'>Выбирайте  пожалуйсто Способ оплаты!</div>";}
					}//end ver session[admin]
				}
//==========>ENDTraitement<===================//
				?>





				<table class="table table-striped">
					<tr class="n_title">
						<thead>
							<th>Фото</th>
							<th>Артикул</th>
							<th>Товар</th>
							<th>Ценна</th>
							<th>Количество</th>
							<th></th>
						</thead>
					</tr>
					<!--=====================================>Afficher elki<======================================-->
					<?php foreach ($id_s as $id):?>
						<tr>
							<td class='p_img'><img src="images/<?php echo $id['imgs']; ?>" alt="img">	</td>
							<td class="numero"><?php echo $id['numero'];?></td>
							<td  class="prodoct_name"><?= $id['nom'];?>"</td>
							<td class="price "><?php echo $id['prix_fa']*$_SESSION['elki'][$id['id_eldki']];?> p</td>
							<td class="quantite ">
								<div class="z_commande_pb_quantite z_cpb">
									<form method="POST">
										<span class="plus_q up_quantiter" id="<?=$id['id_eldki'];?>@@plus@@elki">+</span>&nbsp;&nbsp;
										<input type="text" value="<?= $_SESSION['elki'][$id['id_eldki']];?>" name="nbr" class="value_q" id="<?=$id['id_eldki'];?>@@elki">
										<label >шт</label>&nbsp;&nbsp;<span class="moin_q up_quantiter" id="<?=$id['id_eldki'];?>@@moin@@elki">-</span>
									</form>
								</div>
							</td>			
							<td ><a href="#" class="delet_prod" id="<?=$id['id_eldki'];?>@elki"><i class="fa fa-times-circle "></i></a></td>
						</tr>
					<?php endforeach;  ?>
					
					<!--=====================================>Afficher elki2<======================================-->
					<?php foreach ($id_s2 as $id2):?>
						<tr>
							<td class='p_img'><img src="images/<?php echo $id2['image']; ?>" alt="img">	</td>
							<?php
							$idelki = $id2['id_elki'];
							$elkii2s = $db->query("SELECT * FROM elki	WHERE id_eldki = '$idelki' "); 
							foreach ($elkii2s  as $elkii2):
								?>
							<td class="numero"><?php echo $elkii2['numero'];?></td>
							<td  class="prodoct_name"><?= $elkii2['nom'];?>"</td>
						<?php endforeach;  ?>
						<td class="price "><?php echo $id2['prix']*$_SESSION['elki2'][$id2['id_telki']];?> p</td>
						<td class="quantite ">
							<div class="z_commande_pb_quantite z_cpb">
								<form method="POST">
									<span class="plus_q up_quantiter" id="<?=$id2['id_telki'];?>@@plus@@elki2">+</span>&nbsp;&nbsp;
									<input type="text" value="<?= $_SESSION['elki2'][$id2['id_telki']];?>" name="nbr" class="value_q" id="<?=$id2['id_telki'];?>@@elki2">
									<label >шт</label>&nbsp;&nbsp;<span class="moin_q up_quantiter" id="<?=$id2['id_telki'];?>@@moin@@elki2">-</span>
								</form>
							</div>
						</td>			
						<td ><a href="#" class="delet_prod" id="<?=$id2['id_telki'];?>@elki2"><i class="fa fa-times-circle "></i></a></td>
					</tr>
				<?php endforeach;  ?>

				<!--=====================================>Afficher Ballon<======================================-->
				<?php foreach ($id_sb as $id):?>
					<tr>
						<td class='p_img'><img src="images/<?php echo $id['image']; ?>" alt="img">	</td>
						<td class="numero"><?php echo $id['numero'];?></td>
						<td  class="prodoct_name"><?= $id['nom'];?>"</td>
						<td class="price "><?php echo $id['prix']*$_SESSION['ballon'][$id['id_ballon']];?> p</td>
						<td class="quantite ">
							<div class="z_commande_pb_quantite z_cpb">
								<form method="POST">
									<span class="plus_q up_quantiter" id="<?=$id['id_ballon'];?>@@plus@@ballon">+</span>&nbsp;&nbsp;
									<input type="text" value="<?= $_SESSION['ballon'][$id['id_ballon']];?>" name="nbr" class="value_q" id="<?=$id['id_ballon'];?>@@ballon">
									<label >шт</label>&nbsp;&nbsp;<span class="moin_q up_quantiter" id="<?=$id['id_ballon'];?>@@moin@@ballon">-</span>
								</form>
							</div>
						</td>			
						<td ><a href="#" class="delet_prod" id="<?=$id['id_ballon'];?>@ballon"><i class="fa fa-times-circle "></i></a></td>
					</tr>
				<?php endforeach;  ?>

				<!--=====================================>Afficher Guirlande<======================================-->
				<?php foreach ($id_gs as $idg):?>
					<tr>
						<td class='p_img'><img src="images/<?php echo $idg['imgs']; ?>" alt="img">	</td>
						<td class="numero"><?php echo $idg['numero'];?></td>
						<td  class="prodoct_name"><?= $idg['nom'];?>"</td>
						<td class="price "><?php echo $idg['prix_fa']*$_SESSION['guirlande'][$idg['id_guirland']];?> p</td>
						<td class="quantite ">
							<div class="z_commande_pb_quantite z_cpb">
								<form method="POST">
									<span class="plus_q up_quantiter" id="<?=$idg['id_guirland'];?>@@plus@@guirlande">+</span>&nbsp;&nbsp;
									<input type="text" value="<?= $_SESSION['guirlande'][$idg['id_guirland']];?>" name="nbr" class="value_q" id="<?=$idg['id_guirland'];?>@@guirlande">
									<label >шт</label>&nbsp;&nbsp;<span class="moin_q up_quantiter" id="<?=$idg['id_guirland'];?>@@moin@@guirlande">-</span>
								</form>
							</div>
						</td>			
						<td ><a href="#" class="delet_prod" id="<?=$idg['id_guirland'];?>@guirlande"><i class="fa fa-times-circle "></i></a></td>
					</tr>
				<?php endforeach;  ?>
				<!--=====================================>Afficher Guirlande2<======================================-->
				<?php foreach ($id_g2s as $idg2):?>
					<tr>
						<td class='p_img'><img src="images/<?php echo $idg2['image']; ?>" alt="img">	</td>
						<?php
						$idguir = $idg2['id_guirland'];
						$guirlande2s = $db->query("SELECT * FROM guirlande	WHERE id_guirland = '$idguir' "); 
						foreach ($guirlande2s  as $guirlande2):
							?>
						<td class="numero"><?php echo $guirlande2['numero'];?></td>
						<td  class="prodoct_name"><?= $guirlande2['nom'];?>"</td>
					<?php endforeach;  ?>
					<td class="price "><?php echo $idg2['prix']*$_SESSION['guirlande2'][$idg2['id_longueur']];?> p</td>
					<td class="quantite ">
						<div class="z_commande_pb_quantite z_cpb">
							<form method="POST">
								<span class="plus_q up_quantiter" id="<?=$idg2['id_longueur'];?>@@plus@@guirlande2">+</span>&nbsp;&nbsp;
								<input type="text" value="<?= $_SESSION['guirlande2'][$idg2['id_longueur']];?>" name="nbr" class="value_q" id="<?=$idg2['id_longueur'];?>@@guirlande2">
								<label >шт</label>&nbsp;&nbsp;<span class="moin_q up_quantiter" id="<?=$idg2['id_longueur'];?>@@moin@@guirlande2">-</span>
							</form>
						</div>
					</td>			
					<td ><a href="#" class="delet_prod" id="<?=$idg2['id_longueur'];?>@guirlande2"><i class="fa fa-times-circle "></i></a></td>
				</tr>
			<?php endforeach;  ?>
			<!--=====================================>Afficher jeux<======================================-->
			<?php foreach ($id_js as $id):?>
				<tr>
					<td class='p_img'><img src="images/<?php echo $id['imgs']; ?>" alt="img">	</td>
					<td class="numero"><?php echo $id['numero'];?></td>
					<td  class="prodoct_name"><?= $id['nom'];?>"</td>
					<td class="price "><?php echo $id['prix_fa']*$_SESSION['jeux'][$id['id_jeux']];?> p</td>
					<td class="quantite ">
						<div class="z_commande_pb_quantite z_cpb">
							<form method="POST">
								<span class="plus_q up_quantiter" id="<?=$id['id_jeux'];?>@@plus@@jeux">+</span>&nbsp;&nbsp;
								<input type="text" value="<?= $_SESSION['jeux'][$id['id_jeux']];?>" name="nbr" class="value_q" id="<?=$id['id_jeux'];?>@@jeux">
								<label >шт</label>&nbsp;&nbsp;<span class="moin_q up_quantiter" id="<?=$id['id_jeux'];?>@@moin@@jeux">-</span>
							</form>
						</div>
					</td>			
					<td ><a href="#" class="delet_prod" id="<?=$id['id_jeux'];?>@jeux"><i class="fa fa-times-circle "></i></a></td>
				</tr>
			<?php endforeach;  ?>





		</table>
		<div class="panier-prix-total">
			<?php 
			function total(){
				global $db;
				$total = 0;
				$idprt = array_keys($_SESSION['elki']);
				$produites = (implode("','", $idprt));
				$totales = $db->query("SELECT id_eldki , prix_fa  FROM elki WHERE id_eldki IN ('$produites') ");
				foreach ($totales as $totale) {
					$total += $totale['prix_fa']*$_SESSION['elki'][$totale['id_eldki']];
				}
				return $total;
			} 
			function total2(){
				global $db;
				$total2 = 0;
				$idprt = array_keys($_SESSION['elki2']);
				$produites = (implode("','", $idprt));
				$totales = $db->query("SELECT id_telki , prix  FROM taille_elki WHERE id_telki IN ('$produites') ");
				foreach ($totales as $totale) {
					$total2 += $totale['prix']*$_SESSION['elki2'][$totale['id_telki']];
				}
				return $total2;
			}

			function total_b(){
				global $db;
				$total_b = 0;
				$idprt_b = array_keys($_SESSION['ballon']);
				$produites = (implode("','", $idprt_b));
				$totales = $db->query("SELECT id_ballon , prix  FROM ballons WHERE id_ballon IN ('$produites') ");
				foreach ($totales as $totale) {
					$total_b += $totale['prix']*$_SESSION['ballon'][$totale['id_ballon']];
				}
				return $total_b;
			} 

			function total_j(){
				global $db;
				$total_j = 0;
				$idprt_j = array_keys($_SESSION['jeux']);
				$produites = (implode("','", $idprt_j));
				$totales = $db->query("SELECT id_jeux , prix_fa  FROM jeux WHERE id_jeux IN ('$produites') ");
				foreach ($totales as $totale) {
					$total_j += $totale['prix_fa']*$_SESSION['jeux'][$totale['id_jeux']];
				}
				return $total_j;
			} 

			function total_j2(){
				global $db;
				$total_j2 = 0;
				$idprt_j2 = array_keys($_SESSION['jeux2']);
				$produites = (implode("','", $idprt_j2));
				$totales = $db->query("SELECT id_color , prix  FROM couleur_jeux WHERE id_color IN ('$produites') ");
				foreach ($totales as $totale) {
					$total_j2 += $totale['prix']*$_SESSION['jeux2'][$totale['id_color']];
				}
				return $total_j2;
			} 

			function total_g(){
				global $db;
				$total_g = 0;
				$idprt_g = array_keys($_SESSION['guirlande']);
				$produites = (implode("','", $idprt_g));
				$totales = $db->query("SELECT id_guirland , prix_fa  FROM guirlande WHERE id_guirland IN ('$produites') ");
				foreach ($totales as $totale) {
					$total_g += $totale['prix_fa']*$_SESSION['guirlande'][$totale['id_guirland']];
				}
				return $total_g;
			} 
			function totalg2(){
				global $db;
				$totalg2 = 0;
				$idprt = array_keys($_SESSION['guirlande2']);
				$produites = (implode("','", $idprt));
				$totales = $db->query("SELECT id_longueur , prix  FROM longueur_guirlande WHERE id_longueur IN ('$produites') ");
				foreach ($totales as $totale) {
					$totalg2 += $totale['prix']*$_SESSION['guirlande2'][$totale['id_longueur']];
				}
				return $totalg2;
			}
			?>

			<p class="price_t"> Товаров на сумму: <span><?php $total_pace = print_r(total() + total2() + total_b() + total_j() + total_j2() + total_g() + totalg2());?> руб</span></p>

		</div>
		<hr/>
		<div class="form_panier">
			<form method="POST">
				<div class="choix_p_t">
					<h2>Выбрать Способ оплаты </h2>
					<div class="cadrre">
						<div class="form-group">
							<div class="img_cadrre">
								<img src="images/img_cache.png" alt="img_cache">
							</div>
							<div class="choix_trans ">
								<div class="opt">
									<input id="rad1" name="paye_group" type="radio" value="Наличными при получении"  <?= $chk1 ?>/> <label for="rad1">Наличными при получении </label>
								</div>
								<div class="opt">
									<input id="rad2" name="paye_group" type="radio" value="Оплата картами Visa/MasterCard"  <?= $chk2 ?>/> <label for="rad2">Оплата картами Visa/MasterCard</label>
								</div>
								<div class="opt">
									<input id="rad3" name="paye_group" type="radio" value="Квитанцией через Сбербанк"  <?= $chk3 ?>/> <label for="rad3">Квитанцией через Сбербанк</label>
								</div>
								<div class="opt">
									<input id="rad4" name="paye_group" type="radio" value="Яндекс Деньги"  <?= $chk4 ?>/> <label for="rad4">Яндекс Деньги</label>
								</div>
								<div class="opt">
									<input id="rad5" name="paye_group" type="radio" value="Webmoney"  <?= $chk5 ?>/> <label for="rad5">Webmoney</label>
								</div>

							</div>

						</div>
					</div>

					<h2>Выбрать Способ доставки</h2>
					<div class="cadrre">
						<div class="form-group">
							<div class="img_cadrre ">
								<img src="images/car.png" alt="car">
							</div>
							<div class="choix_trans ">
								<div class="opt">
									<input id="rad1b" name="trans_groupb" type="radio" value="Доставка курьером по городу и области" <?= $chke1 ?>/> <label for="rad1b">Доставка курьером по городу и области</label>
								</div>
								<div class="opt">
									<input id="rad2b" name="trans_groupb" type="radio" value="Самовывоз со склада (Посмотреть на карте)" <?= $chke2 ?>/> <label for="rad2b">Самовывоз со склада (Посмотреть на карте)</label>
								</div>
								<div class="opt">
									<input id="rad3b" name="trans_groupb" type="radio" value="Доставка транспортной компанией" <?= $chke3 ?>/> <label for="rad3b">Доставка транспортной компанией</label>
								</div>
								<div class="opt">
									<input id="rad4b" name="trans_groupb" type="radio" value="Доставка до пункта выдачи (по России)" <?= $chke4 ?>/> <label for="rad4b">Доставка до пункта выдачи (по России) </label>
								</div>
								<div class="opt">
									<input id="rad5b" name="trans_groupb" type="radio" value="Курьерская служба (EMS Почта)" <?= $chke5 ?>/> <label for="rad5b">Курьерская служба (EMS Почта)</label>
								</div>

							</div>

						</div>
					</div>

				</div>
				<div class="panier-btn"  ><button type="submit" name="save_commande">Оформить заказ</button></div>
			</form>
		</div>

	</div>

	<?php 
}else{
	echo "</div><div class='sms_panier_vide'>Корзина Пуста!</div>";

}

}else{
	echo "</div><div class='sms_panier_vide'>Корзина Пуста!</div>";
}

?>
</div>
