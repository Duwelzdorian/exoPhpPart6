<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>exercice1</title>
        <link href="style.css" rel="stylesheet" /> 
    </head>

    <body>
   <?php
if (isset($_GET['lastname']) AND isset($_GET['firstname']) AND isset($_GET['repeter']))
{
	// 1 : On force la conversion en nombre entier
	$_GET['repeter'] = (int) $_GET['repeter'];

	// 2 : Le nombre doit être compris entre 1 et 100
	if ($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 100) 
	{	
		for ($i = 0 ; $i < $_GET['repeter'] ; $i++)
		{
			echo 'Bonjour ' . $_GET['lastname'] . ' ' . $_GET['firstname'] . ' !<br />';
		}
	}
}
else
{
   echo 'Il faut renseigner un nom, un prénom et un nombre de répétitions !';
}
?>
    </body>
</html>
