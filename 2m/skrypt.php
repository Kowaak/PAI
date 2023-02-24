<?php



$pathinfo = pathinfo("./htdocs/scnadir/index.php");
printf("Ścieżka do katalogu <br />".$pathinfo['dirname']); // dirname wypisuje scieszkw do podange pliku
printf("<br />Pełna nazwa pliku <br />".$pathinfo['basename']);
printf("<br />Rozszerzenie pliku <br />".$pathinfo['extension']);
printf("<br />Nazwa pliku <br />".$pathinfo['filename']);

$path="/scandir/index.php";
$absolutePath = realpath($path);
printf("Sciezka: ".$absolutePath);


?>