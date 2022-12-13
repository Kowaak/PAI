<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operatory bitowe</title>
</head>
<body>
<h3>Za pomocą formularza - własny projekt zademonstruj działania operatorów bitowych w języku php</h3>
<form method="POST">
    <input type="text" name="a">
    <input type="text" name="b">
    <select name="sel">
        <option value="1" >iloczyn bitowy & - AND</option>
        <option value="2" >iloraz? | - OR</option>
        <option value="3" >??? ^ - XOR</option>
        <option value="4" >negacja bitowa ~ - NOT</option>
        <option value="5" >Przesuniecie bitowe w lewo</option>
        <option value="6" >Przesuniecie bitowe w prawo</option>
    </select>
    <input type="submit" value="Oblicz">
</form>
<?php
$wynik = 0;
if (isSet($_POST['a']) && isSet($_POST['b'])){
    echo"ifisSet<br>";
    $a = (int) $_POST['a'];
    $b = (int) $_POST['b'];
    $c = (int) $_POST['sel'];
};
function obliczenia($a,$b,$c,$wynik){
    echo"Funkcja<br>";
    switch($c){
        case 1: 
            $wynik = $a & $b;
            echo"Wynik = ".$wynik;
            break;
        case 2: 
             $wynik = $a | $b;
            echo"Wynik = ".$wynik;
            break;
        case 3: 
            $wynik = $a ^ $b;
            echo"Wynik = ".$wynik;
            break;
        case 4: 
            $wynik = ~$a;
            echo"Wynik = ".$wynik;
            break;
        case 5: 
            $wynik = $a << $b;
            echo"Wynik = ".$wynik;
            break;
        case 6: 
            $wynik = $a >> $b;
            echo"Wynik = ".$wynik;
            break;
        };
};
if (!empty($_POST['a']) && !empty($_POST['b'])){
    echo"ifEmpty<br>";
    obliczenia($a,$b,$c,$wynik);
    };
?>
</body>
</html>