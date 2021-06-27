<?php
include_once("conexion.php"); 
/*$query = "SELECT month, COUNT(*) count FROM customer WHERE month='march' GROUP BY month";*/
$query = "SELECT tipodoc.descripcion, count(doc.iddocumento) AS docs FROM documentos AS doc INNER JOIN tipodocumento AS tipodoc ON doc.idtipo = tipodoc.idtipo GROUP BY tipodoc.descripcion";
if ($stmt = $conn->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($descripcion, $docs);            
    $labels = array();
    $data = array();
    while ($stmt->fetch()) {
        $labels[] = $descripcion;
        $data[] = $docs;
    }
        $stmt->close();
}
$datasets = array('label'=>"Documentos por Tipo",'data'=> $data);
$data = array('labels'=>$labels, 'datasets'=> array($datasets));
echo json_encode($data);
?>