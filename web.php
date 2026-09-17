<?php
// Formularios y manejo de solicitudes HTTP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];
    echo "Nombre: " . $nombre . "<br>" . "Email: " . $email;
} else {
    echo "Por favor, rellena el formulario <br><br>";
}

// Cookies
setcookie("usuario", "Juan", time() + 5, "/");

if (isset($_COOKIE["usuario"])) {
    echo "Usuario registrado: " . $_COOKIE["usuario"];
} else {
    echo "Usuario no registrado <br><br>";
}

// Sesión
session_start();

$_SESSION["usuario"] = "Juan Carlos";

echo "Usuario registrado: " . $_SESSION["usuario"];

?>

<?php
// Autenticación y Autorización de usuarios
$usuarios = array("user1" => "pass1", "user2" => "pass2");

function verificarInicioSession(string $usuario, string $password, $usuarios)
{
    return isset($usuarios[$usuario]) && $password == $usuarios[$usuario];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['usuario']) && !isset($_POST['password'])) {
        $error = "Por favor, rellena el formulario";
        exit;
    }

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    if (verificarInicioSession($usuario, $password, $usuarios)) {
        $_SESSION['usuario'] = $usuario;
        header('Location: paginaPrincipal.php');
        exit;
    } else {
        $error = "Usuario o contraseña incorrectos";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <h2>Inicio de sesión</h2>
    <form method="post" action="">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required />
        <br />
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required />
        <br />
        <input type="submit" value="Entrar" />
    </form>
</body>

</html>