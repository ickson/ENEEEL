<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Inscrições - XII ENEEEL</title>
	<noscript><h1>Ops, JavaScript desabilitado. Habilite para continuar a utilizar normalmente. Caso contrário, você poderá ter problemas.</h1></noscript>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>

<body>

	

	    

			<!--
	    	TABELA DE SELEÇÃO
			-->
	    	<div class="content center-block"  style="padding-top: 12%;">
	            <div class="container">
	                
	                

	                <!--
	    			TELA DE LOGIN
					-->
	                <div class="row">
	                    
	                    <div class="col-md-6 col-md-offset-3">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">XII ENEEEL - CADASTRO</h4>
	                                <p class="category">COMPLETE AS INFORMAÇÕES ABAIXO</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                
	                                <form id="formularioVerifica" onsubmit="mysubmit();return false" method="POST">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Senha (mínimo de 6 caracteres)</label>
													<input type="password" class="form-control" name="senha1" id="senha1" minlenght="6" required>
												</div>
	                                        </div>
	                                    </div>
	                                   	<div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Repita sua senha</label>
													<input type="password" class="form-control" name="senha2" minlenght="6"  id="senha2" required>
												</div>
	                                        </div>
	                                    </div>
	                                     <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Como gostaria de ser chamado (mínimo de 3 caracteres)</label>
													<input type="text" class="form-control" minlenght="3" name="chamado" id="chamado" required>
												</div>
	                                        </div>
	                                     </div>
	                                        
	                                    </div>

	                                    <div class="row">
	                                	<div class="col-md-12">
		                                	<center><button type="submit" id="cadastrar" class="btn btn-primary">Cadastrar</button></center>
		                                </div>
		                                <div class="clearfix"></div>
		                            	</div>

	                                </form>
	                                <div class="row">
	                                <div class="col-md-12">
		                                <div id="alerta"  class="alert alert-danger">
		                                    <span><b>Ocorreu um erro.Verifique os seus dados. </b><br>
		                                    	Caso esteja com problemas, envie um email para: meajuda@eneeel.com
		                                   	</span>
		                                </div>
										<div id="aguarde"  class="alert alert-warning">
		                                    <span><b>Aguarde...</b></span>
		                                </div>
										<div id="senha" class="alert alert-danger">
		                                    <span><b>As senhas não são iguais.</b></span>
		                                </div>
		                                <div id="senha_2" class="alert alert-danger">
		                                    <span><b>Verifique o tamanho dos dados informado.</b></span>
		                                </div>
										<div id="sucesso"  class="alert alert-success">
		                                    <span><b>Você foi cadastrado em nosso sistema. Clique <a href=\"login.php\">aqui para entrar.</b> </span>
		                                </div>
	                                </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
          
	               	</div>


	            </div>
	        </div>

		
</body>

	<!--   Core JS Files   -->
	<script src="assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();
        	$("#alerta").hide();
			$("#aguarde").hide();
			$("#senha").hide();
			$("#senha_2").hide();
			$("#sucesso").hide();
		      var ajaxRequest;  // The variable that makes Ajax possible!

			      try
			      {
			         // Opera 8.0+, Firefox, Safari 
			         ajaxRequest = new XMLHttpRequest();
			      }
			      catch (e)
			      {

			         // Internet Explorer Browsers
			         try
			         {
			            ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
			         }catch (e) 
			         {
			            try
			            {
			               ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			            }catch (e){

			               // Something went wrong
			               alert("Seu navegador não suporta uma de nossas tecnologias. Por favor, tentar em outro.");
			               return false;
			            }
			         }
		     	 }


    	});
	</script>

	<script type="text/javascript">
		
		
		var clicked;
		function mysubmit() 
		{
    		
    			/*VERFICA*/
    			$("#aguarde").show();

    			/*Verifica se as senhas são iguais*/
    			if( $("#senha1").val() != $("#senha2").val())
    			{
    				$("#alerta").hide();
					$("#aguarde").hide();
					$("#senha").show();
					$("#senha_2").hide();
					$("#sucesso").hide();
    			}
    			/*Caso sejam*/
    			else
    			{
    				/*Caso a senha tenha menos de 6 caracteres*/
    				
    				if( $("#senha1").val().length < 6 || $("#chamado").val().length < 3 )
    				{
    						$("#alerta").hide();
							$("#aguarde").hide();
							$("#senha").hide();
							$("#senha_2").show();
							$("#sucesso").hide();
    				}
    				else
    				{
    					alert("entoru");
				    				$("#alerta").hide();
									$("#aguarde").show();
									$("#senha").hide();
									$("#senha_2").hide();
									$("#sucesso").hide();
					    			var email = "";
					    			var chave = "";

					    			/*Pega os dados da string*/
					    			var url = location.href;
									if (url.indexOf("?") > 0) 
									{
									 query = url.split("?"); 
									 param = query[1].split("&");
									 for (i=0; i < param.length; i++)
									  { 
									  	v = param[i].split("="); 
									  	if(i==0) email = v[1];
									  	else chave = v[1]
									  } 
									} 

					    			var dados = 'email=' + email + "&chave=" + chave + "&senha=" + $("#senha1").val() + "&chamado=" + $("#chamado").val();
					    			alert(dados);
					    			/*$.ajax({
					    				url: "php/cadastrarDo.php", 
					    				type: "POST",
					    				data: dados,
					    				success: function(data) 
					    				{*/
					    						/*VERIFICA SE FOI SUCESSO*/
					    				/*		if(data.split(",")[0] == "true")
					    						{
													$("#aguarde").hide();
													$("#formularioCadastra").hide();
					    							$("#sucesso").show();
					    						}
					    						else
					    						{
					    							if(data.split(",")[0] == "false")
					    							{
					    								var erro = data.split(",")[1];
					    								if(erro == '2')
					    								{
															$("#aguarde").hide();
					    									$("#alerta2").show();
					    								}
					    							}
					    						}
											
					    				}
					    			});*/	
    				}     				
    			}
				 
    		
    		return false;
    	}
		
	</script>

</html>
