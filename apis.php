<?php
// consumir API REST
// url del endpoint
$url = "https://reqres.in/api/users?page=2";

// inicializar una sesión con cURL
$ch = curl_init($url);

// configurar curl para mostrar la respuesta
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// ejecutar la petición
$resultado = curl_exec($ch);

// cerrar la sesión
curl_close($ch);

// decodificar el resultado
$data = json_decode($resultado, true);

// mostrar el resultado
foreach ($data['data'] as $usuario) {
    echo "ID: " . $usuario['id'] . "<br>";
    echo "Nombre: " . $usuario['first_name'] . " " . $usuario['last_name'] . "<br>";
    echo "Email: " . $usuario['email'] . "<br>";
}

// crear una api
// indicar que el contenido es JSON
header('Content-Type: application/json');

// simular una db con un array de mensajes
$mensajes = [
    ["id" => 1, "mensaje" => "Hola"],
    ["id" => 2, "mensaje" => "Adios"],
    ["id" => 3, "mensaje" => "Bienvenido"]
];

// verificar si se solicita un mensaje específico
if (isset($_GET['id'])) {
    // filtrar el array de mensajes
    $filtered = array_filter($mensajes, function ($msg) {
        return $msg['id'] == $_GET['id'];
    });

    if (count($filtered) > 0) {
        echo json_encode(array_shift($filtered));
    } else {
        http_response_code(404);
        echo json_encode(["error" => "No se encontró el mensaje"]);
    }
} else {
    // devolver todos los mensajes
    echo json_encode($mensajes);
}
