<?php
include_once("conexion.php"); 
$result = mysqli_query($conn, "SELECT MAX(idalumno)+1 as id FROM alumnos");
while($mostrar = mysqli_fetch_array($result)) 
{   $mostrar['id'];
    $id=$mostrar['id'];           
}
$nombre = $_POST['txtnomape'];
$email = $_POST['txtemail'];
$institucion = $_POST['Institucion'];
$dni = $_POST['txtdni'];
mysqli_query($conn, "INSERT INTO alumnos(idalumno,dni,nombreapellido,email,idinstitucion, fechaalta) VALUES('$id','$dni','$nombre','$email','$institucion', now())");
header("Location: index.php", true, 301);
exit();
?>