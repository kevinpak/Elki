	<div class="forme_commentair">
		<div class="choix_point">
			<img src="images/etoile.png" alt="etoile" id="poind_1">
			<img src="images/etoile.png" alt="etoile" id="poind_2">
			<img src="images/etoile.png" alt="etoile" id="poind_3">
			<img src="images/etoile.png" alt="etoile" id="poind_4">
			<img src="images/etoile.png" alt="etoile" id="poind_5">
			<p> Ваша оценка</p>
		</div>
		<div class="edit_commentair">
			<form method="POST">
			<div class="cache_inf">
					<input type="text" name="poind">
					<input type="text" name="name_prod">
				</div>
				<div class="form-group">
					<label for="autor">ФИО</label>
					<input type="text" name="autor" id="autor" placeholder="Бондаренко М.А.">
				</div>
				<div class="form-group">
					<label for="title_commentair">Название</label>
					<input type="text" name="title_commentair" id="title_commentair" placeholder="КАЧЕСТВЕННАЯ, ПУШИСТАЯ И КРАСИВАЯ ЕЛЬ.">
					
				</div>
				<div class="form-group">
					<textarea name="commentair" id="commenter" cols="30" rows="10">Написать отзыв</textarea>
				</div>
				<div class="btn_send_comment">
					<button class="btn_sc">Оставить отзыв</button>
				</div>
			</form>

		</div>
	</div>