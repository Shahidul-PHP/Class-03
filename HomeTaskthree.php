<?php 

echo '<title>CIT 2205 Home Task 03</title>';


for($i = 0; $i <= 10; $i++) {
    for($j=5-$i; $j >= 1; $j--){
        echo "* ";
    }
    echo '<br>';
}

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        echo '* ';
    }
    echo '<br>';
}

echo '<br>';

for ($i = 1; $i <= 15; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo '*';
    }
    echo '<br>';
}













?>