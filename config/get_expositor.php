<?php

include 'conexion.php'; 


if (isset($_GET['id'])) {
    $id = intval($_GET['id']);  
} else {
   
    echo json_encode(['error' => 'ID no proporcionado']);
    exit;  
}


$sql = "SELECT * FROM expositores WHERE id_expositor = ?";
$stmt = $conexion->prepare($sql);

if ($stmt === false) {
 
    echo json_encode(['error' => 'Error en la preparación de la consulta: ' . $conexion->error]);
    exit; 
}


$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$data = $result->fetch_assoc();


if ($data) {
    header('Content-Type: application/json');
    echo json_encode([
        'nombre' => $data['Nombre'],
        'logo' => $data['Logo'],
        'categoria' => $data['categoria']
        'Web' => $data['Web']
    ]);
} else {
    header('Content-Type: application/json');
    echo json_encode([]);
}


$stmt->close();
$conexion->close();
?>