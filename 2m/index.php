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
       $a = scandir("scandir"); //Czyta podfolfer "scandir"
       //print_r($a);
       //var_dump($a);
       foreach($a as $plik) echo '<p>'.$plik
    ?> 
</body>
</html>






