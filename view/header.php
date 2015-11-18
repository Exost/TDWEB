
    <?php


    echo <<< EOT

    <!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
        <link rel="stylesheet" media="screen" type="text/css" title="div" href=".{$DS}CSS{$DS}stylesheet.css"/>
</head>

         <div id = "linkTD">
            <a href=http://romainlebreton.github.io/ProgWeb-CoteServeur class=TD> Voir site TD </a>
        </div>


        <div id="header">

            <a href=.{$DS} class=header> Page d'acceuil </a>


            <a href=.{$DS}?action=readAll class=header> Voitures Disponibles </a>

            <a href=.{$DS}?action=create class=header> Créer Voiture </a>

            <a href=.{$DS}?controller=utilisateur class=header> Liste Utilisateurs </a>

            <a href=.{$DS}?controller=utilisateur&action=create class=header> Créer Utilisateur </a>

            <a href=.{$DS}preference.html class=header> Changer page d'acceuil </a>


        </div>


EOT;


?>


