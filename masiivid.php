<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 20.12.2017
 * Time: 12:02
 */
$arvud = array(1, 5, 2 , 4, 3);
var_dump($arvud);
echo '<hr />';
echo '<pre>';
print_r($arvud);
echo '</pre>';
echo '<hr />';
for($i = 0; $i < count($arvud); $i++){
    echo '<b>'.$arvud[$i].'</b><br />';
}
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
$arvud[] = 6;
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
$arvud[0] = 7;
echo '<hr />';
foreach ($arvud as $arv){
    echo '<i>'.$arv.'</i><br />';
}
$arvud[0] = 7;
echo '<hr />';
foreach ($arvud as $arv) {
    echo '<i>' . $arv . '<i/><br />';
}
