<?php
// ... (código previo)

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Ajusta la ruta al archivo autoload.php de PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (obtener datos del formulario)

    $user_name = $_POST["user_name"];
    $user_email = $_POST["user_email"];
    $cel = $_POST["cel"];
    $asignacion = $_POST["asignacion"];
    $departamento = $_POST["departamento"];
    $user_password = $_POST["user_password"];
    $user_passwordc = $_POST["user_passwordc"];

    // Generar un código de verificación aleatorio
    $verificationCode = rand(1000, 9999);
    // Crear instancia de PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Configuración del servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP de Hotmail
        $mail->SMTPAuth = true;
        $mail->Username = 'karencitamacias2001@gmail.com'; // Tu dirección de correo de Hotmail
        $mail->Password = 'Amber7810*'; // Tu contraseña de Hotmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Usar TLS
        $mail->Port = 587; // Puerto SMTP de Hotmail

        // Destinatario y remitente
        $mail->setFrom('karencitamacias2001@gmail.com', 'MINOR');
        $mail->addAddress($user_email, $user_name); // Agrega el destinatario

        // Contenido del correo electrónico
        $mail->Subject = 'Código de Verificación';
        $mail->Body = 'Tu código de verificación es: ' . $verificationCode;

        // Enviar el correo
        $mail->send();
        echo "Registro exitoso. Se ha enviado un código de verificación a tu correo electrónico.";
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
    }
    // ... (cierre de conexión de base de datos)
}
?>

