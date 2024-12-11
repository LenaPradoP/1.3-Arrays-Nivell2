<?php 
declare(strict_types = 1);

echo "S1.T3.N2 Ejercicio 1" .PHP_EOL;

$numbers1 = [2, 8, 7, 9, 3];
$numbers2 = [9, 6, 4, 5, 7];

$intersection = array_intersect($numbers1, $numbers2);
echo 'La intersección de los arrays es: '. implode(',', $intersection) . '.' .PHP_EOL;

$merge = array_values(array_unique(array_merge($numbers1, $numbers2)));
echo 'La mezcla de los arrays es: '. implode(',', $merge) . '.' .PHP_EOL;
?>