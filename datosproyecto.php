<!DOCTYPE html>
<html>
<head>
    <title>Datos proyecto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="container-fluid">
        <br>
        
        <div class="tab-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-md-10 col-md-offset-1">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            <span id="nombreProyecto"></span>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-xs-4 col-md-4">
                        <div class="full-box tile-text text-titles">
                            <span>COL:</span>
                            <input type="text" id="col" readonly>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <div class="full-box tile-text text-titles">
                            <span>BRV:</span>
                            <input type="text" id="brv" readonly>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <div class="full-box tile-text text-titles">
                            <span>FONDOS:</span>
                            <input type="text" id="fondos" readonly>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="full-box tile-text text-titles">
                            <span>ASISTENTES:</span>
                            <textarea id="asistentes" readonly></textarea>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <div class="full-box tile-text text-titles">
                            <span>FECHA INICIO:</span>
                            <input type="date" id="fecha" readonly>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <!-- Aquí puedes agregar otro elemento en la tercera columna -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <br>
        
        <div class="tab-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-3 col-md-3 col-md-offset-1"></div>
                    <div class="col-xs-6 col-md-6 col-md-offset-1">
                        <div class="full-box tile-title text-center text-titles text-uppercase">
                            <span>PROGRESO</span>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="full-box tile-text text-titles">
                            <span>Fase:</span>
                            <textarea id="fase" readonly style="width: 80%;"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-6 col-md-6">
                        <div class="full-box tile-text text-titles">
                            <span>Paso:</span>
                            <textarea id="paso" readonly style="width: 80%;"></textarea>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-6 col-md-6">
                        <div class="full-box tile-text text-titles">
                            <span>Notas:</span>
                            <textarea id="notas" readonly style="width: 80%;"></textarea>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <div class="full-box tile-text text-titles">
                            <span>Estado:</span>
                            <input type="text" id="estado" readonly>
                        </div>
                    </div>
                    <div class="col-xs-4 col-md-4">
                        <!-- Aquí puedes agregar otro elemento en la tercera columna -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <input type="hidden" id="fasea">
    <div class="container-fluid">
        <br>
        <div id="barraProgreso">
            <div id="progreso" style="width: 0;"></div>
        </div>
    </div>

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/material.min.js"></script>
    <script src="./js/ripples.min.js"></script>
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/progressbar.min.js"></script>
    <script src="./js/main.js"></script>

    <script>
        window.addEventListener('DOMContentLoaded', function() {
            var nombreProyecto = "<?php echo rawurlencode(trim($_GET['nombre'])); ?>";
            document.getElementById('nombreProyecto').innerHTML = decodeURIComponent(nombreProyecto);

            // Enviar solicitud HTTP para obtener los datos del proyecto
            var xhr = new XMLHttpRequest();
            xhr.open('GET', 'obtener_datos_proyecto.php?nombre=' + nombreProyecto, true);
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var respuesta = JSON.parse(xhr.responseText);

                    // Actualizar los valores en los campos correspondientes
                    document.getElementById('col').value = respuesta.col;
                    document.getElementById('brv').value = respuesta.brv;
                    document.getElementById('asistentes').value = respuesta.asistentes;
                    document.getElementById('fondos').value = respuesta.fondos;
                    document.getElementById('fecha').value = respuesta.inicio;

                    if (respuesta.progresopasoapaso && respuesta.progresopasoapaso.length > 0) {
                        // Obtener el primer elemento del arreglo de progresopasoapaso
                        var primerElemento = respuesta.progresopasoapaso[0];

                        // Actualizar los valores en los campos correspondientes
                        document.getElementById('fase').value = primerElemento.fase;
                        document.getElementById('fasea').value = primerElemento.fasea;
                        document.getElementById('paso').value = primerElemento.paso;
                        document.getElementById('notas').value = primerElemento.notas;
                        document.getElementById('estado').value = primerElemento.estado;

                        if (primerElemento.registrosCorrespondientes && primerElemento.registrosCorrespondientes.length > 0) {
                            // Obtener el primer registro correspondiente
                            var primerRegistro = primerElemento.registrosCorrespondientes[0];

                            // Actualizar el valor del campo paso en la tabla pasoapaso
                            document.getElementById('paso').value = primerRegistro.paso;

                            // Aquí puedes agregar la lógica para actualizar los demás campos correspondientes a los registros en la tabla pasoapaso
                            // Ejemplo:
                            // document.getElementById('campo1').value = primerRegistro.campo1;
                            // document.getElementById('campo2').value = primerRegistro.campo2;
                        }
                    }

                    // Crear una nueva instancia de ProgressBar
var progressBar = new ProgressBar.Line('#progreso', {
  strokeWidth: 4,
  easing: 'easeInOut',
  duration: 1000,
  color: '#FFEA82',
  trailColor: '#eee',
  trailWidth: 1,
  svgStyle: { width: '100%', height: '100%' },
  from: { color: '#FFEA82' },
  to: { color: '#ED6A5A' },
  step: function(state, bar) {
    bar.path.setAttribute('stroke', state.color);
  }
});

// Actualizar la barra de progreso
var faseActual = parseInt(document.getElementById('fasea').value);
var totalFases = 17;
var porcentajeProgreso = (faseActual / totalFases) * 100;
progressBar.set(porcentajeProgreso / 100);

                }
            };
            xhr.send();
        });
    </script>
</body>
</html>
