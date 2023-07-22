<?php
// Verificar si la solicitud es mediante POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $proyecto = $_POST["proyecto"];
    $cel = $_POST["cel"];
    $encargado = $_POST["encargado"];
    $ba = $_POST["ba"];
    $funcion = $_POST["funcion"];

    include 'conexiondb.php';

    // Obtener el ID del proyecto desde la tabla proyectosejecucion
    $sql = "SELECT col FROM proyectosejecucion WHERE nombre = '$proyecto'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si se encuentra el proyecto, obtener el ID correspondiente
        $row = $result->fetch_assoc();
        $idProyecto = $row["col"];

        // Insertar los datos en la tabla actividadesaprobadas
        $sqlInsert = "INSERT INTO reportefotografico (col, nombre, cel, numba, funcion) VALUES ('$idProyecto', '$encargado','$cel','$ba', '$funcion' )";

        if ($conn->query($sqlInsert) === TRUE) {
            echo "Datos insertados correctamente.";
        } else {
            echo "Error al insertar datos: ";
        }
    } else {
        echo "Proyecto no encontrado en la base de datos.";
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
} else {
    // Si la solicitud no es mediante POST, mostrar un mensaje de error
    echo "Error en la solicitud.";
}
?>