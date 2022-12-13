<?php
    //funkcja bezargumentowa
    function moja_funkcja(){
        echo"Hello word!";
    };
    moja_funkcja();
    //funkcja argumentowa
    function wyswietl($argum){
    echo($argum);
    };
    wyswietl("tekst do pokazania");
    echo"<br>";
    wyswietl(245);
    echo"<br>";
    wyswietl(3.14);
    echo"<br>";
    //zadanie
    $zm1 =$_POST['a'];
    $zm2 =$_POST['b'];
    $zm3 =$_POST['c'];
    function dodaj($zm1,$zm2,$zm3){
        echo"Wynik = ";
        echo $zm1,$zm2,$zm3
    }
    dodaj($zm1,$zm2,$zm3);
    /*
    

    */
?>