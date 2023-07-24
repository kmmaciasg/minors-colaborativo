<!DOCTYPE html>
<html lang="es">
<head>
	<title>Proyecto 3</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-home zmdi-hc-fw"></i> LA AMÉRICA <small>Col 0032 </small></h1>
			</div>
            <div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab" aria-expanded="true">General<div class="ripple-container"></div></a></li>
					  	<li class=""><a href="#1" data-toggle="tab" aria-expanded="false">Reuniones<div class="ripple-container"></div></a></li>
					  	<li class=""><a href="#2" data-toggle="tab" aria-expanded="false">Encargados de obra<div class="ripple-container"></div></a></li>
					  	<li class=""><a href="#3" data-toggle="tab" aria-expanded="false">Capacitador<div class="ripple-container"></div></a></li>
					  	<li class=""><a href="#4" data-toggle="tab" aria-expanded="false">Seguridad y Control Calidad<div class="ripple-container"></div></a></li>
					  	<li class=""><a href="#5" data-toggle="tab" aria-expanded="false">Contacto local<div class="ripple-container"></div></a></li>
					  	<li class=""><a href="#6" data-toggle="tab" aria-expanded="false">Builder Assistant<div class="ripple-container"></div></a></li>
					  	<li class=""><a href="#7" data-toggle="tab" aria-expanded="false">Reporte Fotografico<div class="ripple-container"></div></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									<style>
    .column-container {
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }

    .column {
        flex: 1;
        padding: 10px;
    }
</style>

<form action="">
    <div class="column-container">
        <div class="column">
            <div class="form-group label-floating is-empty">
                <label>Fondos de la congregación</label>
                <input class="form-control" type="number" id="fondos">
            </div>
            <div class="form-group label-floating is-empty">
                <label>Fecha de Inicio</label>
                <input class="form-control" type="date" id="fecha">
            </div>
            <div class="form-group label-floating is-empty">
                <label>¿Se requieren diseños?</label>
                <select class="form-control"  id="diseños">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
            <div class="form-group label-floating is-empty">
                <label>¿Se envio acción a Diseño?</label>
                <select class="form-control"  id="acciondiseño">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
			<div class="form-group label-floating is-empty">
                <label>¿Ya se enviaron los documentos de calidad y seguridad a Builder?</label>
                <select class="form-control"  id="enviodocumentos">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
            <div class="form-group label-floating is-empty">
                <label>¿Ya se montaron las tareas en Builder?</label>
                <select class="form-control"  id="tareasbuilder">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
        </div>
        <div class="column">
            <div class="form-group label-floating is-empty">
                <label>¿Ya recibió respuesta de Diseño?</label>
                <select class="form-control"  id="rtadiseño">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
            <div class="form-group label-floating is-empty">
                <label>¿Hay cronograma de obra?</label>
                <select class="form-control"  id="cronograma">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
            <div class="form-group label-floating is-empty">
                <label>¿Hay lista de herramientas?</label>
                <select class="form-control"  id="herramientas">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>  
            <div class="form-group label-floating is-empty">
                <label>¿Hay lista de Voluntarios?</label>
                <select class="form-control"  id="voluntarios">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
            <div class="form-group label-floating is-empty">
                <label>¿Ya están los materiales en obra?</label>
                <select class="form-control"  id="materiales">
                    <option value="0">SI</option>
                    <option value="1">PDTE</option>
                </select>
            </div>
           
        </div>
    </div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="actualizar">
								<i class="zmdi zmdi-check">Actualizar Datos</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>
       
<div id="ventana-emergente" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Actividad</h4>
   <form>
	   <label >Id Proyecto:</label>
	   <input type="text" id="idproyecto" readonly><br>
	   <label >Id Actividad:</label>
	   <input type="text" id="idactividad" readonly><br>
	   <label >Descripcion:</label>
	   <textarea id="descripcion"></textarea><br>
	   <label>Encargado:</label>
	   <input type="text" id="encargado"><br>
       <label>Notas:</label>
	   <input type="text" id="notas"><br>
       <label>Avance:</label>
	   <input type="text" id="avance"><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 85px;" id="btn-guardar-cambios">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div>       
<form id="actividadesForm">
    <div class="table-responsive">
        <table id="tablaActividades" class="table table-hover text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripción</th>
                <th>Encargado</th>
                <th>Notas</th>
                <th>Avance</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
        </table>
    </div>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 185px;" id="agregaractividad">
        <i class="zmdi zmdi-check">Agregar Actividad</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
    <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizaractividad">
        <i class="zmdi zmdi-check">Actualizar Actividad</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
    <br><br>
</form>


									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="1">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									

