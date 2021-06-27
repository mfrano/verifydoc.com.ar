<?php
    include_once("conexion.php"); 
    $result = mysqli_query($conn, "SELECT MAX(idusuario)+1 as id FROM usuarios");
    while($mostrar = mysqli_fetch_array($result)) 
    {   echo $mostrar['id'];
        echo $id=$mostrar['id'];           
    }
    $usuario 	= $_POST['txtusuario'];
    $contrasena	= $_POST['txtcontrasena'];
	$nombre 	= $_POST['txtnomape'];
    $correo 	= $_POST['txtemail'];
    $institucion = $_POST['institucion'];
    $acceso = $_POST['acceso'];
    $file = file_get_contents($_FILES['file']['tmp_name']);
    $image_base64 = base64_encode($file);
    mysqli_query($conn, "INSERT into usuarios(idusuario, idpermiso, usuario, contrasena, nombreapellido, email, idinstitucion, estado, foto, fechaalta) VALUES ('$id','$acceso','$usuario','$contrasena','$nombre','$correo','$institucion','0','$image_base64',NOW())") or die($mysqli->error);
  /*  header("Location:index.php");*/
?>