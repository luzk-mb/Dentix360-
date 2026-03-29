<?php
include("conexion.php");

// Datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$fecha = $_POST['fecha'];

// 1️⃣ Insertar en usuarios
$sql_usuario = "INSERT INTO usuarios (rol_id, username, email, contrasenia_hash, nombre, apellido)
VALUES (3, '$correo', '$correo', '123456', '$nombre', '$apellido')";

if ($conn->query($sql_usuario) === TRUE) {

    $usuario_id = $conn->insert_id;

    // 2️⃣ Insertar en pacientes
    $sql_paciente = "INSERT INTO pacientes (usuario_id)
    VALUES ('$usuario_id')";

    if ($conn->query($sql_paciente) === TRUE) {

        $paciente_id = $conn->insert_id;

        // 3️⃣ Insertar cita
        $empleado_id = 1; // puedes cambiar luego
        $fecha_hora = $fecha . " 08:00:00";

        $sql_cita = "INSERT INTO citas (paciente_id, empleado_id, fecha_hora, motivo)
        VALUES ('$paciente_id', '$empleado_id', '$fecha_hora', 'Cita web')";

        if ($conn->query($sql_cita) === TRUE) {
            echo "✅ Cita registrada correctamente";
        } else {
            echo "Error en cita: " . $conn->error;
        }

    } else {
        echo "Error en paciente: " . $conn->error;
    }

} else {
    echo "Error en usuario: " . $conn->error;
}

$conn->close();
?>