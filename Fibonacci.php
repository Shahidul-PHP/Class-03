<?php 

echo '<title>Fibonacchi series Finding</title>';

echo '<h3>Fibonacchi series Finding -</h3>';


// $n1 = 0;
// $n2 = 1;


// for($i = 1; $i <= 9; $i++){
//     $n3 = $n1 + $n2;

//     $n1 = $n2;  // 0 = 1
//     $n2 = $n3;  // 1 = 1

//     echo $n3 . '<br>';

// }

// echo '<br>';

// echo  "Fibonacci Result is = ".$n3;


$a = 0;
$b = 1;

for($i = 1; $i <= 8; $i++){
    $c = $a + $b;

    $a = $b;
    $b = $c;

    echo $c."<br>";
}

echo '<br>';
echo $c;
























































































?>