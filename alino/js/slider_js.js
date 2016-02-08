$(document).ready(function(){
	slider.init(); //apres chargement, executer l'objet SLIDER qui a une fonction init
	slider.play_defil();

});

slider ={
	init:function(){//la fonction int permert d'initialiser tout les parametres avant d'executer les action qui lui sont atribuees
		slider.elen = $('.content_block_slider');//on cree un elem(une variable prope a l'objet slider)

		slider.n_elem =slider.elen.find(".block_img").length;
		slider.current=0;
		slider.span_nivo=0;

		$('.btn_next').click(function(){// si on click sur ...alore
			slider.next();// execution de la fonction 
		});
		$('.btn_prev').click(function(){
			slider.prev();// execution de la fonction 
		});

		$('.content_slider').mouseover(function(){
			slider.stop_defil();// execution de la fonction 
		});

		$('.content_slider').mouseout(function(){
			slider.play_defil();// execution de la fonction 
		});
	},
	next:function(){
		slider.current++;// incrementation de slider.current
		if(slider.current  > slider.n_elem-1){// si slider.current est supperieur au nbre de case
			slider.current=0;
			slider.elen.stop().animate({marginLeft:"0px"});

			//nav automatique next-1
			$('.ContentG_slider').find("span").removeClass("on");	
			$('.ContentG_slider').find("span:first").addClass("on");
		}else{

		slider.elen.stop().animate({marginLeft: -slider.current*968+"px"});
			//nav automatique next-2
		slider.span_nivo = slider.current;
		$('.ContentG_slider').find("span").removeClass("on");		
		$('.ContentG_slider').find("."+slider.span_nivo).addClass("on");	
		}

	},
	prev:function(){
		slider.current--;
		slider.span_nivo = slider.current;
		if(slider.current < 0){
			slider.current=slider.n_elem-1;
			slider.span_nivo = slider.current;
			//nav automatique prev-1
			$('.ContentG_slider').find("span").removeClass("on");	
			$('.ContentG_slider').find("."+slider.span_nivo).addClass("on");	
		}
		slider.elen.stop().animate({marginLeft: -slider.current*968+"px"});
			//nav automatique prev-2
			$('.ContentG_slider').find("span").removeClass("on");	
			$('.ContentG_slider').find("."+slider.span_nivo).addClass("on");
	},
	play_defil: function(){ //fonction qui execute la fonction slider.next() automatikement
		slider.timer = window.setInterval("slider.next()",3000);
	},
	stop_defil: function(){//fonction qui stop l'exection de la fonction  automatik de slider.next()
		 window.clearInterval(slider.timer);
	},
	nav_next_auto: function() {
		
	}
}

//=======>nav_salider



$(document).ready(function()
		{
			$(".ContentG_slider").each(function ()//parcourir la class ContentG_slider
			{
				var obj = $(this);
				$(obj).append("<div class='nav'></div>");//a chaque element de .ContentG_slider ajouter
				$num=0;
				$(obj).find(".block_img").each(function ()
				{
					$numero = $num++;
					$(obj).find(".nav").append("<span class='"+$numero+"' rel='"+$numero+"'></span>");
					$(this).addClass("ContentG_slider"+$numero);
				});

				$(obj).find("span:first").addClass("on");
			});

		});

function sliderJS (obj, sl) // slider function
	{
		var ul = $(sl).find(".content_block_slider");
		//var bl = $(ul).find(".ContentG_slider"+obj);
		var step = '968';
		//var varel = 1+obj  ;
		$(ul).animate({marginLeft: "-"+step*obj}, 500);
		//alert(obj);
	}

$(document).ready(function()// slider click navigate
	{
		$('.ContentG_slider .nav span').click(function() 
	{
		var sl = $(this).closest(".ContentG_slider");
		$(sl).find("span").removeClass("on");
		$(this).addClass("on");
		var obj = $(this).attr("rel");
		sliderJS(obj, sl);
		return false;
	});

		
	});





