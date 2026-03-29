<?php
include("conexion.php");

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$fecha = $_POST['fecha'];

// Simulación simple (luego puedes mejorar esto)
$paciente_id = 1;
$empleado_id = 1;

// Convertir fecha a formato DATETIME
$fecha_hora = $fecha . " 08:00:00";

$sql = "INSERT INTO citas (paciente_id, empleado_id, fecha_hora, motivo)
VALUES ('$paciente_id', '$empleado_id', '$fecha_hora', 'Cita web - $nombre ($correo)')";

if ($conn->query($sql) === TRUE) {
    echo "Cita guardada correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>