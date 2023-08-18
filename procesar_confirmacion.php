<?php
// ... (configuración de conexión a la base de datos)

include "conexiondb.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['user_email'])) {
        $user_email_encoded = $_GET['user_email'];
        $user_email_decoded = urldecode($user_email_encoded);
        $verification_code = $_POST['verification_code'];

        // Verificar el código de verificación
        $sql = "SELECT * FROM usuarios WHERE correo = '$user_email_encoded' AND verification_code = '$verification_code'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Código de verificación válido, marcar la cuenta como confirmada
            $updateSql = "UPDATE usuarios SET cuenta_confirmada = 1 WHERE correo = '$user_email_encoded'";
            if ($conn->query($updateSql) === TRUE) {
                
                echo "Muchas Gracias. Cuenta confirmada exitosamente. Ahora su administrador le asignara los permisos para que pueda acceder a la plataforma";
                sleep(6);

                // Redireccionar a la página "index.php"
                header("Location: index.php");
            } else {
                echo "Error al confirmar la cuenta en la base de datos.";
            }
        } else {
            echo "Código de verificación incorrecto o correo electrónico inválido.";
        }
    } else {
        echo "Correo electrónico no proporcionado en la URL.";
    }

    // ... (cierre de conexión de base de datos)
}
?>

