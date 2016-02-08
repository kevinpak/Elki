<?php include('functions_form_admin.php'); ?>
<?php 

/*------------------------------==charge_elki==----------------------------------*/

if (isset($_POST['charge_elki'])){ /*si on clic sur le bouton inscription alore*/	
	extract($_POST);		
	$poste = $_FILES['imgs_elki']['name'];
	$poste_tmp = $_FILES['imgs_elki']['tmp_name'];

	if($nom_elki&&$numero_elki&&$preparation_elki&&$pays_elki&&$type_elki&&$naige_elki&&$hornement_elki&&$chichki_elki&&$lamp_elki&&$classe_elki&&$commentaire_elki&&$poste&&$taille_elkip&&$poind_elkip&&$prix_elkip){
		$image_elki_1 = $poste ;
		$image_elki_2 = $poste ;
		$image_elki_3 = $poste ;
		$image_elki_4 = $poste ;
		$image_elki_5 = $poste ;
		$image_elki_6 = $poste ;
		$image_elki_7 = $poste ;
		$image_elki_8 = $poste ;
		$image_elki_9 = $poste ;
		$image_elki_10 =$poste ;
		$image_elki_11 =$poste ;
		$imgs_ext=strtolower(end(explode('.',$poste)));
		if (in_array($imgs_ext,array('jpg','jpeg','png','gif'))) {
			charge_elki($nom_elki,$numero_elki,$preparation_elki,$pays_elki,$type_elki,$naige_elki,$hornement_elki,$chichki_elki,$lamp_elki,$classe_elki,$commentaire_elki,$poste_tmp,$poste,$taille_elkip,$poind_elkip,$prix_elkip);

		}
		$id_elkiid = recuperer_id();

		foreach ($id_elkiid as $id_elkid){
			$id_elk = $id_elkid['id_eldki'];

			charge_table_elki($prix_elki_1,$point_elki_1,$id_elk,$image_elki_1,$prix_elki_2,$point_elki_2,$image_elki_2,$prix_elki_3,$point_elki_3,$id_elk,$image_elki_3,$prix_elki_4,$point_elki_4,$id_elk,$image_elki_4,$prix_elki_5,$point_elki_5,$id_elk,$image_elki_5,$prix_elki_6,$point_elki_6,$id_elk,$image_elki_6,$prix_elki_7,$point_elki_7,$id_elk,$image_elki_7,$prix_elki_8,$point_elki_8,$id_elk,$image_elki_8,$prix_elki_9,$point_elki_9,$id_elk,$image_elki_9,$prix_elki_10,$point_elki_10,$id_elk,$image_elki_10,$prix_elki_11,$point_elki_11,$id_elk,$image_elki_11);
			header("Location:index.php?page=panel_admin"); 
			echo "<div class=\"erreur_conecttt\">Успешно</div>";
		}

	}else{echo "<div class=\"erreur_conecttt\">Заполните необходимые поля</div>";}
}

/*------------------------------==charge_ballon==----------------------------------*/

if (isset($_POST['add_ballon'])){	
	extract($_POST);	
	$posteb = $_FILES['imgs_ballon']['name'];
	$posteb_tmp = $_FILES['imgs_ballon']['tmp_name'];
	if($nom_ballon&&$numero_ballon&&$preparation_ballon&&$pays_ballon&&$dyametre_ballon&&$nombre_ballon&&$couleur_ballon&&$prix_ballon&&$commentaire_ballon&&$posteb){
		add_ballon($nom_ballon,$numero_ballon,$preparation_ballon,$pays_ballon,$dyametre_ballon,$nombre_ballon,$commentaire_ballon,$couleur_ballon,$prix_ballon,$posteb_tmp,$posteb);			
		header("Location:index.php?page=panel_admin"); 
		echo "<div class=\"erreur_conecttt\">Успешно</div>";
	}else{echo "<div class=\"erreur_conecttt\">Заполните необходимые поля</div>";}
}

/*------------------------------==charge_guirland==----------------------------------*/

