<?php 
echo "<title>php loop practice class - 03</title>";

$c = 5;

for($a=0; $a <= 8; $a++){
    for($b = $c - $a; $b >= 1; $b--){
        echo "&nbsp;&nbsp;&nbsp;";
        echo "* ";
    }
    echo '<br>';
}

for ($i = 0; $i <= 5; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "&nbsp;&nbsp;&nbsp;";
        echo "&nbsp;* ";
    }
    echo "<br>";
}




for ($a = 5; $a >= 1; $a--) {
    if ($a % 2 != 0) {
        for ($b = 5; $b >= $a; $b--) {
            echo "* ";
        }
        echo "<br>";
    }
}
for ($a = 2; $a <= 5; $a++) {
    if ($a % 2 != 0) {
        for ($b = 5; $b >= $a; $b--) {
            echo "* ";
        }
        echo "<br>";
    }
}

//

for ($i = 0; $i <= 6; $i++) {
    for ($k = 6; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}
for ($i = 5; $i >= 1; $i--) {
    for ($k = 6; $k >= $i; $k--) {
        echo "  ";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "*  ";
    }
    echo "<br>";
}





?>