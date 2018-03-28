<?php
	session_start();
	include 'config_system/conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1.0">
		<title>Conference One</title>
		<link rel="icon" type="image/ico" href="imagens/favicon.ico">
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/indexEstilo.css">
		<link rel="stylesheet" type="text/css" href="css/indexEfeitos.css">
		<link rel="stylesheet" type="text/css" href="css/Css-Mobile-Ate-767.css">

</head>
<body class="bodyIndex">
	<header id="cabecalho">
		<!-- Elementos Mobile -->
	<div class="barra-mobile hidden-lg hidden-md hidden-sm">
		<div class="container">
			<div class="row-fluid">
				<div class="col-xs-8 logo-mobile">
					<img src="imagens/logo/logo-envato.png" title="Envato" class="pull-left">
				</div>
				<div class="col-xs-4 menu-hamburguer">
						<div class="hamburger closed pull-right">
								<div class="burger-main">
								  <div class="burger-inner">
									<span class="top"></span>
									<span class="mid"></span>
									<span class="bot"></span>
								  </div>
								</div>
							  
								<div class="svg-main">
								  <svg class="svg-circle">
								  <path class="path" fill="none" stroke="#fff" stroke-miterlimit="10" stroke-width="3" d="M 34 2 C 16.3 2 2 16.3 2 34 s 14.3 32 32 32 s 32 -14.3 32 -32 S 51.7 2 34 2"/>
								  </svg>
								</div>
								<div class="path-burger">
								  <div class="animate-path">
									<div class="path-rotation"></div>
								  </div>
								</div>
							  </div>
				</div>
			</div>
			<nav class="menu-cb mobile">
					<ul class="nivel-um list-unstyled">
					<div class="running-line-mobile"></div>
						<li class="um"><a href="#sign" class="anchorlink scroll">Event Details</a></li>
						<li class="dois"><a href="#speakers" class="anchorlink scroll">Speakers</a></li>
						<li class="tres"><a href="#sponsor" class="anchorlinl scroll">Sponsors</a></li>
						<li class="quatro"><a href="#past-events" class="anchorlink scroll">Past Events</a></li>
						<li class="cinco"><a href="#rodape" class="anchorlink scroll">Contact</a></li>
					<div class="running-line-mobile-back"></div>
					</ul>	
			</nav>
		</div>
	</div>
		<!-- Elementos Mobile -->




				<div class="row-fluid"> 
					<div class="conteudo menu">
					<div class="container">
		<?php
		if(isLoggedIn()){
			echo '<div class="row-fluid entrar col-md-12"><div class="usuario-logado">';
			echo '<span class="bem-vindo">Olá, '.$_SESSION['user_usuario'].'  <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></span>';
			echo '<div class="dropdown-conta" style="display:none;"><ul><li><a href="config_system/painel.php"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Minha conta</a></li><hr><li><a href="config_system/logout.php"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Sair</a></li></ul></div>';
			echo '</div></div>';
		}else{
			echo '<div class="row-fluid entrar col-md-12">';
			echo '<a href="indexLogin.php" class="pull-right button-log">Entrar</a>';
			echo '<a href="indexLogin.php" class="pull-left button-log btn-cadastro">Cadastrar</a>';
			echo '</div>';
		}
		?> 
						<div class="col-md-4 col-sm-4 col-xs-12 logo-cabecalho hidden-xs">
								<div>
									<img src="imagens/logo/logo-envato.png" title="Envato" >
								</div>
						</div>

						<div class="col-md-8 col-sm-8 col-xs-12 menu-cabecalho hidden-xs">
							<nav class="menu-cb">
								<ul class="nivel-um list-unstyled">
								<div class="running-line"></div>
									<li><a href="#sign" class="anchorlink scroll">Event Details</a></li>
									<li><a href="#speakers" class="anchorlink scroll">Speakers</a></li>
									<li><a href="#sponsor" class="anchorlink scroll">Sponsors</a></li>
									<li><a href="#past-events" class="anchorlink scroll">Past Events</a></li>
									<li><a href="#rodape" class="anchorlink scroll">Contact</a></li>
								<div class="running-line-back"></div>
								</ul>	
							</nav>
						</div>	
					</div>						
					</div> <!-- fim div conteudo cabecalho -->
				</div>

				<div class="row-fluid crmt">
		<div class="container">				
					<div class="cronometro col-md-12 col-sm-12 col-xs-12 ">
						<div class="countdown styled"></div>
					</div>

				</div>

		</div> 
	</header>

	<section id="corpo">

	<div class="withRotation">
		<div class="container fitRotation">

			<div class="row-fluid sign" id="sign">
				<div class="cadastro col-md-12">
				
					<div class="col-md-12 col-sm-12 col-xs-12 bem-vindo">
						<h1 class="bem-vindo">Welcome!, <span class="Userisoffline">Guest</span><span class="Userloggedin"></span></h1>
						<p>The biggest envato community meetup in Bangladesh is happening right now! And you can be a part of it too...</p>
						</br>
						<p>Get together with members of the Envato community to talk shop, trade war stories, make new friends and see the faces behind the avatars. Whether you’re an author on Envato Market, a client on Envato Studio, or a learner on Tuts+, you are invited!</p>
						</br>
						<p>It doesn’t matter as long as you have the motivation and interest to work at the envato and bring cookies to our event. Just kidding, but we don’t mind having more cookies! ;)Head over and fill up the sign up form here so that we can keep track of our guests. Don’t forget to register on our <b>nvite</b> page here too!</p>

					</div>

				<div class="col-md-6 col-sm-6 col-xs-12 cadastrar hidden">
					<div id="formulario">
						<form id="cadastro"> 
							<h2 class="title-form">Sign up for our event</h2>
							<div class="name form-group">
								<input class="form-control" type="text" name="name" placeholder="Nome Completo">
							</div>

							<div class="email form-group">
								<input class="form-control" type="email" name="email" placeholder="Seu E-mail">
							</div>

							<div class="phone form-group">
								<input class="form-control" type="phone" name="phone" placeholder="Seu Numero">
							</div>

							<div class="username form-group">
								<input class="form-control" type="text" name="text" placeholder="Nome Usuário" data-val-required="O Campo Precisa ser Preenchido">
							</div>	

							<div class="sigin">
								<button class="btn btn-success" type="submit">Me deixe Entrar!</button>
							</div>
							<div class="info-important">
							<span>Apresse-se, Assentos limitados disponíveis</span>
							<span>nunca enviaremos spam seu e-mail</span>
							</div>
						</form>

					</div>	
				</div>
				</div> <!-- fim div cadastro corpo -->
			</div> <!-- fim row sign corpo -->

			<div class="row-fluid acess">
				<div class="acessos col-md-12">
				
					<div class="col-md-4 col-sm-4 col-xs-12 text-center">

							<div class="col-md-12">
								<img src="imagens/icons/icon-community.png">
							</div>
							<div class="col-md-12">
								<h1>Community</h1>
								<p>Meet the Community you’ve always talked with, in real life! This meetup will be all about authors engaging each other with interesting coversation
 and topics. We will have loads of fun.</p>
							</div>
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12 text-center">

							<div class="col-md-12">
								<img src="imagens/icons/talk-shop.png">
							</div>
							<div class="col-md-12">
								<h1>Talk Shop</h1>
								<p>In this meetup you will get to know the marketplaces better, because that’s why were all here for right? Learn a few tips and tricks from experienced authors from all over the country.</p>
							</div>							
					</div>

					<div class="col-md-4 col-sm-4 col-xs-12 text-center">

							<div class="col-md-12">
								<img src="imagens/icons/war-stories.png">
							</div>
							<div class="col-md-12">
								<h1>War Stories</h1>
								<p>Gather round fellow authors! Hear the stories of success from your favorite authors and learn how they we able to tackle their problems and become successful.</p>
							</div>	

					</div>

				</div>	<!-- fim div acessos corpo -->
			</div>


			<div class="row-fluid tbl">

				<div class="noticias col-md-12">
					
					<div class="tabela">
							<table class="table table-striped table-rounded">
									
								<div class="table-row um">
									<ul class="list-unstyled">
										<li>Time</li>
										<li>Stuff that will happen</li>
									
									</ul>
								</div>

								
									<div class="table-row dois">
										<ul class="list-unstyled">
											<li>10am - 12pm</li>
											<li>Introduction and presentations about Envato</li>
											<li class="more"><i class="fa fa-plus-circle drop-text" aria-hidden="true"></i></li>
										</ul>
											<div class="text-more"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
									</div>
											
									<div class="table-row tres">
										<ul class="list-unstyled">
											<li>12pm - 02 pm</li>
											<li>Sessions by honorable guests and Speakers</li>
											<li class="more"><i class="fa fa-plus-circle drop-text" aria-hidden="true"></i></li>
										</ul>
											<div class="text-more"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
									</div>	

									<div class="table-row quatro">
										<ul class="list-unstyled">
											<li>02pm - 03pm</li>
											<li>Break and Mingle time with the authors</li>
											<li class="more"><i class="fa fa-plus-circle drop-text" aria-hidden="true"></i></li>
										</ul>
											<div class="text-more"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
									</div>	

									<div class="table-row cinco">
										<ul class="list-unstyled">
											<li>03pm - 05pm</li>
											<li>Portfolio Review, Rewards and Ending Presentation</li>
											<li class="more"><i class="fa fa-plus-circle drop-text" aria-hidden="true"></i></li>
										</ul>
											<div class="text-more"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p></div>
									</div>

								

							</table>

						<p class="info-pos-table pdd-mob">Please keep in mind that the timings may differ according to the flow of the event. The even is actually day long and we do plan to finish it within our set time but it doesn’t have to be, if we all agree to hangour for some time more, what harm could it do? :)</p>
					</div>
				</div> <!-- fim div noticias corpo -->
			</div> 
		</div> <!-- fim withRotation  corpo -->
	</div><!-- fim fitRotation Container  corpo -->


			<div class="row-fluid elites">
				<div class="os-elites">
					<div class="container">
					<div class="col-md-5 col-sm-6 col-xs-12 icon">
							<img src="imagens/icons/evanato-Elite.png" id="img-Elite">

					</div>
					<div class="col-md-7 col-sm-6 col-xs-12 info-elites text-right">
							<h1 class="title-elite">
								We reward the Elites!
							</h1>						
							<p>Are you an Elite author in the Envato Marketplaces? If so we are proud of you! We want to give our thanks in achieving great success in the marketplace and we want to make known to the people of our country that you are amazing! Our Elite gifting program includes giving you special merchandize from our community and also promote your works in our community.</p>

							</br>

							<p>All you have to do is contact us by clicking the button here and then its just going to the event, saying something motivational and taking that swag while looking amazing infront of thousands of other community members.</p>
							
							</br>

							<p>*Be advised, we will only give you Elite thank you swag for each level of elite you cross. That means if you do not cross to the next elite level before the next event, you cannot claim your prizes.</p>
							</br>	

							<a href="#">Bring on the swag!</a>
					</div>
					</div>
				</div>
			</div>




	<div class="withRotation">
		<div class="container fitRotation">
			<div class="row-fluid grid-speakers" id="speakers">
					<div class="col-md-12 col-sm-12 col-xs-12 info pdd-mob">
						<h1 class="title-speakers">Speakers</h1>
						<p class="paddinG">Meet our Valuable speakers who will be each giving 10 minutes sessions on different subjects regarding being a digital product author, working at envato and marketing your business. Hope you will have a great time listening to our presentations!</p>
					</div>
					<div class="col-md-12 col-sm-12 col-xs-12 grids">
						
						<div class="row-fluid grid-um">

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid userum">
									<img src="imagens/img/speaker1.png">
										<div class="box-content-grid">

											<div class="zomEffect">	
												<h1>Shahriyer Shuvo</h1>
												<hr/>
												<p>More about selling in the Envato Marketplaces</p>
											</div>
													
												<div class="redes-box">
													<ul>
											 			<li class="facebook"><a href="#" title="facebook"></a></li>
											 			<li class="twitter"><a href="#" title="twitter"></a></li>
											 			<li class="behance"><a href="#" title="behance"></a></li>
											 			<li class="dribble"><a href="#" title="dribble"></a></li>
											 		</ul>
												</div>
										</div>
								</div>

							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid userdois">
									<img src="imagens/img/speaker2.png">
										<div class="box-content-grid">

											<div class="zomEffect">	
												<h1>Shahriyer Shuvo</h1>
												<hr/>
												<p>More about selling in the Envato Marketplaces</p>
											</div>

												<div class="redes-box">
													<ul>
											 			<li class="facebook"><a href="#" title="facebook"></a></li>
											 			<li class="twitter"><a href="#" title="twitter"></a></li>
											 			<li class="behance"><a href="#" title="behance"></a></li>
											 			<li class="dribble"><a href="#" title="dribble"></a></li>
											 		</ul>
												</div>
										</div>
								</div>
								
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid usertres">
									<img src="imagens/img/speaker3.png">
										<div class="box-content-grid">

											<div class="zomEffect">	
												<h1>Shahriyer Shuvo</h1>
												<hr/>
												<p>More about selling in the Envato Marketplaces</p>
											</div>

												<div class="redes-box">
													<ul>
											 			<li class="facebook"><a href="#" title="facebook"></a></li>
											 			<li class="twitter"><a href="#" title="twitter"></a></li>
											 			<li class="behance"><a href="#" title="behance"></a></li>
											 			<li class="dribble"><a href="#" title="dribble"></a></li>
											 		</ul>
												</div>
										</div>
								</div>
								
							</div>

						</div>

						<div class="row-fluid grid-dois">

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid userum">
									<img src="imagens/img/speaker4.png">
										<div class="box-content-grid">

										<div class="zomEffect">	
											<h1>Shahriyer Shuvo</h1>
											<hr/>
											<p>More about selling in the Envato Marketplaces</p>
										</div>

											<div class="redes-box">
											 		<ul>
											 			<li class="facebook"><a href="#" title="facebook"></a></li>
											 			<li class="twitter"><a href="#" title="twitter"></a></li>
											 			<li class="behance"><a href="#" title="behance"></a></li>
											 			<li class="dribble"><a href="#" title="dribble"></a></li>
											 		</ul>
											</div>
										</div>
								</div>
								
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid userdois">
									<img src="imagens/icons/paz-icon.png">
										<div class="box-content-grid">

										<div class="zomEffect">	
											<h1>Shahriyer Shuvo</h1>
											<hr/>
											<p>More about selling in the Envato Marketplaces</p>
										</div>

											<div class="redes-box">
												 		<ul>
												 			<li class="facebook"><a href="#" title="facebook"></a></li>
												 			<li class="twitter"><a href="#" title="twitter"></a></li>
												 			<li class="behance"><a href="#" title="behance"></a></li>
												 			<li class="dribble"><a href="#" title="dribble"></a></li>
												 		</ul>
											</div>
										</div>
								</div>
								
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid usertres">
									<img src="imagens/img/speaker5.png">
										<div class="box-content-grid">

										<div class="zomEffect">	
											<h1>Shahriyer Shuvo</h1>
											<hr/>
											<p>More about selling in the Envato Marketplaces</p>
										</div>

											<div class="redes-box">
											 		<ul>
											 			<li class="facebook"><a href="#" title="facebook"></a></li>
											 			<li class="twitter"><a href="#" title="twitter"></a></li>
											 			<li class="behance"><a href="#" title="behance"></a></li>
											 			<li class="dribble"><a href="#" title="dribble"></a></li>
											 		</ul>
											</div>
										</div>
								</div>
								
							</div>

						</div>

						<div class="row-fluid grid-tres">

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid userum">
									<img src="imagens/img/speaker6.png">
										<div class="box-content-grid">

										<div class="zomEffect">	
											<h1>Shahriyer Shuvo</h1>
											<hr/>
											<p>More about selling in the Envato Marketplaces</p>
										</div>

											<div class="redes-box">
												 		<ul>
												 			<li class="facebook"><a href="#" title="facebook"></a></li>
												 			<li class="twitter"><a href="#" title="twitter"></a></li>
												 			<li class="behance"><a href="#" title="behance"></a></li>
												 			<li class="dribble"><a href="#" title="dribble"></a></li>
												 		</ul>
											</div>
									</div>
								</div>
								
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid userdois">
									<img src="imagens/img/speaker7.png">
										<div class="box-content-grid">

											<div class="zomEffect">	
												<h1>Shahriyer Shuvo</h1>
												<hr/>
												<p>More about selling in the Envato Marketplaces</p>
											</div>

											<div class="redes-box">
												 		<ul>
												 			<li class="facebook"><a href="#" title="facebook"></a></li>
												 			<li class="twitter"><a href="#" title="twitter"></a></li>
												 			<li class="behance"><a href="#" title="behance"></a></li>
												 			<li class="dribble"><a href="#" title="dribble"></a></li>
												 		</ul>
											</div>
										</div>
								</div>
								
							</div>

							<div class="col-md-4 col-sm-6 col-xs-12">
								<div class="box-grid usertres">
									<img src="imagens/img/speaker8.png">
										<div class="box-content-grid">

											<div class="zomEffect">	
												<h1>Shahriyer Shuvo</h1>
												<hr/>
												<p>More about selling in the Envato Marketplaces</p>
											</div>

											<div class="redes-box">
												 		<ul>
												 			<li class="facebook"><a href="#" title="facebook"></a></li>
												 			<li class="twitter"><a href="#" title="twitter"></a></li>
												 			<li class="behance"><a href="#" title="behance"></a></li>
												 			<li class="dribble"><a href="#" title="dribble"></a></li>
												 		</ul>
											</div>
										</div>
								</div>
								
							</div>

						</div>


					</div>

			</div> <!-- fim row-fluid grid-speaks -->
		</div> <!-- fim fitRotation Container  corpo -->
	</div> <!-- fim withRotation  corpo -->




	<div class="row-fluid eventos" id="sponsor">
		<div class="event">
			<div class="container">
				<div class="col-md-12 col-sm-12 col-xs-12 text-center">
					<div class="info-event">
						<h1 class="title-event">Sponsor Our Event!</h1>
						<p>If you want to help us making this event lively and successful, help us by sponsoring our event!This will help us bring in more people, have better livestreaming equipment, maybe even our own chef!You can also sponsor us by giving away free swag at the event!</p>
						</br>
						<p>Here’s who have sponsored us already:</p>
					</div>
					<div class="items-event">
						<div>
							<img src="imagens/icons/montanha-icon.png">
						</div>

						<div>
							<img src="imagens/icons/icon-event.png">
						</div>

						<div>
							<img src="imagens/icons/evanato-logo-event.png">
						</div>	

						<a href="#" class="text-sponsor">Sponsor Us</a>

					</div>
				</div>
			</div>	
		</div>
	</div>


