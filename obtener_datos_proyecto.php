<?php
// Datos de conexión a la base de datos
include 'conexiondb.php';

// Obtén el nombre del proyecto de la URL
$nombreProyecto = $_GET['nombre'];

// Consulta SQL para obtener los datos del proyecto
$sql = "SELECT col, brv, asistentes, fondos, inicio FROM proyectosejecucion WHERE nombre = '$nombreProyecto'";

// Ejecutar la consulta
$resultado = mysqli_query($conn, $sql);

// Verificar si la consulta fue exitosa
if ($resultado) {
    // Verificar si se obtuvo algún resultado
    if (mysqli_num_rows($resultado) > 0) {
        // Obtener los datos del resultado de la consulta
        $fila = mysqli_fetch_assoc($resultado);

        // Crear un arreglo con los datos del proyecto
        $datosProyecto = array(
            'col' => $fila['col'],
            'brv' => $fila['brv'],
            'asistentes' => $fila['asistentes'],
            'fondos' => $fila['fondos'],
            'inicio' => $fila['inicio']
        );

        // Realizar la segunda consulta para obtener los datos de progresopasoapaso
        $col = $fila['col'];
        $sql2 = "SELECT * FROM `progresopasoapaso` WHERE col = '$col'";
        $resultado2 = mysqli_query($conn, $sql2);

        if ($resultado2) {
            // Verificar si se obtuvo algún resultado en la segunda consulta
            if (mysqli_num_rows($resultado2) > 0) {
                // Crear un arreglo para almacenar los datos de proresopasoapaso
                $datosProyecto['progresopasoapaso'] = array();

                // Obtener los datos del resultado de la segunda consulta
                while ($fila2 = mysqli_fetch_assoc($resultado2)) {
                    // Obtener la descripción de la fase en una tercera consulta
                    $fase = $fila2['fase'];
                    $sql3 = "SELECT descripcion FROM `fases` WHERE fase = '$fase'";
                    $resultado3 = mysqli_query($conn, $sql3);

                    if ($resultado3 && mysqli_num_rows($resultado3) > 0) {
                        $fila3 = mysqli_fetch_assoc($resultado3);
                        $descripcionFase = $fila3['descripcion'];
                    } else {
                        $descripcionFase = '';
                    }

                    // Agregar los datos al arreglo de progresopasoapaso
                    $datosProyecto['progresopasoapaso'][] = array(
                        'fase' => $descripcionFase,
                        'notas' => $fila2['notas'],
                        'fasea' => $fila2['fase'],
                        'estado' => $fila2['estado']
                    );

                    // Realizar la tercera consulta para obtener los registros correspondientes
                    $paso = $fila2['idpasoapaso'];
                    $sql4 = "SELECT * FROM `pasoapaso` WHERE fase = '$fase' AND punto = '$paso'";
                    $resultado4 = mysqli_query($conn, $sql4);

                    if ($resultado4 && mysqli_num_rows($resultado4) > 0) {
                        // Crear un arreglo para almacenar los datos de los registros correspondientes
                        $datosProyecto['progresopasoapaso'][count($datosProyecto['progresopasoapaso']) - 1]['registrosCorrespondientes'] = array();

                        // Obtener los datos del resultado de la tercera consulta
                        while ($fila4 = mysqli_fetch_assoc($resultado4)) {
                            // Agregar los datos al arreglo de registros correspondientes
                            $datosProyecto['progresopasoapaso'][count($datosProyecto['progresopasoapaso']) - 1]['registrosCorrespondientes'][] = array(
                                'paso' => $fila4['descripcion'],
                                // Agrega aquí los demás datos que desees obtener de la tabla pasoapaso
                            );
                        }
                    }
                }
            }
        }

        // Devolver los datos en formato JSON
        echo json_encode($datosProyecto);
    } else {
        // No se encontraron proyectos con el nombre proporcionado
        echo json_encode(array());
    }
} else {
    // Error en la consulta
    echo json_encode(array());
}

// Cerrar la conexión a la base de datos
mysqli_close($conn);
?>


