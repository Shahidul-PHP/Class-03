<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .text1 {
            color: orange;
            font-size: 2rem;
        }

        .text2 {
            color: red;
            font-size: 2rem;
        }

        .text3 {
            color: green;
            font-size: 2rem;
        }
    </style>
</head>

<body>

    <?php
    // $text = 'W3resource';

    // echo $text.'<br>';

    // echo trim($text,"Wres");



    // function fname($test){
    //     for($i=2; $i <= 40; $i+=3){
    //         echo $i . "loop and function test". "<br>";

    //         if($i == 30){
    //             echo $i."stop the loop here !!";
    //          break;   
    //         }
    //     }
    // }

    // fname('ajmot');

    $n = 168956;
    $count = strlen($n);

    if ($count == 8) {
        echo "<p class='text3'>Your Password is Correct</p>";
    } elseif ($count < 8) {
        echo "<p class='text2'>Password should at least 8 Character !!</p>";
    } elseif ($count > 8) {
        echo "<p class='text1'>Your Password is Cross the Limit . Password should at least 8 Character</p>";
    }

    ?>

</body>
</html>