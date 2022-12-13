<?php
    $a=$_POST['a'];
    $b=$_POST['b'];
    $c=$_POST['c'];
    //isset - sprawdzamy czy zmienna jest ustawiona
    //if (isSet($_POST['a']) && isSet($_POST['b']))
    //{
    //    echo "Zmienne ustawione";
    //}
    //empty - sprawdza czy pole nie jest puste
    //if (!empty($_POST['a']) && !empty($_POST['b']))
    //{
    //    echo"Dane poprawne";
    //}
    //else{
    //    echo"Uzpełnij dane";
    //}
    if (!empty($_POST['a']) && !empty($_POST['b'])){
    switch ($c) {
        case 0:
            echo"upo";
            break;
        case 1:
            $wynik=$a+$b;
            echo"Suma podanych liczb wynosi: ".$wynik;
            break;
        case 2:
            $wynik=$a-$b;
            echo"Różnica podanych liczb wynosi: ".$wynik;
            break;
        case 3:
            $wynik=$a/$b;
            echo"Wynik wynosi: ".$wynik;
            break;
        case 4:
            $wynik=$a*$b;
            echo"Wynik wynosi: ".$wynik;
            break;
    }
    }else {
        echo"Podales/as 0";
    };
?>