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
$sqlUpdate = "UPDATE 'actividadesaprobadas' SET descripcion = '$descripcion', encargado = '$encargado', notas = '$notas', avance = '$avance' WHERE id = '$idactividad'";

if (mysqli_query($conn, $sqlUpdate)) {
    // Query executed successfully
    echo "success";
} else {
    // Query execution failed
    echo "error: " . mysqli_error($conn);
}

// Close the connection
mysqli_close($conn);
?>


