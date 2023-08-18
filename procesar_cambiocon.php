<!DOCTYPE html>
<html>
<head>
	<title>Reestablecer Contraseña</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>

<body>
<?php
include "conexiondb.php"; 
if (isset($_GET['user_email'])) {
    $user_email = urldecode($_GET['user_email']);
    ?>
    <form action="cambiocontraseña.php" method="POST" autocomplete="off" class="full-box newForm" onsubmit="return validateForm();">
        <div class="form-group label-floating text-center">
            <label class="control-label" for="user_password">Contraseña</label>
            <input class="form-control" id="user_password" name="user_password" type="password">
            <p class="help-block">Ingresa tu contraseña</p>
        </div>
        <div class="form-group label-floating text-center">
            <label class="control-label" for="user_passwordc">Confirma tu contraseña</label>
            <input class="form-control" id="user_passwordc" name="user_passwordc" type="password">
            <p class="help-block">Confirma tu contraseña</p>
        </div>
        <input type="hidden" name="user_email" value="<?php echo $user_email; ?>">
        <div class="form-group text-center">
            <button id="reestablecer" class="btn btn-raised btn-primary" type="submit">Reestablecer Contraseña</button>
        </div>
    </form>
    <?php
    } else {
        echo "No se proporcionó un correo electrónico válido.";
    }
    ?>
 
    </form>
    
<script>
    function validateForm() {
        var password = document.getElementById("user_password").value;
        var confirmPassword = document.getElementById("user_passwordc").value;

        if (password === "" || confirmPassword === "") {
            alert("Contraseñas vacías. Ingresa ambas contraseñas para continuar.");
            return false;
        }

        if (password !== confirmPassword) {
            alert("Las contraseñas no coinciden. Ingresa contraseñas iguales.");
            return false;
        }

        return true;
    }
</script>

</body>
</html>
