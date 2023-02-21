<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pliki</title>
</head>
<body>
    
    <?php
    mkdir("xyz13");
    mkdir("xyz23");
    mkdir("xyz13\abc1");
    mkdir("xyz23\abc2");
    for($i = 1;$i<=10;$i++){
        fopen("xyz13/abc1/abc$i.txt", "w");
    } //utworzenie plikow w xyz13/abc1/
    for($i = 2;$i<=10;$i++){
        fopen("xyz23/abc2/abc$i.txt", "w");
    } //utworzenie plikow w xyz23/abc2/
    $a = scandir("xyz13/abc1",1);
    $b = scandir("xyz23/abc2",1);
    print_r("Folder xyz13: <br>"); //wyswietlenie zawartosci folderow
    print_r($a);
    print_r("<br>Folder xyz23: <br>");
    print_r($b);

    //Nazwa pliku po sciezce do niego 
    $path = '/xyz23/abc2/abc10.txt';
    printf(' <br> Nazwa pliku: %s <br />', basename($path));
    printf('Nazwa pliku bez rozszerzenia: %s <br />', basename($path, ".txt"));
    ?>
    
</body>
</html>