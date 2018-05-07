<?php
require("conexion.proc.php");
						// LO DE ARRIBA SOBRA
$sql = "SELECT * FROM tbl_usuarios";
$result = $conexion->query($sql);


while($row = $result->fetch_array(MYSQLI_ASSOC)){
	$data[] = $row;
}


$results = ["sEcho" => 1,
"iTotalRecords" => count($data),
"iTotalDisplayRecords" => count($data),
"aaData" => $data ];


echo json_encode($results);


?>