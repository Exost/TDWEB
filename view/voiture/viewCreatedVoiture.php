<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lecture d'une voiture</title>
</head>
<body>
<?php
// require_once("{$ROOT}{$DS}view{$DS}header.php");

Echo '<h1> Votre voiture à bien été créée </h1>';
foreach ($tab_v as $v) {
    $i = $v->getImmatriculation();
    if ($i == $immat)
    {
        echo "<p> ----> Voiture d\'immatriculation <a href=.{$DS}?action=read&immat={$i}> $i </a> <----- </p>";
    }
    else
    {
        echo "<p> Voiture d\'immatriculation <a href=.{$DS}?action=read&immat={$i}> $i </a> </p>" ;
    }
//echo "<p> Voiture d\'immatriculation <a href=controllerVoiture.php?action=read&immat=".$v->getImmatriculation().">".$v->getImmatriculation()."</a> </p>";
}

// require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>
