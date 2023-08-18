<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro Usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>

<body>
<form action="cambiar_contraseña.php" method="POST" autocomplete="off" class="full-box newForm">
    <div class="container">
        
                <div class="form-group text-center">
                    <label for="UserName">Ingrese el correo con el que se registró</label>
                    <input class="form-control" id="correoregistro" name="correoregistro" type="email">
                    <p class="help-block">Ingresa tu correo</p>
                </div>
        
            <div class="form-group text-center">
                <input type="submit" value="Cambiar Contraseña" class="btn btn-raised btn-primary">
            </div>
            <p class="text-center">
                <a href="index.php">Regresar</a>
            </p>
    </div>

</form>

</body>

	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>