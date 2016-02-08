$(document).ready(function(){
	$("#register_form input").focus(function(){
		$("#status").fadeOut(800);
	});

	$("#email").keyup(function(){
		check_email();
	});

	function check_email(){
		$.ajax({
			type: "post",
			url:  "redirection_ajax/_register.php",
			data: {
				'email_check' : $("#email").val()
			},
			success: function(data){
				console.log(data);
				if(data == "success"){
					$("#output_email").html('<img src="images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$("#output_email").css("color", "red").html(data);
				}
			}
		});
	}

	$("#password").keyup(function(){
		if($(this).val().length < 6){
			$("#output_pass1").css("color", "red").html("Слишком короткий (минимум 6 символов)");
		} else if($("#password_rep").val() != "" && $("#pass2").val() != $("#pass1").val()){
			$("#output_pass1").html("Пароли отличаются");
			$("#output_pass2").html("Пароли отличаются");
		} else {
			$("#output_pass1").html('<img src="images/confirm_1.png" class="small_image" alt="confirm_1" />');
		}
	});

	$("#password_rep").keyup(function(){
		//On vérifie si les mots de passe coïncident
		//alert('ook');
		check_password();
	});

	function check_password(){
		$.ajax({
			type: "post",
			url:  "redirection_ajax/_register.php",
			data: {
				'pass1_check' : $("#password").val(),
				'pass2_check' : $("#password_rep").val()
			},
			success: function(data){
				console.log(data);
				if(data == "success"){
					$("#output_pass2").html('<img src="images/confirm_1.png" class="small_image" alt="confirm_1"/>');
					$("#output_pass1").html('<img src="images/confirm_1.png" class="small_image" alt="confirm_1"/>');
				} else {
					$("#output_pass2").css("color", "red").html(data);
				}
			}
		});
	}



//Traitement du formulaire d'inscription
$("#register_form #bRegister").click(function(){
	var status = $("#status");
	var nom = $("#nom").val();
	var prenom = $("#prenom").val();
	var otchestvo = $("#otchestvo").val();
	var email = $("#email").val();
	var password= $("#password").val();
	var password_rep = $("#password_rep").val();

	if(nom == ""){ nom = 'neant';}
	if(otchestvo == ""){ otchestvo = 'neant';}
	

		if(nom == "" || prenom == "" || otchestvo == "" || email == "" || password == "" || password_rep == "" ){
			status.html("Пожалуйста, заполните все поля").fadeIn(400);
		} else if(password != password_rep) {
			status.html("Пароли отличаются").fadeIn(400);
			} else {	
				$.ajax({
				type: "post",
				url:  "redirection_ajax/_register.php",
				data: {
					'nom'    : nom,
					'prenom' : prenom,
					'otchestvo' : otchestvo,
					'email' : email,
					'password' : password,
					'password_rep' : password_rep,
				},
					beforeSend: function(){
						$("#register_form .form-group").hide();

					},
					success: function(data){
						if(data == "register_success"){
						status.html(data).fadeIn(400);
						$("#bRegister").attr("value", "Зарегистрироваться");
						} else {
							//$("#connexion h1").html("Connexion");
							if(nom == "neant"){ nom = '';}
							status.html("<strong>Уважаемый(ая) " + prenom +" "+ nom +" !</strong><br/> Спасибо за регистрацию на нашем сайте! Мы отправили на Ваш электронный адрес ссылку для активизации аккаунта. Мы верим, что Вы найдёте тут для себя много нужного и интересного! С уважением, команда «ЁлкиЗелёные»<br/><strong>P.S.</strong><em> Возможно письмо попало в папку «Спам» или «Нежелательная почта»!Проверьте, пожалуйста! По все вопросам обращайтесь (раздел «Контакты»).</em>) !").css("width", "inherit").fadeIn(400);

						}
					}
			});
						}
});


//Recuperation id de chaque produit
$(".z_cpb_btn_elki").click(function(){
	//$id_prodocte = $(this).closest('.z_commande_pb_btn').find('a').attr('href');
	//var name_prodoct = $(this).closest('.Z_prodoct_blck2 .z_pb ').find('.z_info_pb .name_product').html();
	//$id_pr = id_prodocte.split('_');
	//add_prodoct_panier();

//alert(id_prodocte);

});

	function add_prodoct_panier(){
		$.ajax({
			type: "post",
			url:  "redirection_ajax/_ajout_panier.php",
			data: {
				'id_prodoct' : $id_prodocte
			},
			success: function(data){
				if(data == "success"){
					//alert('ADD');
					$('.block_gene .aleration').css("color", "red").html(data);
				} else {
					//$('.block_gene .aleration').css("color", "red").html(data);
					alert('not ADD');
				}
			}
		});
	}
});



$(document).ready(function(){

$("#zayafka_form .open_sms").click(function(){
	$name_client = $(this).closest('form').find(".name_client").val();
	$phone_client = $(this).closest('form').find(".phone_client").val();
	$prodoct = $(this).closest('form').find(".prodoct").val();
		check_name_client();
		
	});
$("#zayafka_redu .obtenir_redu").click(function(){
	$name_client = $(this).closest('form').find(".name_client").val();
	$phone_client = $(this).closest('form').find(".phone_client").val();
	$prodoct = $(this).closest('form').find(".prodoct").val();
		reduc_name_client();

	});



function check_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_ldg.php",
			data: {
				'name_client' : $name_client,
				'phone_client' : $phone_client,
				'prodoct' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .request-form , .crd .darken , a.close ').hide();
					 //('.crd .request-form').css('display' , 'none !important');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					// $('#success_mesage').fadeIn();
					$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					//$("#output_email").fadeOut(500);
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

	function reduc_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_ldg.php",
			data: {
				'name_client_r' : $name_client,
				'phone_client_r' : $phone_client,
				'prodoct_r' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody ').hide();
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}
});

$(document).ready(function(){
//=============================Linding=============================//


//===================================================================
//                          MOSCOU
//====================================================================
//=========>Sapin_msk20=====>prodoct
$('#zayafka_form .sms_msk20').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	$prodoct = $(this).closest("form ").find(".prodoct").val();

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		commande_prod();
	}
//alert($prodoct);
});
function commande_prod(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_msk20.php",
			data: {
				'name_client' : $name_prodoct,
				'phone_client' : $phone_client,
				'prodoct' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

//=========>Sapin_msk20=====>reduction
$('#zayafka_redu .obtenir_redumsk20').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		reduc_name_client();
	}
//alert($prodoct);
});
function reduc_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_msk20.php",
			data: {
				'name_clientr' : $name_prodoct,
				'phone_clientr' : $phone_client
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$('.crd .cardbody , .crd .darken').hide();
					alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}




