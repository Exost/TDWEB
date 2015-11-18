 <body>
	<?php
	echo "<p><h3>Détails de l'utilisateur : </h3></p>";
	echo 'Utilisateur : '.$u->getID();
	echo '<br>Nom : '.$u->getNom().' - Prenom : '.$u->getPrenom().'</br>';
	echo 'Sexe : '.$u->getSexe();
	echo '<p><a href="index.php?controller=utilisateur&action=delete&id='.$u->getID().'"><button onclick="ClicBouton();">Supprimer l utilisateur</button></a> ';
	echo '<a href="index.php?controller=utilisateur&action=update&id='.$u->getID().'"><button onclick="ClicBouton();">Modifier l utilisateur</button></a></p>';
	?>
</body>

