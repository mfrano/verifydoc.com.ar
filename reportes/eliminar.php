<?php
include_once("conexion.php");
$cod = $_GET['cod'];
mysqli_query($conn, "UPDATE documentos set estado = 1, fechabaja=now() WHERE iddocumento=$cod");
header("Location:index.php");
?>