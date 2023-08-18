<?php
include "conexiondb.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user_email'])) {
        $user_email = $_POST['user_email'];
        $user_password = $_POST['user_password'];

        // Verificar el código de verificación
        $sql = "UPDATE usuarios SET password = '$user_password' WHERE correo = '$user_email'";
        
        if ($conn->query($sql) === TRUE) {
            echo "Reestablecimiento de contraseña exitoso";
            sleep(6);

            // Redireccionar a la página "index.php"
            header("Location: index.php");
        } else {
            echo "Error al cambiar la contraseña: ";
        }
    } else {
        echo "Correo electrónico no proporcionado en el formulario.";
    }
}

// Cierre de la conexión a la base de datos
$conn->close();
?>


