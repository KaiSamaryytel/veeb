<?php
/**
 * Created by PhpStorm.
 * User: Andres
 * Date: 21.12.2017
 * Time: 14:22
 */

$arvud = array(); //tyhi massiiv
//lisame väärtused
$arvud[] = 5;
$arvud[] = 1;
$arvud[] = 4;
$arvud[] = 2;
$arvud[] = 3;

//kuidas luua juba väärtustega massiivi
$arvud1 = array(1, 2, 3, 4, 5);

//testväljastus
echo '<pre>';
print_r($arvud);
echo '</pre>';

//korralik väljastus
for ($i = 0; $i < count($arvud); $i++) {
    echo '<b>' . $arvud[$i] . '</b><br/>';
}

foreach ($arvud1 as $arv) {
    echo '<i>' . $arv . '</i><br/>';
}
?>
<p>ülesanne1</p>
<?php
/*
 * 1.
 * Koosta funktsioon nimega looMassiiv,
 * mis võtab parameetrina massiivi elementide
 * arvu ja loob juhuarvudest (täisarvud)
 * vahemikust 100-999 koosneva massiivi.
 * Loodud massiiv tuleb tagastada
 * põhiprogrammile ja kontrollida sisu
 * testväljastuse abil - näiteks print_r
 * */
function looMassiiv($elementideArv) {
    $massiiv = array();
    for($kord = 1; $kord <= $elementideArv; $kord++) {
        $juhuarv = rand(100, 999);
        $massiiv[] = $juhuarv;
    }
    return $massiiv;
}
//testväljastus
$testMassiiv = looMassiiv(5);
echo '<pre>';
print_r($testMassiiv);
echo '</pre>';
echo '<hr/>';

?>

    <p>ülesanne2</p>
<?php
/*
* Loo funktsioon nimega valjastaMassiiv,
* mis võtab parameetrina massiivi ja
* väljastab tema elemendid
* üheveerulise tabeli kujul
* Väljundi loomisel kasutada foreach
* tsükkel
* */
function valjastaMassiiv($massiiv){
    echo '<table border="1">';
    foreach ($massiiv as $element){
        echo '<tr>';
            echo '<td>';
            echo $element;
            echo '</td>';
        echo '</tr>';
    }
    echo '</table>';
}
valjastaMassiiv($testMassiiv);
echo '<hr />';

?>


    <p>ülesanne3</p>
<?php
/*
* Loo funktsioon nimega vahetaMinMax, mis võtab
* parameetrina täisarvude massiivi (testimises
* võib kasutada looMassiiv funktsiooniga
* genereeritud massiiv)
* ja leiab kõige väiksema ja kõige suurema
* elemendi antud massiivis ning vahetab nende asukohad.
*
* Kontrolli kas kohad on vahetatud kasutades
* valjastaMassiiv funktsiooni
*/
function vahetaMinMax($massiiv){
    $min = min($massiiv);
    $max = max($massiiv);
    echo 'Minimum ='.$min.'<br/>';
    echo 'Maximum ='.$max.'<br/>';
    for($i = 0; $i < count($massiiv); $i++){
        if($massiiv[$i] == $min){
            ($massiiv[$i] = $max);
        } else if ($massiiv[$i] == $max){
            ($massiiv[$i] = $min);
        }
 //       echo ($massiiv[$i].'<br/>';
    }
}
vahetaMinMax($testMassiiv);
valjastaMassiiv($testMassiiv);
?>


    <p>ülesanne4</p>
<?php
/*
* Loo funktsioon nimega elementideKorrutis, mis
* võtab parameetrina täisarvude massiivi ja leiab
* korrutis nendest arvudest, mis on suurem kui 0
* ja mille indeksid on paarisarvud.
* Kontrollimiseks näiteks kasutada järgmine massiiv:
* 1, 0, 6, 0, 0, 3, 5
* Tulemus väljastatakse antud funktsiooni abil kujul:
* Tulemus: 1 * 6 * 5 = 30
*/
function elementideKorrutis($massiiv) {
    $korrutis = 1;
    $eksisteerib = false;
    foreach ($massiiv as $element){
        $indeks = array_search($element, $massiiv);
        if($indeks %2 ==0 && $massiiv[$indeks] !=0){
            $korrutis *= $element;
            echo "element: " . $element . '<br>';
            $eksisteerib = true;
        }
    }
    if (!$eksisteerib) return 0;
    else return 'korrutis: ' . $korrutis;
}
$kontroll = array(1, 0, 6, 0, 0, 3, 5);
$neljas = elementideKorrutis($testMassiiv);
print_r ($neljas);
echo '<hr />';
?>


<p>ülesanne5</p>
<?php
/*
 * Töötluses kasutada massiiv
 * $massiiv = array(1, 1, 1, 2, 2, 2, 2, 3).
 * Loo funktsioon mitteDubleeri, mis võtab
 * parameetrina massiivi ja ei väljasta dubleeritud
 * elemendid. Ehk näidemassiivi puhul tuleb väljastada
 * ainult 1, 2, 3 - s.t. ilma dubleerimist.
 * NB! Lahenduses tuleb kasutada AINULT ÜKS foreach
 * tsükli abil, samuti EI SAA kasutada
 * grupeerimisfunktisoone ega muuta antud massiivi
 * */
function mitteDubleeri($massiiv){
    $dubleerimata = array();
    foreach ($massiiv as $element){
        if (!in_array($element, $dubleerimata)){
            array_push($dubleerimata, $element);
        }
    }
return $dubleerimata;
}
$viies_massiiv = array(1, 1, 1, 2, 2, 2, 2, 3);
$massiiv =mitteDubleeri($viies_massiiv);
echo "Sisend: ";
print_r ($viies_massiiv);
echo "<br>Väljund: ";
print_r ($massiiv);

?>
