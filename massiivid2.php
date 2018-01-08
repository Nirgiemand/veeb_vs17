<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 8.01.2018
 * Time: 8:49
 */
$opilane = array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 16,
    'klass' => 10,
);
echo '<pre>';
print_r($opilane);
echo '<pre>';

echo '<hr />';

foreach ($opilane as $voti => $vaartus) {
    echo $voti.' - '.$vaartus.'<br />';
}

echo '<hr />';

$opilased = array (
    array(
        'eesnimi' => 'Mart',
        'perenimi' => 'Lepp',
        'vanus' => 16,
        'klass' => 10,
    ),
    array (
        'eesnimi' => 'Kadi',
        'perenimi' => 'Minnesota',
        'vanus' => 17,
        'klass' => 11,
    ),
    array (
        'eesnimi' => 'Mirko',
        'perenimi' => 'Panzer',
        'vanus' => 18,
        'klass' => 12,
    )
);

echo '<pre />';
print_r($opilased);
echo '<pre />';

foreach ($opilased as $opilane) {
    foreach ($opilane as $voti => $vaartus) {
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '-------------'.'<br />';
}
echo '<hr />';
sort($opilased);
foreach ($opilased as $opilane) {
    foreach ($opilane as $voti => $vaartus) {
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '-------------'.'<br />';
}
'<hr />';
foreach ($opilased as $opilane) {
    ksort($opilased);
    foreach ($opilane as $voti => $vaartus) {
        echo $voti.' - '.$vaartus.'<br />';
    }
    echo '-------------'.'<br />';
}
'<hr />';