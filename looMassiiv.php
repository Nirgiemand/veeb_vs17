<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 20.12.2017
 * Time: 12:50
 */
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */

function looMassiiv($elementidearv){
    $massiiv = array();
    while($elementidearv > 0){
        $massiiv[] = rand(100, 999);
        $elementidearv--;
    }
    return $massiiv;
}

/*
 * 2.
 * Loo funktsioon nimega valjastaMassiiv,
 * mis võtab parameetrina massiivi ja
 * väljastab tema elemendid
 * üheveerulise tabeli kujul
 * Väljundi loomisel kasutada foreach
 * tsükkel
 * */
function valjastaMassiiv($a){
    foreach ($a as $e){
        echo'<b>'.$e.'</b><br>';
    }
}
$de = looMassiiv(12);
valjastaMassiiv($de);
echo '<hr>';

/*
 * 3.
 * Loo funktsioon nimega vahetaMinMax, mis võtab
 * parameetrina täisarvude massiivi (testimises
 * võib kasutada looMassiiv funktsiooniga
 * genereeritud massiiv)
 * ja leiab kõige väiksema ja kõige suurema
 * elemendi antud massiivis ning vahetab nende asukohad.
 *
 * Kontrolli kas kohad on vahetatud kasutades
 * valjastaMassiiv funktsiooni
*/
$mas = array(10, 13, 99, 14, 15, 16);
valjastaMassiiv($mas);
echo '<hr>';
$suurim = array_search(max($mas), $mas);
$vahim = array_search(min($mas), $mas);
echo $vahim.'<br>';
echo $suurim.'<br>';
echo min($mas).'<br>';
echo max($mas).'<br>';
echo '<hr>';
function vahetaMinMax(&$rida){
    $min = min($rida);
    $max = max($rida);
    for($i = 0; $i < count($rida); $i++){
        if ($rida[$i] == $min){
            $rida[$i] = $max;
        } else if ($rida[$i] == $max){
            $rida[$i] = $min;
        }
    }
}
vahetaMinMax($mas);
valjastaMassiiv($mas);
echo '<hr>';
/*
 * 4.
 * Loo funktsioon nimega elementideKorrutis, mis
 * võtab parameetrina täisarvude massiivi ja leiab
 * korrutis nendest arvudest, mis on suurem kui 0
 * ja mille indeksid on paarisarvud. Tulemus väljastatakse
 * antud funktsiooni abil kujul:
 *
 * Massiiv on 1, 0, 6, 0, 0, 3, 5
 * Tulemus: 1 * 6 * 5 = 30
*/
$kmasssiiv = array(1, 0, 6, 0, 0, 3, 5);
function elementideKorrutis($rida){
    $uusrida = array();
    for($i = 0; $i < (count($rida)); $i++){
        if ($i % 2 == 0 and $rida[$i] > 0){
            $uusrida[] = $rida[$i];
        }
    }
    echo 'Massiiv on ';
    for($i = 0; $i < (count($rida) - 1); $i++){
        echo $rida[$i].', ';
    }
    echo end($rida).'.';
    echo'<br>Tulemus: ';
    for($i = 0; $i < (count($uusrida) - 1); $i++){
        echo $uusrida[$i].' * ';
    }
    echo end($uusrida).' = '.array_product($uusrida).'.';
}
elementideKorrutis($kmasssiiv);
echo '<hr>';
/*
 * 5.
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */
$vmassiiv = array(1, 1, 1, 2, 2, 2, 2, 3);
function mitteDubleeri($rida){
    $valjasta =  "";
    foreach ($rida as $element){
        if($valjasta != $element){
            $valjasta = $element;
            echo $element.', ';
        }
    }
}
mitteDubleeri($vmassiiv);