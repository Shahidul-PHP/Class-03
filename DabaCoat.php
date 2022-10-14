<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cheese Board Using Loop</title>
</head>

<body>
    <center>
        <h2>Create a Chese Board By PHP Loop</h2>
    </center>

    <center>
        <table cellpadding="0" cellspacing="0" border="5">
            <?php
                for($row=1; $row <= 8; $row++){
                    echo '<tr>';
                        for($col=1; $col <= 8; $col++){
                            $total = $row + $col;
                            if($total % 2 == 0){
                                 echo '<td width="50" height="50" bgcolor="black"></td>';
                            }else{
                                echo '<td width="50" height="50" bgcolor="white"></td>';
                            }
                        }
                    echo '</tr>';
                }
            ?>
        </table>
    </center>

</body>
</html>