<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    function directorySize($directory){
        $directorySize=0;
        //Otwieranie i odczytanie zawartości folderu
        if($dh = @opendir($directory)){
            //Przetworzenie każdego elementu folderu
            while (($filename = readdir($dh))) {
                //Pomieniecie elementow reprezentujace pewne foldery
                if($filename != "." && $filename != ".."){
                    //Plik, okreslenie wilekosci i dodanie jej do wilekosci sumarycznej
                    if(is_file($directory."/".$filename)){
                        $directorySize += filesize($directory."/".$filename);
                    }
                    //Nowy katalog, rekurencja
                    if(is_dir($directory."/".$filename)){
                        $directorySize += directorySize($directory."/".$filename);
                    }
                }
            }

        }
        @closedir($dh);
        return $directorySize;
    }
    $directory = 'xyz13/abc1/';
    $totalsize = round((directorySize($directory)/1048576),2);
    printf("Katalog %s: %f MB",$directory, $totalsize);

?>
</body>
</html>