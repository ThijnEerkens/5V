<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FIFA Wereldranglijst</title>
    </head>
    <body>
        <h1>FIFA Wereldranglijst</h1>
<?php

    $fifa = array( "Spanje"
                 , "Argentinië"
                 , "Frankrijk"
                 , "Engeland"
                 , "Marokko"
                 , "Brazilië"
                 , "Portugal"
                 , "België"
                 , "Nederland"
                 , "Mexico"
                 );
?>

    <ol>
        <li><?= $fifa[0]?></li>
        <li><?= $fifa[1]?></li>
        <li><?= $fifa[2]?></li>
        <li><?= $fifa[3]?></li>
        <li><?= $fifa[4]?></li>
        <li><?= $fifa[5]?></li>
        <li><?= $fifa[6]?></li>
        <li><?= $fifa[7]?></li>
        <li><?= $fifa[8]?></li>
        <li><?= $fifa[9]?></li>
    </ol>

    </body>
</html>