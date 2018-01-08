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
        'status' => 'laenutatud'
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
foreach ($raamatud as $raamat)
    foreach ($raamat as $voti => $vaartus) {
    echo $voti.' - '.$vaartus.'<br />';
}
echo '<hr />';


function otsi ($raamatud, $seisund) {
    $leitud = array ();
    foreach ($raamatud as $raamat) {
        foreach ($raamat as $kirjeldus => $vaartus) {
            if($kirjeldus == 'status' and $vaartus == $seisund){
                $leitud[] = $raamat;
            }
        }
    }
    return $leitud;

};
echo '<pre>';
print_r(otsi(($raamatud),'laenutatud'));
echo '<pre />';
echo '<hr />';
echo '<pre>';
print_r(otsi(($raamatud),'kohapeal'));
echo '<pre />';
echo '<hr />';

function pealkiri ($raamat){
    $pealkiri = array_keys($raamat);
    echo '<tr>';
    foreach ($pealkiri as $element){
        echo '<th>'.$element.'</th>';
    }
    echo '</tr>';
}

function valjasta ($raamatud) {
    $pealkiriValjas = 0;
    echo '<table border="1">';
    foreach ($raamatud as $raamat) {
        echo '<tr>';
        if($pealkiriValjas == 0) {
            pealkiri($raamat);
            $pealkiriValjas = 1;
        }
        foreach ($raamat as $info) {
            echo '<td>'.$info.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}

valjasta($raamatud);
echo '<hr />';

valjasta(otsi($raamatud,'laenutatud'));
echo '<hr />';

valjasta(otsi($raamatud,'kohapeal'));