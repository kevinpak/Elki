<?php include('formulaires/functions_form_admin.php'); ?>
<div class="article_det">
	<?php $statias = statia_choisir(); ?>
	<?php foreach($statias as $statia): ?>
	<h2><?= $statia['title'];?></h2>
	<p class="art_ig">
		<img src="img_statia/<?= $statia['image'];?>" alt="img1_cata">
	</p>
	<p>
		<?= $statia['text_statia'];?>
	</p>
	<?php endforeach; ?>
</div>