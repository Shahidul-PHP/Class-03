<?php 

echo '<title>Factorial in PHP</title>';

echo '<h2>Find Factorial Using PHP</h2>';


$FactorialNeed = 50;
$end = 1;

for($x = $FactorialNeed; $x >= 1; $x--){
    $end = $end * $x;
    echo "Big to small number = " .$x . '<br>';
}

echo '<br>';


echo "Factoirial of ". $FactorialNeed." is = ".$end;


?>