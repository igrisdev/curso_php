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

// Programación orientada a objetos
// Clases
class Automóvil
{
    public String $marca;
    public String $modelo;
    public String $color;

    function __construct(String $marca, String $modelo, String $color)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    function mostrar()
    {
        echo "Marca: " . $this->marca;
        echo "Modelo: " . $this->modelo;
        echo "Color: " . $this->color;
    }

    function arrancar()
    {
        echo "Arrancando automóvil";
    }
}

$miAuto = new Automóvil("Volkswagen", "Golf", "Azul");
$miAuto->mostrar();
$miAuto->arrancar();

// Herencia
// Clases Padre
class Animal
{
    public String $nombre;
    public int $edad;

    public function __construct(String $nombre, int $edad)
    {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function comer()
    {
        echo "Comiendo " . $this->nombre;
    }
}

// Clase Hija
class Ave extends Animal
{
    public String $tipoPluma;

    public function __construct(String $nombre, int $edad, String $tipoPluma)
    {
        parent::__construct($nombre, $edad);

        $this->tipoPluma = $tipoPluma;
    }

    public function volar()
    {
        echo "Volando " . $this->tipoPluma;
    }
}

$perico = new Ave("Perico", 3, "Perico");
$perico->comer();
$perico->volar();

// Polimorfismo

Class Motor {
    protected String $marca;

    public function __construct(string $marca) {
        $this->marca = $marca;
    }

    public function arrancar() {
        echo $this->marca . " arrancando de alguna manera";
    }
}

class Gol extends Motor {
    public function arrancar() {
        echo $this->marca . " arrancando de gol";
    }
}