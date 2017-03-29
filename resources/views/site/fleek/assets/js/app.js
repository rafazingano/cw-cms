//inicia o controller das animaÃ§Ãµes
var controller = new ScrollMagic.Controller();

$(document).ready(function(){
    toMobile();
    $('#menu-opener').on('click',function(e){
		e.preventDefault();
		if($('nav#menu-mobile').hasClass('opened')){
			$('nav#menu-mobile').removeClass('opened');
			$(this).removeClass('active');
			$('body').removeClass('menu-opened');
		}
		else{
			$('nav#menu-mobile').addClass('opened');
			$(this).addClass('active');
			$('body').addClass('menu-opened');
		}
	});
	$('.servico-item').on('click',function(e){
		var target = $(this).data('target');
		$('.servico-item').children('.servico-title').removeClass('choosed');
		$(this).children('.servico-title').addClass('choosed');
		$('.servicos-opener').trigger('click');
		if($(window).width()>992){
			$('html,body').animate({scrollTop: $('#box-servicos').offset().top},500);
			openService(target);
		}
		else{
			$('html,body').animate({scrollTop: $('#servicos').offset().top-30},500).delay(1).queue(function(next){
				openService(target);
				next();
			});
		}
		
	});
	$('.servicos-opener').on('click',function(){
		if(!$('.servicos-list').hasClass('opened')){
			$('.servicos-list').addClass('opened')
		}
		else{
			$('.servicos-list').removeClass('opened')
		}
	});
	$(window).on('resize', function(){
		toMobile();
	});
});

function toMobile(){
    var existsLogo = $('nav.mobile').find('.logo');
	var existsMenu = $('#menu-mobile');
	if($( window ).width() <= 992){
		if(existsLogo.length==0 || typeof existsLogo.length === undefined){
			$('header').find('.logo').clone().prependTo('.menu-opener-holder');
		}
		if(existsLogo.length==0 || typeof existsLogo.length === undefined){
        	$('nav.menu').clone().insertAfter('nav.mobile').attr('id','menu-mobile');
		}
  	}
  	else{
  		$('.menu-opener-holder').find('.logo').remove();
        $('#menu-mobile').remove();
  	}
      
}

function openService(target){
	$('.servico-item-box').removeClass('opened').delay(500).queue(function(next){
		var Height = $('#'+target).height();
		$('.servicos-info').height(Height);
		$('#'+target).addClass('opened');
		next();
	});
}