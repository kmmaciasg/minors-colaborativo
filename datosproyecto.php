<!DOCTYPE html>
<html>
<head>
    <title>Datos proyecto</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.1.0/progressbar.min.css">
</head>

<body>

    <?php
    // Obtén el nombre del proyecto de la URL
    $nombreProyecto = $_GET['nombre'];
    ?>
    <br><br>
    <div class="container-fluid">
        <div class="col-xs-12 col-md-10 col-md-offset-1">
            <div class="full-box tile-title text-center text-titles text-uppercase">
                <?php echo $nombreProyecto; ?>
            </div>
        </div>
        <br> <br> <br>
        <div class="full-box tile-text text-titles">
            <span>COL:</span>
            <input type="text" id="col" readonly>
        </div><br>
        <div class="full-box tile-text text-titles">
            <span>BRV:</span>
            <input type="text" id="brv" readonly>
        </div>
        <br>
        <div class="full-box tile-text text-titles">
            <span>ASISTENTES:</span>
            <input type="text" id="asistentes" readonly>
        </div> <br>
        <div class="full-box tile-text text-titles">
            <span>FONDOS:</span>
            <input type="text" id="fondos" readonly>
        </div>
        <br>
        <div class="full-box tile-text text-titles">
            <span>FECHA INICIO:</span>
            <input type="text" id="fecha" readonly>
        </div>
        
        <div class="progress-container">
            <div class="progress-bar" id="progress-bar"></div>
        </div>
    </div>

    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/sweetalert2.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/material.min.js"></script>
    <script src="./js/ripples.min.js"></script>
    <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="./js/main.js"></script>
    <script src="./js/progressbar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/progressbar.js/1.1.0/progressbar.min.js"></script>
    <script>
        var progressBar = new ProgressBar.Line('#progress-bar', {
            color: '#00bcd4',
            strokeWidth: 2,
            trailWidth: 2,
            duration: 2000, // Tiempo de animación en milisegundos
            easing: 'easeInOut',
            from: { color: '#ededed' },
            to: { color: '#00bcd4' },
            step: function(state, bar) {
                bar.path.setAttribute('stroke', state.color);
            }
        });

        // Actualizar el valor de la barra de progreso
        function updateProgressBar(value) {
            progressBar.set(value);
        }

        // Ejemplo de actualización de la barra de progreso con un valor
        updateProgressBar(0.5); // Cambiar el valor de 0.5 al valor deseado

        // Otras funciones y lógica de JavaScript...

    </script>
</body>
</html>


