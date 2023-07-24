<?php
// Archivo buscar_lote.php

// Conectamos con la base de datos
include 'conexiondb.php';

// Obtenemos el ID del lote a buscar
$id_lote = $_POST["id_lote"];
$nombreProyecto = $_POST["nombreProyecto"];

// Consulta SQL para obtener el ID del proyecto
$sqlProyecto = "SELECT col FROM proyectosejecucion WHERE nombre = '$nombreProyecto'";
$resultadoProyecto = mysqli_query($conn, $sqlProyecto);
// Realizamos la consulta a la base de datos
if ($resultadoProyecto && mysqli_num_rows($resultadoProyecto) > 0) {
    $filaProyecto = mysqli_fetch_assoc($resultadoProyecto);
    $idProyecto = $filaProyecto['col'];
  
     // Consulta SQL para obtener los registros de actividades aprobadas
     $sqlActividades = "SELECT * FROM contactosycdc WHERE col = '$idProyecto' AND nombre ='$id_lote'";
     $resultado = mysqli_query($conn, $sqlActividades);
 
        // No se encontraron registros de actividades aprobadas para el proyecto
        echo json_encode(mysqli_fetch_assoc($resultado));
} else {
    // No se encontró el proyecto con el nombre proporcionado
    
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>