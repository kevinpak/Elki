<?php 
//============================================================
//                           Elki
//==============================================================

function filtr_elki($min_price,$max_price,$min_taille,$max_taille)
{
	Global $db;
	$results = array();

	if((!empty($min_price)) && (empty($max_price)) && (empty($min_taille)) && (empty($max_taille))){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE prix >= '$min_price' AND  prix > 0  ");
	}else

	if((!empty($max_price)) && (empty($min_price)) &&  (empty($min_taille)) && (empty($max_taille))){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE prix <= '$max_price' AND  prix > 0  ");
	}else

	if((!empty($min_price)) && (!empty($max_price)) && (empty($min_taille)) && (empty($max_taille))){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE prix >= '$min_price'  AND  prix <= '$max_price' AND  prix > 0  ");
	}else

	if((!empty($min_price)) && (!empty($max_price)) && (!empty($min_taille)) && (empty($max_taille))){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE prix >= '$min_price'  AND  prix <= '$max_price' AND taille >= '$min_taille' AND  prix > 0 ");
	}else
	if((!empty($min_price)) && (!empty($max_price)) && (!empty($min_taille)) && (!empty($max_taille))){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE prix >= '$min_price'  AND  prix <= '$max_price' AND taille >= '$min_taille' AND taille <= '$max_taille' AND  prix > 0 ");
	}else
	if((!empty($min_taille)) && (empty($min_price)) && (empty($max_price)) &&  (empty($max_taille))){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE  taille >= '$min_taille'  AND  prix > 0 ");
	}else
	if((empty($min_price)) && (empty($max_price)) && (empty($min_taille)) && (!empty($max_taille))){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE  taille <= '$max_taille' AND  prix > 0 ");
	}else
	if((!empty($min_taille)) &&  (!empty($max_taille)) && (empty($min_price)) && (empty($max_price)) ){
		$query = $db->query("SELECT  *  FROM taille_elki WhERE  taille >= '$min_taille'  AND taille <= '$max_taille' AND prix > 0 ");
	}
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 

//============================================================
//                           Ballon
//==============================================================
function filtr_ballon($min_price,$max_price,$min_dyametre,$max_dyametre)
{
	Global $db;
	$results = array();

	if((!empty($min_price)) && (empty($max_price)) && (empty($min_dyametre)) && (empty($max_dyametre))){
		$query = $db->query("SELECT  *  FROM ballons WhERE prix >= '$min_price' AND  prix > 0  ");
	}else

	if((!empty($max_price)) && (empty($min_price)) &&  (empty($min_dyametre)) && (empty($max_dyametre))){
		$query = $db->query("SELECT  *  FROM ballons WhERE prix <= '$max_price' AND  prix > 0  ");
	}else

	if((!empty($min_price)) && (!empty($max_price)) && (empty($min_dyametre)) && (empty($max_dyametre))){
		$query = $db->query("SELECT  *  FROM ballons WhERE prix >= '$min_price'  AND  prix <= '$max_price' AND  prix > 0  ");
	}else

	if((!empty($min_price)) && (!empty($max_price)) && (!empty($min_dyametre)) && (empty($max_dyametre))){
		$query = $db->query("SELECT  *  FROM ballons WhERE prix >= '$min_price'  AND  prix <= '$max_price' AND dyametre >= '$min_dyametre' AND  prix > 0 ");
	}else
	if((!empty($min_price)) && (!empty($max_price)) && (!empty($min_dyametre)) && (!empty($max_dyametre))){
		$query = $db->query("SELECT  *  FROM ballons WhERE prix >= '$min_price'  AND  prix <= '$max_price' AND dyametre >= '$min_dyametre' AND dyametre <= '$max_dyametre' AND  prix > 0 ");
	}else
	if((!empty($min_dyametre)) && (empty($min_price)) && (empty($max_price)) &&  (empty($max_dyametre))){
		$query = $db->query("SELECT  *  FROM ballons WhERE  dyametre >= '$min_dyametre'  AND  prix > 0 ");
	}else
	if((!empty($max_dyametre)) && (empty($min_price)) && (empty($max_price)) && (empty($min_dyametre)) ){
		$query = $db->query("SELECT  *  FROM ballons WhERE  dyametre <= '$max_dyametre' AND  prix > 0 ");
	}else
	if((!empty($min_dyametre)) &&  (!empty($max_dyametre)) && (empty($min_price)) && (empty($max_price)) ){
		$query = $db->query("SELECT  *  FROM ballons WhERE  dyametre >= '$min_dyametre'  AND dyametre <= '$max_dyametre' AND dyametre !=0 ");
	}
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 

//============================================================
//                           Guirlande
//==============================================================

function filtr_guirlande($min_price)
{
	Global $db;
	$results = array();
	$query = $db->query("SELECT  *  FROM ballons WhERE prix >= '$min_price' AND  prix > 0  ");
	
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 
?>