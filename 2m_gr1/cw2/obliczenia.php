<?php
    $a=$_GET['a'];
    $b=$_GET['b'];
    $c=$_GET['c'];
    if($a !=0 && $b !=0){
    switch ($c) {
        case 1:
            $wynik=$a+$b;
            echo"Suma podanych liczb wynosi: ".$wynik;
            break;
        case 2:
            $wynik=$a-$b;
            echo"Różnica podanych liczb wynosi: ".$wynik;
        case 3:
            $wynik=$a/$b;
            echo"Wynik wynosi: ".$wynik;
        case 4:
            $wynik=$a*$b;
            echo"Wynik wynosi: ".$wynik;
    }
    }else {
        echo"Podales/as 0";
    };
?>