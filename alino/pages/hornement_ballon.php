<?php include('template/nav_catalogue.php'); ?>
<?php include('functions/pagination_ballon.func.php'); ?>
<?php include('functions/fitre.func.php'); ?>
<div class="block_ctalogue_nav">
	<div class="catalogue_title">
		<h2>ЕЛОЧНЫЕ ИГРУШКИ</h2>
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
							<label >По Диаметру</label>
							<input type="text" class="min_price" name="min_dyametre" placeholder="OT">
							<input type="text" class="max_price" name="max_dyametre" placeholder="ДО">
						</div>
					</div>
					<div class="btn_filtr">
						<button name="fitr_ballon" type="submit">НАЙТИ</button>
					</div>
				</form>

			</div>
			<?php echo '<div class="pagination_bcn espace_top">'.$pagination.'</div>'; ?>
		</div>

		<div class="content_bcn" >
			<?php include('formulaires/control_formadmin.php'); ?>

			<?php 
			//FILTRE
			if(isset($_POST['fitr_ballon'])){
				extract($_POST);

//=============================================================>FILTRE GENERAL

				if((!empty($min_price)) || (!empty($max_price)) || (!empty($min_dyametre)) || (!empty($max_dyametre))){
					$resultat_ballons = filtr_ballon($min_price,$max_price,$min_dyametre,$max_dyametre);
					?>
					<div class="catalogue_type" >
						<div class="row_catalogue_type ">
							<?php foreach($resultat_ballons as $resultat_ballon): ?>

								<div class="Z_prodoct_blck2">
									<div class="z_pb">
										<div class="z_img_pb">
											<img src="images/<?= $resultat_ballon['image'];?>" alt="img_111">
										</div>
										<div class="z_info_pb">
											<p class="name_product"><?= $resultat_ballon['nom'];?> </p>
											<p class="taille_product">
												<small>Диаметр:
													<?php if( $resultat_ballon['dyametre']== 0 ){
														echo " Не указан ! ";
														} else{
															echo $resultat_ballon['dyametre'] ." см ";
														}
													?>
												 </small> 
											</p>
										</div>

										<div class="z_commande_pb">
											<div class="z_commande_pb_price z_cpb">
												<p> <?= $resultat_ballon['prix'];?>  руб</p>
											</div>
											<div class="z_commande_pb_quantite zcpbH ">
												<form method="POST" >
												<div class="zcpbH2" >
													<input type="text" value="1" name="nbr" id="nbr">
													<label for="nbr">шт</label>
												</div>
													
													<div class="zcpbHbtn">
													<a href="<?= $resultat_ballon['id_ballon'];?>"  class="cache_inf">
															<input type="text" name="prodt" value="<?= $resultat_ballon['id_ballon'];?>">
														</a>
														<button class="z_cpb_btn z_cpb_btn_ballon" name="z_cpb_btn_ballon">В корзину</button>

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
									<img src="images/'.$data['image'].'" alt="img_111">
								</div>
								<div class="z_info_pb">
									<p class="name_product"> '.$data['nom'].' </p>
									<p class="taille_product">
										<small> Диаметр: '.$data['dyametre'].' см  </small> 
										<a href="index.php?page=dev_prod_ballon&&id_ballon='.$data['id_ballon'].'"> Подробнее...</a>
									</p>
									<span>'.$data['numero'].'</span>
								</div>
								<div class="z_commande_pb">
									<div class="z_commande_pb_price z_cpb">
										<p> '.$data['prix'].'руб</p>
									</div>
									<div class="z_commande_pb_quantite z_cpb">
										<form method="POST">
											<input type="text" value="1" name="nbr" id="nbr">
											<label for="nbr">шт</label>

										</div>
										<div class="z_commande_pb_btn z_cpb">
											<a href="'.$data['id_ballon'].'"  class="cache_inf">
												<input type="text" name="prodt" value="'.$data['id_ballon'].'">
											</a>
											<button class="z_cpb_btn z_cpb_btn_ballon" name="z_cpb_btn_ballon">В корзину</button>

										</div>
									</form>
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