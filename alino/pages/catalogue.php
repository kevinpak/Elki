<?php include('template/nav_catalogue.php'); ?>

<?php include('formulaires/functions_form_admin.php'); ?>
<!--==block_2 ==-->
<div class="block_3 blck blcK_catalogue blcK_catalogue_article">
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
					<div class="z_img_rep">
						<img src="img_statia/<?= $statia['image'];?>" alt="img1_cata">
					</div>
					<div class="content_statia ">
						<p class="agrandir_max">
							<?= $statia['text_statia'];?>
						</p>

						<a href="#dd" class="suite_art">Подробнее...</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
		<div class="btn_all-statia">
			<a href="index.php?page=all_articles">
				<span>Посмотреть все статьи</span>
			</a>
		</div>
	</div>

</div>
<!--== End block_2==-->




<!--==End block_dev_prodoct ==-->