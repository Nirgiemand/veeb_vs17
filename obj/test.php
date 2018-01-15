<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 15.01.2018
 * Time: 8:57
 */
require_once 'tekst.php';

// loome reaalse objekti tekst-klassi abil

$minuTekst = new tekst();
// väärtustame sone muutuja
$minuTekst = new tekst('Tere maailm!');

// teostame test-vaade antud objektist

echo '<pre>';
print_r ($minuTekst);
echo '</pre>';