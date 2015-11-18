
<form method="POST" action="index.php?controller=voiture&action=updated&immat=<?php echo $up->getImmatriculation(); ?>">
  <fieldset>
	 <legend>Mise à jour :</legend> <p>
	 <label for="immatriculation">Immatriculation</label> :
	 <input type="text" value= "<?php echo $up->getImmatriculation(); ?>" maxlength="8" name="immatriculation" 
				id="immatriculation" required/>
	 </p> <p>
	 <label for="marque">Marque</label> :
	 <input type="text" value= "<?php echo $up->getMarque(); ?>" name="marque" id="marque"  required/>
	 </p> <p>
	 <label for="couleur">Couleur</label> :
	 <input type="text" value= "<?php echo $up->getCouleur(); ?>" name="couleur" id="couleur"  required/>
	 </p> <p>
	 <label for="options">Option</label> :
	 <input type="text" value= "<?php echo $up->getOptions(); ?>" name="options" id="options"  required/>
	 </p> <p>
	 <input type="submit" value="Envoyer" /> </p>
   </fieldset> 
</form>


