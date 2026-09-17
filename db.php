<?php
// conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ejemplo_db";

// crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("No se pudo conectar a la base de datos: " . $conn->connect_error);
}

echo "Conectado a la base de datos: <br><br>";

// consulta
$sql = "SELECT id, nombre, email from usuarios";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " Nombre: " . $fila["nombre"] . " Email: " . $fila["email"] . "<br>";
    }
} else {
    echo "No hay resultados";
}

// insertar
$sqlInsert = "INSERT INTO usuarios (nombre, email) VALUES ('Pedro', 'pepe@gmail.com')";
if ($conn->query($sqlInsert) == TRUE) {
    echo "Registrado correctamente <br>";
} else {
    echo "Error al registrar";
}

// actualizar
$sqlUpdate = "UPDATE usuarios SET nombre='Fernando' WHERE id=4";
if ($conn->query($sqlUpdate) == TRUE) {
    echo "Actualizado correctamente <br>";
} else {
    echo "Error al actualizar: " . $conn->error;
}

// eliminar
$sqlDelete = "DELETE FROM usuarios WHERE id=4";
if ($conn->query($sqlDelete) == TRUE) {
    echo "Eliminado correctamente <br>";
} else {
    echo "Error al eliminar: " . $conn->error;
}

echo "<br><br>";

// ataque de inyección de SQL
$nombre = "Pedro";
// $sql = "SELECT * FROM usuarios WHERE nombre='" . $nombre . "'";
$sql = "SELECT * FROM usuarios WHERE nombre=''OR '1' = '1'";

$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "ID: " . $fila["id"] . " Nombre: " . $fila["nombre"] . " Email: " . $fila["email"] . "<br>";
    }
}

// evitar ataques de inyección de SQL
// valor para buscar
$nombre = "Pedro";

// Consulta con valor para buscar
$sql = "SELECT * FROM usuarios WHERE nombre = ?";

// Preparar sentencia
$stmt = $conn->prepare($sql);
if ($stmt === false) {
    echo "Error al preparar sentencia: " . $conn->error;
}

// Bind de parameters y ejecución de sentencia
$stmt->bind_param("s", $nombre);
$stmt->execute();

// Obtener resultados
$resultado = $stmt->get_result();



// cerrar conexión
$conn->close();
