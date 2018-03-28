<?php

// Inclui arquivo de conexão
session_start();
require 'config_system/check-login.php';

// Pega dados do formulario Form-Login.php
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$id = $_SESSION['id'];

if(isset($nome) AND !empty($nome)){
$atualizarNome = $pdo->prepare("UPDATE usuarios SET nome=:nome WHERE id=:id");
    $atualizarNome->bindValue(":nome", $nome);
    $atualizarNome->bindValue(":id", $id);
	$atualizarNome->execute();
}

if(isset($email) AND !empty($email)){
$atualizarEmail = $pdo->prepare("UPDATE usuarios SET email=:email WHERE id=:id");
	$atualizarEmail->bindValue(":email", $email);
	$atualizarEmail->bindValue(":id", $id);
	$atualizarEmail->execute();
}

if(isset($senha) AND !empty($senha)){
	$atualizarSenha = $pdo->prepare("UPDATE usuarios SET senha=:senha WHERE id=:id");
		$atualizarSenha->bindValue(":senha", $senha);
		$atualizarSenha->bindValue(":id", $id);
		$atualizarSenha->execute();
	}

//	unset($_SESSION['user_nome']);
//	unset($_SESSION['user_email']);
//	$_SESSION['user_email'] = $avatarUsuario['email'];
//	$_SESSION['user_nome'] = $avatarUsuario['nome'];

// Verifica se selecinaram imagem avatar
if (isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name'])) {
	$tamanhoMaximo = 2097152;
	$validaExtencao = array('jpg', 'jpeg', 'gif', 'png');

	if($_FILES['avatar']['size'] <= $tamanhoMaximo){
		$extencaoUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
		if(in_array($extencaoUpload, $validaExtencao)){
			$caminho = "membros/avatars/".$_SESSION['id'].".".$extencaoUpload;
			$resultadot = move_uploaded_file($_FILES['avatar']['tmp_name'], $caminho);
			if($resultadot){
				$updateAvatar = $pdo->prepare("UPDATE usuarios SET avatar = :avatar WHERE id = :id");
				$updateAvatar-> execute(array(
					'avatar' => $_SESSION['id'].".".$extencaoUpload,
					'id' => $_SESSION['id']
				));
				$buscarEmail = $pdo->prepare("SELECT avatar FROM usuarios WHERE id =:id");
				$buscarEmail->bindValue(":id", $id);
				$buscarEmail->execute();
				// Percorrendo BD com fetchAll e retornando ARRAY ASSOC
				$exibeAvatar = $buscarEmail->fetchAll(PDO::FETCH_ASSOC);
				$avatarUsuario = $exibeAvatar[0];
				unset($_SESSION['avatar']);
				$_SESSION['avatar'] = $avatarUsuario['avatar'];

			}else{
				echo "Houve um error ao subir sua imagem!";
			}
		}else{
			echo "Por favor selecione um arquivo válido!";
		}
	}else {
		echo "Imagem muito grande, tamanho máximo de 2MB";
	}
}

$_SESSION['msg-sucesso-edit'] = '<div class="alert alert-success alert-dismissible email-cadastrado" role="alert">'.
'<strong>Dados salvos!</strong> É necessário relogar para visualizar as alterações <a href="painel.php?p=sair">Re-logar</a>'.
'<button type="button" class="close" data-dismiss="alert" aria-label="Close">'.
'<span aria-hidden="true">&times;</span></button></div>';


header('Location: config_system/painel.php?p=edita_cadastro');