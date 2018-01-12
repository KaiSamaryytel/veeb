<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 12.01.2018
 * Time: 8:59
 */
function vorm(){
    @$serveriArv = $_POST['serveriArv'];
    $serveriArv = isset($serveriArv) ? $_POST['serveriArv'] : rand(1,20);
    echo $serveriArv.'<br/>';
    echo '
   <form action="game.php" method="post">
   <input type="hidden" name="serveriArv" value="'.$serveriArv.'">
   <input type="text" name="kasutajaArv"><br />
   <input type="submit" value="Kontrolli">
   </form>
   ';
}

function vormiAndmed(){
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
    $korras = false;
    if (empty($_POST)){
        echo 'Vorm ei saatnud andmed<br />';
    } else {
        echo 'Andmed on saadetud<br />';
        if (empty($_POST['kasutajaArv'])){
            echo 'Andmed peavad olema sisestatud <br />';
        } else {
            echo 'Andmed on sisestatud<br />';
            $korras = true;
        }
    }
    return $korras;
}

function arvuKontroll($kasutajaArv, $serveriArv){
    if ($kasutajaArv > $serveriArv){
        echo 'Pakutud arv on suurem<br />';
    }
    if ($kasutajaArv < $serveriArv){
        echo 'Pakutud arv on väiksem<br />';
    }
    if (abs($serveriArv - $kasutajaArv) <= 5){
        if ($kasutajaArv == $serveriArv){
            echo 'Õnnitlen, arvasid ära<br />';
            exit;
        }
        echo 'Aga oled juba väga lähedal<br />';
    }
}

vorm();
//vormiAndmed();
if (vormiAndmed()){
    arvuKontroll($_POST['kasutajaArv'], $_POST['serveriArv']);
} else {
    echo 'Andmed peavad olema sisestatud<br />';
}