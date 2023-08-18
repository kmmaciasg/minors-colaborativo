<?php

// ... (configuración de conexión a la base de datos)

include "conexiondb.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (obtener datos del formulario)

    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $cel = $_POST["cel"];
    $asignacion = $_POST["asignacion"];
    $departamento = $_POST["departamento"];
    $user_password = $_POST["user_password"];
    $user_passwordc = $_POST["user_passwordc"];

    // Genera el código de verificación
    $verificationCode = rand(100000, 999999);

    $to = "$user_email";
    $subject = "Codigo de Verificacion Aplicativo Minor";
    $message = "Tu codigo de verificacion es: " . $verificationCode;
    $headers = "From: karencitamacias2001@gmail.com";

    if (mail($to, $subject, $message, $headers)) {
        // Inserta los datos en la base de datos
        $sql = "INSERT INTO usuarios (nombre, correo, telefono, asignacion, departamento, password, verification_code) 
                VALUES ('$user_name', '$user_email', '$cel', '$asignacion', '$departamento', '$user_password', '$verificationCode')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Registro exitoso. Se ha enviado un código de verificación a tu correo electrónico.";
            sleep(6);

            header("Location: confirmar_cuenta.php?user_email=" . urlencode($user_email));
    } else {
            echo "Error al registrar en la base de datos: ";
        }
    } else {
        echo "Error al enviar el correo.";
    }

    // ... (cierre de conexión de base de datos)
}
?>