<form id="reunionesForm">
<div class="table-responsive">
								<table id="tablareuniones" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th>ID</th>
                <th>Descripcion</th>
                <th>Notas</th>
                <th>Fecha</th>
                <th>Estado</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 155px;" id="agregarreunion">
								<i class="zmdi zmdi-check">Agregar Reunion</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarreunion">
        <i class="zmdi zmdi-check">Actualizar Reunion</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>

<div id="dialog" style="display: none;">
<h4>Seleccione el tipo de Reunion que desea Agregar</h4>
    <select id="reunionSelect">
        <option value="ENCARGADOS DE OBRA">ENCARGADOS DE OBRA</option>
        <option value="CUERPO(S) DE ANCIANOS">CUERPO(S) DE ANCIANOS</option>
        <option value="CONTACTO LOCAL">CONTACTO LOCAL</option>
        <option value="SEGURIDAD Y CONTROL">SEGURIDAD Y CONTROL</option>
    </select>
    <button onclick="closeDialog()">Aceptar</button>
</div>
<div id="ventana-emergente1" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Reunion</h4>
   <form>
	   <label >Id Reunion:</label>
	   <input type="text" id="id" readonly><br>
	   <label >Notas:</label>
	   <textarea id="notasR"></textarea><br>
	   <label>Fecha:</label>
	   <input type="date" id="fechar"><br>
       <label>Estado:</label>
	   <input type="text" id="estado"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 85px;" id="btn-guardar-cambiosr">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div>  
</div>
								</div>
							</div>
						</div>
				<div class="tab-pane fade" id="2">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form id="encargadoobraForm">
<div class="table-responsive">
								<table id="tablaencargados" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th># B.A.</th>
                <th>Nombre</th>
                <th>Habilidad</th>
                <th>Telefono</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 155px;" id="agregarencargadoobra">
								<i class="zmdi zmdi-check">Agregar Encargado</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarencargado">
        <i class="zmdi zmdi-check">Actualizar Encargado</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>
<div id="ventana-emergente2" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Encargado</h4>
   <form>
	   <label >Nombre:</label>
	   <input type="text" id="nombree" readonly><br>
	   <label >cel:</label>
	   <input type="text" id="cele"><br>
	   <label>Numero Builder Asistant:</label>
	   <input type="text" id="bae"><br>
       <label>Habilidad:</label>
	   <input type="text" id="habilidade"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 85px;" id="btn-guardar-cambiose">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div>  

</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="3">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form id="capacitadorForm">
<div class="table-responsive">
								<table id="tablacapacitador" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th># B.A.</th>
                <th>Nombre</th>
                <th>Funcion</th>
                <th>Telefono</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 155px;" id="agregarcapacitador">
								<i class="zmdi zmdi-check">Agregar Capacitador</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarcapacitador">
        <i class="zmdi zmdi-check">Actualizar Capacitador</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>
<div id="ventana-emergente3" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Capacitador</h4>
   <form>
	   <label >Nombre:</label>
	   <input type="text" id="nombrec" readonly><br>
	   <label >cel:</label>
	   <input type="text" id="celc"><br>
	   <label>Numero Builder Asistant:</label>
	   <input type="text" id="bac"><br>
       <label>Funcion:</label>
	   <input type="text" id="funcionc"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 185px;" id="btn-guardar-cambiosc">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div>  


</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="4">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form id="contactoseguridadForm">
<h4>Contactos seguridad y control de calidad</h4>
<div class="table-responsive">
								<table id="tablaseguridad" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th># B.A.</th>
                <th>Nombre</th>
                <th>Funcion</th>
                <th>Telefono</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregarcontactoseguridad">
								<i class="zmdi zmdi-check">Agregar Contacto seguridad</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarcontactoseguridad">
        <i class="zmdi zmdi-check">Actualizar Contacto</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>
<div id="ventana-emergente4" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Contacto Seguridad</h4>
   <form>
	   <label >Nombre:</label>
	   <input type="text" id="nombrecs" readonly><br>
	   <label >cel:</label>
	   <input type="text" id="celcs"><br>
	   <label>Numero Builder Asistant:</label>
	   <input type="text" id="bacs"><br>
       <label>Funcion:</label>
	   <input type="text" id="funcioncs"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 185px;" id="btn-guardar-cambioscs">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div> 
<form  id="contactosoporteseguridadForm">
	<h4>Contactos soporte de seguridad y control de calidad</h4>
<div class="table-responsive">
								<table id="tablasoporteseguridad" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th># B.A.</th>
                <th>Nombre</th>
                <th>Funcion</th>
                <th>Telefono</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregarsoporteseguridad">
								<i class="zmdi zmdi-check">Agregar Soporte seguridad</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
                                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarsoporteseguridad">
        <i class="zmdi zmdi-check">Actualizar Contacto</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>