<div class="withRotation">
<div class="container fitRotation past-events">
	<div class="row-fluid eventos-passados grid-speakers" id="past-events">
			
				<div class="col-md-12 col-sm-12 col-xs-12 info-past">
					<div class="pst-event">
						<h1 class="title-event-pst">Past Events</h1>
						<p class="paddinG">Check out the photos of our previous events where we rocked with a lot of Famous and enthusiatic authors! We’re always planning to make our future events feel fresh and fun to be at. :)</p>
						
					</div>		
				</div>

				<div class="row-fluid um">

					<div class="photo-event first">
						<img src="imagens/img/event1.jpg">
					</div>
					<div class="photo-event">
						<img src="imagens/img/event2.jpg">
					</div>

				</div>

				<div class="row-fluid dois">

					<div class="photo-event first">
						<img src="imagens/img/event3.jpg">
					</div>	
					<div class="photo-event">
						<img src="imagens/img/event4.jpg">
					</div>	

				</div>
			<div class="grid-dropdown">
				<div class="row-fluid tres">

					<div class="photo-event first">
						<img src="imagens/img/event1.jpg">
					</div>
					<div class="photo-event">
						<img src="imagens/img/event2.jpg">
					</div>

				</div>
				<div class="row-fluid quatro">

					<div class="photo-event first">
						<img src="imagens/img/event3.jpg">
					</div>	
					<div class="photo-event">
						<img src="imagens/img/event4.jpg">
					</div>	
				</div>
			</div>

				<div class="view-more text-center">
					<button id="dropdown-grid">View More</button>
				</div>
	</div>
