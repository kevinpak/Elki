$(document).ready(function(){
	$largeur_view = $('.gualerie_view').width();
	$('.block_img').css({
		width:$largeur_view+'px',
		height:'100%'
	});
	slider.init();
});


slider ={
	init:function(){
		slider.elen = $('.block_content_img');
		slider.n_elem =slider.elen.find(".block_img").length;
		slider.current=0;
		slider.span_nivo=0;
		//alert(slider.n_elem);

	$('.btn_next').click(function(){// si on click sur ...alore
			slider.next();// execution de la fonction 
		});
	$('.btn_prev').click(function(){
			slider.prev();// execution de la fonction 
		});
},
next:function(){
		slider.current++;// incrementation de slider.current
		if(slider.current  > slider.n_elem-1){// si slider.current est supperieur au nbre de case
			slider.current=0;
			slider.elen.stop().animate({marginLeft:"0px"});

			//nav automatique next-1
			$('.content_gualeri').find("span").removeClass("on");	
			$('.content_gualeri').find("span:first").addClass("on");
		}else{

			slider.elen.stop().animate({marginLeft: -slider.current*$largeur_view+"px"});
			//nav automatique next-2
			slider.span_nivo = slider.current;
			$('.content_gualeri').find("span").removeClass("on");		
			$('.content_gualeri').find("."+slider.span_nivo).addClass("on");	
		}

	},
	prev:function(){
		slider.current--;
		slider.span_nivo = slider.current;
		if(slider.current < 0){
			slider.current=slider.n_elem-1;
			slider.span_nivo = slider.current;
			//nav automatique prev-1
			$('.content_gualeri').find("span").removeClass("on");	
			$('.content_gualeri').find("."+slider.span_nivo).addClass("on");	
		}
		slider.elen.stop().animate({marginLeft: -slider.current*$largeur_view+"px"});
			//nav automatique prev-2
			$('.content_gualeri').find("span").removeClass("on");	
			$('.content_gualeri').find("."+slider.span_nivo).addClass("on");
		},

	}

//=======>nav_salider
$(document).ready(function()
{
	$(".content_gualeri").each(function ()//parcourir la class content_gualeri
	{
		var obj = $(this);
		$(obj).append("<div class='nav'></div>");//a chaque element de .content_gualeri ajouter
		$num=0;
		$(obj).find(".block_img").each(function ()
		{
			$numero = $num++;
			$(obj).find(".nav").append("<span class='"+$numero+"' rel='"+$numero+"'></span>");
			$(this).addClass("content_gualeri"+$numero);
		});

		$(obj).find("span:first").addClass("on");
	});

});
function sliderJS (obj, sl) // slider function
{
	var ul = $(sl).find(".block_content_img");
		//var bl = $(ul).find(".content_gualeri"+obj);
		var step = $largeur_view;
		//var varel = 1+obj  ;
		$(ul).animate({marginLeft: "-"+step*obj}, 500);
		//alert(obj);
	}

$(document).ready(function()// slider click navigate
{
	$('.content_gualeri .nav span').click(function() 
	{
		var sl = $(this).closest(".content_gualeri");
		$(sl).find("span").removeClass("on");
		$(this).addClass("on");
		var obj = $(this).attr("rel");
		sliderJS(obj, sl);
		return false;
	});

	
});