<div id="ventana-emergente5" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Contacto Soporte Seguridad</h4>
   <form>
	   <label >Nombre:</label>
	   <input type="text" id="nombress" readonly><br>
	   <label >cel:</label>
	   <input type="text" id="celss"><br>
	   <label>Numero Builder Asistant:</label>
	   <input type="text" id="bass"><br>
       <label>Funcion:</label>
	   <input type="text" id="funcionss"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 185px;" id="btn-guardar-cambiosss">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div> 
</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="5">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form id="contactolocalForm">
<div class="table-responsive">
								<table id="tablacontactolocal" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th># B.A.</th>
                <th>Nombre</th>
                <th>Funcion</th>
                <th>Telefono</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 155px;" id="agregarcontactolocal">
								<i class="zmdi zmdi-check">Agregar Contacto local</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarcontactolocal">
        <i class="zmdi zmdi-check">Actualizar Contacto</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>
<div id="ventana-emergente6" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Contacto local</h4>
   <form>
	   <label >Nombre:</label>
	   <input type="text" id="nombrecl" readonly><br>
	   <label >cel:</label>
	   <input type="text" id="celcl"><br>
	   <label>Numero Builder Asistant:</label>
	   <input type="text" id="bacl"><br>
       <label>Funcion:</label>
	   <input type="text" id="funcioncl"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 185px;" id="btn-guardar-cambioscl">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div> 

</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="6">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form id="builderForm">
<div class="table-responsive">
								<table id="tablasoportebuilder" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th># B.A.</th>
                <th>Nombre</th>
                <th>Funcion</th>
                <th>Telefono</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 155px;" id="agregarsoportebuilder">
								<i class="zmdi zmdi-check">Agregar Soporte</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarbuilder">
        <i class="zmdi zmdi-check">Actualizar Soporte Builder Asistant</i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>
<div id="ventana-emergente7" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Soporte Builder Asistant</h4>
   <form>
	   <label >Nombre:</label>
	   <input type="text" id="nombreba" readonly><br>
	   <label >cel:</label>
	   <input type="text" id="celba"><br>
	   <label>Numero Builder Asistant:</label>
	   <input type="text" id="baba"><br>
       <label>Funcion:</label>
	   <input type="text" id="funcionba"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 185px;" id="btn-guardar-cambiosba">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div> 

</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="7">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form id="reporteForm">
<div class="table-responsive">
								<table id="tablareporte" class="table table-hover text-center">
								
        <thead>
            <tr>
                <th># B.A.</th>
                <th>Nombre</th>
                <th>Funcion</th>
                <th>Telefono</th>
                <!-- Agrega aquí las columnas adicionales que desees mostrar -->
            </tr>
        </thead>
        <tbody></tbody>
    </table>
							</div>
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregarreporte">
								<i class="zmdi zmdi-check">Agregar Reporte Fotografico</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 55px;" id="actualizarreporte">
        <i class="zmdi zmdi-check">Actualizar Reporte </i>
        <span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span>
    </button>
                                <br><br>
</form>

<div id="ventana-emergente8" style="display: none;">
		   <div class="mdl-grid">
		   <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--6-col-desktop">
									   
   <h4>Modificar Reporte Fotografico</h4>
   <form>
	   <label >Nombre:</label>
	   <input type="text" id="nombrerf" readonly><br>
	   <label >cel:</label>
	   <input type="text" id="celrf"><br>
	   <label>Numero Builder Asistant:</label>
	   <input type="text" id="barf"><br>
       <label>Funcion:</label>
	   <input type="text" id="funcionrf"><br><br>
	  <br>

	   <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-primary" style="margin-left: 185px;" id="btn-guardar-cambiosrf">
								<i class="zmdi zmdi-check"> Guardar Cambios</i>
							</button>
	     </form>
</div>
		   </div></div> 

