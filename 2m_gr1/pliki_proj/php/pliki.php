<?php
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $email = $_POST['email'];
    $plec = $_POST['plec'];
    $tel = $_POST['tel'];
    $data = $_POST['data'];
    $hobby = $_POST['hobby'];

    $plik=fopen("plik.txt",'w+');
        fwrite($plik,$imie."\n");  
        fwrite($plik,$nazwisko."\n");
        fwrite($plik,$email."\n");
        fwrite($plik,$plec."\n");
        fwrite($plik,$tel."\n");
        fwrite($plik,$data."\n");
        fwrite($plik,$hobby."\n");
    fclose($plik); //wpisanie danych do pliku i jego zamkniecie   
    $plik=fopen("plik.txt",'r');
        $i=0;
        while(!feof($plik)){ //wypisywanie dopóki plik sie nie skończy
            $liczba[$i]=fgets($plik);
            echo $liczba[$i]."<br>";
            $i++;
        }
    fclose($plik); 
?>