<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    <input type="text" name="nazwa" placeholder="Podaj nazwe pliku do odczytania">
    <input type="submit" value="Wyslij">
    </form>
    <?php
    //zadanie
    //wyeksporowac dowolna tabele z bazy danych do csv, nazwe pliku do odczytania pobieranmy z formularza, 
    //wyswietlic formularz w 2 wersjach (tekst i tabela)
    $b = $_POST['nazwa'];
    $a = fopen("$b",'r');
    $c = fopen("$b",'r');

    while(list($id,$marka,$model,$rocznik,$kolor,$stan)=fgetcsv($a, 1024, ';')){ 
        echo "<br>$id,$marka,$model,$rocznik,$kolor,$stan";
    }
    echo "<br><br><table>";
    while(list($id,$marka,$model,$rocznik,$kolor,$stan)=fgetcsv($c, 1024, ';')){
        echo "<tr><td>$id</td><td>$marka</td><td>$model</td><td>$rocznik</td><td>$kolor</td><td>$stan</td></tr>";
    }
    echo "</table>";

    ?>
</body>
</html>