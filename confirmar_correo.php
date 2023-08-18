<!DOCTYPE html>
<html lang="es">
<head>
    <title>Confirmar Correo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div class="container">
        <h1>Confirmar Correo</h1>
        <?php
        if (isset($_GET['user_email'])) {
            $user_email = $_GET['user_email'];
            echo '<form action="procesar_correo.php?user_email=' . urlencode($user_email) . '" method="POST">';
            echo '<label for="verification_code">Código de Verificación:</label>';
            echo '<input type="text" id="verification_code" name="verification_code" required>';
            echo '<button type="submit">Confirmar Correo</button>';
            echo '</form>';
        } else {
            echo 'Correo electrónico no proporcionado en la URL.';
        }
        ?>
    </div>
</body>
</html>