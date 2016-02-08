$(document).ready(function  () {
	style.mouseenter();
	style.mouseleave();
	//style.click_z_p();

	zoom.click_z_img_pb();
	nav_admin.nav_menu();
	zoom2.click_z_url();

//lire la suite
	lire_suite.developper();

//recuperer info update img
	the_click.click_table_id();

//recuperer info caracter elki
	the_click.click_cara_elki();

//les points
	point.etoile();
	
});

//==>nav catalogue
style ={
	mouseenter:function(){
		$('.content_zi .panel_zi p , .content_zi .panel_zi span a').mouseenter(function(){
			$(this).closest('.panel_zi').addClass('vert');
		});
		
	},
	mouseleave:function(){
		$('.content_zi .panel_zi p , .content_zi .panel_zi span a').mouseleave(function(){
			$(this).closest('.panel_zi').removeClass('vert');
		});
	},
	click_z_p:function(){//affichage des catalogues du nav(icone) 
		
		$('.content_zi .panel_zi p , .content_zi .panel_zi span a ').click(function(){
			$('.content_zi .panel_zi').removeClass('vert_click');
			$(this).closest('.panel_zi').addClass('vert_click');
			$('.blcK_catalogue_article , .block_dev_prodoct_cata').css('display' , 'none');
			$('.block_ctalogue_nav').css('display' , 'block');
			$('.block_ctalogue_nav .block_gene').css('display' , 'none');
			$title_h2 = $(this).closest('.panel_zi').find('span a').html();
			$('.block_ctalogue_nav .catalogue_title h2').empty().append($title_h2);
			$title_id = $(this).closest('.panel_zi').attr('id');
			$title_id_zone = '#type_' + $title_id;
			$('.block_ctalogue_nav ' + $title_id_zone).css('display' , 'block');
			//alert($title_id2);
			return false;
		});

	/*	$('.z_info_pb .taille_product a').click(function(){
			
			$url_id_prod = $(this).attr('id');
			$('.block_ctalogue_nav').css('display' , 'none');
			$('.block_dev_prodoct_cata').css('display' , 'block');
			$name_pod_dev = $(this).closest('.z_info_pb').find('.name_product').html();
			$('.block_dev_prodoct_cata .dev_prodoct_title h2').empty().append($name_pod_dev);
			$url_img_pod_dev = $(this).closest('.z_pb').find('.z_img_pb img').attr('src');

			$('.block_1_bgd .block_1_bgd_left .img_bgd').empty();
			$.get($url_img_pod_dev, function(img){
    		$('<img/>').attr('src', $url_img_pod_dev).appendTo('.block_1_bgd .block_1_bgd_left .img_bgd');
			});
			
		});*/

	}
},//end style()


//==>zoom img z_img_pb
zoom ={
	click_z_img_pb:function(){
		var z_ipb = $('.catalogue_type .z_img_pb');

		z_ipb.click(function(){
			$('body').append('<div class="bg_pop"></div>');
			$('.cadre_img').fadeIn();
			$url_img_z_ipb = $(this).find('img').attr('src');
			$nom_produit = $(this).closest('.z_pb').find('.z_info_pb .name_product').html();
			$taille_produit = $(this).closest('.z_pb').find('.z_info_pb .taille_product small').html();
			$prix_produit = $(this).closest('.z_pb').find('.z_commande_pb_price z_cpb p').html();
			//alert($url_img_z_ipb);
			$('.cadre_img .content_cadre_img , .info_cadre_img p').empty();
			$.get($url_img_z_ipb, function(img){
    		$('<img/>').attr('src', $url_img_z_ipb).appendTo('.cadre_img .content_cadre_img');
			});
			//$('.info_cadre_img p').html($nom_produit);
			$('.info_cadre_img p').append($nom_produit , "<span>"+$taille_produit+"</span>");
		});

		//zoom2;
		var z_ibgd = $('.img_bgd');
		z_ibgd.click(function(){
			$('body').append('<div class="bg_pop"></div>');
			$('.cadre_img').fadeIn();
			$url_img_z_ibgd = $(this).find('img').attr('src');
			//$nom_produit = $(this).closest('.z_pb').find('.z_info_pb .name_product').html();
			//$taille_produit = $(this).closest('.z_pb').find('.z_info_pb .taille_product small').html();
			//$prix_produit = $(this).closest('.z_pb').find('.z_commande_pb_price z_cpb p').html();
			//alert($url_img_z_ipb);
			$('.cadre_img .content_cadre_img , .info_cadre_img p').empty();
			$.get($url_img_z_ibgd, function(img){
    		$('<img/>').attr('src', $url_img_z_ibgd).appendTo('.cadre_img .content_cadre_img');
			});
			//$('.info_cadre_img p').html($nom_produit);
			//$('.info_cadre_img p').append($nom_produit , "<span>"+$taille_produit+"</span>");
		});


		$('.hide_ci').click(function(){
			$('.bg_pop , .cadre_img , .b_dis').fadeOut(function(){
			});
				return false;
		});

	}
},

nav_admin ={
				nav_menu:function(){
					var z_nmea = $('.menu_panel_admin ul li ');
					z_nmea.click(function(){
						$url_mar = $(this).find('a').attr('href');
						$title_marg = $(this).find('a').html();
						$title_mar = $title_marg.split(" "); 
						$('.title_cpa h2').empty().append('Форма Добавления '+ $title_mar[1]);
						$url_ma = $url_mar.split('_');
						z_nmea.removeClass('block');
						$(this).addClass('block');
						$('.content_panel_admin .z_cpa').removeClass('block');
						$('.content_panel_admin #'+$url_ma[1]).addClass('block');
						//alert($url_ma);
					});
				}
},
zoom2 ={
	click_z_url:function(){
		var z_tfh = $('.z_img_hto .opne_info_how');
		z_tfh.click(function(){
			$id_lien = $(this).attr('id');
			$('body').append('<div class="bg_pop"></div>');
			//alert('ok');
			$('.kadra #tinfh'+$id_lien).fadeIn(function(){
			});
				return false;
		});

		}
},

