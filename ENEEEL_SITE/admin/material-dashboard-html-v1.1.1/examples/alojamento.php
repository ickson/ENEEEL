<!doctype html>
<html lang="pt-br">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="../assets/img/favicon.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Inscrições - XII ENEEEL</title>

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

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="http://www.eneeel.com" class="simple-text">
					XII ENEEEL
				</a>
			</div>

			<!--
	    	MENU LATERAL
			-->
	    
	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li>
	                    <a href="inicial.html">
	                        <i class="material-icons">dashboard</i>
	                        <p>Inicial</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="dados.html">
	                        <i class="material-icons">person</i>
	                        <p>Dados pessoais</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="pagamento.html">
	                        <i class="material-icons">payment</i>
	                        <p>Pagamento</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="alojamento.html">
	                        <i class="material-icons">home</i>
	                        <p>Alojamento</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="palestras.html">
	                        <i class="material-icons">school</i>
	                        <p>Palestras e minicursos</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="material.html">
	                        <i class="material-icons">business</i>
	                        <p>Material</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="certificados.html">
	                        <i class="material-icons text-gray">note</i>
	                        <p>Certificados</p>
	                    </a>
	                </li>
					
	            </ul>
	    	</div>
	    </div>

	    <!--
	    MENU DE CIMA
		-->
	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="material-icons">person</i>
								</a>
								<ul class="dropdown-menu">
									<li><a href="#">Alterar senha</a></li>
									<li><a href="#">Alterar modo de ser chamado</a></li>
									<li><a href="#">Sair</a></li>
								</ul>
							</li>
							
						</ul>

					</div>
				</div>
			</nav>

			<!--
	    	TABELA DE SELEÇÃO
			-->
	    	<div class="content">
	            <div class="container-fluid">
	                
	                <div class="row">
	                	<div class="col-md-12">
	                		<div class="alert alert-danger">
	                                    <center><span><h2>AINDA NÃO DISPONÍVEL PARA ESCOLHA</h2></span></center>
	                        </div>
	                	</div>
	                </div>


	            </div>
	        </div>

			<footer class="footer">
				<div class="container-fluid">
					
					<p class="copyright pull-right">
						ENEEEL @ 2017 | TODOS OS DIREITOS RESERVADOS. <br>Design por <a href="http://www.creative-tim.com">C. T.</a>, codificado por I.B.
					</p>
				</div>
			</footer>
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

    	});
	</script>

</html>