</div><!-- fim fitRotation Container  corpo -->
</div><!-- fim withRotation  corpo -->
	</section>
 


	<footer id="rodape">
	<div class="pre-footer">
			<div class="container">
				<div class="row-fluid">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="box-rodape">
							<div class="col-md-6 col-sm-6 col-xs-12 text-center _content">
								<img src="imagens/icons/icon-endereco-rdp.png" id="icon-endereco">
								</br>
								</br>
								</br>						
								<address>Lorem Ipsum Avenue, 420/2 elm street, Melbourne, Sydney - 2122, Kingdom of Australia</address>
								<a href="#" class="view-map">View Map</a>
							</div>

							<div class="col-md-6 col-sm-6 col-xs-12 _Form">
								<form>
									<div class="form-group">
										<label>E-mail :</label>
										<input type="email" name="email" class="form-control e-mail" placeholder="Digite seu melhor E-mail">
									</div>
									<div class="form-group">
										<label>Mensagem :</label>
										<textarea class="form-control text-area" placeholder="Escreva uma Mensagem"></textarea>
									</div>
									</br>
										<button type="submit" class="btn btn-primary enviar">Enviar Mensagem</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>

			<div class="footer">
				<div class="container">
					<div class="row-fluid">
						 <div class="col-md-12 col-sm-12 col-xs-12 text-center">
						 	<div class="redes-sociais">
						 		<ul class="redes list-unstyled">
						 			<li class="facebook"><a href="" title="Facebook"></a></li>

						 			<li class="twitter"><a href="" title="Twitter"></a></li>

						 			<li class="in"><a href="" title="In"></a></li>

						 			<li class="googlemais"><a href="" title="Google Mais"></a></li>

						 			<li class="t"><a href="" title="T"></a></li>
						 		</ul>
						 	</div>
						 	<div class="copyright-rdp">
						 		<p>Hope we see you at the event!</br>All Rights Reserved. Envato Bangladesh © 2015</p>
						 	</div>

						 	<div id="voltar-ao-topo" class="pull-right"><i class="fa fa-angle-up"></i></div>
						 </div>
					</div>
				</div>	
			</div>

		
	</footer>



    <script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/script-cronometro.js"></script>
	<script src="js/scriptweb.js"></script>
	<script src="js/script-anchorLinks.js"></script>
	<script src="js/js-mobile-ate-767.js"></script>
	<!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>-->
    <script type="text/javascript" src="js/countdown.js"></script>
</body>
</html>