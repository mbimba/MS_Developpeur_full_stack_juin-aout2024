<!-- CLASS: PERSONNAGE-->
<h3>Exercice 1 : création d'un personnage</h3>
<h5>1 - Dans un dossier nommé POO, créez un dossier classes/ dans lequel vous créez un fichier Personnage.class.php.</h5>
<h5>2 - Créez une classe Personnage qui comprend les attributs suivants (nom, prenom, age, sexe):Votre classe doit encapsuler les attributs à l'aide de propriétés privées et doit utiliser des accesseurs pour permettre l'accès aux attributs.   </h5>
<?php
// 2- Créer une classe Personnage qui comprend les attributs suivants: Votre classe doit encpsuler les attributs à l'aide de propriétés privées 
class Personnage {
    private $nom;
    private $prenom;
    private $age;
    private $sexe;
// Votre classe doit utiliser des accesseurs pour permettre l'accès aux attributs. 
public function setNom($nom) 
{$this->nom = $nom;}

public function setPrenom($prenom) 
{$this->prenom = $prenom;}

public function setAge($age) 
{$this->age = $age;}

public function setSexe($sexe) 
{$this->sexe = $sexe;}

public function getNom() 
{return $this->nom;}

public function getPrenom() 
{return $this->prenom;}

public function getAge() 
{return $this->age;}

public function getSexe()
{return $this->sexe;}

public function __toString() 
{return "Nom: ". $this->nom. ", Prénom: ". $this->prenom. ", Âge: ". $this->age. ", Sexe: ". $this->sexe;}}

?>