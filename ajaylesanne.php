<?php
    $hetkeAasta = date(format 'Y', time());
    $valik = '<select name="aasta">';
    for($aasta = 120; $aasta < 2020; $aasta++) {
        if ($aasta == $hetkeAasta)
            $valik = $valik . '<option value="'.$aasta.'""'
                }