<?php
    @setcookie("BingCziling", 1 , time()+300);
    if(!isSet($_COOKIE['nazwa']) && !isset($_POST['nazwa'])){
        include 'one.html';
        include 'two.html'; 
        include 'three.html'; 
    }else if(isset($_POST['nazwa'])){
        setcookie('nazwa',$_POST['nazwa'], time()+60);
        include 'one.html';
        echo("<p>Przesłano inforamcje</p>");
        include 'three.html';
    }else{
        include 'one.html';
        echo("Zostałeś rozpoznany jako {$_COOKIE['nazwa']}<br>");
        echo("Odwiedziłes tę stronę {$_COOKIE['BingCziling']} razy ");
        include 'three.html';
    } 
    //Skrypt ma za zadanie podać ile razy użytkownik był na stronie w ciągu 5 minut 
    //napisz skrypt który, jeśeli użytkownik wejdzie na strone 3 razy w ciągu minuty to wyświetli się komunikat "brak węgla"
    ?>