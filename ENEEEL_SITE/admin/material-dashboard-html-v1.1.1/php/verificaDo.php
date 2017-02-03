<?php

/*
* Função para escrever no arquivo
*/
function arquivoEscreve($arquivo, $texto)
{
	$ip = $_SERVER["REMOTE_ADDR"];
    $cria = fopen($arquivo, "a");
    $data = date('l jS \of F Y h:i:s A');
    $escreve = fwrite($cria, $ip.$data." - ".$texto);
    fclose($cria);
}

/*Número dos erros
- 1: Campo de email vazio
- 2: Email existente
*/


	// VALIDANDO AS VARIÁVEIS
	$errors = '0';
	

    // Se não atender aos tamanhos explicitados
    if (strlen($_POST['email']) < 6 || strlen($_POST['chave']) < 15 || strlen($_POST['senha']) < 6 || strlen($_POST['chamado']) < 3)
    {
    	$errors = '1';
    }
    else
    {
    	$email = $_POST['email'];
    	$chave = $_POST['chave'];
    	/*Realiza conexão*/
    	$mysqli = mysqli_connect('localhost', 'eneeel', '@eneeel#17', 'eneeel');

		/* checa conexão */
		if (!$mysqli) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		//Query a ser executada
		$query = "SELECT permissao FROM login WHERE email=? and chave=?";
		//Preparando a query
		$statement = $mysqli->prepare($query);
		//Bind na query
		$statement->bind_param('ss', $email, $chave);
		//Executa query
		$statement->execute();
        arquivoEscreve("mysql.txt", $query. ", " .$email. ", " .$chave."\n");
		//Bind dos resultados
		$statement->bind_result($permissao_result);
		$errors = '2';
		//loop com os resultados
		while($statement->fetch())
		{
			$errors = '0';
			if (intval($permissao_result) > 0)
			{
				$errors = '3';	
			}
			
		}
		$statement->close();
    }
        

    

// PREPARANDO A RESPOSTA ===========================================================

    // se tiver erros
    if ( !empty($errors) ) 
    {
        $data = "false,";
        $data .= $errors;
    } 

    //caso não tenha erro, pode cadastrar
    else 
    {
		
		/*
		* Inserindo dados no banco de dados
		*/
		$email = $_POST['email'];
		$senha = $_POST['senha'];
		$chamado = $_POST['chamado'];
    	/*Realiza conexão*/
    	$mysqli = mysqli_connect('localhost', 'eneeel', '@eneeel#17', 'eneeel');

		/* checa conexão */
		if (!$mysqli) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		//Query a ser executada
		$query = "UPDATE login set senha=?, chamado=?, permissao=? where email=?";
		//Preparando a query
		$statement = $mysqli->prepare($query);
		//Bind na query
		$senhacript=password_hash($senha, PASSWORD_DEFAULT);
		$permissao=1;
		$statement->bind_param('ssis', $senhacript, $chamado, $permissao, $email);
		//Executa query
		$statement->execute();
        arquivoEscreve("mysql.txt", $query. "," .$senhacript.", ".$chamado.", ".$permissao.", ".$email."\n");
		$statement->close();
		
		
        $data = "true,";
        $data .= "ok";
    }

    // retorna a resposta
    echo ($data);

?>