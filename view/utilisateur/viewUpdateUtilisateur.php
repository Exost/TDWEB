<form method="POST" action="index.php?controller=utilisateur&action=updated&id=<?php echo $up->getID(); ?>">
  <fieldset>
     <legend>Modification d'un utilisateur :</legend> <p>
     <label for="id">Identifiant</label> :
     <input type="text" value= "<?php echo $up->getID(); ?>" name="id" 
                id="id" required/>
     </p> <p>
     <label for="n">Nom</label> :
     <input type="text" value= "<?php echo $up->getNom(); ?>" name="n" id="n"  required/>
     </p> <p>
     <label for="p">Prenom</label> :
     <input type="text" value= "<?php echo $up->getPrenom(); ?>" name="p" id="p"  required/>
     </p> <p>
     <label for="pass">Mot de passe</label> :
     <input type="text" value= "<?php echo $up->getPwd(); ?>" name="pass" id="pass"  required/>
     </p> <p>
     <label for="s">Sexe</label> :
     <INPUT type= "radio" name="s" value="H" checked id="s"> Homme    
     <input type= "radio" name="s" value="F" id="s"> Femme
     </p> <p>
     <input type="submit" value="Envoyer" /> </p>
   </fieldset> 
</form>
