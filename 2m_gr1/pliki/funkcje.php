<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje na plikach</title>
</head>
<body>
    <?php
        $plik=fopen("moj_plik.txt",'r');
        $znaki = fread($plik,30);  //wypisuje pierwsze 30 znaków, pomija enter
        echo $znaki;
        fclose($plik);
        echo"<br>-------------------------------------------------------------------------<br>";
        $plik=fopen("moj_plik.txt",'r');
        $znaki = fgets($plik); //wypisuje do entera
        echo $znaki;
        fclose($plik);
        echo"<br>-------------------------------------------------------------------------<br>";
        $plik=fopen("moj_plik.txt",'r');
        $i=0;
        while(!feof($plik)){ //dopóki plik sie nie skończy
            $liczba[$i]=fgets($plik);
            echo $liczba[$i]."<br>";
            $i++;
        }
        fclose($plik);
        echo"<br>-------------------------------------------------------------------------<br>";
    ?>
</body>
</html>