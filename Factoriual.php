<?php 

echo '<title>Factorial in PHP</title>';

echo '<h2>Find Factorial Using PHP</h2>';


$fact_want = 6;
$endNum = 1;

for($i = $fact_want; $i >= 1; $i--){
    $endNum = $endNum * $i;
    echo $endNum .'<br>';
}

echo '</br>';

echo $endNum;


















?>