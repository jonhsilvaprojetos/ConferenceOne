$('document').ready(function () {
  if(screen.width <= 1199 ) {
    $('#cabecalho nav.menu-cb > ul .running-line-back').removeClass('running-line-back');
  }
    if(screen.width <= 767) {
      $('#cabecalho nav.menu-cb > ul .running-line-mobile').addClass('off');
    /*/ =========== Script Manu Hamburguer /*/
 
    var sldMenu = $('#cabecalho .menu-cb.mobile');
    $('.hamburger').click(function () {
       $('body').toggleClass('menu-mobile').addClass('back-mobile');
        sldMenu.slideToggle(700);
      if ( $(this).hasClass('closed') ) {
        $(this).addClass('open').removeClass('closed');
      } else {               
        $(this).addClass('closed').removeClass('open');
        
      }
    });

    /*/ Encerra Script Menu Hamburguer /*/
    $(window).scroll(function(){
      if ($(this).scrollTop() > 20) {

        $('body').addClass('back-mobile');        
      } else {
        $('body').removeClass('back-mobile');
      }
    });

    $(window).scroll(function(){
    if ($(this).scrollTop() < 1) {
      $('#cabecalho nav.menu-cb > ul .running-line-mobile').addClass('off');
      sldMenu.slideUp(500);
        $('.hamburger').addClass('closed').removeClass('open');
    }else {

    }
  });

 /*   $('#cabecalho nav.menu-cb > ul > li').mouseover(function(){
	var LineLeft = $(this).position().top;
	$('#cabecalho nav.menu-cb > ul .running-line-mobile').animate({
		top: LineLeft
	}, 010);	
			
    });

        */


 }
});