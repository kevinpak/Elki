<?php 
//===>sapin
if (isset($_POST['z_cpb_btn_elki'])) {
	extract($_POST);
	if ($prodt) {
		if(isset($_SESSION['elki'][$prodt])){

	$nbr1 = 	$_SESSION['elki'][$prodt] ;
	$_SESSION['elki'][$prodt] = $nbr1 + $nbr ;
		}else{
		$_SESSION['elki'][$prodt]=$nbr;}
		header("Location:index.php?page=sapin"); 
	}else{
		echo "ERROR ADD !";
	}
}
//===>sapin2
if (isset($_POST['z_cpb_btn_elki2'])) {
	extract($_POST);
	if ($prodt) {
		if(isset($_SESSION['elki2'][$prodt])){

	$nbr1 = 	$_SESSION['elki2'][$prodt] ;
	$_SESSION['elki2'][$prodt] = $nbr1 + $nbr ;
		}else{
		$_SESSION['elki2'][$prodt]=$nbr;}
		header("Location:index.php?page=sapin"); 
	}else{
		echo "ERROR ADD !";
	}
}
//===>ballon
if (isset($_POST['z_cpb_btn_ballon'])) {
	extract($_POST);
	if ($prodt) {
		if(isset($_SESSION['ballon'][$prodt])){

	$nbr1 = 	$_SESSION['ballon'][$prodt] ;
	$_SESSION['ballon'][$prodt] = $nbr1 + $nbr ;
		}else{
		$_SESSION['ballon'][$prodt]=$nbr;}
		header("Location:index.php?page=hornement_ballon"); 
	}else{
		echo "ERROR ADD !";
	}
}
//===>guirlande
if (isset($_POST['z_cpb_btn_guirlande'])) {
	extract($_POST);
	if ($prodt) {
		if(isset($_SESSION['guirlande'][$prodt])){

	$nbr1 = 	$_SESSION['guirlande'][$prodt] ;
	$_SESSION['guirlande'][$prodt] = $nbr1 + $nbr ;
		}else{
		$_SESSION['guirlande'][$prodt]=$nbr;}
		header("Location:index.php?page=guirlande"); 
	}else{
		echo "ERROR ADD !";
	}
}
//===>guirlande2
if (isset($_POST['z_cpb_btn_guirlande2'])) {
	extract($_POST);
	if ($prodt) {
		if(isset($_SESSION['guirlande2'][$prodt])){

	$nbr1 = 	$_SESSION['guirlande2'][$prodt] ;
	$_SESSION['guirlande2'][$prodt] = $nbr1 + $nbr ;
		}else{
		$_SESSION['guirlande2'][$prodt]=$nbr;}
		header("Location:index.php?page=guirlande"); 
	}else{
		echo "ERROR ADD !";
	}
}
//===>jeux
if (isset($_POST['z_cpb_btn_jeux'])) {
	extract($_POST);
	if ($prodt) {
		if(isset($_SESSION['jeux'][$prodt])){

	$nbr1 = 	$_SESSION['jeux'][$prodt] ;
	$_SESSION['jeux'][$prodt] = $nbr1 + $nbr ;
		}else{
		$_SESSION['jeux'][$prodt]=$nbr;}
		header("Location:index.php?page=jeux"); 
	}else{
		echo "ERROR ADD !";
	}
}
//===>jeux2
if (isset($_POST['z_cpb_btn_jeux2'])) {
	extract($_POST);
	if ($prodt) {
		if(isset($_SESSION['jeux2'][$prodt])){

	$nbr1 = 	$_SESSION['jeux2'][$prodt] ;
	$_SESSION['jeux2'][$prodt] = $nbr1 + $nbr ;
		}else{
		$_SESSION['jeux2'][$prodt]=$nbr;}
		header("Location:index.php?page=jeux"); 
	}else{
		echo "ERROR ADD !";
	}
}
 ?>