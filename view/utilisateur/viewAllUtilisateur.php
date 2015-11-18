
<body>
	<?php
	echo '<p><h3>Liste des utilisateurs :</h3></p>';
	foreach ($tab_u as $u){
	  echo '<p> Identifiant : <a href="index.php?controller=utilisateur&action=read&id='.$u->getID().'">'.$u->getID().'</a></p>';
	}
	echo '<p><a href="index.php?controller=utilisateur&action=create">Ajouter un nouveau utilisateur</a></p>';
	?>
</body>

