<?php include('databases/connect_db.php'); ?>
<?php include('includes/constants.php'); ?>
<?php //include('includes/errors.php'); ?>

<?php
$page = htmlentities($_GET['page']);   									
$pages = scandir('pages');												
if(!empty($page)&& in_array($_GET['page'].".php",$pages))				
{
	$name_page = $_GET['page'];
	$content = 'pages/'.$name_page.".php";
}else
{
	header("Location:index.php?page=home");		
}

if(isset($_SESSION['email'])&& $page != 'membre' && $page !='articles'
 && $page !='catalogue'  && $page !='contacts'  && $page !='shop'  && $page !='home'
  && $page !='how_to_order' && $page !='register_2' && $page !='sapin' && $page !='hornement_ballon' 
  && $page !='guirlande' && $page !='jeux' && $page !='dev_prod_sapin' && $page !='dev_prod_ballon' && $page !='dev_prod_jeux' && $page !='dev_prod_guirlande'
  && $page !='all_articles' && $page !='article_detaille'
   && $page !='my_commades')//les pages autoriser 
{
	header("Location:index.php?page=membre");
}

if(isset($_SESSION['admin'])&& $page != 'panel_admin' && $page !='articles' && $page !='all_articles'
 && $page !='catalogue'  && $page !='contacts'  && $page !='shop'  && $page !='home' && $page !='article_detaille'
  && $page !='how_to_order' && $page !='sapin' && $page !='hornement_ballon' && $page !='guirlande' && $page !='jeux'
   && $page !='dev_prod_sapin' && $page !='dev_prod_ballon' && $page !='dev_prod_jeux' && $page !='dev_prod_guirlande' && $page !='g_commade')//les pages autoriser 
{
	header("Location:index.php?page=home");
}
?>

