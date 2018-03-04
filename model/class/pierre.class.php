<?php

class Pierre {

    public $_appartenance;
    public $_ordonnee;
    public $_abscisse;
    public $_voisins;

    public function __construct($abs, $ord, $joueur) {
        $this->_appartenance = ($joueur != null) ? $joueur->_appartenance : 1;
        $this->_abscisse = $abs;
        $this->_ordonnee = $ord;
        $this->_voisins = array(
            "haut" => 0,
            "droite" => 0,
            "bas" => 0,
            "gauche" => 0
        ); // 0 = aucune pierre
    }

}
