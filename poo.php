<?php
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

class Motor
{
    protected String $marca;

    public function __construct(string $marca)
    {
        $this->marca = $marca;
    }

    public function arrancar()
    {
        echo $this->marca . " arrancando de alguna manera";
    }
}

class Gol extends Motor
{
    public function arrancar()
    {
        echo $this->marca . " arrancando de gol";
    }
}

class Volkswagen extends Motor
{
    public function arrancar()
    {
        echo $this->marca . " arrancando x2 ";
    }
}

$vw = new Volkswagen("Volkswagen");
$vw->arrancar();
$gol = new Gol("Gol");
$gol->arrancar();

// Interfaces
interface Pago
{
    public function procesarPago(int $monto);
}

class PagoTarjeta implements Pago
{
    public function procesarPago(int $monto)
    {
        echo "Procesando pago con tarjeta de " . $monto;
    }
}

class PagoPaypal implements Pago
{
    public function procesarPago(int $monto)
    {
        echo "Procesando pago con Paypal de " . $monto;
    }
}

function procesarPago(Pago $pago, int $monto)
{
    $pago->procesarPago($monto);
}

$tarjeta = new PagoTarjeta();
$paypal = new PagoPaypal();
procesarPago($tarjeta, 100);
procesarPago($paypal, 200);

// Clases abstractas

abstract class Vegetal
{
    abstract public function comer();
}

class Alga extends Vegetal
{
    public function comer()
    {
        echo "Comiendo ave";
    }
}

// Traits
trait Logger
{
    public function log($msg)
    {
        echo date('Y-m-d H:i:s') . " : " . $msg . "<br>";
    }
}

class Libro
{
    use Logger;

    public function crear($titulo)
    {
        $this->log("Creando libro : $titulo");
    }
}

$libro = new Libro();
$libro->crear("El Señor de los Anillos");

// Namespaces
// namespace Usuarios;
// class Database
// {
//     public function conectar()
//     {
//         echo "Conectando a la base de datos usuarios";
//     }
// }

// namespace Productos;
// class Database
// {
//     public function conectar()
//     {
//         echo "Conectando a la base de datos productos";
//     }
// }


// Manejo dea excepciones

function registrarUsuario(int $edad2, String $nombre2)
{
    if ($edad2 < 18) {
        throw new Exception("Debes ser mayor de edad");
    } else {
        echo "Registrando usuario " . $nombre2 . " con edad " . $edad2;
    }
}

try {
    registrarUsuario(16, "Pedro");
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "<br>";
}
