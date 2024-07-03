<!-- CLASS: ANIMAL -->

<?php
class Animal 
{
    // code du contenu de la classe
}
?>

<!-- Nous allons pouvoir y définir les caractéristiques qu'aura chaque animal (une espèce, une taille, un poids, un régime alimentaire, un nombre de pattes, etc.) -->
<?php
class Animal 
{
    public $espece;
    public $_regimeAlimentaire;
    private $taille;
    private $poids;
    private $nbpattes;

    public function manger() {
        // ...
    }

    public function avancer(int $nbpas) {
        // ...
    }
}
?>

<?php
$oChien = new Animal();
?>

<?php
$chien->_espece = "Chien";
$chien->_regimeAlimentaire = "Carnivore";
$chien->_taille = 110;
$chien->_poids = 16000;
?>