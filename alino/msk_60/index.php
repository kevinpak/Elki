<?php include('header.php'); ?>

<?php //var_dump(recover_elki_lindg()); ?>
<div class="container float-center">

	<div class="information">
		<div class="row large-collapse medium-collapse small-collapse "><div class="columns large-12 small-11 medium-11 text-center small-centered large-centered medium-centered"><h2>Самые дешевые ели в Москве <span>с бесплатной доставкой!</span></h2></div></div>
		<div class="row">
			<div class="columns large-4 small-12 medium-4"><div class="illustr float-center"></div></div>
			<div class="columns large-4 small-12 medium-8">
				<div class="row">
					<div class="columns large-12 small-12 medium-12"><div class="info-text" style="margin: -20px 0px 0px -90px; width: 380px;"><div class="snowflake"></div><h6><big>357</big> человек уже нарядили у себя ёлку из нашего магазина</h6></div></div></div>
					<div class="row">
						<div class="columns large-10 small-12 medium-12"><div class="info-text" style="margin: -20px 0px 0px -40px; width: 350px;"><div class="snowflake"></div><h6><big>592</big> подарка нашли своё место в вашем доме</h6></div></div></div>
						<div class="row">
							<div class="columns large-8 small-12 medium-12"><div class="info-text" style="margin: -20px 0px 0px 15px; width: 300px;"><div class="snowflake"></div><h6><big>0</big> &mdash; средняя цена доставки, как показывает практика</h6></div></div></div>
							<div class="row">
								<div class="columns large-8 small-12 medium-12"><div class="info-text" style="margin: -20px 0px 0px -10px; width: 370px;"><div class="snowflake"></div><h6><big class="esp">60%</big> &mdash; такая скидка действует в нашем магазине в предпраздничное <br>время!</h6></div></div>
							</div>
						</div>
						<div class="columns large-4 small-12 medium-12"><a href="#" class="ankor-invis" name="request"></a>
							<div class="callout request-form"><div class="inner callout text-center"><h4>Форма заказа</h4><p class="text-center">Просто заполните заявку и Вам перезвонит оператор для уточнения деталей</p>
								<form id="zayafka_form" onsubmit="return false;" autocomplete="off">
									<div class="row">
										<input type="text" id="fio" class="name_client" placeholder="Как к Вам обращаться?" required name="name_client"/>
									</div>
									<div class="row">
										<input type="text" id="phone" class="phone_client" placeholder="На какой номер Вам позвонить?" required name="phone_client"/>
										<input type="text" id="pod_choisir" class="prodoct" value="Не Выбран !" name="prodoct"/>
									</div>
									<div class="row">
										<a href="#" class="small button expanded">
											<button name="by_elki_ldg" class="sms_msk60"> Хочу Новый год!</button>
										</a>
									</div>
									<div class="row"><p class="text-center">
										<a  class="link-popup" href="javascript:OnShowPopup('form2');scroll(0,0);">Получить дополнительную скидку</a>
										<a href="#" class="link-ankor">Получить дополнительную скидку</a></p></div>
									</form>
								</div>
							</div>
							<div class="callout gift">При заказе с сайта гирлянда в подарок!</div>
						</div>
					</div>
				</div>

				<div class="catalog">
					<div class="row"><div class="columns large-12 small-12 medium-12 text-center"><h2>Подберите лучшую</h2></div></div>
					<div class="callout row cat-wrapper">
						<ul>
							<?php $recover_info_elki_lindgs = recover_info_elki_lindg(); ?>
							<?php foreach($recover_info_elki_lindgs as $recover_info_elki_lindg): ?>
								<li class="callout"><img src="../images/<?= $recover_info_elki_lindg['imgs']?>">
									<h6><?= $recover_info_elki_lindg['nom']?></h6>
									<table class="descr">
										<?php 
										$id_eldki_aff= $recover_info_elki_lindg['id_eldki'] ;
										$recove_allr_info_elki_lindgs = recover_all_info_elki_lindg($id_eldki_aff); 
										?>
										<?php foreach($recove_allr_info_elki_lindgs as $recover_all_info_elki_lindg): ?>
											<tr>
												<td class="width"><?= $recover_all_info_elki_lindg['taille']?>&nbsp;м</td>
												<td class="price"><?= $recover_all_info_elki_lindg['prix']?>&nbsp;руб.</td>
												<td class="stroke"><?= $recover_all_info_elki_lindg['ens_prix']?></td>
											</tr>
										<?php endforeach; ?>

									</table><a href="javascript:OnShowPopup('form1');" class="button link-popup btn_cd_ldg" id="<?= $recover_all_info_elki_lindg['nom']?>">Хочу!</a>
									<a href="#request" class="link-ankor button">Хочу!</a>
								</li>
							<?php endforeach; ?>

						</ul>
					</div>
				</div>

				<div class="all-for-you">
					<div class="row"><div class="columns large-12 small-12 medium-12 text-center"><h2>Всё для вас</h2></div></div>
					<div class="row for-you-back"><div class="row collapse">
						<ul class="features"><li class="callout"><div class="snowflake"></div><span class="feature-text">Имеют поразительное сходство с натуральными елочками</span></li>
							<li class="callout"><div class="snowflake"></div><span class="feature-text">Изготовлены настоящим Дедушкой Морозом в России, а не в Китае</span></li>
							<li class="callout" style="margin-left:120px;"><div class="snowflake"></div><span class="feature-text">Благодаря волшебному материалу, совсем не пахнут!</span></li>
							<li class="callout"><div class="snowflake"></div><span class="feature-text">Устойчивые - полезное свойство, если в доме есть маленькие дети или животные</span></li>
							<li class="callout"><div class="snowflake"></div><span class="feature-text">Не горят - всякое случается в новогоднюю ночь, но не пожар</span></li>
							<li class="especial callout"><div class="snowflake"></div><span class="feature-text">Доступны <big>по сказочно низкой оптовой цене!</big></span></li>
						</ul></div><div class="row collapse for-you-bottom-list">
						<ul class="three-in-line">
							<li class="callout"><div class="snowflake"></div><span class="feature-text">Любите получать подарки? А мы любим их дарить</span></li>
							<li class="callout"><div class="snowflake"></div><span class="feature-text">Закажите сказку в дом - скидка на шоу с Дедом Морозом и Снегурочкой</span></li>
							<li class="callout"><div class="snowflake"></div><span class="feature-text">Абсолютно бесплатная доставка! Вне зависимости от суммы вашего заказа</span></li>
						</ul></div>
					</div>
				</div>

				<div class="take-tree">
					<div class="row"><div class="columns large-12 small-12 medium-12 text-center">
						<h2>Получите ёлку в ближайшее время</h2>
					</div></div>
					<div class="row steps">
						<div class="columns large-2 small-6 medium-4 take-step-1 text-center">
							<span class="icon callout"></span><span class="step-text">Оставляете заявку</span></div>
							<div class="columns large-1 small-3 medium-2 text-center">
								<span class="arr"></span></div>
								<div class="columns large-2 small-6 medium-4 take-step-2 text-center"><span class="icon callout"></span>
									<span class="step-text">Получаете ёлочку</span>
								</div>
								<div class="columns large-1  small-3 medium-2 text-center">
									<span class="arr"></span>
								</div>
								<div class="columns large-2 small-6 medium-4 take-step-3 text-center">
									<span class="icon callout"></span><span class="step-text">Получаете консультацию менеджера</span>
								</div><div class="columns large-1  small-3 medium-2  text-center"><span class="arr"></span>
							</div>
							<div class="columns large-2 small-12 medium-4 take-step-4 text-center end">
								<span class="icon callout"></span>
								<span class="step-text">Оплачиваете заказ</span>
							</div>
						</div>
						<div class="row text-center">
							<a href="javascript:OnShowPopup('form2');" class="link-popup small button green">Получить дополнительную скидку</a>
							<a href="#request" class="link-ankor small button green">Получить дополнительную скидку</a>
						</div>
					</div>

						<div class="gallery">
						<div class="row">
							<div class="columns large-12 small-12 medium-12 text-center">
								<h2>Галерея</h2>
							</div></div>
							<div class="gallerie">
							<?php $imgs = recoverIMG(); ?>
							<script src="../includes/gualery_landing/gualery.js"></script>
								<?php include('../includes/gualery_landing/gualery.php'); ?>
							</div>
							<br/>
									<div class="row text-center">
										
										<a href="javascript:OnShowPopup('form1');" class="button link-popup btn_cd_ldg" id="<?= $recover_all_info_elki_lindg['nom']?>">Хочу Новый год!</a>
										<a href="#request" class="link-ankor small button">Хочу Новый год!</a>
									</div>
								</div>

								<div class="contacts">

									<div class="row">
										<div class="columns large-12 small-12 medium-12 text-center"><h2>Контакты</h2></div>
									</div>

									<div class="row columns large-11 small-12 medium-11">
										<div class="columns large-6 small-12 medium-6">
											<h5><strong>Телефон:</strong> +7&nbsp;981&nbsp;900-70-33<br>
												<strong>E-mail:</strong> <a href="mailto:zelenyeelki@gmail.com">zelenyeelki@gmail.com</a>
											</h5>
										</div>
										<div class="columns large-6 small-12 medium-6 social">
											<div class="row collapse">
												<div class="columns large-3 medium-3 small-3">
													<a class="vk callout" href="http://vk.com/elki__zelenye" target="_blank"></a>
												</div>
												<div class="columns large-3 medium-3 small-3"><a class="tw callout" href="https://twitter.com/Ded__Moroz_" target="_blank"></a></div>
												<div class="columns large-3 medium-3 small-3"><a class="fb callout" href="https://www.facebook.com/Ёлки-зелёные-210103089328676" target="_blank"></a></div>
												<div class="columns large-3 medium-3 small-3"><a class="yt callout" href="#" target="_blank"></a></div>
											</div>

										</div>
									</div>

								</div>

							</div>
				
<script src="../js/ajax/functions.js"></script>
							<?php include('footer.php'); ?>
							