
<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 8.01.2018
 * Time: 10:38
 */
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        Kasutaja: <input type="text" name="kasutaja"><br />
        Parool: <input type="password" name="parool"><br />
        <input type="submit" value="Saada">
    </form>
    
';

echo '<pre>';
echo $_SERVER['PHP_SELF'];

echo '<hr />';
if (count($_POST) > 0) {
    foreach ($_POST as $element) {
        if(strlen($element) == 0) {
            echo 'Tuleb täita väljad<br />';
            exit;
        }
    print_r($_GET);
    print_r($_POST);
    print_r($_REQUEST);
    echo '</pre>';

    echo '<hr />';
    echo $_POST['kasutaja'].'<br />';
    echo $_POST['parool'].'<br />';
}};
echo '<hr />';

echo 'Arva arv ära: <br />';
echo '
    <form action="'.$_SERVER['PHP_SELF'].'" method="post">
        <input type="text" name="kasutajaArv">
        <input type="submit" value="Kontrolli!">
    </form>
';


$serveriNumber = 35;
$kasutajaArv = $_POST['kasutajaArv'];
if (strlen($kasutajaArv) > 0) {
    if($kasutajaArv > $serveriNumber)
        echo 'Sinu arv on suurem kui välja mõeldud <br />';
    }
    if ($kasutajaArv < $serveriNumber) {
        echo 'Sinu arv on väiksem kui välja mõeldud <br />';
    }
    if(abs($kasutajaArv - $serveriNumber) <= 5) {
        if($kasutajaArv == $serveriNumber) {
            echo 'Õige! Väljamõeldud arv oli '.$serveriNumber.'<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal õigele vastusele <br />';
    };