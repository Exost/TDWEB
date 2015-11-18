
<?php
//require_once("{$ROOT}{$DS}view{$DS}header.php");

Echo '<h1>Read Voiture : </h1>';
echo '<p> Voiture d\'immatriculation ' . $voiture->getImmatriculation() . '.</p>';
echo '<p> Marque : '. $voiture->getMarque().' </p>' ;
echo '<p>Couleur : '. $voiture->getCouleur()."</p>" ;
echo <<< EOT
    <div class= updt>
 		<a href=.{$DS}?action=update&immat={$voiture->getImmatriculation()}> Modifier </a>
 	</div>
 	<div class= supp>
 		<a href=.{$DS}?action=delete&immat={$voiture->getImmatriculation()}> Supprimer </a>
 	</div>
EOT;

//require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>