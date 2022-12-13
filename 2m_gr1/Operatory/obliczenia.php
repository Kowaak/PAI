<?php
$a = $_POST['a'];
$b = $_POST['b'];
$c = 123;
$d = 0;
switch($c){
    case 1: 
        $d = $a & $b;
        echo"Wynik = ".$d;
        break;
    case 2: 
         $d = $a & $b;
        echo"Wynik = ".$d;
        break;
    case 3: 
        $d = $a & $b;
        echo"Wynik = ".$d;
        break;
    case 4: 
        $d = $a & $b;
        echo"Wynik = ".$d;
        break;
    case 5: 
        $d = $a & $b;
        echo"Wynik = ".$d;
        break;
    case 6: 
        $d = $a & $b;
        echo"Wynik = ".$d;
        break;
}
echo"Coś działa";
/*
    <select>
        <option>iloczyn bitowy & - AND</option> 
        <option>iloraz? - OR</option>
        <option>??? - XOR</option>
        <option>negacja bitowa ~ - NOT</option>
        <option>Przesuniecie bitowe w lewo</option>
        <option>Przesuniecie bitowe w prawo</option>
    </select>
*/
?>