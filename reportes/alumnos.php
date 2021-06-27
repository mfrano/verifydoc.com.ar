<?php
include_once("conexion.php"); 
/*$query = "SELECT month, COUNT(*) count FROM customer WHERE month='march' GROUP BY month";*/
$query = "SELECT ins.nombre AS institucion, COUNT(alu.idalumno) AS cant_doc FROM alumnos AS alu INNER JOIN instituciones AS ins ON alu.idinstitucion = ins.idinstitucion GROUP BY ins.nombre";
if ($stmt = $conn->prepare($query)) {
    $stmt->execute();
    $stmt->bind_result($institucion, $cant_doc);            
    $labels = array();
    $data = array();
    while ($stmt->fetch()) {
        $labels[] = $institucion;
        $data[] = $cant_doc;
    }
        $stmt->close();
}
$datasets = array('label'=>"Alumnos por Institución",'data'=> $data);
$data = array('labels'=>$labels, 'datasets'=> array($datasets));
echo json_encode($data);
?>