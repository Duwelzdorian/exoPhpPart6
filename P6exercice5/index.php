<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice5</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
      <?php
        if (isset($_GET['week'])) {
            echo 'La semaine ' . $_GET['week'];
        } else {
            echo 'Désolé erreurs URL !';
        }
        ?>
    </body>
</html>
