<?php

for ($arv = 1; $arv <= 10; $arv++) {
    if($arv % 2 == 0) {
        $varv = 'blue';
    }   else    {$varv = 'red';
    }
    echo $arv.'<br/>';
    //nii saab üksteise alla
}

//
$a = 5; $b = 2;
$c = $a++;
$d = $b--;
echo 'a = '.$a.'<br/>';
echo 'b = '.$b.'<br/>';
echo 'c = '.$c.'<br/>';
echo 'd = '.$d.'<br/>';

//
$a = 5; $b = 2;
$c = ++$a;
$d = --$b;
echo 'a = '.$a.'<br/>';
echo 'b = '.$b.'<br/>';
echo 'c = '.$c.'<br/>';
echo 'd = '.$d.'<br/>';

//

$kord = 1;
while($kord <= 5) {
    echo '<i>'.$kord++.'</i><br/>';
    if($kord == 2) {
        break;
    }
}

//
$kord = 1;
do {
    echo '<b>'.$kord++.'</b><br/>';
    if($kord == 3) {
        continue;
    }
}   while($kord <=5);

