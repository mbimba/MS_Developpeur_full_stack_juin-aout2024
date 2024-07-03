<!-- CLASS: VÉHICULE -->

<?php

class Vehicule
{
    public $_marque;
    public $_puissanceFiscale;
    public $_vitesseMax;
    protected $_vitesseCourante;
    private $_nbPassagers;

    public function demarrer() {
        // code permettant de démarrer l'objet instancié
        echo "je démarre.<br>";
    }
    public function accelerer(int $nbKm) {
        // code permettant d'accélérer
        echo "la voiture avance de ".$nbKm." kilomètres.<br>";
    }
    public function avancer(int $nbKm) {
        // code permettant d'avancer
    }
    public function ajouterPassager() {
        // code permettant d'ajouter un passager 
        echo "La voiture compte".$_nbPassagers." passagers.<br>";
    }
} // -- Fin de la classe Véhicule


// Il nous faut d'abord instancier un objet de la classe
$oVoiture = new Voiture();

// Ensuite seulement on peut appeler les méthodes en passant par l'objet nouvellement créé.
$oVoiture->demarrer();
$oVoiture->avancer(50);




?>