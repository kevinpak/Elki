<!--====id="p_zi01type"====-->
<?php include('template/nav_catalogue.php'); ?>
<?php include('formulaires/control_formadmin.php'); ?>
<div class="block_gene_dev" id="dev_sapin_01">
	<?php $caracteristque_jeux_choisirs = caracteristque_jeux_choisir(); ?>
	<?php $detail_jeux_choisirs = detail_jeux_choisir(); ?>
	<?php foreach($detail_jeux_choisirs as $detail_jeux_choisir): ?>
		<div class="dev_prodoct_title">
			<h2>Мишура Morozco  "<?= $detail_jeux_choisir['nom'];?>"</h2>
		</div>
		<div class="content_bgd" >
			<!--====nivo1"====-->
			<div class="block_1_bgd " >
				<div class="block_1_bgd_left ">
					<div class="z_etoile">
						<img src="images/etoile.png" alt="etoile">
						<img src="images/etoile.png" alt="etoile">
						<img src="images/etoile.png" alt="etoile">
						<img src="images/etoile.png" alt="etoile">
						<img src="images/etoile.png" alt="etoile">
					</div>
					<div class="img_bgd ">
						<img src="images/<?= $detail_jeux_choisir['imgs'];?>" alt="img_111">
					</div>
					<div class="panel_bgd">	
						<div class="z_commande_pb">
							<div class="z_commande_pb_quantite z_bgd ">
								<form method="POST">
									<input type="text" value="1" name="nbr" id="nbr">
									<label for="nbr">шт</label>
								</form>

								<div class="z_commande_pb_bgd ">
									<button class="z_bgd_btn">В корзину</button>
								</div>

							</div>

							<div class="z_commande_pb_bgd_btn z_bgd ">
								<button class="z_cpbbgd_btn">Оформить заказ</button>
							</div>
						</div>
					</div>
				</div>
				<div class="block_1_bgd_right ">
					<div class="z_infos_bgd_block1">
						<div class="z_inf_p1  zinf ">
							<h5>Артикул: </h5> 
							<span><?= $detail_jeux_choisir['numero'];?></span>
						</div>
						<div class="z_inf_p2 zinf">
							<h5>Изготовитель: </h5> 
							<span><?= $detail_jeux_choisir['preparation'];?></span>
						</div>
						<div class="z_inf_p3 zinf">
							<h5>Страна: </h5> 
							<span><?= $detail_jeux_choisir['pays'];?></span> 
						</div>
						<div class="z_inf_p4 zinf">
							<h5>Цена: </h5> 
							<span><?= $detail_jeux_choisir['prix_fa'];?> руб </span> 
						</div>
						<div class="z_inf_p5 zinf">
							<h5>Цвет: </h5> 
							<span><?= $detail_jeux_choisir['couleur_fa'];?></span>
						</div>
					</div>
					<div class="z_infos_bgd_block2 ">
						<h5>Характеристики: </h5>
						<table class="table-striped">
							
							<tr>  
								<td class="active">Диаметр, см </td>
								<td class="success"><?= $detail_jeux_choisir['dyametre'];?></td>
							</tr>
							<tr>
								<td class="active">Длина, см </td>
								<td class="success"><?= $detail_jeux_choisir['longueur'];?></td>
							</tr>
							<tr>
								<td class="active">Количество слоёв </td>
								<td class="success"><?= $detail_jeux_choisir['nbr_corde'];?></td>
							</tr>
						</table>
					</div>
					<div class="z_infos_bgd_block3">
						<h5>Посмотреть другие цвета: </h5>
						<div class="content-type_taille">
							<?php foreach($caracteristque_jeux_choisirs as $caracteristque_jeux_choisir): ?>
								<div class="cara_taille"> 
									<a href="#&&<?= $caracteristque_jeux_choisir['color'];?>&&<?= $caracteristque_jeux_choisir['prix'];?>&&<?= $caracteristque_jeux_choisir['image'];?>">
										<?= $caracteristque_jeux_choisir['color'];?></a></div>                             
									<?php endforeach; ?>
								</div>
							</div>

						</div>
					</div>
					<!--====nivo2"====-->
					<div class="block_2_bgd" >
						<h4>Описание</h4>
						<p>
							<?= $detail_jeux_choisir['commentair'];?> 
						</p>
					</div>
				<?php endforeach; ?>
				<!--====nivo2"====-->
				<div class="block_3_bgd" >
					<h4>Отзывы</h4>
					<div class="z_commentairs">
						<!--commentair1-->
						<?php 

						$commentairs = recuperer_commentair_jeux();

						?>
						<?php foreach ($commentairs as $commentair) :?>
							<div class="commentair">
								<div class="point_c">
									<div class="z_etoile_b3">
										<?php 
											if($commentair['poind'] == 1) {
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
											}
											if($commentair['poind'] == 2) {
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
											}
											if($commentair['poind'] == 3) {
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
											}
											if($commentair['poind'] == 4) {
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
											}
											if($commentair['poind'] == 5) {
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
												echo "<img src=\"images/etoile.png\" alt=\"etoile\">";
											}
										?>
									</div>
								</div>
								<div class="apreciation">
									<h6><?=  $commentair['title']?></h6>
									<p class="auteur_date"><?=  $commentair['auteur']?>, <?=  $commentair['date_c']?>.</p>
									<p class="commentair_text">
										<?=  $commentair['commentaire']?>
									</p>
								</div>
							</div>
						<?php endforeach; ?>
						<!--Forme commentair-->
						<div class="incl_form_comment" >
							<div class="forme_commentair" >
								<div class="choix_point">
									<div class="cont_etoil">
										<div class="etoil bg_etoile" id="etoil1"></div>
										<div class="etoil bg_etoile" id="etoil2"></div>
										<div class="etoil bg_etoile" id="etoil3"></div>
										<div class="etoil bg_etoile" id="etoil4"></div>
										<div class="etoil bg_etoile" id="etoil5"></div>
									</div>

									<p> Ваша оценка</p>
								</div>
								<div class="edit_commentair">
									<form method="POST">
										<div class="cache_inf">
											<input type="text" name="poind">
											<input type="text" name="name_prod" value="jeux">
										</div>
										<div class="form-group">
											<label for="autor">ФИО</label>
											<input type="text" name="autor" id="autor" placeholder="Бондаренко М.А.">
											<input type="hidden" name="pnt"  value='5' id="pnt">
										</div>
										<div class="form-group">
											<label for="title_commentair">Название</label>
											<input type="text" name="title_commentair" id="title_commentair" placeholder="КАЧЕСТВЕННАЯ, ПУШИСТАЯ И КРАСИВАЯ ЕЛЬ.">

										</div>
										<div class="form-group">
											<textarea name="commentair" id="commenter" cols="30" rows="10">Написать отзыв</textarea>
										</div>
										<div class="btn_send_comment">
											<button class="btn_sc" name="com_jeux">Оставить отзыв</button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>