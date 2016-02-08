<?php 

$req = $db->query('SELECT id_c FROM commentairs');

$nbre_total_articles = $req->rowCount();

$nbre_articles_par_page = 2;

$nbrearticles_max_avant_et_apres = 2;

$nbr_pages = ceil($nbre_total_articles / $nbre_articles_par_page);


if(isset($_GET['pag']) && is_numeric($_GET['pag'])){
	$page_num = $_GET['pag'];
}else{
	$page_num = 1;
}

if ($page_num < 1) {
	$page_num = 1;
}else if ($page_num > $nbr_pages) {
	$page_num = $nbr_pages;
}

$limit = 'LIMIT '.($page_num -1) * $nbre_articles_par_page. ',' .$nbre_articles_par_page;
$sql = "SELECT * FROM commentairs WHERE name_table = elki  ORDER BY date_c DESC $limit";
//echo $limit;

/*-----------------------------------------------*/
$pagination = '';
if ($nbr_pages != 1) {
	if ($page_num > 1) {
		$provious = $page_num - 1;
		$pagination .= '<a href="#"> << предыдущая</a> &nbsp; &nbsp;';
		for($i = $page_num - $nbrearticles_max_avant_et_apres; $i < $page_num ; $i++) { 
			if ($i > 0) {
				$pagination .='<a href="#">'.$i.'</a> &nbsp;';
			}
		}
		
	}
	/*--page active--*/
	$pagination .='<span class="active_pag v_lien">'.$page_num.'</span>&nbsp;';
		/*--apres page active--*/
	for ($i = $page_num+1; $i <= $nbr_pages ; $i++) { 
		$pagination .= '<a href="#">'.$i.'</a>';
		if ($i >= $page_num + $nbrearticles_max_avant_et_apres) {
			break;
		}
	}
	if ($page_num != $nbr_page) {
		$next = $page_num + 1;
		$pagination .='<a href="#"> следующая >></a> ';
	}
}
 ?>