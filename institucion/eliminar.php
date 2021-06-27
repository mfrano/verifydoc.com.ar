<?php
include_once("conexion.php");
$cod = $_GET['idinstitucion'];
mysqli_query($conn, "UPDATE instituciones SET estado = '1', fechabaja =now() WHERE idinstitucion=$cod");
header("Location:index.php");
?>