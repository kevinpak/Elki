<?php include('template/nav_catalogue.php'); ?>
<?php include('functions/pagination_guirlande.func.php'); ?>

<div class="block_ctalogue_nav">
	<div class="catalogue_title">
		<h2>гирлянды</h2>
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
							<label >По Длине</label>
							<input type="text" class="min_price" name="min_longueur" placeholder="OT">
							<input type="text" class="max_price" name="max_longueur" placeholder="ДО">
						</div>
					</div>
					<div class="btn_filtr">
						<button name="fitr" type="submit">НАЙТИ</button>
					</div>
				</form>
			</div>
			<?php echo '<div class="pagination_bcn ">'.$pagination.'</div>'; ?>
		</div><!--fin zone pagination-->







		<div class="content_bcn" >
			<?php include('formulaires/control_formadmin.php'); ?>

			
				<?php 
			//FILTRE
			if(isset($_POST['fitr'])){
				extract($_POST);

//=============================================================>FILTRE GENERAL
				if((!empty($min_price)) || (!empty($max_price)) || (!empty($min_longueur)) || (!empty($max_longueur))){
					?>
					
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
								<p class="name_product"> '.$data['nom'].' </p>
								<p class="taille_product">
									<small> Длина: 0.3 м </small> 
									<a href="index.php?page=dev_prod_guirlande&&id_el='.$data['id_guirland'].'"> Подробнее...</a>
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

										<a href="'.$data['id_guirland'].'"  class="cache_inf">
											<input type="text" name="prodt" value="'.$data['id_guirland'].'">
										</a>
										<button class="z_cpb_btn" name="z_cpb_btn_guirlande">В корзину</button>
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
	</div>

	<div class="control_bcn cb_bas">
		<?php echo '<div class="pagination_bcn ">'.$pagination.'</div>'; ?>
	</div>

</div>
</div>