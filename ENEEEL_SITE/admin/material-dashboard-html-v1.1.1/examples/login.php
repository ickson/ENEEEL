<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Inscrições - XII ENEEEL</title>
	<noscript><h1>Ops, JavaScript desabilitado. Habilite para continuar a utilizar normalmente. Caso contrário, você poderá ter problemas.</h1></noscript>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../assets/css/demo.css" rel="stylesheet" />

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
	                                <h4 class="title">XII ENEEEL - LOGIN</h4>
	                                <p class="category">DIGITE SEU E-MAIL</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                
	                                <form onsubmit="mysubmit();return false" method="POST">
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="text" class="form-control" name="email" id="email" required>
												</div>
	                                        </div>
	                                        
	                                    </div>

	                                    <div class="row">
	                                	<div class="col-md-6">
		                                	<center><button type="submit" name="entrar" id="entrar" onclick="get_action(this);" class="btn btn-primary">Entrar</button></center>
		                                </div>
		                                <div class="col-md-6">
		                                	<center><button type="submit" id="cadastrar" class="btn btn-primary">Cadastrar</button></center>
		                                </div>
		                                <div class="clearfix"></div>
		                            	</div>

	                                </form>
	                                <div id="alerta1" class="alert alert-danger">
	                                    <span><b>Email já cadastrado.</b> <br>Pode ser que seja necessário realizar o passo de verificação de email.
	                                    	Olhe sua caixa de email (e o seu spam/lixo).</span>
	                                </div>
	                                
	                            </div>
	                        </div>
	                    </div>
          
	               	</div>


	            </div>
	        </div>

		
</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();
        	$( "#alerta1" ).hide();

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
		/*$("#entrar").click(function(){*/
    	/*$.ajax({url: "demo_test.txt", success: function(result){
        	$("#div1").html(result);
    	}});*/
    	/*alert("entrar");
		});*/
		var submit;
		$("#entrar").click(function(){
			submit = "entrar";
		});
		$("#cadastrar").click(function(){
			submit = "cadastrar";

		});
		var clicked;
		function mysubmit() {
    		if(submit == "entrar")
    		{
    			alert("entrar");
    		}
    		/*CADASTRAR*/
    		else
    		{
    			var dados = 'email=' + $("#email").val();
    			$.ajax({
    				url: "../php/cadastrarDo.php", 
    				type: "POST",
    				data: dados,
    				success: function(data) 
    				{
    						/*VERIFICA SE FOI SUCESSO*/
    						if(String(Object.values($.parseJSON(data))[0]) == "true")
    						{
    							alert("sucesso");
    						}
    						else
    						{
    							if(String(Object.values($.parseJSON(data))[0]) == "false")
    							{
    								var erro = String(Object.values($.parseJSON(data))[1]);
    								if(erro == '1')
    								{
    									$("#alerta1").show();
    								}
    							}
    						}
    				}
    			});
    			 
    		}
    		return false;
    	}
		
	</script>

</html>
