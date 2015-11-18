<body>
	<?php
	echo '<p><h3>Liste des voitures :</h3></p>';
	$tab_v = ModelVoiture::getAll();//appel au modèle pour gerer la BD
	foreach ($tab_v as $v){
	  echo '<p> Voiture d\'immatriculation : <a href="index.php?action=read&immat='.$v->getImmatriculation().'">'.$v->getImmatriculation().'</a></p>';
	}
	echo '<p><a href="index.php?controller=voiture&action=create">Ajouter une nouvelle voiture</a></p>';
	?>
</body>

