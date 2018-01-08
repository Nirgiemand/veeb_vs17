<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 8.01.2018
 * Time: 9:25
 */
$raamatud = array(
    array(
        'title' => 'Vahtramäe Emil',
        'author' => 'Astrid Lindgren',
        'print' => 'ENE kirjastus',
        'status' => 'laenutatud'
    ),
    array(
        'title' => 'Hulkur Rasmus',
        'author' => 'Astrid Lindgren',
        'print' => 'TALLINN Kirjastus',
        'status' => 'kohapeal'
    ),
    array(
        'title' => 'Tõde ja Õigus',
        'author' => 'A. H. Tammsaare',
        'print' => 'Viljandi Kooliprii',
        'status' => 'kohapeal'
    ),
    array(
        'title' => 'Lähis-ida majandus ja selle ohud',
        'author' => 'Andre Pukk',
        'print' => 'AP Productions',
        'status' => 'laentautud'
    ),
    array(
        'title' => 'Scania veoauto mehaanikast',
        'author' => 'Christian Sibul',
        'print' => 'AP Productions',
        'status' => 'laenutatud'
    )
);
echo '<pre />';
echo '<hr />';
print_r($raamatud);