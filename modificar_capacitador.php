<?php
// modificar_actividades.php

include 'conexiondb.php';

// Obtenemos los datos enviados via AJAX
$id = $_POST["nombrec"];
$fecha = $_POST["celc"];
$estado = $_POST["funcionc"];
$notas = $_POST["bac"];

// Consulta SQL para actualizar los datos en la tabla reunionesproyectos
$sqlUpdate = "UPDATE `capacitador` SET cel = ?, numba = ?, funcion = ? WHERE nombre = ?";

// Preparar la consulta
if ($stmt = mysqli_prepare($conn, $sqlUpdate)) {
    // Asignar los parámetros
    mysqli_stmt_bind_param($stmt, "sssi", $fecha, $notas, $estado, $id);

    // Ejecutar la consulta
    if (mysqli_stmt_execute($stmt)) {
        // Query executed successfully
        echo "success";
    } else {
        // Query execution failed
        echo "error: " . mysqli_error($conn);
    }

    // Cerrar el statement
    mysqli_stmt_close($stmt);
} else {
    // Error en la consulta preparada
    echo "error: " . mysqli_error($conn);
}

// Cerrar la conexión
mysqli_close($conn);
?>