<?php
// procesar_formulario.php

// Obtener los datos enviados desde el cliente
$datosFormulario = json_decode(file_get_contents('php://input'), true);

include 'conexiondb.php';

// Escapar los datos para evitar inyección de SQL 
$nombre_proyecto = $conn->real_escape_string($datosFormulario['nombre_proyecto']);
$fondos = $conn->real_escape_string($datosFormulario['fondos']);
$fecha = $conn->real_escape_string($datosFormulario['fecha']);
$diseños = $conn->real_escape_string($datosFormulario['diseños']);
$acciondiseño = $conn->real_escape_string($datosFormulario['acciondiseño']);
$enviodocumentos = $conn->real_escape_string($datosFormulario['enviodocumentos']);
$tareasbuilder = $conn->real_escape_string($datosFormulario['tareasbuilder']);
$rtadiseño = $conn->real_escape_string($datosFormulario['rtadiseño']);
$cronograma = $conn->real_escape_string($datosFormulario['cronograma']);
$herramientas = $conn->real_escape_string($datosFormulario['herramientas']);
$voluntarios = $conn->real_escape_string($datosFormulario['voluntarios']);
$materiales = $conn->real_escape_string($datosFormulario['materiales']);

// Ejecutar consulta para actualizar los datos en la base de datos
$consulta = "UPDATE proyectosejecucion SET fondos='$fondos', inicio='$fecha', diseños='$diseños', acciondiseño='$acciondiseño', enviodocumentos='$enviodocumentos', tareasbuilder='$tareasbuilder', rtadiseño='$rtadiseño', cronograma='$cronograma', herramientas='$herramientas', voluntarios='$voluntarios', materiales='$materiales' WHERE nombre='$nombre_proyecto'";

if ($conn->query($consulta) === TRUE) {
    echo "Datos actualizados correctamente en la base de datos.";
} else {
    // Manejar el caso en que ocurra un error en la actualización
    // ...
}


// Cerrar la conexión
$conn->close();
?>
