<?php
/**
 * 1. Koostada funktsioon nimega arvuSumma, mis võtab parameetrina suvalise numbri ja
 * arvutab numbri arvude summa - juhul, kui on argumendina funktsioonile antud number 123,
 * siis programm peab leidma 1+2+3 summa, ehk 6.
 * Lahendamiseks ei tohi kasutada sõnetöötluse võimalused.
 */

$start = 1;
$end = 3;

$sum = 0;
for ($i = $start; $i <= $end; $i++) {
    $sum += $i;
}

echo "Summa " . $start . " + 2 + " . $end . " = " . $sum;

?>

<br>
<hr>

<?php
function otsiNumber($suvalineArv, $kindelArv){
    echo 'Arv '.$kindelArv.' esineb arvus '.$suvalineArv;
    $mituKorda = 0;
    while($suvalineArv != 0){
        $arv = $suvalineArv % 10;
        if($arv == $kindelArv){
            $mituKorda++;
        }$suvalineArv = $suvalineArv / 10;
        settype($suvalineArv, 'integer');
    }
    echo ' : '.$mituKorda.'  korda<br />';
}
otsiNumber(123456123451, 1);
otsiNumber(123456123451, 2);
otsiNumber(123456123451, 3);
otsiNumber(123456123451, 4);
?>

