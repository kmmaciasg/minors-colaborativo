<!DOCTYPE html>
<html lang="es">
<head>
	<title>LogIn</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body class="cover" style="background-image: url(./assets/img/loginFont.jpg);">
	<form action="login.php" method="POST" autocomplete="off" class="full-box logInForm">
		<p class="text-center text-muted">
			<img src="./assets/img/avatar.jpg" alt="UserIcon" style="max-width: 100px; max-height: 100px;">
		</p>
		<p class="text-center text-muted text-uppercase">Iniciar sesión</p>
		<div class="form-group label-floating">
			<label class="control-label" for="UserEmail">Usuario</label>
			<input class="form-control" id="UserEmail" name="UserEmail" type="email">
			<p class="help-block">Escribe tu Usuario</p>
		</div>
		<div class="form-group label-floating">
			<label class="control-label" for="UserPass">Contraseña</label>
			<input class="form-control" id="UserPass" name="UserPass"  type="password">
			<p class="help-block">Escribe tu contraseña</p>
		</div>
		<div class="form-group text-center">
			<input type="submit" value="Iniciar sesión" class="btn btn-raised btn-danger">
		</div>
		<div class="form-group text-center">
			<p class="text-muted">
				<a href="olvidecontraseña.php">¿Olvidaste tu contraseña?</a>
			</p>
			<button id="crearCuentaBtn" class="btn btn-raised btn-primary" type="button">Crear Cuenta Nueva</button>
		</div>
	</form>
	
	<script>
		document.getElementById("crearCuentaBtn").addEventListener("click", function() {
			
			window.location.href = "registro.php";
		});
	</script>
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