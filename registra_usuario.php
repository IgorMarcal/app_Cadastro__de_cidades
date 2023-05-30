<?php
	session_start();
	
	//conectando ao banco de dados 
	$dsn = 'mysql:host=localhost;dbname=registro_cidades';
	$usuario = 'root';
	$senha = '';

	try{
		$email = $_POST['email_novo'];
		$senha_nova = $_POST['senha_novo'];
		$nome = $_POST['nome_novo'];

		$conexao = new PDO($dsn, $usuario, $senha); 

		//insere usuario desejado no BD
	    $query = '
	      	insert into tb_usuarios(
	        	email, senha, nome
	      	)
	      	values(
	        	:email, :senha, :nome
	    )';

	    $new_user = $email . $senha_nova . $nome;
	    $stmt = $conexao->prepare($query);
	    $stmt->bindParam(':email', $email);
	    $stmt->bindParam(':senha', $senha_nova);
	    $stmt->bindParam(':nome', $nome);

	    $stmt->execute();

	    header('Location: cadastra_usuario.php?success');


  	}catch(PDOException $e){
    	echo 'Erro: '. $e->getCode(). 'Mensagem: ' . $e->getMessage();
    	//registrar erro
    	header('Location: home.php?error');
  	}
	
	
?>