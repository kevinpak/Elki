	</div>
	<!--== End main ==-->
	
	<!--== footer ==-->
	<div id="footer">
		<div class="content_footer">
			<div class="menu_footer ">
				<ul >
					<li <?php if ($name_page == 'home') {echo ' class="active"';} ?>><a href="index.php">Главная</a></li>
					<li <?php if ($name_page == 'catalogue') {echo ' class="active"';} ?>><a href="<?=URL_BASE?>catalogue">Каталог</a></li>
					<li <?php if ($name_page == 'contacts') {echo ' class="active"';} ?>><a href="<?=URL_BASE?>contacts">Контакты</a></li>
					<li <?php if ($name_page == 'how_to_order') {echo ' class="active"';} ?>><a href="<?=URL_BASE?>how_to_order">Как заказать</a></li>
					<li <?php if ($name_page == 'articles') {echo ' class="active"';} ?>><a href="<?=URL_BASE?>articles">Полезные статьи</a></li>
				</ul>
			</div>
			<div class="doc_footer ">
				Copyright © 2015 «Интернет магазин ёлок и новогодних украшений»
			</div>
		</div>
	<script src='js/ajax/functions.js'></script>
	</div>
	<!--== End footer ==-->
</body>
</html>