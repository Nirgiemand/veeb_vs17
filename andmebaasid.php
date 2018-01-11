<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 10.01.2018
 * Time: 13:35
 */
$yhendus = mysqli_connect('localhost','kasutaja','parool','andmebaas');
if(!$yhendus) {
    echo 'Probleem andmebaasiserver ühendamisega <br />';
    echo mysqli_connect_error($yhendus).'<br />';
} else {
    echo 'Ühendus loodud <br />';
    $eesnimi = "Pets";
    $sql = 'INSERT INTO kasutajad(eesnimi, perenimi, synnikuupaev) '.
    'VALUES (\''.$eesnimi.'\',\'Tõrvast\',\'1994-06-15\')';
    $tulemus = mysqli_query($yhendus,$sql);
    if (!$tulemus) {
        echo 'Probleem päringuga <br />';
        echo mysqli_error($yhendus).'<br />';
        echo mysqli_errno($yhendus).'<br />';
    } else {
        echo 'Andmed edukalt sisestatud <br />';
        $sql = 'SELECT * FROM kasutajad';
        $tulemus = mysqli_query($yhendus,$sql);
        if (!$tulemus) {
            echo 'Probleem päringuga <br />';
            echo mysqli_error($yhendus).'<br />';
            echo mysqli_errno($yhendus).'<br />';
        } else {
            echo '<table border="1">';
            while ($rida = mysqli_fetch_row($tulemus)) {
                echo '<tr>';
                foreach ($rida as $element) {
                    echo '<td>' . $element . '<td />';
                }
                echo '</tr>';
            }
                echo '</table>';
            }
        }
    }