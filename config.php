<?php
	session_start();
	require_once "cria_db.php";
	
	//conectando ao banco de dados e salvando 
	$dsn = 'mysql:host=localhost;dbname=registro_cidades';
	$usuario = 'root';
	$senha = '';

	try{
		//realiza conexao com o bando de dados
		$conexao = new PDO($dsn, $usuario, $senha); 

	    //header('Location: index.php');
		//cria tabela de cidados no BD somente se não exisitir
		 $query = '
		    create table if not exists tb_cidades(
			id int not null primary key auto_increment,
			cidade varchar(50) not null,
			estado varchar(2) not null,
			data_fundacao date not null,
			bairro varchar(50) not null
		)';

		$conexao->exec($query);

		//cria tabela de usuarios se ela n existir
	 	$query = '
	    	create table if not exists tb_usuarios(
		    id int not null primary key auto_increment,
		    email varchar(100) not null,
		    senha varchar(20) not null,
			nome varchar(100) not null
	  	)';

		$conexao->exec($query);

  	}catch(PDOException $e){
    	echo 'Erro: '. $e->getCode(). 'Mensagem: ' . $e->getMessage();
    	//registrar erro
    	header('Location: index.php?errordeconexao');
  	}
	
?>