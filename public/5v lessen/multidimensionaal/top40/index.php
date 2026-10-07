<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Top 40</title>
        <link rel="stylesheet" href="top40.css" />
    </head>
    <body>

        <img id="logo" src="https://www.top40.nl/img/generic/logo/top40.svg" alt="Top 40" />

        <table class="top40-tabel">
            <thead>
                <tr>
                    <th class="col-nr">#</th>
                    <th class="col-img">Cover</th>
                    <th>Titel & Artiest</th>
                    <th class="col-stat">Weken</th>
                    <th class="col-stat">Vorige</th>
           
                </tr>
            </thead>
            <tbody>
            <?php
                include("top40.php");

                for ( $i = 0 ; $i < count($top40) ; $i++ ) {
                    $nummer = $top40[$i];
            ?>
                <tr>
                    <td class="col-nr"><?= $nummer["notering"] ?></td>
                    <td class="col-img">
                        <img src="<?= $nummer["afbeelding"] ?>" alt="<?= htmlspecialchars($nummer["titel"]) ?>" />
                    </td>
                    <td class="col-titel">
                        <span class="titel"><?= $nummer["titel"] ?></span>
                        <span class="artiest"><?= $nummer["artiest"] ?></span>
                    </td>
                    <td class="col-stat"><?= $nummer["weken"] ?> wk</td>
                    <td class="col-stat"><?= $nummer["vorige"] ?></td>
                    <td class="col-audio">
                      
                    </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>

    </body>
</html>