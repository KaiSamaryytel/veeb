<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 25.01.2018
 * Time: 10:32
 */

class tekst
{//klassi algus
    //klassi omadused - väljad - fieldis
    var $sone = '';

    /**
     * tekst constructor.
     * @param string $sone
     */
    public function __construct($sone)
    {
        $this->sone = $sone;
    } //teksti kirjeldavad sõnad
    //klassi tegevused
    //meetodid
    function maaraTekst($sone){
        $this->sone = $sone;
    }

    //teksti väljastamine
    function prindiTekst(){
        echo $this->sone.'<br/>';
    }
} //klassi lõpp