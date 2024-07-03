<!-- CLASS: PLAT -->
 
<?php
class Plat {  
    public $id;
    public $nom;
    public $description;
    public $prix;
    public $categorie;
  
    public function __construct($id, $nom, $description, $prix, $categorie) {
      $this->id = $id;
      $this->nom = $nom;
      $this->description = $description;
      $this->prix = $prix;
      $this->categorie = $categorie;
    }
  
    public function afficher() {
      echo $this->id . " " . $this->nom . " : " . $this->description . " (" . $this->prix . "€) " . $this->categorie;
  
      // *Attention: $this->categorie ne fonctionnera pas si sur la classe Categorie il n'y a pas de fonction 
      // magique __toString() qui nous permet de traiter un objet comme chaîne de caractères! 
      // Dans ce cas, vous devez ou la rajouter ou alors appeler un ou plusieurs attributs de la classe 
      // Categorie.  
      // Par ex: $this->categorie->nom (si la propriété nom est declarée comme publique) ou 
      // $this->categorie->getNom() (si la propriété est déclarée comme privée, mais qu'elle a un getter 
      // (c'est-à-dire une fonction publique getNom()))
    }
  }
  
?>