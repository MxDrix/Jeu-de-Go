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

    public function placer_pierre($abs, $ord) {
        if ($this->_plateau[$abs][$ord] !== null) {
            return false; // La case est déjà occupée
        }

        $pierre = new Pierre($abs, $ord);
        $this->set_mur($pierre, $abs, $ord);
        var_dump($pierre);
    }

    private function set_mur(&$pierre, $abs, $ord) {
        if ($ord == 0) {
            $pierre->_voisins["gauche"] = null;
        } else if ($ord == $this->_taille - 1) {
            $pierre->_voisins["droite"] = null;
        }
        if ($abs == 0) { // On commence du coin en haut a gauche
            $pierre->_voisins["haut"] = null;
        } else if ($abs == $this->_taille - 1) {
            $pierre->_voisins["bas"] = null;
        }
    }

}

?>
