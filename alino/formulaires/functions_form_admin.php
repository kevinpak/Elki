<?php
/*------------------------------==functions elki==----------------------------------*/
//Add eilki
function charge_elki($nom_elki,$numero_elki,$preparation_elki,$pays_elki,$type_elki,$naige_elki,$hornement_elki,$chichki_elki,$lamp_elki,$classe_elki,$commentaire_elki,$poste_tmp,$poste,$taille_elkip,$poind_elkip,$prix_elkip)
{Global $db;
	move_uploaded_file($poste_tmp,'images/'.$poste);
	$query = $db->query("INSERT INTO elki(id_eldki,nom,numero,preparation,pays,type,naige,hornement,chichki,lampe,class,commentair,date_,statut,imgs,poid_fa,prix_fa,taille_fa)
		VALUES('','$nom_elki','$numero_elki','$preparation_elki','$pays_elki','$type_elki','$naige_elki','$hornement_elki','$chichki_elki','$lamp_elki','$classe_elki','$commentaire_elki',NOW(),'0','$poste','$poind_elkip','$prix_elkip','$taille_elkip')
		")or die('ca marche pas');
}

//add  le dernier id enregistre
function recuperer_id()
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM elki WhERE id_eldki=LAST_INSERT_ID() ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

//add variante eilki
function charge_table_elki($prix_elki_1,$point_elki_1,$id_elk,$image_elki_1,$prix_elki_2,$point_elki_2,$image_elki_2,$prix_elki_3,$point_elki_3,$id_elk,$image_elki_3,$prix_elki_4,$point_elki_4,$id_elk,$image_elki_4,$prix_elki_5,$point_elki_5,$id_elk,$image_elki_5,$prix_elki_6,$point_elki_6,$id_elk,$image_elki_6,$prix_elki_7,$point_elki_7,$id_elk,$image_elki_7,$prix_elki_8,$point_elki_8,$id_elk,$image_elki_8,$prix_elki_9,$point_elki_9,$id_elk,$image_elki_9,$prix_elki_10,$point_elki_10,$id_elk,$image_elki_10,$prix_elki_11,$point_elki_11,$id_elk,$image_elki_11)
{Global $db;


	//move_uploaded_file($image_elki_1,photos);
	move_uploaded_file($image_elki_1,'photos/'.$image_elki_1);

	$query = $db->query("INSERT INTO taille_elki(id_telki,taille,prix,poind,id_elki,image)
		VALUES
		('','0.3','$prix_elki_1','$point_elki_1','$id_elk','$image_elki_1'),
		('','0.45','$prix_elki_2','$point_elki_2','$id_elk','$image_elki_2'),
		('','0.6','$prix_elki_3','$point_elki_3','$id_elk','$image_elki_3'),
		('','0.9','$prix_elki_4','$point_elki_4','$id_elk','$image_elki_4'),
		('','1.2','$prix_elki_5','$point_elki_5','$id_elk','$image_elki_5'),
		('','1.5','$prix_elki_6','$point_elki_6','$id_elk','$image_elki_6'),
		('','1.8','$prix_elki_7','$point_elki_7','$id_elk','$image_elki_7'),
		('','2.1','$prix_elki_8','$point_elki_8','$id_elk','$image_elki_8'),
		('','2.4','$prix_elki_9','$point_elki_9','$id_elk','$image_elki_9'),
		('','2.5','$prix_elki_10','$point_elki_10','$id_elk','$image_elki_10'),
		('','3','$prix_elki_11','$point_elki_11','$id_elk','$image_elki_11')

		")or die('ca marche pas 2');
}
?>

<?php 
function recuperer_infos_elki()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM elki ORDER BY id_eldki DESC LIMIT 3");

	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

/*------------------------------==detail_elki_choisir==----------------------------------*/

function detail_elki_choisir()
{Global $db;
	$results = array();
	$id_sapin =$_GET['id_el'];
	$query = $db->query("SELECT * FROM elki WHERE id_eldki=$id_sapin ");									  
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

function caracteristque_elki_choisir()
{Global $db;
	$results = array();
	$id_sapin =$_GET['id_el'];
	$query = $db->query("SELECT * FROM taille_elki WHERE id_elki=$id_sapin ");									  
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
?>


<?php 
/*------------------------------==functions_ballon==----------------------------------*/
//Add ballon
function add_ballon($nom_ballon,$numero_ballon,$preparation_ballon,$pays_ballon,$dyametre_ballon,$nombre_ballon,$commentaire_ballon,$couleur_ballon,$prix_ballon,$posteb_tmp,$posteb)
{Global $db;
	move_uploaded_file($posteb_tmp,'images/'.$posteb);
	$query = $db->query("INSERT INTO ballons(id_ballon,nom,numero,preparation,pays,dyametre,nombre,commentaire,date_b,statut,prix,color,image)
		VALUES('','$nom_ballon','$numero_ballon','$preparation_ballon','$pays_ballon','$dyametre_ballon','$nombre_ballon','$commentaire_ballon',NOW(),'no','$prix_ballon','$couleur_ballon','$posteb')
		")or die('ca marche pas');
}

function recuperer_infos_ballon()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM ballons ORDER BY id_ballon DESC LIMIT 6");

	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

function caracteristque_ballon_choisir()
{Global $db;
	$results = array();
	$id_bal =$_GET['id_ballon'];
	$query = $db->query("SELECT * FROM ballons WHERE id_ballon=$id_bal");									  
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}


?>




<?php 
/*------------------------------==functions_guirland==----------------------------------*/
//Add ballon
function add_guirland($nom_guirland,$numero_guirland,$preparation_guirland,$pays_guirland,$couleur_guirland,$regime_guirland,$commentaire_guirland,$posteg,$longueur_guirlandep,$nbr_lampe_guirlandep,$prix_guirlandep)
{Global $db;
	move_uploaded_file($posteg_tmp,'images/'.$posteg);
	$query = $db->query("INSERT INTO guirlande(id_guirland,nom,numero,preparation,pays,couleur,nbr_regime,commentair,date_g,statut,prix_fa,nbr_lampe,imgs,longueur_fa)
		VALUES('','$nom_guirland','$numero_guirland','$preparation_guirland','$pays_guirland','$couleur_guirland','$regime_guirland','$commentaire_guirland',NOW(),'yes','$prix_guirlandep','$nbr_lampe_guirlandep','$posteg','$longueur_guirlandep')
		")or die('ca marche pas');
}

//add  le dernier id enregistre
function recuperer_id_guirland()
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM guirlande WhERE id_guirland=LAST_INSERT_ID() ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

//add variante guirland
function add_longueur_guirland($id_2guirland,$prix_guirland_1,$image_guirland_1,$prix_guirland_2,$image_guirland_2,$prix_guirland_3,$image_guirland_3,$prix_guirland_4,$image_guirland_4,$prix_guirland_5,$image_guirland_5,$prix_guirland_6,$image_guirland_6,$prix_guirland_7,$image_guirland_7,$nbr_lampe_guirland_1,$nbr_lampe_guirland_2,$nbr_lampe_guirland_3,$nbr_lampe_guirland_4,$nbr_lampe_guirland_5,$nbr_lampe_guirland_6,$nbr_lampe_guirland_7)
{Global $db;
	
	$query = $db->query("INSERT INTO longueur_guirlande(id_longueur,longueur,prix,nbr_lampe,id_guirland,image)
		VALUES                             
		('','1 ','$prix_guirland_1','$nbr_lampe_guirland_1','$id_2guirland','$image_guirland_1'),
		('','2   ','$prix_guirland_2','$nbr_lampe_guirland_2','$id_2guirland','$image_guirland_2'),
		('','6 ','$prix_guirland_3','$nbr_lampe_guirland_3','$id_2guirland','$image_guirland_3'),
		('','8  ','$prix_guirland_4','$nbr_lampe_guirland_4','$id_2guirland','$image_guirland_4'),
		('','10 ','$prix_guirland_5','$nbr_lampe_guirland_5','$id_2guirland','$image_guirland_5'),
		('','12','$prix_guirland_6','$nbr_lampe_guirland_6','$id_2guirland','$image_guirland_6')



		")or die('ca marche pas 2');
}


function recuperer_infos_guirland()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM guirlande ORDER BY id_guirland DESC LIMIT 6 ");


	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*------------------------------==detail_guirlande_choisir==----------------------------------*/

function detail_guirlande_choisir()
{Global $db;
	$results = array();
	$id_guirlande =$_GET['id_el'];
	$query = $db->query("SELECT * FROM guirlande WHERE id_guirland=$id_guirlande ");									  
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

function caracteristque_guirlande_choisir()
{Global $db;
	$results = array();
	$id_guirlande =$_GET['id_el'];
	$query = $db->query("SELECT * FROM longueur_guirlande WHERE id_guirland=$id_guirlande ");									  
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
?>


<?php 
/*------------------------------==functions_Jeux==----------------------------------*/
//Add jeux 
function add_jeux($nom_jeux,$numero_jeux,$preparation_jeux,$pays_jeux,$dyametre_jeux,$longueur_jeux,$nbr_ligne_jeux,$commentair_jeux,$postej_tmp,$postej,$couleur_jeuxp,$prix_jeuxp)
{Global $db;
	move_uploaded_file($postej_tmp,'images/'.$postej);
	$query = $db->query("INSERT INTO jeux(id_jeux,nom,numero,preparation,pays,dyametre,longueur,nbr_corde,date_j,commentair,statut,couleur_fa,prix_fa,imgs)
		VALUES('','$nom_jeux','$numero_jeux','$preparation_jeux','$pays_jeux','$dyametre_jeux','$longueur_jeux','$nbr_ligne_jeux',NOW(),'$commentair_jeux','yes','$couleur_jeuxp','$prix_jeuxp','$postej')
		")or die('ca marche pas');
}

//add  le dernier id enregistre
function recuperer_id_jeux()
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM jeux WhERE id_jeux=LAST_INSERT_ID() ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

//add variante jeux
function add_color_jeux($id_2jeux,$prix_jeux_1,$prix_jeux_2,$prix_jeux_3,$prix_jeux_4,$prix_jeux_5,$prix_jeux_6,$prix_jeux_7,$image_jeux_1,$image_jeux_2,$image_jeux_3,$image_jeux_4,$image_jeux_5,$image_jeux_6,$image_jeux_7)
{Global $db;
	
	$query = $db->query("INSERT INTO couleur_jeux(id_color,color,prix,id_j,image)
		VALUES                             
		('','Серебряный','$prix_jeux_1','$id_2jeux','$image_jeux_1'),
		('','Красный  ','$prix_jeux_2','$id_2jeux','$image_jeux_2'),
		('','Золотой ','$prix_jeux_3','$id_2jeux','$image_jeux_3'),
		('','Зелёный','$prix_jeux_4','$id_2jeux','$image_jeux_4'),
		('','Синий ','$prix_jeux_5','$id_2jeux','$image_jeux_5'),
		('','Розовый ','$prix_jeux_6','$id_2jeux','$image_jeux_6'),
		('','Микс ','$prix_jeux_7','$id_2jeux','$image_jeux_7')


		")or die('ca marche pas 2');
}

function recuperer_infos_jeux()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM jeux ORDER BY id_jeux DESC LIMIT 6 ");


	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

/*------------------------------==detail_jeux_choisir==----------------------------------*/

function detail_jeux_choisir()
{Global $db;
	$results = array();
	$id_jeux =$_GET['id_el'];
	$query = $db->query("SELECT * FROM jeux WHERE id_jeux=$id_jeux ");									  
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

function caracteristque_jeux_choisir()
{Global $db;
	$results = array();
	$id_jeux =$_GET['id_el'];
	$query = $db->query("SELECT * FROM couleur_jeux WHERE id_j=$id_jeux ");									  
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}


?>


<?php 
/*------------------------------==functions_statia==----------------------------------*/
//Add statia
function add_statia($title_statia,$text_statia,$poster,$poster_tmp,$poster)
{Global $db;
	move_uploaded_file($poster_tmp,'img_statia/'.$poster);
	$query = $db->query("INSERT INTO statia(id_statia,title,text_statia,date_pub,image)
		VALUES('','$title_statia','$text_statia',NOW(),'$poster')
		")or die('ca marche pas');
}

/*------------------------------==recuppere_statia==----------------------------------*/
function last_statia()
{Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM statia ORDER BY date_pub DESC LIMIT 3");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*------------------------------==recuppere_all_statia==----------------------------------*/
function all_statia()
{Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM statia ORDER BY date_pub DESC");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*------------------------------==statia choisir==----------------------------------*/

function statia_choisir()
{Global $db;
	$results = array();
	$id_st =$_GET['id_art'];
	
	$query = $db->query("SELECT *  FROM statia WHERE id_statia=$id_st");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----===========================For Catalogue ACCEUIL===========================--------*/
/*-----==recuperer tous les elki==---*/
function all_elki_GENE()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM elki 
		ORDER BY date_ DESC LIMIT 50");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recuperer les 11  dernier elki==---*/
function all_elki_GD($idG)
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM taille_elki WHERE id_elki = '$idG' AND prix = 0 
		ORDER BY id_elki DESC LIMIT 70");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recuperer les 70  dernier ballons==---*/
function all_ballons_GENE()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM ballons ORDER BY id_ballon DESC LIMIT 70");

	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recuperer tous les guirlande==---*/
function all_guirlande_GENE()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM guirlande 
		ORDER BY date_g DESC LIMIT 50");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recuperer tous les jeux==---*/
function all_jeux_GENE()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM jeux 
		ORDER BY date_j DESC LIMIT 50");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recuperer les 70  dernier guirlande dev==---*/
function all_guirlande_GD($idG)
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM longueur_guirlande WHERE id_guirland = '$idG' AND prix = 0 
		ORDER BY id_guirland DESC LIMIT 70");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recuperer les 70  dernier jeux dev==---*/
function all_jeux_GD($idG)
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM couleur_jeux WHERE id_j = '$idG' AND prix = 0 
		ORDER BY id_j DESC LIMIT 70");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recuperer les 11  dernier guiralande==---*/
function last_guiralande_dow()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM guirlande INNER JOIN longueur_guirlande
		ON longueur_guirlande.id_guirland=guirlande.id_guirland
		ORDER BY longueur_guirlande.id_guirland DESC LIMIT 7");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

/*-----==recuperer les 11  dernier jeux==---*/
function last_jeux_dow()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM jeux INNER JOIN couleur_jeux
		ON couleur_jeux.id_j=jeux.id_jeux
		ORDER BY couleur_jeux.id_j DESC LIMIT 7");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

/*------------------------------==Update_opisania==----------------------------------*/

function Update_opisania($id_prdX,$tableX,$apisaniaX,$champX)
{Global $db;
	$results = array();	
	$query = $db->query("UPDATE $tableX SET commentair='$apisaniaX' WHERE $champX='$id_prdX' ")or die(mysql_error());
	
}
/*------------------------------==Update_dev elm==----------------------------------*/

function Update_devElem($id_prdXX,$tableXX,$champXX,$priceXX,$poindXX,$posterX,$posterX_tmp)
{Global $db;

	if ((!empty($posterX)) && (!empty($posterX_tmp)) ){
		$image_ext=strtolower(end(explode('.',$posterX)));
		if (in_array($image_ext,array('jpg','jpeg','png','gif'))) {
		move_uploaded_file($posterX_tmp,'images/'.$posterX);
		$query = $db->query("UPDATE $tableXX SET image='$posterX',prix='$priceXX' WHERE $champXX='$id_prdXX' ")or die(mysql_error());
}
	
	}else{

		$query = $db->query("UPDATE $tableXX SET  prix='$priceXX' WHERE $champXX='$id_prdXX' ")or die(mysql_error());
	}
}
/*------------------------------==Update_info Ballon=----------------------------------*/

function Update_InfoBallon($id_prdB,$priceB,$diametreB,$apisaniaB,$posterB,$posterB_tmp)
{Global $db;

	if ((!empty($posterB)) && (!empty($posterB_tmp)) ){
		$image_ext=strtolower(end(explode('.',$posterB)));
		if (in_array($image_ext,array('jpg','jpeg','png','gif'))) {
		move_uploaded_file($posterB_tmp,'images/'.$posterB);
		$query = $db->query("UPDATE ballons SET image='$posterB',prix='$priceB',dyametre = '$diametreB',commentaire='apisaniaB' WHERE id_ballon='$id_prdB' ")or die(mysql_error());
}
	
	}else{

		$query = $db->query("UPDATE ballons SET prix='$priceB',dyametre = '$diametreB',commentaire='apisaniaB' WHERE id_ballon='$id_prdB' ")or die(mysql_error());
	}
}

/*-----==ADDIMAGEGualery(landing)==---*/
function add_imgGualery($img_up,$img_up_tmp)
{Global $db;
	$results = array();
	move_uploaded_file($img_up_tmp,'images/'.$img_up);	
	$query = $db->query("INSERT INTO galeri_img(id,img1)

		VALUES('','$img_up')  ")or die(mysql_error());
	
}

?>

<?php 
/*------------------------------==ADD commentair==----------------------------------*/
//Add commentair 
function add_commentair($name_prod,$autor,$title_commentair,$pnt,$commentair)
{Global $db;
	$query = $db->query("INSERT INTO commentairs(id_c,auteur,title,commentaire,poind,date_c,name_table)
		VALUES('','$autor','$title_commentair','$commentair','$pnt',NOW(),'$name_prod')
		")or die('ca marche pas');
}

// recuperer commentair elki
function recuperer_commentair_elki()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM  commentairs WHERE name_table ='elki'  ORDER BY date_c DESC LIMIT 2");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
// recuperer commentair ballon
function recuperer_commentair_ballon()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM  commentairs WHERE name_table ='ballon'  ORDER BY date_c DESC LIMIT 2");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
// recuperer commentair guirland
function recuperer_commentair_guirland()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM  commentairs WHERE name_table ='guirlande'  ORDER BY date_c DESC LIMIT 2");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
// recuperer commentair jeux
function recuperer_commentair_jeux()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM  commentairs WHERE name_table ='jeux'  ORDER BY date_c DESC LIMIT 2");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
//============================================================
//                           SLIDER HOME CONFIG
//==============================================================
/*------------------------------==Update_img_text Slider==----------------------------------*/

function Update_imgtextSlider($imgSl,$imgSl_tmp,$text_slider,$id)
{Global $db;
	move_uploaded_file($imgSl_tmp,'images/'.$imgSl);	
	$query = $db->query("UPDATE slider SET img='$imgSl',description='$text_slider' WHERE id='$id' ")or die(mysql_error());
	
}
/*------------------------------==Update_img Slider==----------------------------------*/

function Update_imgSlider($imgSl,$imgSl_tmp,$id)
{Global $db;
	move_uploaded_file($imgSl_tmp,'images/'.$imgSl);	
	$query = $db->query("UPDATE slider SET img='$imgSl' WHERE id='$id' ")or die(mysql_error());
	
}
/*------------------------------==Update_text Slider==----------------------------------*/

function Update_textSlider($text_slider,$id)
{Global $db;
	$query = $db->query("UPDATE slider SET description='$text_slider' WHERE id='$id' ")or die(mysql_error());
	
}

// recuperer commentair jeux
function recuperer_imgslider()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM  slider LIMIT 4");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

//============================================================
//                           All COMMANDE
//==============================================================

//recuperation all date commande
function all_date_c()
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT  DISTINCT date_c  FROM commandes  ORDER BY date_c DESC ");

	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

//recuperation all commmande client
function all_commades($date_distinct)
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM commandes WhERE  date_c ='$date_distinct' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 

//recuperation tatal sum commande
function total_sum($date_distinct)
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT SUM(prix) as sum FROM commandes WhERE  date_c ='$date_distinct' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 

//recuperation all prodoct commande
function my_prodoct($name_id_prod,$id_prod,$tble_prod)
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM $tble_prod WhERE $name_id_prod = '$id_prod' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 
//recuperation all info client
function all_info_clients($client)
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT *  FROM clients WhERE  email ='$client' ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 

?>