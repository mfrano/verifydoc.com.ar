<?php
include_once("conexion.php");
$codalumno = $_GET['codalumno'];
mysqli_query($conn, "UPDATE alumnos SET estado = '1', fechabaja = NOW() WHERE idalumno=$codalumno");
header("Location:index.php");
?>