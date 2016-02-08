$(document).ready(function(){
	$('.btn_cd_ldg').click(function(){
		$id_name_prod = $(this).attr('id');
		$('form #pod_choisir').val($id_name_prod);
	

			//alert($id_name_prod);
		});
	$('.btn_cd_null').click(function(){
		$id_name_prod = $(this).attr('id');
		$('form #pod_choisir').val("Не Выбран !");
			//alert($id_name_prod);
		});
		$('.open_sms').click(function(){
		//	$('body').append('<div class="bg_pop"></div>');
			//location.reload(true);
			//$('.sms1').fadeIn();
		});
	




});