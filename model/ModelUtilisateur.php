<?php

require_once "Model.php"; 

class ModelUtilisateur extends Model{

  private $identifiant;
  private $motdepasse;
  private $nom;
  private $prenom;
  private $sexe;
  protected static $table = 'Utilisateur';
  protected static $primary = 'identifiant';
   
  //un getter      
  public function getID() {
       return $this->identifiant;  
  }  
  public function getNom() {
       return $this->nom;  
  }
  public function getPrenom() {
       return $this->prenom;  
  }
  public function getSexe() {
       return $this->sexe;  
  }

  public function getPwd() {
       return $this->motdepasse; 
  }

  public function __construct($id = NULL, $pass = NULL, $n = NULL, $p = NULL, $s = NULL) {
    if (!is_null($id) && !is_null($pass) && !is_null($n) && !is_null($p) && !is_null($s)) {
      $this->identifiant = $id;
      $this->motdepasse = $pass;
      $this->nom = $n;
      $this->prenom = $p;
      $this->sexe = $s;      
    }
  }

}
?>