if (isset($_POST['add_guirland'])){	
	extract($_POST);		
	$posteg = $_FILES['imgs_guirlande']['name'];
	$posteg_tmp = $_FILES['imgs_guirlande']['tmp_name'];
	if($nom_guirland&&$numero_guirland&&$preparation_guirland&&$pays_guirland&&$couleur_guirland&&$commentaire_guirland&&$posteg&&$longueur_guirlandep&&$nbr_lampe_guirlandep&&$prix_guirlandep){
		$image_guirland_1 = $posteg;
		$image_guirland_2 = $posteg;
		$image_guirland_3 = $posteg;
		$image_guirland_4 = $posteg;
		$image_guirland_5 = $posteg;
		$image_guirland_6 = $posteg;
		$imgs_ext=strtolower(end(explode('.',$posteg)));
		if (in_array($imgs_ext,array('jpg','jpeg','png','gif'))) {
			add_guirland($nom_guirland,$numero_guirland,$preparation_guirland,$pays_guirland,$couleur_guirland,$regime_guirland,$commentaire_guirland,$posteg,$longueur_guirlandep,$nbr_lampe_guirlandep,$prix_guirlandep);
		}
		$id_2guirlands2 = recuperer_id_guirland();

		foreach ($id_2guirlands2 as $id_2guirlands){

			$id_2guirland = $id_2guirlands['id_guirland'];

			add_longueur_guirland($id_2guirland,$prix_guirland_1,$image_guirland_1,$prix_guirland_2,$image_guirland_2,$prix_guirland_3,$image_guirland_3,$prix_guirland_4,$image_guirland_4,$prix_guirland_5,$image_guirland_5,$prix_guirland_6,$image_guirland_6,$prix_guirland_7,$image_guirland_7,$nbr_lampe_guirland_1,$nbr_lampe_guirland_2,$nbr_lampe_guirland_3,$nbr_lampe_guirland_4,$nbr_lampe_guirland_5,$nbr_lampe_guirland_6,$nbr_lampe_guirland_7);
			header("Location:index.php?page=panel_admin"); 
			echo "<div class=\"erreur_conecttt\">Успешно</div>";
		}

	}else{echo "<div class=\"erreur_conecttt\">Заполните необходимые поля</div>";}
}
/*------------------------------==charge_jeux==----------------------------------*/

if (isset($_POST['add_jeux'])){	
	extract($_POST);		
	$postej = $_FILES['imgs_jeux']['name'];
	$postej_tmp = $_FILES['imgs_jeux']['tmp_name'];
	if($nom_jeux&&$numero_jeux&&$preparation_jeux&&$pays_jeux&&$dyametre_jeux&&$longueur_jeux&&$nbr_ligne_jeux&&$commentair_jeux&&$postej&&$couleur_jeuxp&&$prix_jeuxp){
		$image_jeux_1 = $postej;
		$image_jeux_2 = $postej;
		$image_jeux_3 = $postej;
		$image_jeux_4 = $postej;
		$image_jeux_5 = $postej;
		$image_jeux_6 = $postej;
		$image_jeux_7 = $postej;
		$imgs_ext=strtolower(end(explode('.',$postej)));
		if (in_array($imgs_ext,array('jpg','jpeg','png','gif'))) {
			$couleur_jeux3='Золотой';
			add_jeux($nom_jeux,$numero_jeux,$preparation_jeux,$pays_jeux,$dyametre_jeux,$longueur_jeux,$nbr_ligne_jeux,$commentair_jeux,$postej_tmp,$postej,$couleur_jeuxp,$prix_jeuxp);
		}
		$id_2jeux2 = recuperer_id_jeux();

		foreach ($id_2jeux2 as $id_2jeuxx){

			$id_2jeux = $id_2jeuxx['id_jeux'];

			add_color_jeux($id_2jeux,$prix_jeux_1,$prix_jeux_2,$prix_jeux_3,$prix_jeux_4,$prix_jeux_5,$prix_jeux_6,$prix_jeux_7,$image_jeux_1,$image_jeux_2,$image_jeux_3,$image_jeux_4,$image_jeux_5,$image_jeux_6,$image_jeux_7);
			header("Location:index.php?page=panel_admin"); 
			echo "<div class=\"erreur_conecttt\">Успешно</div>";
		}

	}else{echo "<div class=\"erreur_conecttt\"> Заполните необходимые поля </div>";}
}

/*------------------------------==charge_statia==----------------------------------*/

if (isset($_POST['add_statia'])){	
	extract($_POST);	
	$poster = $_FILES['img_statia']['name'];
	$poster_tmp = $_FILES['img_statia']['tmp_name'];
	if($title_statia&&$text_statia&&$poster){
		$image_ext=strtolower(end(explode('.',$poster)));
		if (in_array($image_ext,array('jpg','jpeg','png','gif'))) {
			add_statia($title_statia,$text_statia,$poster,$poster_tmp,$poster);	
		}
	}
}







/*------------------------------==Update Opisania==----------------------------------*/

