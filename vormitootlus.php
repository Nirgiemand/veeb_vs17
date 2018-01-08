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