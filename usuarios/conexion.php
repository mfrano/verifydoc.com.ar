<?php
//$conn = new mysqli("pdb28.awardspace.net","3809023_firmado","unlz1234","3809023_firmado");
//$conn = new mysqli("3809023_firmado","root","","localhost");
$conn = new mysqli("3809023_prueba","root","","localhost");
	if($conn->connect_errno)
	{
		echo "No hay conexión: (" . $conn->connect_errno . ") " . $conn->connect_error;
	}
?>