if (isset($_POST['upd_comment'])){	
	extract($_POST);	
	if($id_prdX&&$tableX&&$apisaniaX&&$champX){
		Update_opisania($id_prdX,$tableX,$apisaniaX,$champX);
		header("Location:index.php?page=panel_admin"); 
	}
}

/*------------------------------==Update elm prodoct detaill==----------------------------------*/

if (isset($_POST['upd_devPX'])){	
	extract($_POST);	

	$posterX = $_FILES['imgXX']['name'];
	$posterX_tmp = $_FILES['imgXX']['tmp_name'];
	
	Update_devElem($id_prdXX,$tableXX,$champXX,$priceXX,$poindXX,$posterX,$posterX_tmp);
	header("Location:index.php?page=panel_admin"); 
}

/*------------------------------==Update info ballon==----------------------------------*/

if (isset($_POST['upd_infoballon'])){	
	extract($_POST);	

	$posterB = $_FILES['imgB']['name'];
	$posterB_tmp = $_FILES['imgB']['tmp_name'];
	
	Update_InfoBallon($id_prdB,$priceB,$diametreB,$apisaniaB,$posterB,$posterB_tmp);
	header("Location:index.php?page=panel_admin"); 
}
?>







<?php 
/*------------------------------==Commentair elki==----------------------------------*/
if (isset($_POST['com_elki'])){	
	extract($_POST);
	if($name_prod&&$autor&&$title_commentair&&$commentair){
		add_commentair($name_prod,$autor,$title_commentair,$pnt,$commentair);
		header("Location:index.php?page=sapin"); 
	}else{echo "<div class=\"erreur_conecttt\"> Заполните необходимые поля </div>";}
}
/*------------------------------==Commentair ballon==----------------------------------*/
if (isset($_POST['com_ballon'])){	
	extract($_POST);
	if($name_prod&&$autor&&$title_commentair&&$commentair){
		add_commentair($name_prod,$autor,$title_commentair,$pnt,$commentair);
		header("Location:index.php?page=hornement_ballon"); 
	}else{echo "<div class=\"erreur_conecttt\"> Заполните необходимые поля </div>";}
}

/*------------------------------==Commentair guirlande==----------------------------------*/
if (isset($_POST['com_guirlande'])){	
	extract($_POST);
	if($name_prod&&$autor&&$title_commentair&&$commentair){
		add_commentair($name_prod,$autor,$title_commentair,$pnt,$commentair);
		header("Location:index.php?page=guirlande"); 
	}else{echo "<div class=\"erreur_conecttt\"> Заполните необходимые поля </div>";}
}
/*------------------------------==Commentair jeux==----------------------------------*/
if (isset($_POST['com_jeux'])){	
	extract($_POST);
	if($name_prod&&$autor&&$title_commentair&&$commentair){
		add_commentair($name_prod,$autor,$title_commentair,$pnt,$commentair);
		header("Location:index.php?page=jeux"); 
	}else{echo "<div class=\"erreur_conecttt\"> Заполните необходимые поля </div>";}
}

/*------------------------------==Landing==----------------------------------*/
/*-----==ADD img gualery==-----*/
if (isset($_POST['upd_imgG'])){	
	extract($_POST);
	$img_up = $_FILES['img_gul']['name'];
	$img_up_tmp = $_FILES['img_gul']['tmp_name'];
	if($img_up){
		$img_ext=strtolower(end(explode('.',$img_up)));
		if (in_array($img_ext,array('jpg','jpeg','png','gif'))) {
			add_imgGualery($img_up,$img_up_tmp);
			header("Location:index.php?page=panel_admin"); 
		}
		//header("Location:index.php?page=jeux"); 
	}else{echo "<div class=\"erreur_conecttt\"> Заполните необходимые поля </div>";}
}

/*------------------------------==Update img Slider home==----------------------------------*/
/*--img1--*/
if (isset($_POST['upd_imgSlider1'])){	
	extract($_POST);	
	$imgSl_up1 = $_FILES['img_slider1']['name'];
	$imgSl_up1_tmp = $_FILES['img_slider1']['tmp_name'];
	$id = 1;
	if($text_slider1 || $imgSl_up1 || $imgSl_up1_tmp){
		
		if ($imgSl_up1&&$imgSl_up1_tmp) {
			$img_ext=strtolower(end(explode('.',$imgSl_up1)));
			if (in_array($img_ext,array('jpg','jpeg','png','gif'))) {
				$imgSl = $imgSl_up1 ;
				$imgSl_tmp = $imgSl_up1_tmp ;	
			}
			if ($text_slider1){
				$text_slider = $text_slider1;
				Update_imgtextSlider($imgSl,$imgSl_tmp,$text_slider,$id);
				header("Location:index.php?page=panel_admin");
			}else{
				Update_imgSlider($imgSl,$imgSl_tmp,$id);
				header("Location:index.php?page=panel_admin");
			}
		}else{
			$text_slider = $text_slider1;
			Update_textSlider($text_slider,$id);
			header("Location:index.php?page=panel_admin");
		}
	}else{echo "<div class=\"erreur_conecttt\"> Все поля пусты !</div>";}
}


