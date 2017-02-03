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
    if (strlen($_POST['email']) < 0)
    {
    	$errors = 'l1';
    }
    else
    {
    	$email = $_POST['email'];
    	/*Realiza conexão*/
    	$mysqli = mysqli_connect('localhost', 'eneeel', '@eneeel#17', 'eneeel');

		/* checa conexão */
		if (!$mysqli) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		//Query a ser executada
		$query = "SELECT permissao FROM login WHERE email=?";
		//Preparando a query
		$statement = $mysqli->prepare($query);
		//Bind na query
		$statement->bind_param('s', $email);
		//Executa query
		$statement->execute();
        arquivoEscreve("mysql.txt", $query. ", " .$email."\n");
		//Bind dos resultados
		$statement->bind_result($permissao_result);
		$errors = 'l1';
		//loop com os resultados
		while($statement->fetch())
		{
			$errors = '0';
			if (intval($permissao_result) < 1)
			{
				$errors = 'l2';	
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
		
        $data = "true,";
        $data .= "ok";
    }

    // retorna a resposta
    echo ($data);

?>