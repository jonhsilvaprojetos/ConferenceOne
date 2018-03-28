$(document).ready(function(){
	if(screen.width >= 767){

	 $(window).scroll(function(){

	        if ($(this).scrollTop() > 50) {
	        	$('body').addClass('fixedTop');
	            $('#voltar-ao-topo').fadeIn(300);
	        } else {
	        	$('body').removeClass('fixedTop');
	            $('#voltar-ao-topo').fadeOut(300);
	        }
		});
		
	}
		var _topZero = $('html, body');

		var _returnTop = $('.logo-cabecalho > div > img, #voltar-ao-topo, #cabecalho .logo-mobile img');

		_returnTop.click(function(){
		_topZero.animate({scrollTop:0}, 1500); //slow, medium, fast 

	});

// ====================== borda deslizante ao passar mouse no menu ====================================  
/*$('#cabecalho nav.menu-cb > ul > li').mouseover(function(){
	var LineWidth = $(this).width();
	var LineLeft = $(this).position().left;
	$('#cabecalho nav.menu-cb > ul .running-line').animate({
		width: LineWidth,
		left: LineLeft
	}, 010);	
			
});
	*/


	var $pstEvent = $('.eventos-passados .grid-dropdown');
	var $btnDrop = $('.eventos-passados #dropdown-grid');
	$pstEvent.hide();
	$btnDrop.click(function(){
		$pstEvent.slideToggle(1000);
		if(	$btnDrop.text() == ("View More")){
			$btnDrop.text('View Less');
		}else {
			$btnDrop.text('View More');
		}
	});


	var $aftElem = $('.noticias .tabela .table-row li.more');
	var $elemDrop = $('.noticias .tabela .text-more');
	$elemDrop.hide();
	$aftElem.each(function() {
		$(this).find('i').click(function() { 
			$(this).toggleClass('active');
			$(this).parents('ul').siblings('.noticias .tabela .text-more').slideToggle('slow');
		})
	});


	   $('.btn-cadastro, .box-login-center .box form .items #cadastrar').click(function(){
	     localStorage.setItem('formCadastro', 'true');
		});
		
	// local storage no botão cadastro
	$('.submit.cadastrar').click(function(){
		localStorage.setItem('formCadastro', 'true');
	});

	// Script botão bem vindo exibir dropdown
	$('span.bem-vindo').click(function(){
		$('.dropdown-conta').slideToggle(400);
	});


});