/*--img2--*/
if (isset($_POST['upd_imgSlider2'])){	
	extract($_POST);	
	$imgSl_up2 = $_FILES['img_slider2']['name'];
	$imgSl_up2_tmp = $_FILES['img_slider2']['tmp_name'];
	$id = 2;
	if($text_slider2 || $imgSl_up2 || $imgSl_up2_tmp){
		
		if ($imgSl_up2&&$imgSl_up2_tmp) {
			$img_ext=strtolower(end(explode('.',$imgSl_up2)));
			if (in_array($img_ext,array('jpg','jpeg','png','gif'))) {
				$imgSl = $imgSl_up2 ;
				$imgSl_tmp = $imgSl_up2_tmp ;	
			}
			if ($text_slider2){
				$text_slider = $text_slider2;
				Update_imgtextSlider($imgSl,$imgSl_tmp,$text_slider,$id);
				header("Location:index.php?page=panel_admin");
			}else{
				Update_imgSlider($imgSl,$imgSl_tmp,$id);
				header("Location:index.php?page=panel_admin");
			}
		}else{
			$text_slider = $text_slider2;
			Update_textSlider($text_slider,$id);
			header("Location:index.php?page=panel_admin");
		}
	}else{echo "<div class=\"erreur_conecttt\"> Все поля пусты !</div>";}
}

/*--img3--*/
if (isset($_POST['upd_imgSlider3'])){	
	extract($_POST);	
	$imgSl_up3 = $_FILES['img_slider3']['name'];
	$imgSl_up3_tmp = $_FILES['img_slider3']['tmp_name'];
	$id = 3;
	if($text_slider3 || $imgSl_up3 || $imgSl_up3_tmp){
		
		if ($imgSl_up3&&$imgSl_up3_tmp) {
			$img_ext=strtolower(end(explode('.',$imgSl_up3)));
			if (in_array($img_ext,array('jpg','jpeg','png','gif'))) {
				$imgSl = $imgSl_up3 ;
				$imgSl_tmp = $imgSl_up3_tmp ;	
			}
			if ($text_slider3){
				$text_slider = $text_slider3;
				Update_imgtextSlider($imgSl,$imgSl_tmp,$text_slider,$id);
				header("Location:index.php?page=panel_admin");
			}else{
				Update_imgSlider($imgSl,$imgSl_tmp,$id);
				header("Location:index.php?page=panel_admin");
			}
		}else{
			$text_slider = $text_slider3;
			Update_textSlider($text_slider,$id);
			header("Location:index.php?page=panel_admin");
		}
	}else{echo "<div class=\"erreur_conecttt\"> Все поля пусты !</div>";}
}


/*--img4--*/
if (isset($_POST['upd_imgSlider4'])){	
	extract($_POST);	
	$imgSl_up4 = $_FILES['img_slider4']['name'];
	$imgSl_up4_tmp = $_FILES['img_slider4']['tmp_name'];
	$id = 4;
	if($text_slider4 || $imgSl_up4 || $imgSl_up4_tmp){
		
		if ($imgSl_up4&&$imgSl_up4_tmp) {
			$img_ext=strtolower(end(explode('.',$imgSl_up4)));
			if (in_array($img_ext,array('jpg','jpeg','png','gif'))) {
				$imgSl = $imgSl_up4 ;
				$imgSl_tmp = $imgSl_up4_tmp ;	
			}
			if ($text_slider4){
				$text_slider = $text_slider4;
				Update_imgtextSlider($imgSl,$imgSl_tmp,$text_slider,$id);
				header("Location:index.php?page=panel_admin");
			}else{
				Update_imgSlider($imgSl,$imgSl_tmp,$id);
				header("Location:index.php?page=panel_admin");
			}
		}else{
			$text_slider = $text_slider4;
			Update_textSlider($text_slider,$id);
			header("Location:index.php?page=panel_admin");
		}
	}else{echo "<div class=\"erreur_conecttt\"> Все поля пусты !</div>";}
}



?>

