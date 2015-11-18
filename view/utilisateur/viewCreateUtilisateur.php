<form method="POST" action="index.php?controller=utilisateur&action=created">
  <fieldset>
     <legend>Ajout d'un utilisateur :</legend> <p>
     <label for="id">Identifiant</label> :
     <input type="text" placeholder="Ex : Pierrot34" name="id"
                id="id" required/>
     </p> <p>
     <label for="n">Nom</label> :
     <input type="text" placeholder="Ex : Afeu" name="n" id="n"  required/>
     </p> <p>
     <label for="p">Prenom</label> :
     <input type="text" placeholder="Ex : Pierre" name="p" id="p"  required/>
     </p> <p>
     <label for="pass">Mot de passe</label> :
     <input type="text" placeholder="Ex : 01234" name="pass" id="pass"  required/>
     </p> <p>
     <label for="s">Sexe</label> :
     <INPUT type= "radio" name="s" value="H" checked id="s"> Homme    
     <input type= "radio" name="s" value="F" id="s"> Femme
     </p> <p>
     <input type="submit" value="Envoyer" /> </p>
   </fieldset> 
</form>
