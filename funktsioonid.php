<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 15.12.2017
 * Time: 9:35
 */
function tabelTekst ($sona1, $sona2, $sona3, $sona4) {
    echo '<table border="1">';
    for ($reaNumber = 1, $reaNumber <= 4, $reaNumber++) {
        echo '<tr>';
        echo '<td>';
        echo $reaNumber;
        echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
tabelTekst('See','on','üks','tabel');