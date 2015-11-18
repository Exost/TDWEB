<form method="POST" action="index.php?controller=voiture&action=created">
  <fieldset>
     <legend>Ajout d'une voiture :</legend> <p>
     <label for="immatriculation">Immatriculation</label> :
     <input type="text" placeholder="Ex : 256AB34" maxlength="8" name="immatriculation" 
                id="immatriculation" required/>
     </p> <p>
     <label for="marque">Marque</label> :
     <input type="text" placeholder="Ex : Renault" name="marque" id="marque"  required/>
     </p> <p>
     <label for="couleur">Couleur</label> :
     <input type="text" placeholder="Ex : Bleu" name="couleur" id="couleur"  required/>
     </p> <p>
     <label for="options">Option</label> :
     <input type="text" placeholder="Ex : Climatisation" name="options" id="options"  required/>
     </p> <p>
     <input type="submit" value="Envoyer" /> </p>
   </fieldset> 
</form>

