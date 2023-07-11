<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inicio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				MINORS <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/avatar.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">Nombre de Usuario</figcaption>
				</figure>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="home.php">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Inicio
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-case zmdi-hc-fw"></i> Administracion<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="permisos.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> Permisos</a>
						</li>
						<li>
							<a href="proyectos.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> Proyectos</a>
						</li>
						<li>
							<a href="mensajes.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> Mensajes</a>
						</li>
						<li>
							<a href="tareas.php"><i class="zmdi zmdi-case zmdi-hc-fw"></i> Tareas</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-storage zmdi-hc-fw"></i> Tareas <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="completartarea.php"><i class="zmdi zmdi-storage zmdi-hc-fw"></i> Completar Tareas</a>
						</li>
						<li>
							<a href="progreso.php"><i class="zmdi zmdi-storage zmdi-hc-fw"></i> Revision de Progreso</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-calendar zmdi-hc-fw"></i> Calendario <i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="calendario.php"><i class="zmdi zmdi-calendar zmdi-hc-fw"></i> Calendario</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notificaciones <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<h4 class="list-group-item-heading">Titulo</h4>
				      	<p class="list-group-item-text">Mensaje</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			</div>

		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">1</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-exit-system">
						<i class="zmdi zmdi-power"></i>
					</a>
				</li>
			</ul>
		</nav>



		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">MINORS 2023 <small>Zona 2</small></h1>
			</div>
		</div>

		

		<article id="proyecto1" class="full-box tile">
    <a href="proyecto1.php">
        <div class="full-box tile-title text-center text-titles text-uppercase">
            LA MINA
        </div>
    </a>
    <div class="full-box tile-icon text-center">
        <i class="zmdi zmdi-home"></i>
    </div>
    <div class="full-box tile-number text-titles">
        <p class="full-box">1611</p>
        <small>Col</small>
    </div>
</article>




			<article class="full-box tile">
				
				<a href="proyecto2.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					LA GABRIELA
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0914</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto3.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					LA AMÉRICA
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0032</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto4.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					TOS/SALON LA AMÉRICA
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">----</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto5.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ORQUIDEAS ENVIGADO
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0337</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto6.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CALASANZ
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">----</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto7.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CHIGORODÓ
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">1262</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto8.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					APTS / SAN ANTONIO DE PRADO
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">0245</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto9.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					CÓRDOBAS / CANALETE-CÓRDOBA
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">1622</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto10.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					BERASTEGUI / CÍENAGA-CÓRDOBA
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">1186</p>
					<small>Col</small>
				</div>
			</article>
			<article class="full-box tile">
				
				<a href="proyecto11.php">
				<div class="full-box tile-title text-center text-titles text-uppercase">
					ANZA / ANTIOQUIA
				</div>
				</a>
				<div class="full-box tile-icon text-center">
					<i class="zmdi zmdi-home"></i>
				</div>
				<div class="full-box tile-number text-titles">
					<p class="full-box">2371</p>
					<small>Col</small>
				</div>
			</article>
		</div>
		
	</section>
	
	<script>
    // Obtén una referencia al elemento del proyecto
    var proyectoElement = document.getElementById('proyecto1');

    // Agrega un controlador de eventos de clic al ícono de la casita
    var iconoElement = proyectoElement.querySelector('.tile-icon');
    iconoElement.addEventListener('click', function() {
        window.open('datosproyecto.php', '_blank', 'width=800,height=700');
 
    });

    // Agrega un controlador de eventos de clic al título del artículo
    var tituloElement = proyectoElement.querySelector('.tile-title');
    tituloElement.addEventListener('click', function() {
        // Aquí puedes redirigir al enlace del artículo
        window.location.href = "proyecto1.php";
    });
</script>

	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>