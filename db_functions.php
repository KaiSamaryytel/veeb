<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 19.01.2018
 * Time: 12:31
 */
require_once 'db_config.php'; //nõuame konfiguratsioonifaili sisu kasutamist

//andmebaasi serveriga ühendamine ja
//andmebaasi valik
function_yhendus(){
    $yhendus = mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
    if(!$yhendus){
        echo 'Puudub ühendus andmebaasi serveriga<br/>';
        echo mysqli_connect_error().'<br/>';
        echo mysqli_connect_errno().'<br/>';
        return false;
    } else {
        echo 'Ühendus andmebaasiserveriga on olemas <br/>;'
        return $yhendus;
    }
}

