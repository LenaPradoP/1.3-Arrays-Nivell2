<?php 
declare(strict_types = 1);

echo "S1.T3.N2 Ejercicio 1" .PHP_EOL;

$numeros1 = array (2, 8, 7, 9, 3);
$numeros2 = array (9, 6, 4, 5, 7);

$numerosComunes = array_intersect($numeros1, $numeros2);

echo "La intersección de los dos arrays es: ".PHP_EOL;
print_r($numerosComunes);

$numeros3 = array_merge($numeros1, $numeros2);
print_r($numeros3);


/*
- Exercici 1

Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:
    La intersecció dels dos arrays (nombres en comú)
    La mescla dels dos arrays.

*/

/* 
- Exercici 2

Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada alumne. 
Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, 
ens mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la classe sencera.*/



?>