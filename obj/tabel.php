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
}