//=========>Sapin_msk60=====>prodoct
$('#zayafka_form .sms_msk60').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	$prodoct = $(this).closest("form ").find(".prodoct").val();

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		commande_prod();
	}
//alert($prodoct);
});
function commande_prod(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_msk60.php",
			data: {
				'name_client' : $name_prodoct,
				'phone_client' : $phone_client,
				'prodoct' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

//=========>Sapin_msk60=====>reduction
$('#zayafka_redu .obtenir_redumsk60').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		reduc_name_client();
	}
//alert($prodoct);
});
function reduc_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_msk60.php",
			data: {
				'name_clientr' : $name_prodoct,
				'phone_clientr' : $phone_client
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$('.crd .cardbody , .crd .darken').hide();
					alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}


//===================================================================
//                          SPB
//====================================================================
//=========>Sapin_spb20=====>prodoct
$('#zayafka_form .sms_spb20').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	$prodoct = $(this).closest("form ").find(".prodoct").val();

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		commande_prod();
	}
//alert($prodoct);
});
function commande_prod(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_spb20.php",
			data: {
				'name_client' : $name_prodoct,
				'phone_client' : $phone_client,
				'prodoct' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

//=========>Sapin_spb20=====>reduction
$('#zayafka_redu .obtenir_reduspb20').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		reduc_name_client();
	}
//alert($prodoct);
});
function reduc_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_spb20.php",
			data: {
				'name_clientr' : $name_prodoct,
				'phone_clientr' : $phone_client
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$('.crd .cardbody , .crd .darken').hide();
					alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}




//=========>Sapin_spb60=====>prodoct
$('#zayafka_form .sms_spb60').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	$prodoct = $(this).closest("form ").find(".prodoct").val();

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		commande_prod();
	}
//alert($prodoct);
});
function commande_prod(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_spb60.php",
			data: {
				'name_client' : $name_prodoct,
				'phone_client' : $phone_client,
				'prodoct' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

//=========>Sapin_spb60=====>reduction
$('#zayafka_redu .obtenir_reduspb60').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		reduc_name_client();
	}
//alert($prodoct);
});
function reduc_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_spb60.php",
			data: {
				'name_clientr' : $name_prodoct,
				'phone_clientr' : $phone_client
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$('.crd .cardbody , .crd .darken').hide();
					alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}



//===================================================================
//                          RUSSIA
//====================================================================
//=========>Sapin_russia20=====>prodoct
$('#zayafka_form .sms_russia20').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	$prodoct = $(this).closest("form ").find(".prodoct").val();

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		commande_prod();
	}
