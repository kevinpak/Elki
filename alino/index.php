<?php include('template/_header.php'); ?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="KOMBETTO Kevin">
  <link rel="shortcut icon" href="images/logo.png">

	<title><?= WEB_SITE_NAME ;?></title>

	<!--MY STYLES CSS INCLUDES-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/adaptation.css">
	<link rel="stylesheet" href="css/my_plugin.css">
	
	<!--LIBRERIES INCLUDES-->
	<link rel="stylesheet" href="libreries/font-awesome-4.4.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="libreries/bootstrap/css/bootstrap.min.css">
	<script src='libreries/jquery/jquery-1.3.2.min.js'></script>

	
	<script src='js/slider_js.js'></script>
	<script src='js/functions.js'></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>
<body>
	<div id="wrapper">
		<?php include('template/header.php'); ?>
		<?php include($content);  ?>
		<?php include('template/footer.php'); ?>
	</div>
</body>
</html>