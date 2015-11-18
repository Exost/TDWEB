
<body>
	<?php
	echo '<p><h3> Présentation de la voiture : </h3></p>';
	echo '<p>Voiture numero '.$v->getImmatriculation().' de marque '.$v->getMarque().' et de couleur '.$v->getCouleur().' avec '.$v->getOptions().'</p>';
	echo '<p><a href="index.php?action=delete&immat='.$v->getImmatriculation().'"><button onclick="ClicBouton();">Supprimer la voiture</button></a> ';
	echo '<a href="index.php?action=update&immat='.$v->getImmatriculation().'"><button onclick="ClicBouton();">Modifier la voiture</button></a></p>';
	?>
</body>