lire_suite ={
	developper:function(){
		var url_suite=$('.suite_art');
		url_suite.click(function(){
		var p_hauteur=	$(this).closest('.content_statia').find('p').height();
		if(p_hauteur < 280){
		$(this).closest('.content_statia').find('p').removeClass('agrandir_max');
		$(this).empty().append('Обратьно');
		}else{
			$(this).closest('.content_statia').find('p').addClass('agrandir_max');
			$(this).empty().append('Подробнее...');
		}
		});
	}	
},
the_click ={
	click_table_id:function(){
		var z_tbl_id = $('.get_info1');
		z_tbl_id.click(function(){
			
			$url_upd = $(this).attr('id');
			$elm_url_upd = $url_upd.split('@');
			$('#form_updante_comment').find('#id_prdX').val($elm_url_upd['0']);
			$('#form_updante_comment').find('#apisaniaX').val($elm_url_upd['1']);
			$('#form_updante_comment').find('#tableX').val($elm_url_upd['2']);
			$('#form_updante_comment').find('#champX').val($elm_url_upd['3']);
			
			$('body').append('<div class="bg_pop"></div>');
			$('.update_img').fadeIn(function(){
			});
				return false;
		});


		var z_tbl_id2 = $('.get_info2');
		z_tbl_id2.click(function(){
			$url_upd = $(this).attr('id');

			$elm_url_upd = $url_upd.split('@');
			$('#form_updante_info').find('#id_prdXX').val($elm_url_upd['1']);
			$('#form_updante_info').find('#champXX').val($elm_url_upd['2']);
			$('#form_updante_info').find('#tableXX').val($elm_url_upd['3']);
			$('#form_updante_info').find('#priceXX').val($elm_url_upd['4']);
			$('#form_updante_info').find('#poindXX').val($elm_url_upd['5']);

			$('body').append('<div class="bg_pop"></div>');
			$('.update_img2').fadeIn(function(){
			});
				return false;
		});




		var z_tbl_id3 = $('.get_infoballon');
		z_tbl_id3.click(function(){
			$url_upd = $(this).attr('id');

			$elm_url_upd = $url_upd.split('@');
			$('#form_updante_infoBallon').find('#id_prdB').val($elm_url_upd['1']);
			$('#form_updante_infoBallon').find('#priceB').val($elm_url_upd['2']);
			$('#form_updante_infoBallon').find('#diametreB').val($elm_url_upd['3']);
			$('#form_updante_infoBallon').find('#apisaniaB').val($elm_url_upd['4']);
			

			$('body').append('<div class="bg_pop"></div>');
			$('.update_img3').fadeIn(function(){
			});
				return false;
		});
		},
		click_cara_elki:function(){
			var cara_elki = $('.cara_taille a');
			cara_elki.click(function(){

				$url_cara = $(this).attr('href');
				$val_cara = $(this).html();
				$decoup_url= $url_cara.split('&&');
				$(this).closest('.content_bgd').find('.block_1_bgd .img_bgd').empty().append('<img src="images/'+$decoup_url[3]+'" alt="img_111">');
				$(this).closest('.block_1_bgd_right').find('.cara_telki').empty().append($decoup_url[1]);//
					if($decoup_url[2]==0){
						$(this).closest('.block_1_bgd_right').find('.z_inf_p4 span').empty().append('<b>НЕТ В НАЛИЧИИ</b>');//prix
						//$(this).closest('.block_1_bgd_right').find('.z_inf_p4 strong').empty();
					}else{
						$(this).closest('.block_1_bgd_right').find('.z_inf_p4 span').empty().append($decoup_url[2] +' руб');//prix
					}

				$(this).closest('.content_bgd').find('#prodt').val($decoup_url[4]);//

				$(this).closest('.block_1_bgd_right').find('.z_inf_p5 span').empty().append($val_cara);

				//alert($decoup_url);
			});
		}
},
point ={
	etoile:function(){
		$('.cont_etoil .etoil').click(function(){
			$('.cont_etoil .etoil').removeClass('bg_etoile');
		});
		$('.cont_etoil #etoil1').click(function(){
			$(this).addClass('bg_etoile');
		});
		$('.cont_etoil #etoil2').click(function(){
			$('.cont_etoil #etoil1').addClass('bg_etoile');
			$(this).addClass('bg_etoile');
		});
		$('.cont_etoil #etoil3').click(function(){
			$('.cont_etoil #etoil1 , .cont_etoil #etoil2').addClass('bg_etoile');
			$(this).addClass('bg_etoile');
		});

		$('.cont_etoil #etoil4').click(function(){
			$('.cont_etoil #etoil1 , .cont_etoil #etoil2 , .cont_etoil #etoil3').addClass('bg_etoile');
			$(this).addClass('bg_etoile');
		});
		$('.cont_etoil #etoil5').click(function(){
			$('.cont_etoil .etoil').addClass('bg_etoile');
		});
		$('.cont_etoil .etoil').click(function(){
		$nbr_etoil = $(this).closest('.cont_etoil').find('.bg_etoile').length;
		$('#pnt').val($nbr_etoil);
		});
	}
}
