<?php
include_once("conexion.php");
 
$cod = $_GET['cod'];
 
mysqli_query($conn, "DELETE FROM usuarios WHERE cod=$cod");
 
header("Location:index.php");

?>