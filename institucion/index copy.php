<?php
// error_reporting(0);
include_once("conexion.php");
?>
<html>
<head>    
		<title>Gestión de Instituciones</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" media="all" href="../npm/bootstrap@3.4.1/dist/css/bootstrap.css">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<table>
<tr>
    <td colspan ="1"><img src="../themes/images/LOGO_SVG_VerifiDoc.svg" width="120" height="80"></th>
    <td colspan ="3"><h1>GESTION DE INSTITUCIONES</h1></th>
  </tr>
<td style="background: white;" colspan="4"> </td>  
<tr>
<th colspan="4" id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Buscar">
		</form>
</th>
</tr>
			<tr><th colspan="3"><h1>Institucion</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>ID</th>
		    <th>Nombre</th>
            <th>E-Mail</th>
            <th>Acción</th>
			</tr>
<?php 
if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT idinstitucion,nombre,email FROM instituciones where estado = 0 and nombre like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT idinstitucion,nombre,email FROM instituciones where estado = 0 ORDER BY idinstitucion desc");
}
		// $numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{  //  $numerofila++;    
            echo "<tr>";
            echo "<td>".$mostrar['idinstitucion']."</td>";
            echo "<td>".$mostrar['nombre']."</td>";
            echo "<td>".$mostrar['email']."</td>";
            echo "<td style='width:26%'><a href=\"editar.php?idinstitucion=$mostrar[idinstitucion]\">Modificar</a> <a href=\"eliminar.php?idinstitucion=$mostrar[idinstitucion]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nombre]?')\">Eliminar</a></td>";           
}
?>
</table>
<script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
}
function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}
</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nueva Institucion</th></tr>
            <tr> 
                <td>Nombre Institucion</td>
                <td><input type="text" name="txtnombre" required></td>
            </tr>
            <tr> 
                <td>E-Mail</td>
                <td><input type="text" name="txtemail" required></td>
            </tr>
            <tr>
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar esta Institución?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

