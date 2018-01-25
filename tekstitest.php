<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 25.01.2018
 * Time: 10:48
 */
require_once 'tekst.php';

//loome teksti objekti
$minuTekst = new tekst('Tere Maailm!');
//vaatame, mis on objekti sees
echo '<pre>';
print_r($minuTekst);
echo'</pre>';
//prindime välja
$minuTekst->prindiTekst();

//loome veel ühe objekti
$mustTekst = new tekst('Must tekst');
echo '<pre>';
print_r($mustTekst);
echo '</pre>';
//prindime välja
$mustTekst->prindiTekst();

require_once 'vtekst.php';
//loome värvilise teksti ja määrame sisu
$punaneTekst = new vtekst('Punane tekst', '#FF0000');
echo '<pre>';
print_r($punaneTekst);
echo '</pre>';
$punaneTekst->prindiTekst();