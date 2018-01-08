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
$vahe = ($tna-$synnikuupaev);
echo $vahe.' yeeee <br />';