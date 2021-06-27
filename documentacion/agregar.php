<?php
error_reporting(0);
include_once("conexion.php"); 
$result = mysqli_query($conn, "SELECT MAX(iddocumento)+1 as id FROM documentos");
while($mostrar = mysqli_fetch_array($result)) 
{   $mostrar['id'];
    $id=$mostrar['id'];           
}
$hash = $_POST['var2'];
$archivo = $_POST['var2'];
$nombre = $_POST['var1'];
$alumno = $_POST['idalumno'];
$tipo = $_POST['idtipo'];
mysqli_query($conn, "INSERT INTO documentos(iddocumento,documento,numerohash,archivo,idalumno,idtipo, fechaalta) VALUES('$id','$nombre','$hash',null,'$alumno','$tipo', now())");
echo "Se Proceso el Sellado Correctamente"
?>