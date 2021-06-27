<?php
error_reporting(0);
include_once("conexion.php"); 
?>

<?php
     $sql = "SELECT idinstitucion, nombre FROM instituciones WHERE estado = 0";
     $query = mysqli_query($conn,$sql);
     while ($results[] = mysqli_fetch_array($query));
     array_pop ($results);
?>

<?php
     $sql = "SELECT idpermiso, permiso FROM permisos";
     $query = mysqli_query($conn,$sql);
     while ($results2[] = mysqli_fetch_array($query));
     array_pop ($results2);
?>

<html>
<div class="main" style="text-align: center; color:white;">
<?php
echo '<p>Usuario Conectado: '.$_SESSION['usuario'].'</p>';
?>
</div>
<head>    
		<title>Gestión de Usuarios</title>
		<meta charset="UTF-8">
        <link rel="stylesheet" media="all" href="../npm/bootstrap@3.4.1/dist/css/bootstrap.css"> 
		<link rel="stylesheet" href="style.css">
</head>

<body>
<a href="#main-content" class="visually-hidden focusable skip-link">
    Pasar al contenido principal
  </a>
  <nav id="navbar" role="banner" class="navbar navbar-default navbar-fixed-top navbar-content">
    <div class="container">
      <div class="navbar-header">
        <div class="region region-navigation">
          <a class="logo navbar-btn pull-left" href="index.php" rel="home">
            <img id="logo" src="../themes/images/LOGO_SVG_VerifiDoc.svg" alt="VerifyDoc"">
    </a>
  </div>
     <button type=" button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar-collapse" class="navbar-collapse collapse">
          <div class="region region-navigation-collapsible">
            <nav role="navigation" aria-labelledby="block-bfa-main-menu-menu" id="block-bfa-main-menu">
              <h2 class="sr-only" id="block-bfa-main-menu-menu">Navegación Principal</h2>
              <ul class="menu nav navbar-nav navbar-right">
                
                <li>
                  <a class="nav"  href="logout.php" data-drupal-link-system-path="&lt;front&gt;">Log Out</a>
                </li>
                  </ul>
              </ul>
            </nav>
<table>

<tr>
<th colspan="13" id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Buscar">
		</form>
</th>
</tr>
		
			<tr><th colspan="12"><h1>USUARIOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		    <th>ID</th>
			<th>IDPermiso</th>
            <th>Usuario</th>
            <th>Contraseña</th>
            <th>NombreApellido</th>
            <th>Email</th>
            <th>IDInstitucion</th>
            <th>Estado</th>
            <th>Foto</th>
            <th>Fecha Alta</th>
            <th>Fecha Baja</th>
            <th>Fecha Modificacion</th>
            <th>Accion</th>
			</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryusuarios = mysqli_query($conn, "SELECT idusuario,idpermiso,usuario,contrasena, nombreapellido, email, idinstitucion, estado, foto, fechaalta, fechabaja, fechamodificacion FROM usuarios where nombreapellido like '".$buscar."%'");
}
else
{
$queryusuarios = mysqli_query($conn, "SELECT idusuario,idpermiso,usuario,contrasena, nombreapellido, email, idinstitucion, estado, foto, fechaalta, fechabaja, fechamodificacion FROM usuarios ORDER BY idusuario asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryusuarios)) 
		{ 
            $image = base64_decode($mostrar['foto']);
            
            $numerofila++;    
            echo "<tr>";
            echo "<td>".$mostrar['idusuario']."</td>";
            echo "<td>".$mostrar['idpermiso']."</td>";
            echo "<td>".$mostrar['usuario']."</td>";
            echo "<td>".$mostrar['contrasena']."</td>";
            echo "<td>".$mostrar['nombreapellido']."</td>";
            echo "<td>".$mostrar['email']."</td>";
            echo "<td>".$mostrar['idinstitucion']."</td>";
            echo "<td>".$mostrar['estado']."</td>";
            echo "<td><img id=\"base64ImageForDisplay\" src=\"data:image/png;base64,".$image."\" style=\"display: block;\" onload=\"setBase64ToImage();\"/></td>";
            echo "<td>".$mostrar['fechaalta']."</td>";
            echo "<td>".$mostrar['fechabaja']."</td>";
            echo "<td>".$mostrar['fechamodificacion']."</td>";
            echo "<td style='width:26%'><a href=\"editar.php?cod=$mostrar[idusuario]\">Modificar</a> <a href=\"eliminar.php?cod=$mostrar[idusuario]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[nombreapellido]?')\">Eliminar</a></td>";           
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
<script src="b-base64-to-image.min.js"></script> 

<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST" enctype="multipart/form-data">
        <table>
		<tr><th colspan="2">Nuevo usuario</th></tr>
            <tr> 
                <td>Usuario</td>
                <td><input type="text" name="txtusuario" required></td>
            </tr>
            <tr> 
                <td>Contraseña</td>
                <td><input type="password" name="txtcontrasena" required></td>
            </tr>
            <tr> 
                <td>Nombre y Apellido</td>
                <td><input type="text" name="txtnomape" required></td>
            </tr>
            <tr> 
                <td>E-Mail</td>
                <td><input type="mail" name="txtemail" required></td>
            </tr>
            <tr> 
                <td>Institucion:</td>
    <td>
    <select name="institucion">
     <?php foreach ($results as $option) : ?>
          <option name="txtidinstitucion" value="<?php echo $option['idinstitucion']; ?>"><?php echo $option['nombre']; ?></option>
     <?php endforeach; ?>
</select>
    </td>
            </tr>


            <tr> 
                <td>Tipo de Acceso:</td>
    <td>
    <select name="acceso">
     <?php foreach ($results2 as $option2) : ?>
          <option name="txtpermiso" value="<?php echo $option2['idpermiso']; ?>"><?php echo $option2['permiso']; ?></option>
     <?php endforeach; ?>
</select>
    </td>
            </tr>

         
            <tr> 
                <td>Foto</td>
                <td>
                <p><input type="file"  accept="image/*" name="file" id="file" onchange="loadFile(event)" style="display: none;"></p>
<p><label for="file" style="cursor: pointer;">Cargar Imagen</label></p>
<p><img name="image" id="output" width="200" /></p>

<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>                
                </td>
            </tr>
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="submit" value="Upload" onClick="javascript: return confirm('¿Deseas registrar a este usuario?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
<table class="footer" style="border:none;>
<tbody style="border:none;>
<tr style="border:none;">
<td style="border:none;">
<p style="text-align: left; color:white;">Verydoc</p>
</td>
<td style="border:none;">
<p style="text-align: right; color:white;">Version Alpha</p>
</td>
</tr>
</tbody>
</table>
</html>