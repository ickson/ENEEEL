<?php
require_once("../PHPMailer_5.2.4/class.phpmailer.php");

define('GUSER', 'ickson94@gmail.com');	// <-- Insira aqui o seu GMail
define('GPWD', 'ick#45son');		// <-- Insira aqui a senha do seu GMail


function smtpmailer($para, $de, $de_nome, $assunto, $corpo) { 
	global $error;
	$mail = new PHPMailer();
	$mail->IsSMTP();		// Ativar SMTP
	$mail->SMTPDebug = 0;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
	$mail->SMTPAuth = true;		// Autenticação ativada
	$mail->SMTPSecure = 'tls';	// SSL REQUERIDO pelo GMail
	$mail->Host = 'smtp.gmail.com';	// SMTP utilizado
	$mail->Port = 587;  		// A porta 587 deverá estar aberta em seu servidor
	$mail->Username = GUSER;
	$mail->Password = GPWD;
	$mail->SetFrom($de, $de_nome);
	$mail->Subject = $assunto;
	$mail->Body = $corpo;
	$mail->AddAddress($para);
	$mail->IsHTML(true);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		return false;
	} else {
		$error = 'Mensagem enviada!';
		return true;
	}
}

/*
*** Para gerar caracteres aleatorios
*/
// Mascaras binarias
define('RANDOM_MAIUSCULAS',  1); // 0001
define('RANDOM_MINUSCULAS',  2); // 0010
define('RANDOM_LETRAS',      3); // 0011
define('RANDOM_NUMEROS',     4); // 0100
define('RANDOM_ALFANUM',     7); // 0111
define('RANDOM_SIMBOLOS',    8); // 1000
define('RANDOM_COMPLETO',   15); // 1111

/**
 * Gera uma sequencia de simbolos randomicos
 * @param int $tamanho Tamanho da string retornada
 * @param int $simbolos Mascara binaria dos tipos de simbolos usados
 * @return string Sequencia de simbolos randomicos
 */
function random($tamanho = 15, $simbolos = RANDOM_ALFANUM) {
    if (!$simbolos) {
        trigger_error('Simbolos invalido', E_USER_ERROR);
        return false;
    }
    $str = '';
    if ($simbolos & RANDOM_MAIUSCULAS) {
        $str .=  'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    }
    if ($simbolos & RANDOM_MINUSCULAS) {
        $str .= 'abcdefghijklmnopqrstuvwxyz';
    }
    if ($simbolos & RANDOM_NUMEROS) {
        $str .= '0123456789';
    }
    if ($simbolos & RANDOM_SIMBOLOS) {
        $str .= '?!@#$%&*()[]{}<>_+-=;:,.';
    }
    $str = str_shuffle($str);
    $ultimo = strlen($str) - 1;

    $saida = '';
    for ($i = abs($tamanho); $i > 0; --$i) {
        $saida .= $str[mt_rand(0, $ultimo)];
    }
    return $saida;
}


/*Número dos erros
- 1: Campo de email vazio
- 2: Email existente
*/


	// VALIDANDO AS VARIÁVEIS
	$errors = '0';
    // SE O CAMPO VIER VAZIO
    if (empty($_POST['email']))
    {
    	$errors = '1';
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
			$errors = '2';
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
    	/*Realiza conexão*/
    	$mysqli = mysqli_connect('localhost', 'eneeel', '@eneeel#17', 'eneeel');

		/* checa conexão */
		if (!$mysqli) {
		    printf("Connect failed: %s\n", mysqli_connect_error());
		    exit();
		}

		/*Caracteres aleatórios*/
		$aleatorios = random(15, RANDOM_MAIUSCULAS | RANDOM_MINUSCULAS | RANDOM_NUMEROS | RANDOM_SIMBOLOS);
		//Query a ser executada
		$query = "INSERT INTO login (email, senha, chamado, permissao, chave) values (?,?,?,?,?);";
		//Preparando a query
		$statement = $mysqli->prepare($query);
		//Bind na query
		$senha="0";
		$chamado="0";
		$permissao=0;
		$statement->bind_param('sssis', $email, $senha, $chamado, $permissao, $aleatorios);
		//Executa query
		$statement->execute();
		$statement->close();
		
		/*
		* Envia e-mail para os cadastrados
		*/
		$assunto = "Cadastro - XII ENEEEL";
		$mensagemHTML = "Mensagem de teste<br>";
		$mensagemHTML .= "<b>Sua chave: </b>";
		$mensagemHTML .= $aleatorios;
		$mensagemHTML .= "<br>";
		$emailsender = "ickson94@gmail.com";
		$nome = "XII ENEEEL";
		smtpmailer($email, $emailsender, $nome, $assunto, $mensagemHTML);

		
        $data = "true,";
        $data .= "ok";
    }

    // retorna a resposta
    echo ($data);

?>