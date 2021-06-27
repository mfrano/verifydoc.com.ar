<?php
include_once("conexion.php"); 
$result = mysqli_query($conn, "SELECT MAX(idinstitucion)+1 as id FROM instituciones");
while($mostrar = mysqli_fetch_array($result)) 
{   $mostrar['id'];
    $id=$mostrar['id'];           
}
$nombre = $_POST['txtnombre'];
$correo = $_POST['txtemail'];
mysqli_query($conn, "INSERT INTO instituciones(idinstitucion,nombre,email, estado, fechaalta, fechabaja, fechamodificacion) VALUES('$id','$nombre','$correo','0',now(), null, null)");
header("Location: index.php", true, 301);
exit();
?>
