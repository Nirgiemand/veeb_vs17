<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 8.01.2018
 * Time: 12:59
 */
require_once 'funk.php';

raamatuVorm();

$raamat = array(
        'title' => 'Lähis-ida majandus ja selle ohud',
        'author' => 'Andre Pukk',
        'print' => 'AP Productions',
        'status' => 'laenutatud',
);
salvestaRaamat($raamat, 'raamatud.txt');
loeAndmeid('raamatud.txt');