</div>
								</div>
							</div>
						</div>
				
			</div>
		</div>
	</section>
	<span id="nombreProyecto" style="hidden"></span>

	<!--====== Scripts -->
    <script>
    document.getElementById("agregarencargadoobra").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const encargado = prompt("Ingrese el nombre del encargado de obra:");
        const cel = prompt("Ingrese el numero de celular del encargado de obra:");
        const ba = prompt("Ingrese el numero de Builder Asistant del encargado de obra:");
        const habilidad = prompt("Ingrese la habilidad del encargado de obra:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (cel && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("cel", cel);
            formData.append("encargado", encargado);
            formData.append("ba", ba);
            formData.append("habilidad", habilidad);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregarencargadoobra.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>
<script>
    document.getElementById("agregarcontactoseguridad").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const encargado = prompt("Ingrese el nombre del contacto de seguridad:");
        const cel = prompt("Ingrese el numero de celular del contacto de seguridad:");
        const ba = prompt("Ingrese el numero de Builder Asistant del contacto de seguridad:");
        const funcion = prompt("Ingrese la funcion del contacto de seguridad:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (cel && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("cel", cel);
            formData.append("encargado", encargado);
            formData.append("ba", ba);
            formData.append("funcion", funcion);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregarcontactoseguridad.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>
<script>
    document.getElementById("agregarsoporteseguridad").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const encargado = prompt("Ingrese el nombre del soporte de seguridad:");
        const cel = prompt("Ingrese el numero de celular del soporte de seguridad:");
        const ba = prompt("Ingrese el numero de Builder Asistant del soporte de seguridad:");
        const funcion = prompt("Ingrese la funcion del soporte de seguridad:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (cel && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("cel", cel);
            formData.append("encargado", encargado);
            formData.append("ba", ba);
            formData.append("funcion", funcion);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregarsoporteseguridad.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>
<script>
    document.getElementById("agregarcontactolocal").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const encargado = prompt("Ingrese el nombre del contacto local:");
        const cel = prompt("Ingrese el numero de celular del contacto local:");
        const ba = prompt("Ingrese el numero de Builder Asistant del contacto local:");
        const funcion = prompt("Ingrese la funcion del contacto local:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (cel && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("cel", cel);
            formData.append("encargado", encargado);
            formData.append("ba", ba);
            formData.append("funcion", funcion);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregarcontactolocal.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>
<script>
    document.getElementById("agregarsoportebuilder").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const encargado = prompt("Ingrese el nombre del contacto de soporte de builder asistant:");
        const cel = prompt("Ingrese el numero de celular del contacto de soporte de builder asistant:");
        const ba = prompt("Ingrese el numero de Builder Asistant del contacto de soporte de builder asistant:");
        const funcion = prompt("Ingrese la funcion del contacto de soporte de builder asistant:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (cel && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("cel", cel);
            formData.append("encargado", encargado);
            formData.append("ba", ba);
            formData.append("funcion", funcion);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregarsoportebuilder.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>
<script>
    document.getElementById("agregarreporte").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const encargado = prompt("Ingrese el nombre del encargado del reporte fotográfico:");
        const cel = prompt("Ingrese el numero de celular del encargado del reporte fotográfico:");
        const ba = prompt("Ingrese el numero de Builder Asistant del encargado del reporte fotográfico:");
        const funcion = prompt("Ingrese la funcion del encargado del reporte fotográfico:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (cel && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("cel", cel);
            formData.append("encargado", encargado);
            formData.append("ba", ba);
            formData.append("funcion", funcion);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregarreporte.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>

<script>
    document.getElementById("agregarcapacitador").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const encargado = prompt("Ingrese el nombre del capacitador:");
        const cel = prompt("Ingrese el numero de celular del capacitador:");
        const ba = prompt("Ingrese el numero de Builder Asistant del capacitador:");
        const funcion = prompt("Ingrese la funcion del capacitador:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (cel && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("cel", cel);
            formData.append("encargado", encargado);
            formData.append("ba", ba);
            formData.append("funcion", funcion);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregarcapacitador.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>

	<script>
    document.getElementById("agregarreunion").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Mostrar el cuadro de diálogo personalizado
        const dialog = document.getElementById("dialog");
        dialog.style.display = "block";
    });

    function closeDialog() {
        // Ocultar el cuadro de diálogo personalizado
        const dialog = document.getElementById("dialog");
        dialog.style.display = "none";

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        console.log("Nombre del proyecto: ", nombreProyecto);

        // Obtener la opción de reunión seleccionada
        const reunionSelect = document.getElementById("reunionSelect");
        const reunionSeleccionada = reunionSelect.value;

        // Verificar que se seleccionó una reunión antes de continuar
        if (reunionSeleccionada) {
            // Solicitar la fecha de la reunión mediante un prompt con campo "date"
            const fechaReunion = prompt("Ingrese la fecha de la reunión (formato: AAAA-MM-DD):");

            // Verificar que se ingresó la fecha antes de enviar los datos al PHP
            if (fechaReunion) {
                // Crear un objeto FormData para enviar los datos al PHP
                const formData = new FormData();
                formData.append("proyecto", nombreProyecto);
                formData.append("reunion", reunionSeleccionada);
                formData.append("fecha_reunion", fechaReunion);

                // Crear una nueva solicitud XMLHttpRequest
                const xhr = new XMLHttpRequest();

                // Configurar la solicitud POST al archivo PHP
                xhr.open("POST", "agregarreunion.php", true);

                // Manejar la respuesta del servidor (opcional)
                xhr.onload = function () {
                    if (xhr.status === 200) {
                        // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                        console.log(xhr.responseText);
                        location.reload();
                    } else {
                        // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                        console.error("Error en la solicitud al servidor.");
                    }
                };

                // Enviar la solicitud con los datos del formulario
                xhr.send(formData);

            } else {
                alert("Debe ingresar la fecha de la reunión.");
            }
        } else {
            alert("Debe seleccionar un tipo de reunión válido.");
        }
    }
</script>

	<script>
    window.addEventListener('DOMContentLoaded', function() {
        var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        document.getElementById('nombreProyecto').innerHTML = nombreProyecto;

        // Enviar solicitud HTTP para obtener los datos del proyecto
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'obtener_datos_proyecto.php?nombre=' + encodeURIComponent(nombreProyecto), true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);

                // Actualizar los valores en los campos correspondientes
                document.getElementById('fondos').value = respuesta.fondos;
                document.getElementById('fecha').value = respuesta.inicio;
                document.getElementById('diseños').value = respuesta.diseños;
                document.getElementById('acciondiseño').value = respuesta.acciondiseño;
                document.getElementById('rtadiseño').value = respuesta.rtadiseño;
                document.getElementById('materiales').value = respuesta.materiales;
                document.getElementById('enviodocumentos').value = respuesta.enviodocumentos;
                document.getElementById('tareasbuilder').value = respuesta.tareasbuilder;
                document.getElementById('cronograma').value = respuesta.cronograma;
                document.getElementById('herramientas').value = respuesta.herramientas;
                document.getElementById('voluntarios').value = respuesta.voluntarios;
            }
        };
        xhr.send();
    });
</script>
<script>
    document.getElementById("agregaractividad").addEventListener("click", function (event) {
        event.preventDefault(); // Bloquear el envío del formulario

        // Obtener el nombre del proyecto de la URL
        const url = window.location.href;
        const nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

    console.log("Nombre del proyecto: ", nombreProyecto);
        // Obtener la descripción y el encargado mediante prompts
        const descripcion = prompt("Ingrese la descripción de la actividad:");
        const encargado = prompt("Ingrese el nombre del encargado:");

        // Verificar que se ingresaron descripción y encargado antes de enviar los datos al PHP
        if (descripcion && encargado) {
            // Crear un objeto FormData para enviar los datos al PHP
            const formData = new FormData();
            formData.append("proyecto", nombreProyecto);
            formData.append("descripcion", descripcion);
            formData.append("encargado", encargado);

            // Crear una nueva solicitud XMLHttpRequest
            const xhr = new XMLHttpRequest();

            // Configurar la solicitud POST al archivo PHP
            xhr.open("POST", "agregaractividad.php", true);

            // Manejar la respuesta del servidor (opcional)
            xhr.onload = function () {
                if (xhr.status === 200) {
                    // Aquí puedes realizar acciones adicionales si la inserción fue exitosa
                    console.log(xhr.responseText);
                    location.reload();
                } else {
                    // Aquí puedes manejar errores en caso de que ocurra algún problema con la inserción
                    console.error("Error en la solicitud al servidor.");
                }
            };

            // Enviar la solicitud con los datos del formulario
            xhr.send(formData);
            
        } else {
            alert("Debe ingresar la descripción y el encargado de la actividad.");
        }
       
    });
</script>

<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obteneractividades.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablaActividades');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.id;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.descripcion;
                        fila.appendChild(descripcionCell);

                        var encargadoCell = document.createElement('td');
                        encargadoCell.textContent = actividad.encargado;
                        fila.appendChild(encargadoCell);

						var notasCell = document.createElement('td');
                        notasCell.textContent = actividad.notas;
                        fila.appendChild(notasCell);

						var avanceCell = document.createElement('td');
                        avanceCell.textContent = actividad.avance;
                        fila.appendChild(avanceCell);
                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtenersoportecalidad.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablasoporteseguridad');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.numba;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.nombre;
                        fila.appendChild(descripcionCell);

                        var funcionCell = document.createElement('td');
                        funcionCell.textContent = actividad.funcion;
                        fila.appendChild(funcionCell);

						var celCell = document.createElement('td');
                        celCell.textContent = actividad.cel;
                        fila.appendChild(celCell);

                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtenercontacto.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablacontactolocal');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.numba;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.nombre;
                        fila.appendChild(descripcionCell);

                        var funcionCell = document.createElement('td');
                        funcionCell.textContent = actividad.funcion;
                        fila.appendChild(funcionCell);

						var celCell = document.createElement('td');
                        celCell.textContent = actividad.cel;
                        fila.appendChild(celCell);

                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtenerreporte.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablareporte');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.numba;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.nombre;
                        fila.appendChild(descripcionCell);

                        var funcionCell = document.createElement('td');
                        funcionCell.textContent = actividad.funcion;
                        fila.appendChild(funcionCell);

						var celCell = document.createElement('td');
                        celCell.textContent = actividad.cel;
                        fila.appendChild(celCell);

                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtenerbuilder.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablasoportebuilder');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.numba;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.nombre;
                        fila.appendChild(descripcionCell);

                        var funcionCell = document.createElement('td');
                        funcionCell.textContent = actividad.funcion;
                        fila.appendChild(funcionCell);

						var celCell = document.createElement('td');
                        celCell.textContent = actividad.cel;
                        fila.appendChild(celCell);

                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
		<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtenercalidad.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablaseguridad');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.numba;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.nombre;
                        fila.appendChild(descripcionCell);

                        var funcionCell = document.createElement('td');
                        funcionCell.textContent = actividad.funcion;
                        fila.appendChild(funcionCell);

						var celCell = document.createElement('td');
                        celCell.textContent = actividad.cel;
                        fila.appendChild(celCell);

                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtenercapacitador.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablacapacitador');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.numba;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.nombre;
                        fila.appendChild(descripcionCell);

                        var funcionCell = document.createElement('td');
                        funcionCell.textContent = actividad.funcion;
                        fila.appendChild(funcionCell);

						var celCell = document.createElement('td');
                        celCell.textContent = actividad.cel;
                        fila.appendChild(celCell);

                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
	<script>
        window.addEventListener('DOMContentLoaded', function() {
			var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtenerobra.php?nombre=' + encodeURIComponent(nombreProyecto), true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);
                    var tabla = document.getElementById('tablaencargados');
                    var tbody = tabla.getElementsByTagName('tbody')[0];

                    // Limpiar el contenido existente en la tabla
                    tbody.innerHTML = '';

                    // Generar las filas de la tabla con los datos de actividades
                    respuesta.forEach(function(actividad) {
                        var fila = document.createElement('tr');

                        var idCell = document.createElement('td');
                        idCell.textContent = actividad.numba;
                        fila.appendChild(idCell);

                        var descripcionCell = document.createElement('td');
                        descripcionCell.textContent = actividad.nombre;
                        fila.appendChild(descripcionCell);

                        var habilidadCell = document.createElement('td');
                        habilidadCell.textContent = actividad.habilidad;
                        fila.appendChild(habilidadCell);

						var celCell = document.createElement('td');
                        celCell.textContent = actividad.cel;
                        fila.appendChild(celCell);

                        // Agrega aquí las celdas adicionales que desees mostrar

                        tbody.appendChild(fila);
                    });
                }
            };
            xhr.send();
        });
    </script>
	<script>
    window.addEventListener('DOMContentLoaded', function() {
        var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'obtenerreuniones.php?nombre=' + encodeURIComponent(nombreProyecto), true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var respuesta = JSON.parse(xhr.responseText);
                var tabla = document.getElementById('tablareuniones');
                var tbody = tabla.getElementsByTagName('tbody')[0];

                // Limpiar el contenido existente en la tabla
                tbody.innerHTML = '';

                // Generar las filas de la tabla con los datos de actividades
                respuesta.forEach(function(actividad) {
                    var fila = document.createElement('tr');

                    var idCell = document.createElement('td');
                    idCell.textContent = actividad.id;
                    fila.appendChild(idCell);

                    var descripcionCell = document.createElement('td');
                    descripcionCell.textContent = actividad.descripcion;
                    fila.appendChild(descripcionCell);

                    var notasCell = document.createElement('td');
                    notasCell.textContent = actividad.notas;
                    fila.appendChild(notasCell);

                    var fechaCell = document.createElement('td');
                    fechaCell.textContent = actividad.fecha;
                    fila.appendChild(fechaCell);

                    var avanceCell = document.createElement('td');
                    avanceCell.textContent = actividad.estado;
                    fila.appendChild(avanceCell);

                    // Agrega aquí las celdas adicionales que desees mostrar

                    tbody.appendChild(fila);
                });
            }
        };
        xhr.send();
    });
