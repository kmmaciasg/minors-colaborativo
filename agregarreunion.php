<?php
// Verificar si la solicitud es mediante POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los datos del formulario
    $proyecto = $_POST["proyecto"];
    $reunion = $_POST["reunion"];
    $fecha = $_POST["fecha_reunion"]; // El campo en el formulario es "fecha_reunion", no "fecha"

    include 'conexiondb.php';

    // Obtener el ID del proyecto desde la tabla proyectosejecucion
    $sql = "SELECT id FROM proyectosejecucion WHERE nombre = '$proyecto'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Si se encuentra el proyecto, obtener el ID correspondiente
        $row = $result->fetch_assoc();
        $idProyecto = $row["id"];

        // Obtener el ID de la reunión desde la tabla reuniones
        $sql2 = "SELECT id FROM reuniones WHERE descripcion = '$reunion'"; // Se corrigió la consulta SQL
        $result2 = $conn->query($sql2);

        if ($result2->num_rows > 0) {
            $row = $result2->fetch_assoc();
            $idReunion = $row["id"];

            // Insertar los datos en la tabla reunionesproyectos
            $sqlInsert = "INSERT INTO reunionesproyectos (idproyecto, idreunion, fecha) VALUES ('$idProyecto', '$idReunion', '$fecha')";

            if ($conn->query($sqlInsert) === TRUE) {
                echo "Datos insertados correctamente.";
            } else {
                echo "Error al insertar datos: ";
            }
        } else {
            echo "Error al obtener el ID de la reunión: " ;
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
