<?php

require_once "Model.php"; 

class ModelVoiture extends Model {

  private $marque;
  private $couleur;
  private $immatriculation;
  private $options;
  protected static $table = 'Voiture';
  protected static $primary = 'immatriculation';
   
  //un getter      
  public function getMarque() {
       return $this->marque;  
  }
  
  public function getImmatriculation() {
       return $this->immatriculation;  
  }
  
  public function getCouleur() {
       return $this->couleur;  
  }
  
  public function getOptions() {
    if($this->options!=null){
      foreach ($this->options as $i) {
        return $i;
        //de meme pour echo($option);
      }
    }else{
      return "aucune option";
    }
  }
  
  
  //un setter 
  public function setMarque($marque2) {
       $this->marque = $marque2;
  }

  public function __construct($m = NULL, $c = NULL, $i = NULL) {
    if (!is_null($m) && !is_null($c) && !is_null($i)) {
      $this->marque = $m;
      $this->couleur = $c;
      $this->immatriculation = $i;
    }
  }

  // methode ajouter option a la liste
  public function ajouterOption($uneOption){
        $this->options[] = $uneOption;
  }
    
}
?>
