<!--   Class: employe.class.php -->

<?php

// Définition de la classe "Employe"
class Employe {
    private $nom;
    private $prenom;
    private $dateEmbauche;
    private $fonction;
    private $salaire;
    private $service;
    private $magasin;

    //   Méthode pour construire les objets
    public function __construct($nom, $prenom, $dateEmbauche, $fonction, $salaire, $service, $magasin) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateEmbauche = $dateEmbauche;
        $this->fonction = $fonction;
        $this->salaire = $salaire;
        $this->service = $service;
        $this->magasin = $magasin;
    }

    // Méthode Getter pour récupérer le nom de famille de l'employé
    public function getNom() {
        return $this->nom;
    }
  
    // Méthode Getter pour récupérer le prénom de l'employé
    public function getPrenom() {
        return $this->prenom;
    }
  // Méthode de calcul de l'ancienneté du salarié (en années
    public function getAnciennete() {
        $today = date("Y-m-d"); // Obtenez la date actuelle
        $diff = date_diff(date_create($this->dateEmbauche), date_create($today)); // Calculez la différence entre la date de location et la date d'aujourd'hui
        return $diff->y;
    }

   // Méthode de calcul de la prime du salarié (prime)
    public function getPrime() {
      $anciennete = $this->getAnciennete();   // Calculer l'ancienneté
         $prime = ($this->salaire * 0.05) + ($this->salaire * 0.02 * $anciennete); // Calculer la prime en fonction du salaire et de l'ancienneté
        return $prime;
    }

    // Méthode pour simuler le versement du bonus (à une date précise)
    public function versePrime() {
       $today = date("Y-m-d"); // Pour la date actuelle
        if ($today == "2022-11-30") {    // Pour vérifier si nous sommes le 30 novembre 2022
            $prime = $this->getPrime();
             // Afficher un message indiquant le paiement de la prime
            echo "Ordre de transfert à la banque de $prime € pour $this->nom $this->prenom<br>";
        }
    }


  // Méthode Getter pour récupérer le magasin de l'employé
    public function getMagasin() {
        return $this->magasin;
    }


    // Méthode pour vérifier si le salarié est éligible aux chèques vacances
    public function peutDisposerChequesVacances() {

         // Calculer l'ancienneté
        $anciennete = $this->getAnciennete();
          // Renvoie vrai si le salarié a au moins 1 an d'ancienneté
        if ($anciennete >= 1) {
            return true;
        } else {
            return false;
        }
    }


// Méthode de calcul des chèques de Noël pour les enfants du salarié
    public function getChequesNoel($enfants) {

        // Initialiser un tableau vide pour stocker les chèques de Noël
        $cheques = array();

          // Parcourez les enfants de l'employé
        foreach ($enfants as $enfant) {
            // Vérifiez l'âge de l'enfant et calculez le chèque de Noël correspondant
            if ($enfant['age'] <= 10) {
                $cheques[] = array('montant' => 20, 'nombre' => 1);
            } elseif ($enfant['age'] <= 15) {
                $cheques[] = array('montant' => 30, 'nombre' => 1);
            } elseif ($enfant['age'] <= 18) {
                $cheques[] = array('montant' => 50, 'nombre' => 1);
            }
        }
        // Renvoyez la gamme de chèques de Noël
        return $cheques;
    }


    // Méthode Getter pour récupérer le salaire de l'employé
    public function getSalaire() {
        return $this->salaire;
    }



   // Méthode Getter pour récupérer le service de l'employé
    public function getService() {
        return $this->service;
    }
}

?>