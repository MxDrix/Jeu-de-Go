<?php

for ($i = $taille_goban - 1; $i >= 0; $i--) {
    echo "<tr id='line-" . $i . "'>";
    for ($j = 0; $j < $taille_goban; $j++) {
        echo "<td id='" . $i . "-" . $j . "' data-abs='".$i."' data-ord='".$j."'>";
    }
    echo "</tr>";
}

?>