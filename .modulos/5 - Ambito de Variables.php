<?php

function testlocal(){
    $variablelocal = "solo soy visible dentro de esta funcion";
    echo  $variablelocal;
}

testlocal(); // funciono y muestra el mensaje

echo $variablelocal;  // Error, VARIABLELOCAL es inaccesible fuera de la funcion

$kernel = new Kernel;

#las mayorias de las variables tienen que tener scope local

$variableglobal = "Hola mundo";

function test() {

    global $variableglobal;
    echo $variableglobal; // Accede a la variable local
}

test(); // Imprime hola mundo
