<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1">
		<title>Conference One Login</title>
		<link rel="icon" type="image/ico" href="imagens/favicon.ico">
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/indexLogin.css">


</head>
<body id="bodyLogin">

	<section>
	<div class="wrapp-btns">
		<div class="col-md-6">
			<a href="index.php" class="voltar">Voltar para Home</a>
		</div> 
		<div class="col-md-6">
			<button class="cdtr">Crie sua Conta</button>
		</div>
	</div>
	<div class="WrappActions">
		<div class="box-login-center">
		
			<div class="box">
								<div class="logo-login text-center">
						<img src="imagens/logo/logo-envato.png" title="Envato">
					</div>
				<form method="POST" action="config_system/valida-login.php">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Digite seu E-mail</label>
				    <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="email@mail.com">
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Digite sua Senha</label>
				    <input type="password" class="form-control" name="senha" id="senha" placeholder="******">
				  </div>
				  <div class="col-md-12 items">
					  <input type="submit" class="btn btn-primary submit entrar" value="Entrar" id="entrar">

					        <?php
										if (isset($_SESSION['msg-valida-login'])) {
												echo $_SESSION['msg-valida-login'];
												unset($_SESSION['msg-valida-login']);
										}
									?>

					  <a href="#" class="esqueceu-senha">Esqueçeu sua senha?</a>
				  </div>
				</form>
			</div>
		</div>
		
		<div class="box-login-center cadastro">
						<div class="box">
								<div class="logo-login text-center">
						<img src="imagens/logo/logo-envato.png" title="Envato">
					</div>
				<form action="config_system/valida-cadastro.php" method="POST" id="form-cadastro">
				  <div class="form-group">
						<label>Nome Completo</label>
				    <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome Completo ">
				  </div>
				  <div class="form-group">
						<label>E-mail</label>
				    <input type="text" class="form-control" id="email" name="email" placeholder="Seu E-mail ">
				  </div>
				  <div class="form-group">
						<label>Usuário</label>
				    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Nome de Usuário">
				  </div>
				  <div class="form-group">
						<label>Senha</label>
				    <input type="password" class="form-control" id="senha" name="senha" placeholder="Sua Senha">
				  </div>

					  <?php

								if (isset($_SESSION['msg-reg'])) {
										echo $_SESSION['msg-reg'];
										unset($_SESSION['msg-reg']);
								}
								if (isset($_SESSION['msg-valida-email'])) {
										echo $_SESSION['msg-valida-email'];
										unset($_SESSION['msg-valida-email']);
								}
						?>


				  <div class="col-md-12 items">
					  <input type="submit" value="Cadastrar" class="btn btn-primary submit cadastrar" id="cadastrar">
				  </div>

				</form>
			</div>
		</div>
	</div>

		</div>

	</section>



    <script src="lib/jquery/jquery.min.js"></script>
	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="js/scriptlogin.js"></script>
	<script src="js/scriptweb.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://web.crea.acsta.net/rep_dif/Smart/Warner/BatmanVsSuperman/Arrobas-250/Contagem/dest/jquery.countdown.js"></script>


</body>
</html>