</script>
<script>
        // JavaScript para enviar datos al servidor
        document.getElementById("actualizar").addEventListener("click", function() {
            // Obtener el nombre del proyecto de la URL
            var url = window.location.href;
            var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));

            // Obtener los valores ingresados en cada campo del formulario
            var fondos = document.getElementById("fondos").value;
            var fecha = document.getElementById("fecha").value;
            var diseños = document.getElementById("diseños").value;
            var acciondiseño = document.getElementById("acciondiseño").value;
            var enviodocumentos = document.getElementById("enviodocumentos").value;
            var tareasbuilder = document.getElementById("tareasbuilder").value;
            var rtadiseño = document.getElementById("rtadiseño").value;
            var cronograma = document.getElementById("cronograma").value;
            var herramientas = document.getElementById("herramientas").value;
            var voluntarios = document.getElementById("voluntarios").value;
            var materiales = document.getElementById("materiales").value;

            // Crear un objeto con los datos del formulario y el nombre del proyecto
            var datosFormulario = {
                nombre_proyecto: nombreProyecto,
                fondos: fondos,
                fecha: fecha,
                diseños: diseños,
                acciondiseño: acciondiseño,
                enviodocumentos: enviodocumentos,
                tareasbuilder: tareasbuilder,
                rtadiseño: rtadiseño,
                cronograma: cronograma,
                herramientas: herramientas,
                voluntarios: voluntarios,
                materiales: materiales
            };

            // Enviar los datos al servidor mediante una solicitud AJAX
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "procesar_formulario.php", true);
            xhr.setRequestHeader("Content-Type", "application/json");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Aquí puedes manejar la respuesta del servidor si lo deseas
                        console.log(xhr.responseText);
                        location.reload(); 
                    } else {
                        // Manejar errores en caso de que la solicitud no se complete correctamente
                        console.error("Error al enviar datos al servidor.");
                        location.reload(); 
                    }
                }
            };
            xhr.send(JSON.stringify(datosFormulario));
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
     <script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizaractividad").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el ID de la actividad a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_actividades.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#idproyecto").val(resultado.idproyecto);
                        $("#idactividad").val(resultado.id);
                        $("#descripcion").val(resultado.descripcion);
                        $("#encargado").val(resultado.encargado);
                        $("#notas").val(resultado.notas);
                        $("#avance").val(resultado.avance);
                    },
                    error: function() {
                        alert("Error al buscar el lote");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambios").click(function() {
                // Obtenemos los datos de la ventana emergente
                var idproyecto = $("#idproyecto").val();
                var idactividad = $("#idactividad").val();
                var descripcion = $("#descripcion").val();
                var encargado = $("#encargado").val();
                var notas = $("#notas").val();
                var avance = $("#avance").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_actividades.php",
	type: "POST",
	data: {
		idproyecto: idproyecto,
		idactividad: idactividad,
		descripcion: descripcion,
		encargado: encargado,
		notas: notas,
		avance: avance,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>

    <script>

        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarreunion").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el ID de la reunion a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_reuniones.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente1").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#id").val(resultado.id);
                        $("#fechar").val(resultado.fecha);
                        $("#notasR").val(resultado.notas);
                        $("#estado").val(resultado.estado);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambiosr").click(function() {
                // Obtenemos los datos de la ventana emergente
                var id = $("#id").val();
                var fechaR = $("#fechar").val();
                var notasR = $("#notasR").val();
                var estado = $("#estado").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_reuniones.php",
	type: "POST",
	data: {
		id: id,
		fechaR: fechaR,
		notasR: notasR,
		estado: estado,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente1").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>
<script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarencargado").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el nombre del encargado a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_encargado.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente2").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#nombree").val(resultado.nombre);
                        $("#bae").val(resultado.numba);
                        $("#cele").val(resultado.cel);
                        $("#habilidade").val(resultado.habilidad);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambiose").click(function() {
                // Obtenemos los datos de la ventana emergente
                var nombree = $("#nombree").val();
                var bae = $("#bae").val();
                var cele = $("#cele").val();
                var habilidade = $("#habilidade").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_encargado.php",
	type: "POST",
	data: {
		nombree:nombree,
		bae: bae,
		cele: cele,
		habilidade: habilidade,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente2").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>
<script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarcapacitador").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el nombre del capacitador a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_capacitador.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente3").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#nombrec").val(resultado.nombre);
                        $("#bac").val(resultado.numba);
                        $("#celc").val(resultado.cel);
                        $("#funcionc").val(resultado.funcion);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambiosc").click(function() {
                // Obtenemos los datos de la ventana emergente
                var nombrec = $("#nombrec").val();
                var bac = $("#bac").val();
                var celc = $("#celc").val();
                var funcionc = $("#funcionc").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_capacitador.php",
	type: "POST",
	data: {
		nombrec:nombrec,
		bac: bac,
		celc: celc,
		funcionc: funcionc,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente3").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>
<script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarcontactoseguridad").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el nombre del contacto a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_contactoseguridad.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente4").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#nombrecs").val(resultado.nombre);
                        $("#bacs").val(resultado.numba);
                        $("#celcs").val(resultado.cel);
                        $("#funcioncs").val(resultado.funcion);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambioscs").click(function() {
                // Obtenemos los datos de la ventana emergente
                var nombrecs = $("#nombrecs").val();
                var bacs = $("#bacs").val();
                var celcs = $("#celcs").val();
                var funcioncs = $("#funcioncs").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_contactoseguridad.php",
	type: "POST",
	data: {
		nombrecs:nombrecs,
		bacs: bacs,
		celcs: celcs,
		funcioncs: funcioncs,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente4").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>
<script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarcontactolocal").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el nombre del contacto a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_contactolocal.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente6").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#nombrecl").val(resultado.nombre);
                        $("#bacl").val(resultado.numba);
                        $("#celcl").val(resultado.cel);
                        $("#funcioncl").val(resultado.funcion);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambioscl").click(function() {
                // Obtenemos los datos de la ventana emergente
                var nombrecl = $("#nombrecl").val();
                var bacl = $("#bacl").val();
                var celcl = $("#celcl").val();
                var funcioncl = $("#funcioncl").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_contactolocal.php",
	type: "POST",
	data: {
		nombrecl:nombrecl,
		bacl: bacl,
		celcl: celcl,
		funcioncl: funcioncl,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente6").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>
<script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarsoporteseguridad").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el nombre del contacto a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_soporteseguridad.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente5").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#nombress").val(resultado.nombre);
                        $("#bass").val(resultado.numba);
                        $("#celss").val(resultado.cel);
                        $("#funcionss").val(resultado.funcion);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambiosss").click(function() {
                // Obtenemos los datos de la ventana emergente
                var nombress = $("#nombress").val();
                var bass = $("#bass").val();
                var celss = $("#celss").val();
                var funcionss = $("#funcionss").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_soporteseguridad.php",
	type: "POST",
	data: {
		nombress:nombress,
		bass: bass,
		celss: celss,
		funcionss: funcionss,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente5").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>
<script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarbuilder").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el nombre del contacto a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_builder.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente7").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#nombreba").val(resultado.nombre);
                        $("#baba").val(resultado.numba);
                        $("#celba").val(resultado.cel);
                        $("#funcionba").val(resultado.funcion);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambiosba").click(function() {
                // Obtenemos los datos de la ventana emergente
                var nombreba = $("#nombreba").val();
                var baba = $("#baba").val();
                var celba = $("#celba").val();
                var funcionba = $("#funcionba").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_builder.php",
	type: "POST",
	data: {
		nombreba:nombreba,
		baba: baba,
		celba: celba,
		funcionba: funcionba,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente7").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>
<script>
        $(document).ready(function() {
            // Agregamos el evento click al botón
            $("#actualizarreporte").click(function() {
				event.preventDefault()
                // Pedimos al usuario el ID del lote
                var id_lote = prompt("Introduce el nombre del reporte a modificar:");
                var url = window.location.href;
        var nombreProyecto = decodeURIComponent(url.substring(url.lastIndexOf('/') + 1, url.lastIndexOf('.')));
       
                // Realizamos la petición AJAX para buscar el lote
                $.ajax({
                    url: "buscar_reporte.php",
                    type: "POST",
                    data: {id_lote: id_lote,nombreProyecto:nombreProyecto},
                    dataType: "json",
                    success: function(resultado) {
                        // Mostramos la ventana emergente con los datos del lote
                        $("#ventana-emergente8").show();

                        // Llenamos los campos de la ventana emergente con los datos del lote
						
                        $("#nombrerf").val(resultado.nombre);
                        $("#barf").val(resultado.numba);
                        $("#celrf").val(resultado.cel);
                        $("#funcionrf").val(resultado.funcion);
                    },
                    error: function() {
                        alert("Error al buscar la reunion");
                    }
                });
            });
			// Agregamos el evento click al botón de guardar cambios
            $("#btn-guardar-cambiosrf").click(function() {
                // Obtenemos los datos de la ventana emergente
                var nombrerf = $("#nombrerf").val();
                var barf = $("#barf").val();
                var celrf = $("#celrf").val();
                var funcionrf = $("#funcionrf").val();

// Realizamos la petición AJAX para guardar los cambios en la base de datos
$.ajax({
	url: "modificar_reporte.php",
	type: "POST",
	data: {
		nombrerf:nombrerf,
		barf: barf,
		celrf: celrf,
		funcionrf: funcionrf,
	},
	success: function() {
		alert("Los cambios se han guardado correctamente");
		$("#ventana-emergente8").hide();
	},
	error: function() {
		alert("Error al guardar los cambios");
	}
});
});
});
</script>

</body>
</html>