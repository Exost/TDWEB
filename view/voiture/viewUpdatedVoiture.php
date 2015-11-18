<?php
/**
 * Created by PhpStorm.
 * User: exost
 * Date: 07/10/15
 * Time: 22:01
 */

//require_once("{$ROOT}{$DS}view{$DS}header.php");

Echo '<h1> Votre voiture à bien été modifiée </h1>';
foreach ($tab_v as $v) {
    $i = $v->getImmatriculation();
    if ($i == $newImmat)
    {
        echo "<p> ----> Voiture d\'immatriculation <a href=.{$DS}?action=read&immat={$i}> $i </a> <----- </p>";
    }
    else
    {
        echo "<p> Voiture d\'immatriculation <a href=.{$DS}?action=read&immat={$i}> $i </a> </p>" ;
    }
//echo "<p> Voiture d\'immatriculation <a href=controllerVoiture.php?action=read&immat=".$v->getImmatriculation().">".$v->getImmatriculation()."</a> </p>";
}

//require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>