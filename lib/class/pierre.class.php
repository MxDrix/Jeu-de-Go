<?php

class Pierre {

    public $_appartenance;
    public $_ordonnee;
    public $_abscisse;
    public $_voisins;

    public function __construct($abs, $ord) {
        $this->_abscisse = $abs;
        $this->_ordonnee = $ord;
        $this->_voisins = array();
    }

}
