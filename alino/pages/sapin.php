<?php include('template/nav_catalogue.php'); ?>
<?php include('functions/pagination.func.php'); ?>
<?php include('functions/fitre.func.php'); ?>
<div class="block_ctalogue_nav">
	<div class="catalogue_title">
		<h2> искусственные елки</h2>
	</div>
	<div class="block_gene" id="type_p_zi01">
		<div class="aleration"></div>


		

		<div class="control_bcn ">
			<div class="fitre_bcn">
				<form method="POST" class="redd">
					<div class="form-group">
						<h5>Сортировать: </h5>
						<div class="block_f">
							<label >По цене</label>
							<input type="text" class="min_price" name="min_price" placeholder="OT">
							<input type="text" class="max_price" name="max_price" placeholder="ДО">
						</div>
						<div class="block_f">
							<label >По высоте</label>
							<input type="text" class="min_price" name="min_taille" placeholder="OT">
							<input type="text" class="max_price" name="max_taille" placeholder="ДО">
						</div>
					</div>
					<div class="btn_filtr">
						<button name="fitr" type="submit">НАЙТИ</button>
					</div>
				</form>

			</div>
			<?php echo '<div class="pagination_bcn espace_top">'.$pagination.'</div>'; ?>
		</div><!--fin zone pagination-->





		<div class="content_bcn" >
			<?php include('formulaires/control_formadmin.php'); ?>
			
			<?php 
			//FILTRE
			if(isset($_POST['fitr'])){
				extract($_POST);

//=============================================================>FILTRE GENERAL
				if((!empty($min_price)) || (!empty($max_price)) || (!empty($min_taille)) || (!empty($max_taille))){
					$resultat_elkis = filtr_elki($min_price,$max_price,$min_taille,$max_taille);
					
					?>
					<div class="catalogue_type" >
						<div class="row_catalogue_type ">
							<?php foreach($resultat_elkis as $resultat_elki): ?>
								<div class="Z_prodoct_blck2">
									<div class="z_pb">
										<div class="z_img_pb">
											<img src="images/<?=$resultat_elki['image'];?>" alt="img_111">
										</div>
										<div class="z_info_pb">
											<p class="name_product">Искусственная елка</p>
											<p class="taille_product">
												<small>Высота: <?= $resultat_elki['taille'];?> м</small> 
											</p>
										</div>
										
										<div class="z_commande_pb">
											<div class="z_commande_pb_price z_cpb">
												<p> <?= $resultat_elki['prix'];?>  руб</p>
											</div>
											<div class="z_commande_pb_quantite zcpbH ">
												<form method="POST" >
												<div class="zcpbH2" >
													<input type="text" value="1" name="nbr" id="nbr">
													<label for="nbr">шт</label>
												</div>
													
													<div class="zcpbHbtn">
													<a href="<?= $resultat_elki['id_telki'];?>"  class="cache_inf">
															<input type="text" name="prodt" value="<?= $resultat_elki['id_telki'];?>">
														</a>
														<button class="z_cpb_btn z_cpb_btn_elki" name="z_cpb_btn_elki2">В корзину</button>

													</div>
												</form>
											</div>
										</div>

									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<?php
				}else{echo '<div class="alert_filtr info_alert">Все поля пусты!</div>'; }

			}else{

			?>




			<!--====id="p_zi01type"====-->
			<!--c-->
			<div class="catalogue_type" >
				<!--row1-->
				<div class="row_catalogue_type ">

					<!--b-->
					<?php  $req= $db->query($sql);

					while($data = $req->fetch()):?>
					<?php echo '
					<div class="Z_prodoct_blck2">
						<div class="z_pb">
							<div class="z_img_pb">
								<img src="images/'.$data['imgs'].'" alt="img_111">
							</div>
							<div class="z_info_pb">
								<p class="name_product">Искусственная елка '.$data['nom'].' </p>
								<p class="taille_product">
									<small> Высота: '.$data['taille_fa'].' м </small> 
									<a href="index.php?page=dev_prod_sapin&&id_el='.$data['id_eldki'].'"> Подробнее...</a>
								</p>
								<span>'.$data['numero'].'</span>
							</div>
							<div class="z_commande_pb">
								<div class="z_commande_pb_price z_cpb">
									<p> '.$data['prix_fa'].'руб</p>
								</div>
								<div class="z_commande_pb_quantite z_cpb">
									<form method="POST">
										<input type="text" value="1" name="nbr" id="nbr">
										<label for="nbr">шт</label>

									</div>
									<div class="z_commande_pb_btn z_cpb">
										<a href="'.$data['id_eldki'].'"  class="cache_inf">
											<input type="text" name="prodt" value="'.$data['id_eldki'].'">
										</a>
										<button class="z_cpb_btn z_cpb_btn_elki" name="z_cpb_btn_elki">В корзину</button>
									</form>
								</div>
							</div>
						</div>
					</div>
					'	?>
				<?php endwhile; ?>
				<!--b-->
			</div>
		</div>
		<!--c-->
		<?php }?>
	</div><!--fin content-->

	<div class="control_bcn cb_bas">
		<?php echo '<div class="pagination_bcn ">'.$pagination.'</div>'; ?>
	</div>

</div>
</div>