<?php

require_once 'employe.class.php';
require_once 'magasin.class.php';

// Créer trois objets Magasin
$magasin1 = new Magasin("Magasin 1", "1 rue de la Paix", "75001", "Paris", "Restaurant d'entreprise");
$magasin2 = new Magasin("Magasin 2", "2 rue de la République", "69001", "Lyon", "Tickets restaurants");
$magasin3 = new Magasin("Magasin 3", "3 rue de la Liberté", "33000", "Bordeaux", "Restaurant d'entreprise");

// Créer cinq objets Employe, chacun associé à un objet Magasin
$employe1 = new Employe("DUPONT", "Pierre", "2010-01-01", "Vendeur", 40000, "Commercial", $magasin1);
$employe2 = new Employe("DURAND", "Marie", "2012-06-01", "Comptable", 50000, "Comptabilité", $magasin2);
$employe3 = new Employe("LEFEBVRE", "Jean", "2015-03-01", "Responsable", 60000, "Direction", $magasin3);
$employe4 = new Employe("MARTIN", "Sophie", "2018-09-01", "Vendeuse", 35000, "Commercial", $magasin1);
$employe5 = new Employe("ROUSSEAU", "François", "2019-01-01", "Technicien", 45000, "Technique", $magasin2);

$employes = array($employe1, $employe2, $employe3, $employe4, $employe5); // Créer un tableau d'objets "Employe"

// Parcourir le tableau d’objets "Employe"
foreach ($employes as $employe) { 
     // Afficher le nom et le prénom de l'employé
    echo "Employé : ". $employe->getNom(). " ". $employe->getPrenom(). "<br>";
    flush(); // Afficher le tampon dans le navigateur

     // Afficher l'objet Magasin associé au salarié
    echo "Magasin : ". $employe->getMagasin()->getNom(). " - Mode de restauration : ". $employe->getMagasin()->getModeRestauration(). "<br>";
    flush();

    // Afficher la prime du salarié 
    echo "Prime : ". $employe->getPrime(). " €<br>";
    flush();

    // Simuler le versement de la prime (à une date précise)
    $employe->versePrime();
    echo "Ancienneté : ". $employe->getAnciennete(). " ans<br>";
    flush();

     // Vérifiez si le salarié est éligible aux chèques vacances
    if ($employe->peutDisposerChequesVacances()) {
        echo "Peut disposer de chèques-vacances : Oui<br>";
    } else {
        echo "Peut disposer de chèques-vacances : Non<br>";
    }
    flush();

     // Définir un tableau d'enfants avec leurs âges
    $enfants = array(
        array('age' => 8),
        array('age' => 12),
        array('age' => 16)
    );

     // Calculer les chèques de Noël pour les enfants du salarié
    $chequesNoel = $employe->getChequesNoel($enfants);

      // Afficher les chèques de Noël
    if (!empty($chequesNoel)) {
        echo "Chèques Noël : <br>";
        foreach ($chequesNoel as $cheque) {
            echo " - ". $cheque['nombre']. " chèque(s) de ". $cheque['montant']. " €<br>";
            flush();
        }
    } else {
     echo "Chèques Noël : Non<br>";
        flush();
    }

    // Ajouter une règle horizontale pour séparer les employés: <hr>
    echo '<hr size="10" color="yellow">';
    flush();
    echo '<body bgcolor="pink">';
  
}



?>