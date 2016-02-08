<?php include('formulaires/control_formadmin.php'); ?>
<?php include('functions/landing.func.php'); ?>
<div class="sortir_admin">
	<?php 
if(!isset($_SESSION['admin'])){//permet une redirection si on tente d'entrer sans se connecter
header("Location:index.php?page=connect_admin");
}

$query = $db->query("SELECT DISTINCT date_c FROM commandes WhERE statut= 'en cours' ");
$resultat = $query->rowCount();
?>
<div class="top_confi">
	<div class="panel_c">
		<p><a href="index.php?page=logout_admin">выйти</a></p>
		<p>Новые заказы: <span><a href="index.php?page=g_commade"><?= $resultat; ?></a></span></p>
	</div>
</div>

</div>
<div class="panel_admin">
	
	<div class="menu_panel_admin">
		<ul>
			<li class="block"><a href="#_zcpa1"><i class="fa fa-home"></i></a></li>
			<li><a href="#_zcpa2">Добавить ёлки</a></li>
			<li><a href="#_zcpa3">Добавить игрушки</a></li>
			<li><a href="#_zcpa4">Добавить гирлянды</a></li>
			<li><a href="#_zcpa5">Добавить мишуру</a></li>
			<li><a href="#_zcpa6">Добавить статьи</a></li>
			<li><a href="#_zcpa7">Изменить Фото</a></li>

		</ul>
	</div>
	<div class="content_panel_admin">
		<div class="title_cpa">
			<h2>Добро пожаловать</h2>
		</div>

		<div class="contente_pup">
			<div class="update_img b_dis">
				<a href="#" class="hide_ci" >×</a>
				<h5>Поменять описание</h5>
				<br/><br/>
				<form method="post" enctype="multipart/form-data" id="form_updante_comment">
					<div class="form-group">
						<input type="hidden" name="id_prdX" id="id_prdX">
						<input type="hidden" name="tableX" id="tableX">
						<input type="hidden" name="champX" id="champX">
						<textarea name="apisaniaX" id="apisaniaX"  cols="30" rows="10"></textarea>
					</div>
					<div class="btn_form">
						<button  name="upd_comment" type="submit">Изменить</button>
					</div>
				</form>
			</div>

			<div class="update_img2 b_dis">
				<a href="#" class="hide_ci" >×</a>
				<h5>Поменять данные</h5>
				<br/><br/>
				<form method="post" enctype="multipart/form-data" id="form_updante_info">
					<div class="form-group">
						<label for="imgXX">Фото</label>
						<input type="file" name="imgXX" id="imgXX">
						<label for="id_prdXX"></label>
						<input type="hidden" name="id_prdXX" id="id_prdXX">
						<label for="tableXX"></label>
						<input type="hidden" name="tableXX" id="tableXX">
						<label for="champXX"></label>
						<input type="hidden" name="champXX" id="champXX">
						<label for="priceXX">Цена</label>
						<input type="text" name="priceXX" id="priceXX">
						<label for="poindXX"></label>
						<input type="hidden" name="poindXX" id="poindXX">
					</div>
					<div class="btn_form">
						<button  name="upd_devPX" type="submit">Изменить</button>
					</div>
				</form>
			</div>

			<div class="update_img3 b_dis">
				<a href="#" class="hide_ci" >×</a>
				<h5>Поменять данные</h5>
				<br/><br/>
				<form method="post" enctype="multipart/form-data" id="form_updante_infoBallon">
					<div class="form-group">
						<label for="imgB">Фото</label>
						<input type="file" name="imgB" id="imgB">
						<label for="id_prdB"></label>
						<input type="hidden" name="id_prdB" id="id_prdB">
						<label for="priceB">Цена</label>
						<input type="text" name="priceB" id="priceB">
						<label for="diametreB">Диаметр</label>
						<input type="text" name="diametreB" id="diametreB">
						<label for="apisaniaB">Описание</label>
						<textarea name="apisaniaB" id="apisaniaB"  cols="30" rows="10"></textarea>
					</div>
					<div class="btn_form">
						<button  name="upd_infoballon" type="submit">Изменить</button>
					</div>
				</form>
			</div>
		</div>

		<!--=====ACCEUIL======-->
		<div class="z_cpa block" id="zcpa1">
			
			<div class="content_zcpa1">
				<!--elki-->
				<div class="blok_zcpa1 ">
					<h4>ёлки</h4>
					<?php $GENE_elkis = all_elki_GENE(); ?>
					<ul>
						<?php foreach($GENE_elkis as $GENE_elki): ?>
							<li class="listLI">
								<div class="cnt_bzcpa">
									<div class="b_G bhp">
										<div class="img_prd ">
											<img src="images/<?= $GENE_elki['imgs'];?>" alt="img">
										</div>
										<div class="cnt_prd ">

											<h5><?= $GENE_elki['nom'];?></h5>
											<p><?= $GENE_elki['numero'];?></p>
										</div>
									</div>
									<a href="#" id="<?= $GENE_elki['id_eldki'];?>@<?=$GENE_elki['commentair'];?>@elki@id_eldki" class="get_info1">Поменять описание</a>
								</div>
								<?php  $idG = $GENE_elki['id_eldki'];?>
								<?php $all_elki_GDs = all_elki_GD($idG); ?>
								<?php foreach($all_elki_GDs as $all_elki_GD): ?>
									<div class="des_list">
										<div class="cnt_bzcpa">
											<div class="img_prd">
												<img src="images/<?= $all_elki_GD['image'];?>" alt="img">
											</div>
											<div class="cnt_prd">
												<h5><?=$all_elki_GD['taille'];?> cm</h5>
												<h5><?= $all_elki_GD['prix'];?> руб</h5>
												<p><?= $all_elki_GD['poind'];?> кг</p>
											</div>
										</div>
										<a href="#" id="<?= $all_elki_GD['image'];?>@<?= $all_elki_GD['id_telki'];?>@id_telki@taille_elki@<?= $all_elki_GD['prix'];?>@<?= $all_elki_GD['poind'];?>" class="get_info2" >Изменить данные</a>
									</div>
								<?php endforeach; ?>
							</li>
						<?php endforeach; ?>
					</ul>

				</div>


				
				<!--ballon-->
				<div class="blok_zcpa1 ">
					
					<h4>игрушки</h4>
					<?php $all_ballons_GENEs = all_ballons_GENE(); ?>
					<?php foreach($all_ballons_GENEs as $all_ballons_GENE): ?>
						<div class="cnt_bzcpa">
							<div class="img_prd">
								<img src="images/<?= $all_ballons_GENE['image'];?>" alt="img">
							</div>
							<div class="cnt_prd">
								<h5><?= $all_ballons_GENE['nom'];?></h5>
								<p><h5><?= $all_ballons_GENE['numero'];?></h5></p>
							</div>
						</div>
						<a href="#" id="<?= $all_ballons_GENE['image'];?>@<?= $all_ballons_GENE['id_ballon'];?>@<?= $all_ballons_GENE['prix'];?>@<?= $all_ballons_GENE['dyametre'];?>@<?= $all_ballons_GENE['commentaire'];?>" class='get_infoballon'>Изменить данные</a>
					<?php endforeach; ?>
				</div>

				<!--guirlande-->
				<div class="blok_zcpa1">
					<h4>гирлянды</h4>
					<?php $GENE_guirlandes = all_guirlande_GENE(); ?>
					<ul>
						<?php foreach($GENE_guirlandes as $GENE_guirlande): ?>
							<li class="listLI">
								<div class="cnt_bzcpa">
									<div class="b_G bhp">
										<div class="img_prd ">
											<img src="images/<?= $GENE_guirlande['imgs'];?>" alt="img">
										</div>
										<div class="cnt_prd ">

											<h5><?= $GENE_guirlande['nom'];?></h5>
											<p><?= $GENE_guirlande['numero'];?></p>
										</div>
									</div>
									<a href="#" id="<?= $GENE_guirlande['id_guirland'];?>@<?=$GENE_guirlande['commentair'];?>@guirlande@id_guirland" class="get_info1">Поменять описание</a>
								</div>
								<?php  $idG = $GENE_guirlande['id_guirland'];?>
								<?php $all_guirlande_GDs = all_guirlande_GD($idG); ?>
								<?php foreach($all_guirlande_GDs as $all_guirlande_GD): ?>
									<div class="des_list">
										<div class="cnt_bzcpa">
											<div class="img_prd">
												<img src="images/<?= $all_guirlande_GD['image'];?>" alt="img">
											</div>
											<div class="cnt_prd">
												<h5><?=$all_guirlande_GD['longueur'];?></h5>
												<h5><?= $all_guirlande_GD['prix'];?> руб</h5>

											</div>
										</div>
										<a href="#" id="<?= $all_guirlande_GD['image'];?>@<?= $all_guirlande_GD['id_longueur'];?>@id_longueur@longueur_guirlande@<?= $all_guirlande_GD['prix'];?>@0" class="get_info2" >Изменить данные</a>
									</div>
								<?php endforeach; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>


				<!--michoura-->
				<div class="blok_zcpa1 ">
					<h4>мишура</h4>
					<?php $GENE_jeuxs = all_jeux_GENE(); ?>
					<ul>
						<?php foreach($GENE_jeuxs as $GENE_jeux): ?>
							<li class="listLI">
								<div class="cnt_bzcpa">
									<div class="b_G bhp">
										<div class="img_prd ">
											<img src="images/<?= $GENE_jeux['imgs'];?>" alt="img">
										</div>
										<div class="cnt_prd ">

											<h5><?= $GENE_jeux['nom'];?></h5>
											<p><?= $GENE_jeux['numero'];?></p>
										</div>
									</div>
									<a href="#" id="<?= $GENE_jeux['id_jeux'];?>@<?=$GENE_jeux['commentair'];?>@jeux@id_jeux" class="get_info1">Поменять описание</a>
								</div>
								<?php  $idG = $GENE_jeux['id_jeux'];?>
								<?php $all_jeux_GDs = all_jeux_GD($idG); ?>
								<?php foreach($all_jeux_GDs as $all_jeux_GD): ?>
									<div class="des_list">
										<div class="cnt_bzcpa">
											<div class="img_prd">
												<img src="images/<?= $all_jeux_GD['image'];?>" alt="img">
											</div>
											<div class="cnt_prd">
												<h5><?=$all_jeux_GD['color'];?></h5>
												<h5><?= $all_jeux_GD['prix'];?> руб</h5>

											</div>
										</div>
										<a href="#" id="<?= $all_jeux_GD['image'];?>@<?= $all_jeux_GD['id_color'];?>@id_color@couleur_jeux@<?= $all_jeux_GD['prix'];?>@0" class="get_info2" >Изменить данные</a>
									</div>
								<?php endforeach; ?>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>



			</div>
			
		</div>
		<!--=====ADD elki======-->
		<div class="z_cpa" id="zcpa2">

			<form method="post" enctype='multipart/form-data'>
				<div class="content_form">
					<div class="z_cpa_left">
						<div class="form-group">
							<label for="nom_elki">Назвоние:</label>
							<input type="text" name="nom_elki" id="nom_elki">
						</div>
						<div class="form-group">
							<label for="numero_elki">Артикул:</label>
							<input type="text" name="numero_elki" id="numero_elki">
						</div>
						<div class="form-group">
							<label for="preparation_elki">Изготовитель:</label>
							<input type="text" name="preparation_elki" id="preparation_elki">
						</div>
						<div class="form-group">
							<label for="pays_elki">Страна:</label>
							<input type="text" name="pays_elki" id="pays_elki">
						</div>

						<div class="form-group">
							<label for="type_elki">Тип хвои:</label>
							<input type="text" name="type_elki" id="type_elki">
						</div>
						<div class="form-group">
							<label for="naige_elki">Заснеженность:</label>
							<select name="naige_elki" id="naige_elki">
								<option value="отсутствует">отсутствует</option>
								<option value="есть">есть</option>
							</select>
						</div>
						<div class="form-group">
							<label for="hornement_elki">Материал подставки:</label>
							<input type="text" name="hornement_elki" id="hornement_elki">
						</div>
						<div class="form-group">
							<label for="chichki_elki">Шишки:</label>
							<select name="chichki_elki" id="chichki_elki">
								<option value="нет">нет</option>
								<option value="есть">есть</option>
							</select>
						</div>
						<div class="form-group">
							<label for="lamp_elki">Лампочки:</label>
							<select name="lamp_elki" id="lamp_elki">
								<option value="нет">нет</option>
								<option value="есть">есть</option>
							</select>
						</div>
						<div class="form-group">
							<label for="classe_elki">Класс елки:</label>
							<input type="text" name="classe_elki" id="classe_elki">
						</div>
						<hr/>
						<div class="form-group">
							<label for="imgs_elki">Картинка:</label>
							<input type="file" name="imgs_elki" id="imgs_elki">
						</div>
						<br/>
						<div class="form-group z_poster_elki">
							<label >POSTER:</label>
							<input type="text" name="taille_elkip" id="classe_elki" placeholder="Высота ">
							<input type="text" name="poind_elkip" id="classe_elki" placeholder="Вес, кг">
							<input type="text" name="prix_elkip" id="classe_elki" placeholder="Цена">
						</div>
					</div>


					<div class="z_cpa_right ">
						<table>
							<tr class="title_table">
								<thead>
									<th>Высота :</th>
									<th>Вес, кг</th>
									<th>Цена</th>
									<th>Изображение</th>
									<thead>
									</tr>
									<tr>
										<td>0,3  м</td>
										<td> <input type="text"  name="point_elki_1"></td>
										<td> <input type="text"  name="prix_elki_1"></td>
										<td> <img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td> 0,45  м </td>
										<td> <input type="text"  name="point_elki_2"></td>
										<td> <input type="text"  name="prix_elki_2"></td>
										<td> <img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td>0,6  м </td>
										<td><input type="text"  name="point_elki_3"></td>
										<td><input type="text"  name="prix_elki_3"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td>0,9 м</td>
										<td><input type="text"  name="point_elki_4"></td>
										<td><input type="text"  name="prix_elki_4"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td>1,2  м</td>
										<td><input type="text"  name="point_elki_5"></td>
										<td><input type="text"  name="prix_elki_5"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td>1,5  м </td>
										<td><input type="text"  name="point_elki_6"></td>
										<td><input type="text"  name="prix_elki_6"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td> 1,8м</td>
										<td><input type="text"  name="point_elki_7"></td>
										<td><input type="text"  name="prix_elki_7"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>

									<tr>
										<td>2,1 м</td>
										<td><input type="text"  name="point_elki_8"></td>
										<td><input type="text"  name="prix_elki_8"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td>2,4 м</td>
										<td><input type="text"  name="point_elki_9"></td>
										<td><input type="text"  name="prix_elki_9"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td>2,5 м</td>
										<td><input type="text"  name="point_elki_10"></td>
										<td><input type="text"  name="prix_elki_10"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>
									<tr>
										<td>3м</td>
										<td><input type="text"  name="point_elki_11"></td>
										<td><input type="text"  name="prix_elki_11"></td>
										<td><img src="images/img_111.png" alt="img_111"></td>
									</tr>

								</table>
								<div class="form-group opissania">
									<label for="commentaire_elki">ОПИСАНИЕ:</label>
									<textarea name="commentaire_elki" id="commentaire_elki" cols="30" rows="10"></textarea>
								</div>
							</div>
						</div>
						<div class="btn_form">
							<button  name="charge_elki" type="submit">Сохранить</button>
						</div>

					</form>
				</div>
				<!--Add ballon-->
				<div class="z_cpa" id="zcpa3">
					<form method="post" enctype='multipart/form-data'>
						<div class="content_form">
							<div class="z_cpa_left">
								<div class="form-group">
									<label for="nom_ballon">Название:</label>
									<input type="text" name="nom_ballon" id="nom_ballon">
								</div>
								<div class="form-group">
									<label for="numero_ballon">Артикул:</label>
									<input type="text" name="numero_ballon" id="numero_ballon">
								</div>
								<div class="form-group">
									<label for="preparation_ballon">Изготовитель:</label>
									<input type="text" name="preparation_ballon" id="preparation_ballon">
								</div>
								<div class="form-group">
									<label for="pays_ballon">Страна:</label>
									<input type="text" name="pays_ballon" id="pays_ballon">
								</div>
								<div class="form-group">
									<label for="dyametre_ballon">Диаметр:</label>
									<input type="text" name="dyametre_ballon" id="dyametre_ballon">
								</div>
								<div class="form-group">
									<label for="nombre_ballon">Штук в упаковке:</label>
									<input type="text" name="nombre_ballon" id="nombre_ballon">
								</div>
								<div class="form-group">
									<label for="couleur_ballon">Цвет:</label>
									<input type="text" name="couleur_ballon" id="couleur_ballon">
								</div>
							</div>


							<div class="z_cpa_right ">
								
								<div class="form-group">
									<label for="prix_ballon">Цена:</label>
									<input type="text" name="prix_ballon" id="prix_ballon">
								</div>
								<div class="form-group">
									<label for="imgs_ballon">	Изображение:</label>
									<input type="file" name="imgs_ballon" id="imgs_ballon">
								</div>
								<div class="form-group opissania">
									<label for="commentaire_ballon">ОПИСАНИЕ:</label>
									<textarea name="commentaire_ballon" id="commentaire_ballon" cols="30" rows="10"></textarea>
								</div>
							</div>
						</div>
						<div class="btn_form">
							<button  name="add_ballon" type="submit">Сохранить</button>
						</div>
					</form>
				</div>

				<!--Add guirland-->
				<div class="z_cpa" id="zcpa4">
					<form method="post" enctype='multipart/form-data'>
						<div class="content_form">
							<div class="z_cpa_left">
								<div class="form-group">
									<label for="nom_guirland">Название:</label>
									<input type="text" name="nom_guirland" id="nom_guirland">
								</div>
								<div class="form-group">
									<label for="numero_guirland">Артикул:</label>
									<input type="text" name="numero_guirland" id="numero_guirland">
								</div>
								<div class="form-group">
									<label for="preparation_guirland">Изготовитель:</label>
									<input type="text" name="preparation_guirland" id="preparation_guirland">
								</div>
								<div class="form-group">
									<label for="pays_guirland">Страна:</label>
									<input type="text" name="pays_guirland" id="pays_guirland">
								</div>

								<div class="form-group">
									<label for="couleur_guirland">Цвет провода:</label>
									<input type="text" name="couleur_guirland" id="couleur_guirland">
								</div>
								<div class="form-group">
									<label for="regime_guirland">Количество режимов:</label>
									<input type="text" name="regime_guirland" id="regime_guirland">
								</div>
								<hr/>
								<div class="form-group">
									<label for="imgs_guirlande">Изображение:</label>
									<input type="file" name="imgs_guirlande" id="imgs_guirlande">
								</div>
								<br/>
								<div class="form-group z_poster_elki">
									<label >POSTER:</label>
									<input type="text" name="longueur_guirlandep"  placeholder="Длина провода, см: ">
									<input type="text" name="nbr_lampe_guirlandep"  placeholder="Ко-тво ламп">
									<input type="text" name="prix_guirlandep"  placeholder="Цена">
								</div>
							</div>


							<div class="z_cpa_right ">
								<table>
									<tr class="title_table">
										<thead>
											<th>Длина провода, см:</th>
											<th>Цена</th>
											<th>Количество ламп</th>
											<th>Изображение</th>
											<thead>
											</tr>
											<tr>  
												<td>1 М</td>
												<td> <input type="text"  name="prix_guirland_1"></td>
												<td> <input type="text"  name="nbr_lampe_guirland_1"></td>
												<td> <img src="images/guirlandes.png" alt="guirland"></td>
											</tr>
											<tr>
												<td> 2 М </td>
												<td> <input type="text"  name="prix_guirland_2"></td>
												<td> <input type="text"  name="nbr_lampe_guirland_2"></td>
												<td> <img src="images/guirlandes.png" alt="guirland"></td>
											</tr>
											<tr>
												<td>6 М </td>
												<td><input type="text"  name="prix_guirland_3"></td>
												<td> <input type="text"  name="nbr_lampe_guirland_3"></td>
												<td><img src="images/guirlandes.png" alt="guirland"></td>
											</tr>                       
											<tr>
												<td> 8 М</td>
												<td><input type="text"  name="prix_guirland_4"></td>
												<td> <input type="text"  name="nbr_lampe_guirland_4"></td>
												<td><img src="images/guirlandes.png" alt="guirland"></td>
											</tr>
											<tr>
												<td> 10  М</td>
												<td><input type="text"  name="prix_guirland_5"></td>
												<td> <input type="text"  name="nbr_lampe_guirland_5"></td>
												<td><img src="images/guirlandes.png" alt="guirland"></td>
											</tr>
											<tr>
												<td> 12 М </td>
												<td><input type="text"  name="prix_guirland_6"></td>
												<td> <input type="text"  name="nbr_lampe_guirland_6"></td>
												<td><img src="images/guirlandes.png" alt="guirland"></td>
											</tr>

										</table>
										<div class="form-group opissania">
											<label for="commentaire_guirland">ОПИСАНИЕ:</label>
											<textarea name="commentaire_guirland" id="commentaire_guirland" cols="30" rows="10"></textarea>
										</div>
									</div>
								</div>
								<div class="btn_form">
									<button  name="add_guirland" type="submit">Сохранить</button>
								</div>

							</form>
						</div>

						<!--Add jeux-->
						<div class="z_cpa" id="zcpa5">
							<form method="post" enctype='multipart/form-data'>
								<div class="content_form">
									<div class="z_cpa_left">
										<div class="form-group">
											<label for="nom_jeux">Название:</label>
											<input type="text" name="nom_jeux" id="nom_jeux">
										</div>
										<div class="form-group">
											<label for="numero_jeux">Артикул:</label>
											<input type="text" name="numero_jeux" id="numero_jeux">
										</div>
										<div class="form-group">
											<label for="preparation_jeux">Изготовитель:</label>
											<input type="text" name="preparation_jeux" id="preparation_jeux">
										</div>
										<div class="form-group">
											<label for="pays_jeux">Страна:</label>
											<input type="text" name="pays_jeux" id="pays_jeux">
										</div>

										<div class="form-group">     
											<label for="dyametre_jeux">Диаметр, см:</label>
											<input type="text" name="dyametre_jeux" id="dyametre_jeux">
										</div>
										<div class="form-group">
											<label for="longueur_jeux">Длина, см:</label>
											<input type="text" name="longueur_jeux" id="longueur_jeux">
										</div>
										<div class="form-group">
											<label for="nbr_ligne_jeux">Количество слоёв:</label>
											<input type="text" name="nbr_ligne_jeux" id="nbr_ligne_jeux">
										</div>
										<hr/>
										<div class="form-group">
											<label for="imgs_jeux">Изображение:</label>
											<input type="file" name="imgs_jeux" id="imgs_jeux">
										</div>
										<br/>
										<div class="form-group z_poster_elki">
											<label >POSTER:</label>
											<input type="text" name="couleur_jeuxp"  placeholder="Цвет: ">
											<input type="text" name="prix_jeuxp"  placeholder="Цена">
										</div>
									</div>


									<div class="z_cpa_right ">
										<table>
											<tr class="title_table">
												<thead>
													<th>Цвет:</th>
													<th>Цена</th>
													<th>Изображение</th>
													<thead>
													</tr>
													<tr>  
														<td>Серебряный</td>
														<td> <input type="text"  name="prix_jeux_1"></td>
														<td> <img src="images/guirlandes_2b.png" alt="jeux"></td>
													</tr>
													<tr>
														<td> Красный </td>
														<td> <input type="text"  name="prix_jeux_2"></td>
														<td> <img src="images/guirlandes_2b.png" alt="jeux"></td>
													</tr>
													<tr>
														<td>Золотой </td>
														<td><input type="text"  name="prix_jeux_3"></td>
														<td><img src="images/guirlandes_2b.png" alt="jeux"></td>
													</tr>                       
													<tr>
														<td> Зелёный </td>
														<td><input type="text"  name="prix_jeux_4"></td>
														<td><img src="images/guirlandes_2b.png" alt="jeux"></td>
													</tr>
													<tr>
														<td> Синий</td>
														<td><input type="text"  name="prix_jeux_5"></td>
														<td><img src="images/guirlandes_2b.png" alt="jeux"></td>
													</tr>
													<tr>
														<td> Розовый </td>
														<td><input type="text"  name="prix_jeux_6"></td>
														<td><img src="images/guirlandes_2b.png" alt="jeux"></td>
													</tr>
													<tr>
														<td> Микс</td>
														<td><input type="text"  name="prix_jeux_7"></td>
														<td><img src="images/guirlandes_2b.png" alt="jeux"></td>
													</tr>

												</table>
												<div class="form-group opissania">
													<label for="commentaire_jeux">ОПИСАНИЕ:</label>
													<textarea name="commentair_jeux" id="commentair_jeux" cols="30" rows="10"></textarea>
												</div>
											</div>
										</div>
										<div class="btn_form">
											<button  name="add_jeux" type="submit">Сохранить</button>
										</div>

									</form>
								</div>


								<!--Add Statia-->
								<div class="z_cpa" id="zcpa6">
									<form method="post" enctype="multipart/form-data" >
										<div class="content_form statia">
											<div class="form-group">
												<label for="title_statia">заголовок:</label>
												<input type="text" name="title_statia" id="title_statia" >
											</div>

											<div class="form-group opissania ">
												<label for="text_statia">СТАТЬЯ:</label>
												<textarea name="text_statia" id="text_statia" cols="30" rows="10" ></textarea>
											</div>
											<div class="form-group">
												<label for="img_statia">Изображение:</label>
												<input type="file" name="img_statia" id="img_statia">
											</div>
										</div>
										<div class="btn_form">
											<button  name="add_statia" type="submit">Сохранить</button>
										</div>

									</form>
								</div>
								<!--ADD image gualery-->
								<div class="z_cpa" id="zcpa7">
									<div>
										<form method="post" enctype="multipart/form-data" >
											<div class="form-group">

												<label for="img_statia">Добавить изображение :</label>
												<input type="file" name="img_gul" id="img_foto1">
												<button  name="upd_imgG" type="submit">Добавить</button>
											</div>
										</form>
									</div>	
									<hr>

									<!--Update image slider-->
									<h5 class="titl_upS">Изменение  фото слайдера</h5>
									<div class="img_slider">
										<h6>фото 1</h6>
										<form method="post" enctype="multipart/form-data" >
											<div class="form-group">
												<label for="img_slider1">Изменять  фото  1:</label>
												<input type="file" name="img_slider1" id="img_slider1">
												
											</div>
											<div class="form-group">
												<label for="text_slider1">Текст  фото  1:</label>
												<textarea name="text_slider1" id="text_slider1" cols="30" rows="10"></textarea>
											</div>
											<button  name="upd_imgSlider1" type="submit">Изменять</button>
										</form>
										<h6>фото 2</h6>
										<form method="post" enctype="multipart/form-data" >
											<div class="form-group">
												<label for="img_slider2">Изменять  фото  2:</label>
												<input type="file" name="img_slider2" id="img_slider2">
											</div>
											<div class="form-group">
												<label for="text_slider2">Текст  фото  2:</label>
												<textarea name="text_slider2" id="text_slider2" cols="30" rows="10"></textarea>
											</div>
											<button  name="upd_imgSlider2" type="submit">Изменять</button>
										</form>
										<h6>фото 3</h6>
										<form method="post" enctype="multipart/form-data" >
											<div class="form-group">
												<label for="img_slider3">Изменять  фото  3:</label>
												<input type="file" name="img_slider3" id="img_slider3">
											</div>
											<div class="form-group">
												<label for="text_slider3">Текст  фото  3:</label>
												<textarea name="text_slider3" id="text_slider3" cols="30" rows="10"></textarea>
											</div>
											<button  name="upd_imgSlider3" type="submit">Изменять</button>
										</form>
										<h6>фото 4</h6>
										<form method="post" enctype="multipart/form-data" >
											<div class="form-group">
												<label for="img_slider4">Изменять  фото  4:</label>
												<input type="file" name="img_slider4" id="img_slider4">
											</div>
											<div class="form-group">
												<label for="text_slider4">Текст  фото  4:</label>
												<textarea name="text_slider4" id="text_slider4" cols="30" rows="10"></textarea>
											</div>
											<button  name="upd_imgSlider4" type="submit">Изменять</button>
										</form>
									</div>								
								</div>
								
							</div>
							<?php //include('formulaires/control_formadmin.php'); ?>
						</div>
					</div>