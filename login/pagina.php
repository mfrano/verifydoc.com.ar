<?
error_reporting(0);
session_start();
if(isset($_SESSION['nombreapellido']))
{
$usuarioingresado = $_SESSION['nombreapellido'];
echo "Bienvenido: $usuarioingresado";
}
else
{
header('location: index.php');
}
if(isset($_POST['btncerrar']))
{session_destroy();
echo "<script> location.href='index.php'; </script>";
exit;
}?>
<html>
<head>
<meta charset=utf-8 />
<style id="jsbin-css">
iframe {
  height: 100%;
  width: 100%;
  border: 2px solid #ccc;
}
  </style>
</head>
<link rel="stylesheet" href="login.css">
<body>
<form method="POST">
<input type="submit" value="Cerrar sesión" name="btncerrar" />
</form>

<table>
  <tbody>
<tr>
<td><button data-link = "../institucion/index.php">INSTITUCION</button></td>
<td><button data-link = "../documentacion/index.php">DOCUMENTACION</button></td>
<td><button data-link = "../usuarios/index.php">USUARIOS</button></td>
<td><button data-link = "../alumnos/index.php">ALUMNOS</button></td>
</tr>
  </tbody>
</table>

<iframe id = "capa"></iframe>
<script>
var botones = document.getElementsByTagName("button"),
    iframe = document.getElementById("capa"),
    sizeBotones = botones.length;
for (i = 0; i < sizeBotones; i++){
    botones[i].addEventListener("click", function(){
        iframe.src = this.getAttribute("data-link");
    }, false);
}
</script>
</body>
</html>