<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 25.01.2018
 * Time: 10:48
 */
require_once 'tekst.php';

//loome teksti objekti
$minuTekst = new tekst();
//määrame tekstite konkreetse sisu
$minuTekst->maaraTekst('Tere Maailm!');
//vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo'</pre>';
//prindime välja
$minuTekst->prindiTekst();