<!doctype html>
<html lang="en">
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
	                <li class="active">
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
	                <li>
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
	    	CARTÕES DO MEIO
			-->
	    	<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">person</i>
								</div>
								<div class="card-content">
									<p class="category">Dados pessoais</p>
									<h3 class="title">Completo</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">autorenew</i><a href="#pablo"> Clique</a> para alterar algum dado
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="yellow">
									<i class="material-icons">credit_card</i>
								</div>
								<div class="card-content">
									<p class="category">Pagamento</p>
									<h3 class="title">Aguardando</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">attach_money</i> <a href="#pablo"> Clique</a> para alterar o pacote
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="grey">
									<i class="material-icons">home</i>
								</div>
								<div class="card-content">
									<p class="category">Alojamento</p>
									<h3 class="title">---</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">error</i> Não disponível para seu pacote
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="grey">
									<i class="material-icons">school</i>
								</div>
								<div class="card-content">
									<p class="category">Palestras e minicursos</p>
									<h3 class="title">---</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Escolhidos
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="grey">
									<i class="material-icons">business_center</i>
								</div>
								<div class="card-content">
									<p class="category">Material</p>
									<h3 class="title">---</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> Aguarde até a equipe liberar
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="grey">
									<i class="material-icons">note</i>
								</div>
								<div class="card-content">
									<p class="category">Certificados</p>
									<h3 class="title">---</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons"></i> Disponíveis ao fim do evento
									</div>
								</div>
							</div>
						</div>

						

					</div>

					

					<!--
	    			PROGRAMAÇÃO
					-->
					<div class="row">
								
						<div class="col-md-6">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Programação</h4>
	                                <p class="category">Acompanhe tudo por aqui.</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
	                                        <th>Atividade</th>
	                                    	<th>Horário</th>
	                                    	<th>Local</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Dakota Rice</td>
	                                        	<td>$36,738</td>
	                                        	<td>Niger</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>$23,789</td>
	                                        	<td>Curaçao</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>$56,142</td>
	                                        	<td>Netherlands</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Philip Chaney</td>
	                                        	<td>$38,735</td>
	                                        	<td>Korea, South</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>

						<div class="col-md-6">
							<div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Atividades culturais</h4>
	                                <p class="category">Saiba o que fazer.</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-warning">
	                                        <th>Atividade</th>
	                                    	<th>Preço</th>
	                                    	<th>Local</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Dakota Rice</td>
	                                        	<td>$36,738</td>
	                                        	<td>Niger</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Minerva Hooper</td>
	                                        	<td>$23,789</td>
	                                        	<td>Curaçao</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Sage Rodriguez</td>
	                                        	<td>$56,142</td>
	                                        	<td>Netherlands</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Philip Chaney</td>
	                                        	<td>$38,735</td>
	                                        	<td>Korea, South</td>
	                                        </tr>
	                                    </tbody>
	                                </table>
	                            </div>
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
