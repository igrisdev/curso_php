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
$edad = 18 || $esInge;

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
function sumar(String $apellido)
{
    return "Johan " . $apellido;
}

echo sumar("Alvarez");

// Manipulación de cadenas
// Longitud de cadena
echo strlen($nombre);

// Cadena a mayúsculas o minúsculas
echo strtoupper($nombre);
echo strtolower($nombre);

// Remplazar partes de una cadena
echo str_replace("Johan", "Pedro", $nombre);

// Dividir una cadena en arreglos
$partes = explode(" ", $nombre);
echo $partes[0];

// Concatenar arreglos
$nuevaCadena = implode("-", $partes);
echo $nuevaCadena;

// Arreglos indexados
$frutas[0] =  "Naranja";
$frutas[] =  "Naranja x2";
echo $frutas[0];
echo $frutas[count($frutas) - 1];

// Arreglos asociativos
$persona = array("nombre" => "Pedro", "edad" => 24, "esInge" => true, "correo" => "pepe@gmail.com");
echo $persona["nombre"];

// Contar elementos de un arreglo
$contador = count($frutas);

// Ordenar arreglos
sort($frutas);

// Verificar si un valor existe en un arreglo
var_dump(in_array("Lima", $frutas)); // Devuelve true
var_dump(in_array("Limo", $frutas)); // Devuelve false

// Agregar un elemento al final de un arreglo
array_push($frutas, "Mandarina");

// Eliminar el ultimo elemento de un arreglo
array_pop($frutas);
