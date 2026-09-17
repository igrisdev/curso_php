<?php
function calcularArea(int $base, int $alto) {
    return $base * $alto;
}

echo calcularArea(5, 10);
echo "<br>";

function testCalcularArea() {
    assert(calcularArea(5, 10) == 50);
    echo "Test 1 calcularArea exitoso <br>";
    assert(calcularArea(10, 5) == 50);
    echo "Test 2 calcularArea exitoso <br>";
    assert(calcularArea(5, 5) == 25);
    echo "Test 3 calcularArea exitoso <br>";
}

testCalcularArea();