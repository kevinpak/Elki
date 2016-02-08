<?php
//recuperation d'info de l'utilisateur connecter
function infos_membre_connecte()
{
	Global $db;
	$email= $_SESSION['email'];
	$results = array();
	$query = $db->prepare("SELECT *  FROM clients WhERE email = ? ");
	$query->execute(array($email));
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 
//============================================================
//                           MY COMMANDE
//==============================================================

//recuperation all date commande
function my_date_c()
{
	Global $db;
	$email= $_SESSION['email'];
	$results = array();
	$query = $db->prepare("SELECT  DISTINCT date_c  FROM commandes WhERE client = ? ORDER BY date_c DESC   ");
	$query->execute(array($email));
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 

//recuperation all commmande client
function my_commades($date_distinct)
{
	Global $db;
	$email= $_SESSION['email'];
	$results = array();
	$query = $db->prepare("SELECT *  FROM commandes WhERE client = ? AND date_c ='$date_distinct' ");
	$query->execute(array($email));
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

//recuperation tatal sum commande
function total_sum($date_distinct)
{
	Global $db;
	$email= $_SESSION['email'];
	$results = array();
	$query = $db->prepare("SELECT SUM(prix) as sum FROM commandes WhERE client = ? AND date_c ='$date_distinct' ");
	$query->execute(array($email));
	while($row = $query->fetch())
	{
		$results[] =$row;
	}
	return $results;
} 

?>