<?php
// Variable y tipos de datos
// Enteros
$edad = 24;
$precio = 19.342;
$nombre = "Johan Alvarez";
$esInge = true;
$frutas = array("Lima", "Manzana");
$dirección = null;

// Operadores y expresiones
// Aritméticos + - * /
$suma = 5 + 3;
echo $suma;
// Asignación = += -= /= .=
$asignación = 12;
// Comparación == === != !== <> <= >=
$resultado = $edad < 23;
echo $resultado;

// Lógicos && || !
$edad < 18 || $esInge;

// Condicionales
if ($edad > 18) {
    echo "Es mayor de edad";
} else {
    echo "Eres menos de edad";
}

// Iteraciones
foreach ($frutas as $fruta) {
    echo $fruta . " ";
}

// Funciones
function sumar($apellido)
{
    return "Johan " . $apellido;
}

echo sumar("Alvarez");

// Manipulación de cadenas
