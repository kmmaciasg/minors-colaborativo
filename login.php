<?php
session_start(); // Inicia la sesión

include "conexiondb.php"; // Incluye la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_email = $_POST['UserEmail'];
    $user_password = $_POST['UserPass'];

    // Valida el usuario y la contraseña en la base de datos
    $sql = "SELECT * FROM usuarios WHERE correo = '$user_email' AND password = '$user_password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario y contraseña son válidos
        $_SESSION['user_email'] = $user_email; // Guarda el correo en la sesión si es necesario

        header("Location: home.php"); // Redirecciona a la página de inicio
    } else {
        echo "Usuario o contraseña incorrectos."; // Muestra un mensaje de error
        
        header("Location: index.php"); // Redirecciona a la página de inicio
    }
}

// Cierre de la conexión a la base de datos
$conn->close();
?>

<!-- Resto de tu HTML -->
