<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 15.01.2018
 * Time: 12:32
 */
require_once 'tabel.php';
// loome tabeli kirjelduse järgi tabeli objekti
$minuTabel = new tabel(array('a','b','c'));
// lisame tabeli read
$minuTabel->lisaRida(array('1','2','3'));
$minuTabel->lisaRida(array('4','5','6'));
$minuTabel->lisaRida(array('7','8','9'));
$minuTabel->prindiTabel();
// väljastame tabeli kuju
echo '<pre>';
print_r($minuTabel);
echo '</pre>';

$tabelTekstina = '
1 2 3
4 5 6
7 8 9
';
echo '<pre>';
echo $tabelTekstina;
echo '</pre>';