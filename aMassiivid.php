<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 12.01.2018
 * Time: 8:58
 */
$opilane ) array(
    'eesnimi' => 'Mart',
    'perenimi' => 'Lepp',
    'vanus' => 15,
    'klass' = 9
);

echo '<pre>';
prin_r($opilane);
echo '</pre>';

foreach ($opilane as $vaartus){
    echo $vaartus.'<br/>';
}

foreach ($opilane as $element => $vaartus){
    echo $element.' - ' .$vaartus.'<br/>';
}