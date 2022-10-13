<?php 

echo '<title>Namta using Loop</title>';

// $NamtaChai = 5.6;

// for($a=1; $a <= 10; $a++){
//     echo $NamtaChai.' X '.$a .' = '.$NamtaChai*$a .'<br>';
// }


$NamtaIWant;
$NamtaStartNumber;

for($NamtaIWant=2; $NamtaIWant <= 10; $NamtaIWant++){
    for($NamtaStartNumber=1; $NamtaStartNumber <= 10; $NamtaStartNumber++){
        echo $NamtaIWant.' X '.$NamtaStartNumber.' = '. $NamtaIWant * $NamtaStartNumber.'<br>'; 
    }
    echo '<br>';
}
?>

