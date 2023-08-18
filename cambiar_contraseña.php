<?php

include "conexiondb.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (obtener datos del formulario)
    $email = $_POST['correoregistro'];

    // Verificar si el email está en la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        // Genera el código de verificación
        $verificationCode = rand(100000, 999999);

        $to = $email;  // Use $email instead of $user_email
        $subject = "Codigo de Verificacion Aplicativo Minor";
        $message = "Tu codigo de verificacion es: " . $verificationCode;
        $headers = "From: karencitamacias2001@gmail.com";

        if (mail($to, $subject, $message, $headers)) {
            // Actualiza el código de verificación en la base de datos
            $update_sql = "UPDATE usuarios SET codigo_cambiocontraseña = '$verificationCode' WHERE correo = '$email'";
            if ($conn->query($update_sql) === TRUE) {
                echo "Registro exitoso. Se ha enviado un código de verificación a tu correo electrónico.";
                sleep(6);

                header("Location: confirmar_correo.php?user_email=" . urlencode($email));
                exit(); // Always exit after a header redirect
            } else {
                echo "Error al actualizar el código de verificación en la base de datos: ";
            }
        } else {
            echo "Error al enviar el correo.";
        }
    } else {
        echo "El email no se encuentra registrado en la base de datos.";
    }
}

// Close the database connection
$conn->close();
?>


