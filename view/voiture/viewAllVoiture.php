<?php

//require_once("{$ROOT}{$DS}view{$DS}header.php");

	Echo '<h1>ReadAll Voiture : </h1>'; //TODO inclure le stylesheet.css
foreach ($tab_v as $v)
{
	$i = $v->getImmatriculation();
	echo <<< EOT
 <p id=liste>
 	Voiture d\'immatriculation
 	<a href=.{$DS}?action=read&immat={$i} > $i </a>
 	<div class= updt>
 		<a href=.{$DS}?action=update&immat={$i}> Modifier </a>
 	</div>
 	<div class= supp>
 		<a href=.{$DS}?action=delete&immat={$i}> Supprimer </a>
 	</div>
 </p>
________________________________________________________________________________________
EOT;

//echo "<p> Voiture d\'immatriculation <a href=controllerVoiture.php?action=read&immat=".$v->getImmatriculation().">".$v->getImmatriculation()."</a> </p>";
}

//require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>




		
