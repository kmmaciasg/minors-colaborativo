<?php
// Datos de conexión a la base de datos
include 'conexiondb.php';

// Obtén el nombre del proyecto de la URL
$nombreProyecto = $_GET['nombre'];

// Consulta SQL para obtener el ID del proyecto
$sqlProyecto = "SELECT id FROM proyectosejecucion WHERE nombre = '$nombreProyecto'";
$resultadoProyecto = mysqli_query($conn, $sqlProyecto);

if ($resultadoProyecto && mysqli_num_rows($resultadoProyecto) > 0) {
    $filaProyecto = mysqli_fetch_assoc($resultadoProyecto);
    $idProyecto = $filaProyecto['id'];

    // Consulta SQL para obtener los registros de actividades aprobadas
    $sqlActividades = "SELECT rp.*, r.descripcion FROM reunionesproyectos rp
                       INNER JOIN reuniones r ON rp.idreunion = r.id
                       WHERE rp.idproyecto = '$idProyecto'";
    $resultadoActividades = mysqli_query($conn, $sqlActividades);

    if ($resultadoActividades && mysqli_num_rows($resultadoActividades) > 0) {
        $datosActividades = array();

        while ($filaActividad = mysqli_fetch_assoc($resultadoActividades)) {
            // Agrega los datos de la actividad al arreglo
            $datosActividades[] = $filaActividad;
        }

        // Devolver los datos en formato JSON
        echo json_encode($datosActividades);
    } else {
        // No se encontraron registros de actividades aprobadas para el proyecto
        echo json_encode(array());
    }
} else {
    // No se encontró el proyecto con el nombre proporcionado
    echo json_encode(array());
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>

