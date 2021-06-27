<?php
include('config.php');
session_start();
if (isset($_POST['login'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $query = $connection->prepare("SELECT usuario, contrasena FROM usuarios WHERE usuario=:usuario");
    $query->bindParam("usuario", $usuario, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo '<p class="error">usuario password combination is wrong!1</p>';
    } else {
        /*if (password_verify($contrasena, $result['contrasena'])) {*/
           $_SESSION['usuario'] = $result['usuario'];
		   header("location: ../documentacion/index.php");
       /*     echo '<p class="success">Congratulations, you are logged in!</p>';*/
       /* } else {
            echo '<p class="error">Username password combination is wrong!2</p>';
        }*/
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="all" href="../npm/bootstrap@3.4.1/dist/css/bootstrap.css">
    <link rel="stylesheet" media="all" href="main.css"> <!-- original -->
	<link rel="stylesheet" media="all" href="util.css"> <!-- original -->

</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-26">
						VerifyDoc
					</span>
					<span class="login100-form-title p-b-48">
						<i class="zmdi zmdi-font"></i>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Un Email Correcto es: a@b.c">
						<input class="input100" type="text" name="usuario">
						<span class="focus-input100" data-placeholder="Usuario"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Ingresar Contraseña">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="contrasena">
						<span class="focus-input100" data-placeholder="Contraseña"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" name="login" class="login100-form-btn">
								Ingresar
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							¿No tienes una Cuenta?
						</span>

						<a class="txt2" href="#">
							Registrate
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
</body>