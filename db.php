<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 19.01.2018
 * Time: 13:07
 */
require_once 'db_functions.php';

//tekitame ühenduse andmebaasiga
$dbYhendus = yhendus();
//koostame sql lause ja saadame andmebaasi
$sql = 'SHOW TABLES';
$tulemus = saadaParing($dbYhendus, $sql);