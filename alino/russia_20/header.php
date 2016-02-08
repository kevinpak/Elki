<?php include('../databases/connect_db.php'); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Магазин новогодних товаров "Ёлки зеленые"</title>
	<link rel="stylesheet" href="styles/foundation.css" />
	<link rel="stylesheet" href="styles/app.css" />
	<link rel="stylesheet" href="styles/styles.css" />
	<link rel="stylesheet" href="../includes/gualery_landing/style.css" />
	<script src='libreries/jquery/jquery-1.3.2.min.js'></script>
	<script  type="text/javascript" src="js/vendor/jquery.min.js"></script>
	<script  type="text/javascript" src="style.js"></script>
	<link rel="shortcut icon" href="img/logo.png">



	<script>
		function OnShowPopup(divId){
			$("#" + divId).show();
			///return false;
		}
		function OnClosePopup(divId){
			$("#" + divId).hide();
		}
	</script>
	<!--[if IE 8]>
  <link href="styles/ie.css" rel="stylesheet" type="text/css" media="screen">
  <![endif]-->
	<!--[if IE 7]>
  <link href="styles/ie.css" rel="stylesheet" type="text/css" media="screen">
  <![endif]-->
	<!--[if IE 6]>
  <link href="styles/ie.css" rel="stylesheet" type="text/css" media="screen">
  <![endif]-->



</head>
<body>

	<div class="wrap-ie">
		<header>
			<div class="row">
				<div class="columns large-3 small-6 float-center"><a class="logo" href="http://elkyzelenye24.ru/landing_page" id="boutoninformation"></a></div>

				<div class="columns large-3 small-6 float-right">
					<div class="make-request text-center float-right"><h5>8 981 900-70-33</h5>
						<h4><a href="javascript:OnShowPopup('form1');" class="link-popup btn_cd_null" >Заявка<br>on-line</a><a href="#request" class="link-ankor">Заявка<br>on-line</a></h4></div>
					</div>

					<div class="columns large-6 small-12 medium-12 text-center"><div class="slogan"></div>
				</div>

			</div>
		</header>
		
	</div>
	<?php include('../functions/landing.func.php'); ?>
	<div class="content_sms">
		<div class="sms1"><h2>Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время</h2></div>
	</div>