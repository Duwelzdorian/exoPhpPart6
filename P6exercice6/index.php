<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice6</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
      <?php
        if (isset($_GET['building']) AND isset($_GET['room'])) {
            echo 'L\'indice se trouve dans le bâtiment ' . $_GET['building'] . ' et dans la pièce ' . $_GET['room'];
        } else {
            echo 'Désolé erreurs URL !';
        }
        ?>
    </body>
</html>
