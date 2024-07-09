<!--   Class: magasin.class.php -->

<?php

class Magasin {
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $modeRestauration;

    public function __construct($nom, $adresse, $codePostal, $ville, $modeRestauration) {
        $this->nom = $nom;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this->ville = $ville;
        $this->modeRestauration = $modeRestauration;
    }

    public function getModeRestauration() {
        return $this->modeRestauration;
    }


    public function getnom() {
        return $this->nom;
    }



}

?>