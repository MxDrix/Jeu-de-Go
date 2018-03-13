<?php

for ($i = 13 - 1; $i >= 0; $i--) {
    echo "<tr id='line-" . $i . "'>";
    for ($j = 0; $j < 13; $j++) {
        echo "<td id='" . $i . "-" . $j . "' data-abs='".$i."' data-ord='".$j."'>";
    }
    echo "</tr>";
}

?>