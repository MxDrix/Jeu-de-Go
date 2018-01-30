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
        var_dump($this->_plateau);
    }

    public function placer_pierre($abs, $ord) {
        if ($this->_plateau[$abs][$ord] !== null) {
            return false;
        } else {
            $pierre = new Pierre ($abs, $ord);
            if ($ord == 0) {
                setMur($pierre, "gauche");
            }
        }
    }

}

?>
