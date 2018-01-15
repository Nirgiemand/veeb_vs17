<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 15.01.2018
 * Time: 8:51
 */

class tekst
{
    // klassi omadused
    // klassi muutujad
    var $sone = '';


    // klassi konstruktor
    /**
     * tekst constructor.
     */
    public function __construct($s = '')
    {
        $this-> maaraTekst($s);
    }

    // klassi tegevused
    // klassi meetodid

    // teksti väljastamine
    function prindiTekst () {
        echo $this->sone.'<br />';
    }
    // klassi määramine
    function maaraTekst ($s) {
        $this->sone = $s;
    }
}
