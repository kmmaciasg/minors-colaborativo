<?php
include "conexiondb.php"; 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_GET['user_email'])) {
        $user_email_encoded = $_GET['user_email'];
        $user_email_decoded = urldecode($user_email_encoded);
        $verification_code = $_POST['verification_code'];

        // Verificar el código de verificación
        $sql = "SELECT * FROM usuarios WHERE correo = '$user_email_decoded' AND codigo_cambiocontraseña = '$verification_code'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Código de verificación válido, marcar la cuenta como confirmada
            echo "Muchas Gracias. Cuenta confirmada exitosamente.";

            // Redireccionar a la página "procesar_cambiocon.php"
            header("Location: procesar_cambiocon.php?user_email=" . urlencode($user_email_encoded));
            exit(); // Importante: Salir para evitar que el resto del código se ejecute
        } else {
            echo "Código de verificación inválido.";
        }
    } else {
        echo "Correo electrónico no proporcionado en la URL.";
    }
    
    // Cierre de conexión de base de datos (debe ir después de usarla)
    $conn->close();
}
?>
