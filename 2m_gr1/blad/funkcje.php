<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <?php
    /*
    Argumenty do funcji moga byc przekazywane na dwa sposoby
    - wartość
    - referencje
    function zwieksz_liczbe($x)

    */
    function zwieksz_liczbe(&$x) //bez & (referencji) x = 5 a z & x = 11
        {
            $x+=6; //zwiększenie liczby o 6
        }
    $x=5;
    echo "Przed wywołaniem funkcji x = ".$x;
    zwieksz_liczbe($x);
    echo "<br>Po wywołaniu funkcji x = ".$x;
    function pole_trojkata($x=6, $y=4)
    {
        return ($x+$y)/2;
    }
    $pole1=pole_trojkata();
    echo"<br>Funkcja z argumentami domyślnymi daje wartość: ".$pole1;
    $pole2=pole_trojkata(7,8);
    echo"<br>Funkcja bez argumentów domyślnych daje wartość: ".$pole2;
    ?>
</body>
</html>