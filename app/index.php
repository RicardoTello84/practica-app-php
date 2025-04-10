<?php
$host = 'db';
$user = 'root';
$pass = 'claveSuperSegura123';  // Aquí defines la contraseña directamente;
$db = 'miapp';

// Crear la conexión
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Fallo en la conexión: " . $conn->connect_error);
}

// Realizar la consulta
$query = "SELECT mensaje FROM mensajes";
$result = $conn->query($query);

// Verificar si la consulta tuvo éxito
if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

echo "<h1>Mensajes de la Base de Datos !!</h1>";
while ($row = $result->fetch_assoc()) {
    echo "<p>" . htmlspecialchars($row['mensaje']) . "</p>";
}

// Cerrar la conexión
$conn->close();
?>
