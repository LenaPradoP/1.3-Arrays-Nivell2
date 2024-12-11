<?php 
declare(strict_types = 1);

echo "S1.T3.N2 Ejercicio 1" .PHP_EOL;
echo '' .PHP_EOL;

$numbers1 = [2, 8, 7, 9, 3];
$numbers2 = [9, 6, 4, 5, 7];

$intersection = array_intersect($numbers1, $numbers2);
echo 'La intersección de los arrays es: '. implode(', ', $intersection) . '.' .PHP_EOL;

$merge = array_values(array_unique(array_merge($numbers1, $numbers2)));
echo 'La mezcla de los arrays es: '. implode(', ', $merge) . '.' .PHP_EOL;
echo '' .PHP_EOL;

echo "S1.T3.N2 Ejercicio 2" .PHP_EOL;
echo '' .PHP_EOL;

$students = [
    'Judit' => $grades = [8, 4, 6, 10, 2],
    'Thomas' => $grades = [9, 5, 7, 8, 3],
    'Petra' => $grades = [0, 3, 9, 4, 6],
    'Carles' => $grades = [2, 9, 5, 10, 1]
];

foreach($students as $name=>$grades){
    echo "Las notas de $name son: " . implode(', ', $grades) . '.' .PHP_EOL;
}
echo '' .PHP_EOL;
echo calculateAvegare($students);

function calculateAvegare(array $students) : void {
    $gradesTotal = 0.0;
    $factorTotal = 0.0;

    foreach ($students as $name=>$grades){
        $gradesTotal += array_sum($grades);
        $factorTotal += count($grades);
        echo 'La nota media de ' . $name . ' es: ' . array_sum($grades)/count($grades)
         . '.' .PHP_EOL; 
        }

    echo '' .PHP_EOL;
    echo 'La nota media de la clase es: ' . $gradesTotal/$factorTotal . '.';
    }

?>