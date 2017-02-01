<?php
/*Número dos erros
- 0: Campo de email vazio

*/

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// VALIDANDO AS VARIÁVEIS ======================================================
    // SE O CAMPO VIER VAZIO
    if (empty($_POST['email']))
    {
    	$errors['numErro'] = '0';
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
		$query = "SELECT email FROM login WHERE email=?";
		//Preparando a query
		$statement = $mysqli->prepare($query);
		//Bind na query
		$statement->bind_param('s', $email);
		//Executa query
		$statement->execute();
		//Bind dos resultados
		$statement->bind_result($email_result);

		//loop com os resultados
		while($statement->fetch())
		{
			$errors['numErro'] = '1';
		}
		$statement->close();
    }
        

    

// PREPARANDO A RESPOSTA ===========================================================

    // se tiver erros
    if ( ! empty($errors)) 
    {

        $data['success'] = false;
        $data['errors']  = $errors['numErro'];
    } 

    //caso não tenha erro
    else 
    {

        $data['success'] = true;
        $data['message'] = 'ok';
    }

    // retorna a resposta
    echo json_encode($data);

?>