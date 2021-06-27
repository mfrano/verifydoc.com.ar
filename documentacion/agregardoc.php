<?php 
include_once("conexion.php");
include_once("index.php");
$codigo = $_GET['cod'];
$querybuscar = mysqli_query($conn, "SELECT * FROM documentos WHERE iddocumento=$codigo and estado = 0");
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['iddocumento'];
    $documento = $mostrar['documento'];
}
?>
<html>
<head>    
		<title>verydoc</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formsubir">
  <form method="POST" class="contenedor_popup" enctype="multipart/form-data">
        <table>
		<tr><th colspan="2">Subir Archivo</th></tr>
            <tr> 
                <td>Nombre</td>
                <td><input type="text" name="txtdocumento" value="<?php echo $documento;?>" required></td>
            </tr>
            <tr>
            <input type="file" name="file" id="file">
            <td colspan="2"><label for="file" style="cursor: pointer;">Cargar Archivo</label></td>
            </tr>
            <td colspan="2">
			<a href="index.php">Cancelar</a>
			<input type="submit" name="btnagregar" value="Agregar" onClick="javascript: return confirm('¿Deseas modificar el documento?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>
<?php
if(isset($_POST['btnagregar']))
{
    $file = file_get_contents($_FILES['file']['tmp_name']);
    $file64 = base64_encode($file);    
    $querymodificar = mysqli_query($conn, "UPDATE documentos SET archivo='$file64' WHERE iddocumento=$codigo");
  	echo "<script>window.location= 'index.php' </script>";
}
?>