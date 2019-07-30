<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice4</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
      <?php
        if (isset($_GET['language']) AND isset($_GET['server'])) {
            echo 'Language : ' . $_GET['language'] . ' || Serveur : ' . $_GET['server'];
        } else {
            echo 'Désolé erreurs URL !';
        }
        ?>
    </body>
</html>
