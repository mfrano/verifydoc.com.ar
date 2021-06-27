<?php
include_once("conexion.php");
include_once("index.php");
$codigo = $_GET['cod'];
$querybuscar = mysqli_query($conn, "SELECT idalumno, nombreapellido, email, idinstitucion FROM alumnos WHERE idalumno=$codigo");
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $codigo = $mostrar['idalumno'];
    $nombre = $mostrar['nombreapellido'];
    $correo = $mostrar['email'];
	$idinstitucion = $mostrar['idinstitucion'];
}
?>
<html>
<head>    
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar usuario</th></tr>
		     <tr> 
                <td>ID</td>
                <td><input type="hidden" name="txtcodigo" value="<?php echo $codigo;?>" required ></td>
            </tr>
            <tr> 
                <td>Nombre y Apellido</td>
                <td><input type="text" name="txtnombre" value="<?php echo $nombre;?>" required></td>
            </tr>
            <tr> 
                <td>E-Mail</td>
                <td><input type="text" name="txtcorreo" value="<?php echo $correo;?>" required></td>
            </tr>
            <tr> 
                <td>Institucion:</td>
    <td>
    <select name="idinstitucion1">
     <?php foreach ($results as $option) : ?>
          <option name="txtidinstitucion" value="<?php echo $option['idinstitucion']; ?>"><?php echo $option['nombre']; ?></option>
     <?php endforeach; ?>
</select>
    </td>
            </tr>
            <tr>
				
                <td colspan="2">
				<a href="index.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este Alumno?');">
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
    $codigo1 = $_POST['txtcodigo'];
	$nombre1 	= $_POST['txtnombre'];
    $correo1 	= $_POST['txtcorreo'];
    $institucion1 	= $_POST['idinstitucion1'];
    $querymodificar = mysqli_query($conn, "UPDATE alumnos SET nombreapellido='$nombre1',email='$correo1',idinstitucion='$institucion1' WHERE idalumno=$codigo1");
  	echo "<script>window.location= 'index.php' </script>";
}
?>
	