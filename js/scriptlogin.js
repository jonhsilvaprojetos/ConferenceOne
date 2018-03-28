$(document).ready(function(){
	$('.box-login-center:not(.cadastro)').addClass('initial');

		$('.cdtr').click(function(){

			$('body').toggleClass('dropped-box');
			$('.box-login-center:not(.cadastro)').removeClass('time-effct');
		if(	$(this).text() == ('Crie sua Conta')){
			$(this).text('Faça seu Login');
		} else {
			$(this).text('Crie sua Conta');
		}

		});



		      if (localStorage.formCadastro == 'true') {
		      	$('.box-login-center:not(.cadastro)').addClass('time-effct');
		     
			
        $('body').addClass('dropped-box');
            localStorage.setItem('formCadastro', 'false');

           		 if($('.cdtr').text() == ('Crie sua Conta')){
						$('.cdtr').text('Faça seu Login');
					}       
		}	else {}
		
	

	/*	var $activeForm = $('#bodyLogin .box-login-center .box form .form-group');
		
			$activeForm.on('click',function(){
				
				$('#bodyLogin form .form-group').removeClass('active');
				$('#bodyLogin form .form-group:eq('+myindex+')').addClass('active');
				
			});
			
	*/
	
	
	$( "#bodyLogin .box-login-center .box form .form-group" ).delegate( "*", "focus blur", function() {
		var elem = $( this );
		setTimeout(function() {
		  elem.toggleClass( "focused", elem.is( ":focus" ) );
		}, 0 );			
	  });

	
			

	/*		$('form').click(function(){
				if($('#bodyLogin form .form-group').hasClass('active')){
					$('#bodyLogin form .form-group').removeClass('active');
				}
			});
*/

});