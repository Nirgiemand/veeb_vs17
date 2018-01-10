<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 8.01.2018
 * Time: 14:54
 */
echo time ().'<br />';
echo mktime(5,55,15,2,15,2017).'<br />';
$tana = date("H:i");
$tana1 = date("d.m.y");
echo $tana.'<br />';
echo $tana1.'<br />';

echo '<br />';
echo '<hr />';
echo 'Sisesta oma sünnikuupäev: <br />';
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        <input type="date" name="sünnikuupäev">
        <input type="submit" value="Tseki!">
    </form>
';
$synnikuupaev = $_POST['sünnikuupäev'];
$tna = date("d.m.y");
$vahe = $tna-$synnikuupaev;
echo $vahe.' yeeee <br />';

function sisestaAndmed(){
    echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
    echo 'Päev: <input type="text" name="paev"><br />';
    echo 'Kuu: <input type="text" name="kuu"><br />';
    echo '<input type="submit" value="Arvuta!">';
    echo '</form>';
}

function aastaKontroll ($paev, $kuu) {
    $hetkeKuu = date('m');
    $hetkePaev = date('d');
    echo $hetkeKuu.'<br />';
    echo $hetkePaev.'<br />';
    if($paev < $hetkePaev and $kuu = $hetkeKuu) {
        $aasta = date('y')+1;
    } else {
        $aasta = date('y');
    }
    return $aasta;
}

function kauaOotan ($paev, $kuu, $aasta) {
    $aegHetkel = time();
    $synniAeg = mktime(0,0,0,$kuu,$paev,$aasta);

    $tulemus = array ();


    $vaheSekundites = $synniAeg - $aegHetkel;
    $sekundid = $vaheSekundites % 60;
    $tulemus['sekundid'] = $sekundid;
    $vaheMinutites = $vaheSekundites / 60;
    $minutid = $vaheMinutites % 60;
    $tulemus['minutid'] = $minutid;
    $vaheTundides = $vaheMinutites / 60;
    $tunnid = $vaheTundides % 24;
    $tulemus['tunnid'] = $tunnid;
    $vahePaevades = $vaheTundides / 24;
    $paevad = $vahePaevades % 30.4;
    $tulemus['paevad'] = $paevad;
    $kuud = $vahePaevades / 30.4;
    settype($kuud, 'int');
    $tulemus['kuud'] = $kuud;
    return $tulemus;
}
function valjastaTulemus($andmed){
    echo 'Sünnipäevani on: <br />';
    foreach ($andmed as $element => $vaartus){
        if($vaartus != 0){
            echo $vaartus.' '.$element.'<br />';
        }
    }
}

sisestaAndmed ();
echo aastaKontroll($_POST['paev'],$_POST['kuu']);
$tulemus = kauaOotan($_POST['paev'], $_POST['kuu'], aastaKontroll($_POST['paev'], $_POST['kuu']));
valjastaTulemus($tulemus);

