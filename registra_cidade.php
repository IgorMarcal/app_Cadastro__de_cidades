<?php

	require "config.php";
	//conectando ao banco de dados e salvando 


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao; 

	if($acao == 'inserir'){

		try{
			//pega os dados via requisição com método POST
			$cidade = $_POST['cidade'];
			$bairro = $_POST['bairro'];
			$estado = $_POST['estado'];
			$fundacao = $_POST['fundacao'];

			if (!$cidade == ''  || !$bairro == '' || !$estado == 'Estado' ) {
				if(!is_null($fundacao)){
				
				//insere cidades no banco de dados
			    $query = '
			      	insert into tb_cidades(
			        	cidade, estado, data_fundacao, bairro
			      	)
			      	values(
			        	:cidade, :estado, :data_fundacao, :bairro
			    )';
			    $stmt = $conexao->prepare($query);
			    $stmt->bindParam(':cidade', $cidade);
			    $stmt->bindParam(':estado', $estado);
			    $stmt->bindParam(':data_fundacao', $fundacao);
			    $stmt->bindParam(':bairro', $bairro);

			    $stmt->execute();
				}
				
				
			}
			

		    header('Location: salvar_cidade.php?success');


	  	}catch(PDOException $e){
	    	echo 'Erro: '. $e->getCode(). 'Mensagem: ' . $e->getMessage();
	    	//registrar erro
	    	header('Location: salvar_cidade.php?error');
	  }	

	}else if( $acao == 'recuperar'){
		//entra nesse if quando consultamos as cidades 

  		return $consulta = $conexao->query("select * from tb_cidades as c order by c.cidade asc, c.data_fundacao asc, c.bairro asc");

	}else if($acao == 'remover'){
		
		//realiza a remoção do item no BD
		$query = 'delete from tb_cidades where id = :id';
		$id = ($_GET['id']);
		$stmt = $conexao->prepare($query);
		$stmt->bindValue(':id', $id);
		$stmt->execute();

	    header('Location: relacao_cidades.php');

	}
	
?>