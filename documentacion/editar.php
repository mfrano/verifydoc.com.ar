<?php 
include_once("conexion.php");
include_once("index.php");
$codigo = $_GET['cod'];
$querybuscar = mysqli_query($conn, "SELECT * FROM documentos WHERE iddocumento=$codigo and estado = 0");
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['iddocumento'];
    $documento = $mostrar['documento'];
    $detalle = $mostrar['detalle'];

}
?>
<html>
<head>    
		<title>verydoc</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar Documento</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtdocumento" value="<?php echo $documento;?>" required></td>
            </tr>
            <tr> 
                <td>Detalle</td>
                <td><input type="text" name="txtdetalle" value="<?php echo $detalle;?>" required></td>
            </tr>
            <tr>
                <td colspan="2">
				<a href="index.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar el documento?');">
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
    $codigo;
	$documento1 = $_POST['txtdocumento'];
    $detalle1 	= $_POST['txtdetalle'];
    $querymodificar = mysqli_query($conn, "UPDATE documentos SET documento='$documento1',detalle='$detalle1',fechamodificacion=now() WHERE iddocumento=$codigo");
  	echo "<script>window.location= 'index.php' </script>";
}
?>
	