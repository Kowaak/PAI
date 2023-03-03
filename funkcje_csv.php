1. funckej zwiazane z odczytem pliku csv
2. odczytywanie pliku csv
3. odczyt z pliku csv i zapis do tablicy

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSV</title>
</head>
<body>
    <?php
    $a = fopen("dane.csv",'r');
    while(list($id,$imie,$nazw,$tel)=fgetcsv($a, 1024, ';')){
        echo "<br>$id,$imie,$nazw,$tel";
    }
    ?>
</body>
</html>
