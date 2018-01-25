<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 25.01.2018
 * Time: 11:11
 */

require_once 'tekst.php';
class vtekst extends tekst
{
    //lisame värvi ka
    var $varv = '';

    /**
     * vtekst constructor.
     */
    public function __construct($sone, $varv)
    {
        parent::__construct($sone);
        $this->maaraVarv ($varv);
    }

    function maaraVarv($varv){
        $this->varv = $varv;
    }

    function prindiTekst()
    {
        if($this->varv == ''){
        parent::prindiTekst();
        }else {
            echo '<font color="'.$this->varv.'"">' .$this->sone.'</font><br/>';
        }
    }
}