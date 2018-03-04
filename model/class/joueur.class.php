<?php
class Joueur
{
    public $_appartenance;
    public $_score;
    public $_dernierTour;
    public $_nom;
    public $_poserPierre;
    public $_passer;
    
    public function __construct ($appartenance) {
        $this->_appartenance = $appartenance;
    }
}
?>