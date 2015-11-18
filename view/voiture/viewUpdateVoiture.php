
<?php


//require_once("{$ROOT}{$DS}view{$DS}header.php");

//$titreFormulaire = "Modification d'une voiture" ;

if ( $choixAction == "update" ) {
    $choixAction = "readonly"; // Pour modifier l'accès à un champs de formulaire
    $titreFormulaire = "Modification d'une voiture" ;
    $champAction = "updated" ;
    $caseUpdate = "&oldImmat={$oldImmat}" ;
}
else if ( $choixAction == "new") {
    $choixAction = "required"; // Pour modifier l'accès à un champs de formulaire
    $titreFormulaire = "Création d'une voiture" ;
    $champAction = "created" ;
    $caseUpdate = "" ;
}

    echo <<< EOT

<!DOCTYPE html>
<meta charset="utf-8" />

<html>
<head>
    <title> Modification Voiture </title>
</head>

<body>
<form method="post" action=".{$DS}?action={$champAction}$caseUpdate ">
    <fieldset>{$titreFormulaire} :</legend> <p>
            <label for="immatriculation">Immatriculation</label> :
            <input type="text" placeholder="Ancienne : {$oldImmat}" value="{$oldImmat}" " name="immatriculation"
                   id="immatriculation" {$choixAction} />
        </p> <p>
            <label for="marque">Marque</label> :
            <input type="text" placeholder="Ancienne : {$oldMarque}" value="{$oldMarque}" name="marque" id="marque"  required/>
        </p> <p>
        <label for="couleur">Couleur</label> :
            <input type="text" placeholder="Ancienne : {$oldCouleur}" value="{$oldCouleur}" name="couleur" id="couleur"  required/>
        </p> <p>

            <input type="submit" value="Envoyer" /> </p>
    </fieldset>
</form>

</body>
</html>
EOT;

//require_once("{$ROOT}{$DS}view{$DS}footer.php");

?>

