<div class="content_gualeri">
	<div class="btn_prev btn_p_n">
		<img src="../../images/fleche_slider_left.png" alt="fleche_slider_left">
	</div>
	<div class="btn_next btn_p_n">
		<img src="../../images/fleche_slider_right.png" alt="fleche_slider_right">
	</div>
	<div class="gualerie_view">
		<div class="block_content_img">
			<?php foreach ($imgs as $img): ?>
				<div class="block_img">
					<div class="block_img_cnt">
						<img src="../images/<?= $img['img1'];?>">
					</div>
				</div>
			<?php endforeach;?>
		</div>
	</div>
</div>
