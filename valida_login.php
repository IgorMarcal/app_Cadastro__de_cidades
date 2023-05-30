<?php 
	
	require "config.php";
  	$consulta = $conexao->query("select u.email, u.senha, u.nome from tb_usuarios as u");
	
	//var q verifica se autenticaçãao foi realizada
	$usuario_autenticado = false;

	//usuarios cadastrados
	$usurios_app = array(

	);

	//insere o novo cadastrado no banco de dados em um array
	array_push($usurios_app, $consulta);

	//realiza a consulta de usuarios no banco de dados e passam os dados pra var $linha
	while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

		//testa se a var Linha na respectiva posição é igual ao parametro enviado na requisição do script 
		if($linha['email'] == $_POST['email'] && $linha['senha'] == $_POST['senha']){
			$usuario_autenticado = true;
		}

	}

	if ($usuario_autenticado) {
		
		$_SESSION['autenticado'] = 'SIM';
		header('Location: home.php');
	}else{
		header('Location: index.php?login=errorLogin');
		$_SESSION['autenticado'] = 'NAO';
	}


 ?>