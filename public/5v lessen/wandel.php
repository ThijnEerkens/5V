<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Wandelchallenge</title>
        <style>
            table {
                border-collapse: collapse;
            }
            td {
                border: 2px solid #32b7d8;
                padding: 6px 12px;
            }
        </style>
    </head>
    <body>
        <img src="../afbeeldingen/wandelen.png" alt="wandelen" style="float: right;" />
        <h2>Wandelchallenge</h2>
<?php

    $dagen = 35;
    $afstand = 3;
    
?>
        <p>Ik ga de komende <?= $dagen ?> dagen een challenge aan. Iedere dag ben ik van plan <?= $afstand ?> kilometer te gaan wandelen.</p>
        <p>In het onderstaande schema kan ik voor iedere dag zien, hoeveel kilometer ik op dat moment in totaal al heb gewandeld.</p>
        <table>
            <tr>
                <th>dag</th>
                <th>totale afstand</th>
            </tr>
    <?php
        $totaleAfstand = 0;
        for ( $i = 1; $i <= $dagen ; $i++ ) {
            $totaleAfstand += $afstand;
            echo "
            <tr>
                <td>$i</td>
                <td>$totaleAfstand km</td>
            </tr>";
        }
    ?>
        </table>
    </body>
</html>
