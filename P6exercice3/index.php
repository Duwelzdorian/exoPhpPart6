<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice3</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
      <?php
        if (isset($_GET['startDate']) AND isset($_GET['endDate'])) {
            echo 'Date du départ : ' . $_GET['startDate'] . ' => Date du retour : ' . $_GET['endDate'];
        } else {
            echo 'Désolé erreurs URL !';
        }
        ?>
    </body>
</html>
