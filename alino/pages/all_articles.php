<?php include('formulaires/functions_form_admin.php'); ?>
<div class="all_art">
	<h2>Все статьи</h2>
	<?php $statias = all_statia(); ?>
	<?php foreach($statias as $statia): ?>
		<div class="artkl ">
		<a href="index.php?page=article_detaille&&id_art=<?= $statia['id_statia'];?>">
				<div class="img_artkl ">
					<img src="img_statia/<?= $statia['image'];?>" alt="img1_cata">
				</div>
				<div class="body_artkl ">
					<h3><?= $statia['title'];?></h3>
					<span><?= $statia['date_pub'];?></span>
				</div>
			</a>
		</div>
	<?php endforeach; ?>
</div>