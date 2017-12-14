<?php
function tabel($sona1, $sona2, $sona3, $sona4){
    echo '<table border="1">';
        for ($rida = 1; $rida <= 4; $rida++) {
            echo '<tr>';
                echo '<td>';
                echo ${'sona'}.$rida;
                //echo sona1 jne
                echo '</td>';
            echo '<tr>';
        }
    echo '</table>';
}
tabel ('1', '2', '3', '4');