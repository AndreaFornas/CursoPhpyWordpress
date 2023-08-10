<?php

$i = 2;
while ($i <= 10) {

    echo $i++ ."<br>";

}
$numero = 9;
$pares = 0;
$impares = 0;

while ($numero > 0){
    if ($numero % 2 == 0){
        echo "<br> El $numero es un numero PAR <br>";
        $pares++;
    }else {
        echo "<br> El $numero es un numero IMPAR <br>";
        $impares++;
    }

    $numero--;
}

echo "<br>cantidad de numeros pares: $pares <br>";
echo "<br>cantidad de numeros pares: $impares <br>";


//for


for ($i = 3; $i <= 5; $i++){
    // inicializacion: $i = 3
    //Condicion: $i <=5;
    //Actualizacion: $i++
    echo "<br>";
    echo $i;
}

//ejemplo de bucle for con BREAK

$i = 1; 
for ($i = 1; $i <= 10; $i++){
    // inicializacion: $i = 3
    //Condicion: $i <=5;
    //Actualizacion: $i++
    echo "<br>Hola<br>";
    echo $i;

    if ($i == 5){
        break;
    }
}


?>