<?php
// Seguridad en PHP
// Validación de entradas y salidas
$email = "bebe";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email válido";
} else {
    echo "Email no válido";
}

echo "<br><br>";

$nombre = "<script>alert('XSS')</script>";
echo htmlspecialchars($nombre);

echo "<br><br>";

// Cifrar contraseña
$contraseña = "contraseña123";
$cifrada = password_hash($contraseña, PASSWORD_BCRYPT);

echo $cifrada;

