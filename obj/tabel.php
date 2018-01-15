<?php
/**
 * Created by PhpStorm.
 * User: henri.tamvere
 * Date: 15.01.2018
 * Time: 12:24
 */

class tabel
{
    // klassi omadused
    var $tabeliSisu = array();
    var $pealkirjad = array();
    var $veergudeArv;

    // klassi meetodid
    /**
     * tabel constructor.
     * @param array $pealkirjad
     */
    public function __construct(array $pealkirjad)
    {
        $this->pealkirjad = $pealkirjad;
        $this->veergudeArv = count($pealkirjad);
    }

    // lisa rida
    function lisaRida ($rida) {
        if(count($rida) != $this->veergudeArv) {
            return false;
        }
        array_push($this->tabeliSisu,$rida);
        return true;
    }

    function prindiTabel () {
        echo '<pre>';
        foreach ($this->pealkirjad as $pealkiri) {
            echo '<b>'.$pealkiri.'</b>'.' ';
        }

        echo "\n";
        foreach ($this->tabeliSisu as $rida) {
            foreach ($rida as $reaElement) {
                echo $reaElement.' ';
            }
            echo "\n";
        }
        echo '</pre>';
    }
}