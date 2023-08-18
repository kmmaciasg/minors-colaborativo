<!DOCTYPE html>
<html lang="es">
<head>
	<title>Registro Usuario</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>

<body>
<form action="procesar_registro.php" method="POST" autocomplete="off" class="full-box newForm" onsubmit="return validateForm();">
 <div class="container">
        <p class="text-center text-muted text-uppercase">Crear una cuenta</p>
               
        <div class="row">
            <div class="col-md-6">
                <div class="form-group label-floating">
                    <label class="control-label" for="UserName">Nombre Completo</label>
                    <input class="form-control" id="UserName" name="user_name" type="text">
                    <p class="help-block">Ingresa tu nombre</p>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label" for="UserEmail">Correo Electrónico</label>
                    <input class="form-control" id="UserEmail" name="user_email" type="email">
                    <p class="help-block">Ingresa tu correo electrónico</p>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label" for="cel">Numero de Telefono</label>
                    <input class="form-control" id="cel" name="cel" type="number">
                    <p class="help-block">Ingresa tu numero de telefono</p>
                </div>
            </div>
            <div class="col-md-6" style="margin-left: 20px;">
                <div class="form-group label-floating">
                    <label class="control-label" for="asignacion">Seleccione su asignación</label>
                    <select class="form-control" id="asignacion" name="asignacion">
                        <option value="">Seleccione su asignacion</option>
                        <option value="asignacion1">Soporte B.A</option>
                        <option value="asignacion2">Asistente de Proyecto</option>
                        <option value="asignacion3">Seguridad</option>
                        <option value="asignacion4">Encargado de Obra</option>
                        <!-- Agrega más opciones según sea necesario -->
                    </select>
                </div>
                <div class="form-group label-floating">
                    <label class="control-label" for="departamento">Seleccione su departamento</label>
                    <select class="form-control" id="departamento" name="departamento">
                        <option value="">Seleccione un departamento</option>
                        <?php
                        $url = "https://www.datos.gov.co/resource/xdk5-pm3f.json";
                        $departamentos_json = file_get_contents($url);
                        $departamentos = json_decode($departamentos_json, true);
                        $departamentos_unicos = array();
                        foreach ($departamentos as $departamento) {
                            $nombre_departamento = $departamento["departamento"];
                            if (!in_array($nombre_departamento, $departamentos_unicos)) {
                                $departamentos_unicos[] = $nombre_departamento;
                                echo '<option value="' . $nombre_departamento . '">' . $nombre_departamento . '</option>';
                            }
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-6" style="margin-left: 200px;">
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
            <div class="form-group text-center">
                <input type="submit" value="Registrarse" class="btn btn-raised btn-primary">
            </div>
            <p class="text-center">
                <a href="index.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
            </p>
        </div>
    </div>
</div>

</form>

</body>


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