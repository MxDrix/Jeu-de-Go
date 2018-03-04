<?php

class Pierre {

    public $_appartenance;
    public $_ordonnee;
    public $_abscisse;
    public $_voisins;

    public function __construct($abs, $ord, $joueur) {
        $this->_appartenance = ($joueur != null) ? $joueur->_appartenance : 0;
        $this->_abscisse = $abs;
        $this->_ordonnee = $ord;
        $this->_voisins = array(
            "haut" => 0,
            "droite" => 0,
            "bas" => 0,
            "gauche" => 0
        ); // 0 = unset, null = aucune pierre
    }

    public function has_liberty($coming_from = null) {
        foreach ($this->_voisins as $direction => $voisin) {
            if ($voisin == null) {
                return true;
            }
            if ($direction == $coming_from) {
                continue;
            }
            if ($voisin->_appartenance == $this->_appartenance) {
                switch ($direction) {
                    case "haut":
                        $inverse = "bas";
                        break;
                    case "droite":
                        $inverse = "gauche";
                        break;
                    case "bas":
                        $inverse = "haut";
                        break;
                    case "gauche":
                        $inverse = "droite";
                        break;
                    default :
                        return false;
                }
                if ($voisin->has_liberty($inverse)) {
                    return true;
                }
            }
        }
        return false;
    }

    public function capture_pierre(&$board, $pierres_capturees = 0, $coming_from = null) {
        foreach ($this->_voisins as $direction => &$voisin) {
            if ($direction == $coming_from) {
                continue;
            }
            if ($voisin->_appartenance == $this->_appartenance) {
                switch ($direction) {
                    case "haut":
                        $inverse = "bas";
                        break;
                    case "droite":
                        $inverse = "gauche";
                        break;
                    case "bas":
                        $inverse = "haut";
                        break;
                    case "gauche":
                        $inverse = "droite";
                        break;
                    default :
                        return false;
                }
                $pierres_capturees = $voisin->capture_pierre($board, $pierres_capturees, $inverse);
                $voisin = null;
            }
        }
        $board[$this->_abscisse][$this->_ordonnee] = null;
        return $pierres_capturees + 1;
    }

}
