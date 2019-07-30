<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice2</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
        <?php
        if (isset($_GET['age'])) {
            echo 'Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ' ' . $_GET['age'] . ' ! <br />';
        } else {
            echo 'Il faut renseigner un nom, un prénom et un age !';
        }
        ?>
    </body>
</html>
