<!DOCTYPE html>
<html lang="es">
<head>
	<title>Proyecto 2</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-home zmdi-hc-fw"></i> LA GABRIELA <small>Col 0914</small></h1>
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

<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Actividad</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
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
									

<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Reunion</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>


</div>
								</div>
							</div>
						</div>
				<div class="tab-pane fade" id="2">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Encargado</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>


</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="3">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Capacitador</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>


</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="4">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Contacto seguridad</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>

<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Soporte seguridad</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>

</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="5">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Contacto local</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>


</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="6">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form action="">
<div class="table-responsive">
								<table id="tablasoporte" class="table table-hover text-center">
								
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Soporte</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>


</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="7">
						  <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									
<form action="">
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
	<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored bg-secundary" style="margin-left: 255px;" id="agregar">
								<i class="zmdi zmdi-check">Agregar Reporte Fotografico</i>
								<span class="mdl-button__ripple-container"><span class="mdl-ripple"></span></span></button>
								<br><br>
</form>


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
                    var tabla = document.getElementById('tablasoporte');
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
</body>
</html>