//alert($prodoct);
});
function commande_prod(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_russia20.php",
			data: {
				'name_client' : $name_prodoct,
				'phone_client' : $phone_client,
				'prodoct' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

//=========>Sapin_russia20=====>reduction
$('#zayafka_redu .obtenir_redurussia20').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		reduc_name_client();
	}
//alert($prodoct);
});
function reduc_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_russia20.php",
			data: {
				'name_clientr' : $name_prodoct,
				'phone_clientr' : $phone_client
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$('.crd .cardbody , .crd .darken').hide();
					alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}




//=========>Sapin_russia60=====>prodoct
$('#zayafka_form .sms_russia60').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	$prodoct = $(this).closest("form ").find(".prodoct").val();

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		commande_prod();
	}
//alert($prodoct);
});
function commande_prod(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_russia60.php",
			data: {
				'name_client' : $name_prodoct,
				'phone_client' : $phone_client,
				'prodoct' : $prodoct
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

//=========>Sapin_russia60=====>reduction
$('#zayafka_redu .obtenir_redurussia60').click(function(){
	$name_prodoct = $(this).closest("form ").find(".name_client").val();
	$phone_client = $(this).closest("form ").find(".phone_client").val();
	

	if($phone_client==''){
alert('Напишите Пожалуйсто ваш номер телефон!');
	}else{
		reduc_name_client();
	}
//alert($prodoct);
});
function reduc_name_client(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/redirection_russia60.php",
			data: {
				'name_clientr' : $name_prodoct,
				'phone_clientr' : $phone_client
			},
			success: function(data){
				if(data == "success"){
					$('.crd .cardbody , .crd .darken').hide();
					$('form .name_client , form .phone_client').val('');
					 		alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$('.crd .cardbody , .crd .darken').hide();
					alert('«Спасибо за Вашу заявку. Менеджер свяжется с Вами в ближайшее время»');
					//$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}


//===================================================================
//                          Search
//====================================================================
//=========>search=====
$('.z_search  #search').keyup(function(){
	$mot = $(this).val();
	$longueur_mot = $(this).val().length;
	if ($longueur_mot > 2) {
		search_function();
	};
	if ($longueur_mot < 3) {
		$('.centent_search').empty();
	};


});


function search_function(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/search.php",
			data: {
				'mot_clee' : $mot
			},
			success: function(data){
				if(data == "success"){
				$('.centent_search  .result  img').css({
						width:'60px',
						height:'auto'
					});
					
				} else {
$('.centent_search  .result  img').css({
						width:'60px',
						height:'auto'
					});
					$(".centent_search").fadeIn();

					$(".centent_search").css("color", "red").html(data);
			}
		}
	});
}


//===================================================================
//                          Shop.php
//====================================================================
//=========>Opperation shop=====
$('.up_quantiter').click(function(){
	$id_elems = $(this).attr('id');
	$id_elem = $id_elems.split('@@');
	$id_prod = $id_elem[0];
	$option = $id_elem[1];
	$tables = $id_elem[2];
//alert($id_elem[2]);

		opperation();

});
function opperation(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/shop.php",
			data: {
				'id_op' : $id_prod,
				'tablep' : $tables,
				'opper' : $option
			},
			success: function(data){
				if(data == "success"){
				location.reload(true);
					//$(".info_sms").html('<img src="../images/confirm_1.png" class="small_image" alt="confirm_1" />');
				} else {
					$(".info_sms").css("color", "red").html(data);
			}
		}
	});
}


	//=========>Delet prodoct=====
$('.delet_prod').click(function(){
	$id_elems = $(this).attr('id');
	$id_elem = $id_elems.split('@');
	$id_prod = $id_elem[0];
	$tables = $id_elem[1];
//alert($id_elem[2]);

		delet_p();

});
function delet_p(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/shop.php",
			data: {
				'id_p' : $id_prod,
				'table_p' : $tables
			},
			success: function(data){
				if(data == "success"){
				location.reload(true);
				} else {
					$(".info_sms").css("color", "red").html(data);

				}
			}
		});
	}

//=========>UpDate quantite for keypress=====
$('.value_q').keypress(function(e){
	if(e.keyCode==13){
		$id_elems = $(this).attr('id');
		$id_elem = $id_elems.split('@@');
		$qte = $(this).val();
		$id_prod = $id_elem[0];
		$tables = $id_elem[1];
		//alert($id_prod );
		update_qt();
		location.reload(true);
	}
});

function update_qt(){
		$.ajax({
			type: "post",
			url:  "../redirection_ajax/shop.php",
			data: {
				'id_pq' : $id_prod,
				'table_pq' : $tables,
				'qt' : $qte
			},
			success: function(data){
				if(data == "success"){
				//location.reload(true);
				} else {
					$(".info_sms").css("color", "red").html(data);
				}
			}
		});
	}

});