<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
</head>
<body>
<?php

require_once("{$ROOT}{$DS}view{$DS}header.php");

// Si $controleur='voiture' et $view='All',
// alors $filepath=".../view/voiture/"
//       $filename="viewAllVoiture.php";
// et on charge '.../view/voiture/viewAllVoiture.php'
$filepath = "{$ROOT}{$DS}view{$DS}{$controller}{$DS}"; // détermine le chemin de la vue en fonction du controller qu'on utilise
$filename = "view".ucfirst($view) . ucfirst($controller) . '.php'; // détermine le nom du fichier
require "{$filepath}{$filename}";

require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>
</body>
</html>