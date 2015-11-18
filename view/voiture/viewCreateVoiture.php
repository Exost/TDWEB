
<?php

//require_once("{$ROOT}{$DS}view{$DS}header.php");

echo <<< EOT

<!DOCTYPE html>
<meta charset="utf-8" />

<html>
<head>
    <title> EasyCovoiturage </title>
</head>

<body>
<form method="post" action=".{$DS}?action=created">
    <fieldset>
        <legend>Mon formulaire :</legend> <p>
            <label for="immatriculation">Immatriculation</label> :
            <input type="text" placeholder="Ex : 256AB34" name="immatriculation"
                   id="immatriculation" required/>
        </p> <p>
            <label for="marque">Marque</label> :
            <input type="text" placeholder="Ex : Renault" name="marque" id="marque"  required/>
        </p> <p>
            <label for="couleur">Couleur</label> :
            <input type="text" placeholder="Ex : Bleu" name="couleur" id="couleur"  required/>
        </p> <p>



            <input type="submit" value="Envoyer" /> </p>
    </fieldset>
</form>

</body>
</html>
EOT;

//require_once("{$ROOT}{$DS}view{$DS}footer.php");

?>