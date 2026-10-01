<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Meest gestreamde nummer op Spotify</title>
        <style>
            /* Luxe gouden achtergrond met diepte */
            body {
                margin: 0;
                min-height: 100vh;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;

                /* Vloeiend gouden verloop (gradient) van helder goud naar diep donkergoud */
                background: radial-gradient(circle at center, #ffe082 0%, #c59b27 40%, #4a3500 100%);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            /* Luxe titel met gouden tekstschaduw */
            h1 {
                color: #2c1d00;
                margin-bottom: 25px;
                text-transform: uppercase;
                letter-spacing: 1px;
                text-shadow: 0px 2px 4px rgba(255, 255, 255, 0.4);
            }

            /* Tabel met een chique goud-zwarte stijl */
            table {
                border-collapse: collapse;
                background-color: #111111; /* Donkere stijlvolle achtergrond voor het contrast */
                color: #f3e5ab;
                border-radius: 12px;
                overflow: hidden;
                /* Dubbele gouden gloed om de tabel */
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.6), 0 0 15px rgba(212, 175, 55, 0.5);
                border: 2px solid #d4af37;
            }       
           
        </style>
    </head>
    <body>
        <h1>Meest gestreamde nummer op Spotify</h1>

        <?php
            $nummer = array( 
                "titel"      => "Blinding Lights",
                "artiest"    => "The Weeknd",
                "album"      => "After Hours",
                "duur"       => "3:22",
                "afbeelding" => "blinding-lights.png"
            );
        ?>

        <table>
            <tr>
                <td>Titel</td>
                <td><?php echo $nummer["titel"]; ?></td>
            </tr>
            <tr>
                <td>Artiest</td>
                <td><?php echo $nummer["artiest"]; ?></td>
            </tr>
            <tr>
                <td>Album</td>
                <td><?php echo $nummer["album"]; ?></td>
            </tr>
            <tr>
                <td>Duur</td>
                <td><?php echo $nummer["duur"]; ?></td>
            </tr>
            <tr>
                <td>Afbeelding</td>
                <td> 
                    <img src="afbeeldingen/<?php echo $nummer["afbeelding"]; ?>" alt="<?php echo $nummer["titel"]; ?>" id="blinding-lights" /> 
                </td>
            </tr>
        </table>
    </body>
</html>