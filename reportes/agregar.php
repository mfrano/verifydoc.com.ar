<?php
include_once("conexion.php"); 
$result = mysqli_query($conn, "SELECT MAX(iddocumento)+1 as id FROM documentos");
while($mostrar = mysqli_fetch_array($result)) 
{   echo $mostrar['id'];
    echo $id=$mostrar['id'];           
}
$hash = $_POST['var2'];
$archivo = $_POST['var2'];
$nombre = $_POST['var1'];
$alumno = $_POST['idalumno'];
// Obtain the file content (add error handling here...)
// $contents = file_get_contents($_FILES['fileUpload']['tmp_name']);
// Escape all special characters
// $contents = mysql_real_escape_string($contents)
// Do the insert

/*$contents = file_get_contents($_FILES['file']['tmp_name']);
$contents2 = base64_encode($contents);*/

mysqli_query($conn, "INSERT INTO documentos(iddocumento,documento,numerohash,ruta,idalumno) VALUES('$id','$nombre','$hash',null,'$alumno')");
?>