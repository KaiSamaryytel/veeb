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

echo "Summa " . $start . " +2+ " . $end . " = " . $sum;?>