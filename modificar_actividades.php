<?php
// modificar_actividades.php

include 'conexiondb.php';

// Obtenemos los datos enviados via AJAX
$idproyecto = $_POST["idproyecto"];
$idactividad = $_POST["idactividad"];
$descripcion = $_POST["descripcion"];
$encargado = $_POST["encargado"];
$notas = $_POST["notas"];
$avance = $_POST["avance"];

// Consulta SQL para actualizar los datos en la tabla actividadesaprobadas
$sqlUpdate = "UPDATE `actividadesaprobadas` SET descripcion = ?, encargado = ?, notas = ?, avance = ? WHERE id = ?";

// Preparar la consulta
if ($stmt = mysqli_prepare($conn, $sqlUpdate)) {
    // Asignar los parámetros
    mysqli_stmt_bind_param($stmt, "ssssi", $descripcion, $encargado, $notas, $avance, $idactividad);

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


