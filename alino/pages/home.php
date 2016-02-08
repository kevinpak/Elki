<?php include('formulaires/functions_form_admin.php'); ?>
<!--==block_1 ==-->
<div class="block_1 blck">
	<div class="blck_title">
		<h2>
			Наш интернет магазин представляет новогодние товары 
		</h2>
		<p>
			искусственные елки,<span> елочные игрушки, </span>гирлянды и мишуру.  
		</p>
	</div>
	<div class="blck_slider">
		<div class="nav1_slider">
			<ul>
				<li>
					<div class="url_1_block_cata_type"  id="_p_zi01">
						<a href="<?=URL_BASE?>sapin">
							<img src="images/img_001.png" alt="img_001">
						</a>
						<p><a href="<?=URL_BASE?>sapin">ИСКУССТВЕННЫЕ ЕЛКИ</a></p>
						
					</div>
				</li>
				<li class="active22">
					<div class="url_1_block_cata_type" id="_p_zi02">
						<a href="<?=URL_BASE?>hornement_ballon">
							<img src="images/img_002.png" alt="img_002">
						</a>
						<p><a href="<?=URL_BASE?>hornement_ballon">ЕЛОЧНЫЕ ИГРУШКИ</a></p>
						
					</div>
				</li>
				<li>
					<div class="url_1_block_cata_type"  id="_p_zi03">
						<a href="<?=URL_BASE?>guirlande" >
							<img src="images/img_003.png" alt="img_003">
						</a>
						<p><a href="<?=URL_BASE?>guirlande">ГИРЛЯНДЫ</a></p>
						
					</div>
				</li>
				<li>
					<div class="url_1_block_cata_type"  id="_p_zi04">
						<a href="<?=URL_BASE?>jeux">
							<img src="images/img_004.png" alt="img_004">
						</a>
						<p><a href="<?=URL_BASE?>jeux">МИШУРА</a></p>
						
					</div>	
				</li>
			</ul>
		</div>
		<div class="content_slider">
			<div class="btn_prev btn_p_n">
				<img src="images/fleche_slider_left.png" alt="fleche_slider_left">
			</div>
			<div class="btn_next btn_p_n">
				<img src="images/fleche_slider_right.png" alt="fleche_slider_right">
			</div>
			<div class="ContentG_slider">	
				<div class="content_block_slider">
				<?php $img_sliders = recuperer_imgslider(); ?>
				<?php foreach($img_sliders as $img_slider): ?>
					<div class="block_img">
						<img src="images/<?=$img_slider['img'];?>" alt="img_slider1">
						<div class="slider_desc">
							<p>
							<?=$img_slider['description'];?>
							</p>
							
						</div>
					</div>
				<?php endforeach; ?>	
				</div>
			</div>
		</div>
	</div>
</div>
<!--== End block_1 ==-->


<!--==block_2 ==-->
<div class="block_2 blck">
	<div class="blck_title">
		<h2>
			Хиты продаж 
		</h2>
	</div>
	<div class="blck2_content ">
	<?php $recuperer_infos_elkis = recuperer_infos_elki(); ?>
	<?php foreach ($recuperer_infos_elkis as $recuperer_infos_elki): ?>
	
		<div class="Z_prodoct_blck2">
			<div class="z_pb">
				<div class="z_img_pb">
					<img src="images/<?=$recuperer_infos_elki['imgs']?>" alt="img_111">
				</div>
				<div class="z_info_pb">
					<p class="name_product">
						Искусственная елка "<?=$recuperer_infos_elki['nom']?>"
						 
					</p>
					<p class="taille_product">
								<small> Высота: <?=$recuperer_infos_elki['taille_fa']?> м </small>
								<a href="index.php?page=dev_prod_sapin&&id_el=<?=$recuperer_infos_elki['id_eldki']?>"> Подробнее...</a>
								 </p>
					<span><?=$recuperer_infos_elki['numero']?></span>
				</div>
				<div class="z_commande_pb">
					<div class="z_commande_pb_price z_cpb">
						<p><?=$recuperer_infos_elki['prix_fa']?> руб</p>
					</div>
					<div class="z_commande_pb_quantite z_cpb">
						<form method="POST">
							<input type="text" value="1" name="nbr" id="nbr">
							<label for="nbr">шт</label>
						
					</div>
					<div class="z_commande_pb_btn z_cpb">
					<a href="<?=$recuperer_infos_elki['id_eldki']?>"  class='cache_inf'>
						<input type="text" name="prodt" value="<?=$recuperer_infos_elki['id_eldki']?>">
					</a>
						<button class="z_cpb_btn " name="z_cpb_btn_elki">В корзину</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
		
	</div>
</div>
<!--== End block_2 ==-->


<!--==block_3 ==-->
<div class="block_3 blck">
	<div class="blck_title">
		<h2>
			самое интересное 
		</h2>
	</div>
	
	<div class="blck3_content content_art ">
		<div class="blc2_cata ">
			<?php $statias = last_statia(); ?>
			<?php foreach($statias as $statia): ?>
				<div class="Z_def_blck3 ">
					<h3><?= $statia['title'];?></h3>
					<div class="content_statia ">
						<p class="agrandir_max">
							<?= $statia['text_statia'];?>
						</p>

						<a href="#dd" class="suite_art">Подробнее...</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<!--== End block_3 ==-->


