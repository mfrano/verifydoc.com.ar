<?php 
include_once("conexion.php");
include_once("index.php");
$codigo = $_GET['idinstitucion'];
$querybuscar = mysqli_query($conn, "SELECT idinstitucion, nombre, email FROM instituciones WHERE idinstitucion=$codigo");
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['idinstitucion'];
    $nombre = $mostrar['nombre'];
    $correo = $mostrar['email'];
}
?>
<html>
<script>
function abrirform2() {
  document.getElementById("formmodificar").style.display = "flex";
}
function cancelarform2() {
  document.getElementById("formmodificar").style.display = "none";
}
</script>
<head>    
		<meta charset="UTF-8">
        <link rel="stylesheet" media="all" href="../npm/bootstrap@3.4.1/dist/css/bootstrap.css">
        <link rel="stylesheet" media="all" href="style.css">		
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Modificar Institucion</th></tr>
        <tr> 
                <td>ID</td>
                <td><input type="text" name="txtcodigo" value="<?php echo $codigo;?>" readonly></td>
            </tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
            </tr>
            <tr> 
                <td>E-Mail</td>
                <td><input type="text" name="txtcorreo" value="<?php echo $correo;?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
				<a href="index.php" onclick="cancelarform2()">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este usuario?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
<?php
	if(isset($_POST['btnmodificar']))
{
    $codigo1    = $_POST['txtcodigo'];
	$nombre1 	= $_POST['txtnombre'];
    $correo1 	= $_POST['txtcorreo'];
    $querymodificar = mysqli_query($conn, "UPDATE instituciones SET nombre='$nombre1',email='$correo1', estado='0', fechamodificacion = now() WHERE idinstitucion=$codigo1");
  	echo "<script>window.location= 'index.php' </script>";
}
?>
	