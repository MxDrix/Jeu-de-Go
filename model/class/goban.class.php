<?php

class Goban {

    private $_taille;
    private $_plateau;

    public function __construct($size) {
        $this->_taille = $size;
        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size; $j++) {
                $temp_tab[$j] = null;
            }
            $this->_plateau[$i] = $temp_tab;
        }
    }

    public function get_board() {
        return $this->_plateau;
    }

    public function placer_pierre($abs, $ord, $joueur) {
        // La case n'existe pas
        if ($abs >= $this->_taille || $ord >= $this->_taille) {
            return false;
        }

        // La case est déjà occupée
        if ($this->_plateau[$abs][$ord] !== null) {
            return false;
        }

        $pierre = new Pierre($abs, $ord, $joueur);
        $this->set_neightboors($pierre);

        if ($pierre->has_liberty()) {
            $this->_plateau[$abs][$ord] = &$pierre;
            $nb_pierre_capturees = 0;
            foreach ($pierre->_voisins as &$voisin) {
                if ($voisin != null && !($voisin->has_liberty())) {
                    $nb_pierre_capturees = $voisin->capture_pierre($this->_plateau);
                    $voisin = null;
                }
            }
            return $nb_pierre_capturees;
        } else {
            $pierre = null;
            return false; // Pas de case libre autour
        }
    }

    private function set_neightboors(&$pierre) {
        $this->set_mur($pierre);
        foreach ($pierre->_voisins as $direction => $neightboor) {
            if ($neightboor === 0) {
                $this->check_neightboor($pierre, $direction);
            }
        }
    }

    private function check_neightboor(&$pierre, $direction) {
        $abs = $pierre->_abscisse;
        $ord = $pierre->_ordonnee;
        switch ($direction) {
            case "haut":
                $ord += 1;
                $inverse = "bas";
                break;
            case "droite":
                $abs += 1;
                $inverse = "gauche";
                break;
            case "bas":
                $ord -= 1;
                $inverse = "haut";
                break;
            case "gauche":
                $abs -= 1;
                $inverse = "droite";
                break;
            default:
                $pierre->_voisins[$direction] = null;
                return;
        }
        if ($this->_plateau[$abs][$ord] !== null) {
            $pierre->_voisins[$direction] = &$this->_plateau[$abs][$ord];
            $this->_plateau[$abs][$ord]->_voisins[$inverse] = &$pierre;
        } else {
            $pierre->_voisins[$direction] = null;
        }
    }

    private function set_mur(&$pierre) {
        // On commence du coin en bas a gauche
        if ($pierre->_abscisse == 0) {
            unset($pierre->_voisins["gauche"]);
        } else if ($pierre->_abscisse == $this->_taille - 1) {
            unset($pierre->_voisins["droite"]);
        }
        if ($pierre->_ordonnee == 0) {
            unset($pierre->_voisins["bas"]);
        } else if ($pierre->_ordonnee == $this->_taille - 1) {
            unset($pierre->_voisins["haut"]);
        }
    }

}

?>
