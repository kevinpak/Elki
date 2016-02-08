<?php 
/*-----===========================For LANDING PAGES===========================--------*/
/*-----==recover all info elki==---*/
function recover_all_info_elki_lindg($id_eldki_aff)
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM elki INNER JOIN taille_elki
												 ON taille_elki.id_elki=elki.id_eldki
												 WHERE taille_elki.id_elki=$id_eldki_aff
												 AND taille_elki.ens_prix != 0
												 ORDER BY taille_elki.id_elki  ");
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
/*-----==recover info elki==---*/
function recover_info_elki_lindg()
{Global $db;
	$results = array();
	$query = $db->query("SELECT * FROM elki ORDER BY date_ DESC LIMIT 9");
																 
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}

/*-----==ADD commande==---*/
function addcommande_ldgM($name_client,$phone_client,$prodoct,$city)
{Global $db;
	$query = $db->query("INSERT INTO commande_landing(id_l,name_client,phone_client,prodoct,ville,date_cl,statatu)
		VALUES('','$name_client','$phone_client','$prodoct','$city',NOW(),'encours')
		")or die('ca marche pas land_1');
}

/*-----==Gualery==---*/
function recoverIMG()
{Global $db;
		$results = array();
	$query = $db->query("SELECT * FROM galeri_img  ");
																 
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;	
}



/*-----==Recover all commande==---*/
function recoverallcommande_ldg()
{Global $db;
		$results = array();
	$query = $db->query("SELECT * FROM commande_landing WHERE statu='encours' ORDER BY date_cl DESC ");
																 
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
}
 ?>