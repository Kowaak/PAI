<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script language="javascript" src="JS/range.js"></script>
    <script language="javascript" src="JS/select.js"></script>
    <title>Ogrzewanie</title>
</head>
<body>
    <!-- Aplikacja która porówna koszty ogrzewania używając różnych typów paliw dostępnych na rynku-->
    <header><h1>Obliczanie i porównywanie kosztu wybranych paliw</h1></header>
    <main>
    <aside>
        <table>
            <tr>
                <th>Rodzaj paliwa</th>
                <th>Zawartość energii (użyta w obliczeniach dla porównywanych paliw)[MJ]</th>
                <th>Średnia cena (użyta w obliczeniach dla porównywanych paliw)[zł]</th>
            </tr>
            <tr>
                <td>1 kg węgla kamiennego</td>
                <td>24,5-33,8</td>
                <td>2.33</td>
            </tr>
            <tr>
                <td>1 kg węgla brunatnego</td>
                <td>7-21</td>
                <td>0.42</td>
            </tr>
            <tr>
                <td>1 l oleju opałowego</td>
                <td>38,8</td>
                <td>8.15</td>
            </tr>
            <tr>
                <td>1 m3 gazu ziemnego</td>
                <td>34,4</td>
                <td>2.20</td>
            </tr>
            <tr>
                <td>1 l mieszanki LPG</td>
                <td>25,02</td>
                <td>3</td>
            </tr>
            <tr>
                <td>1 kg drewna</td>
                <td>18</td>
                <td>2.81</td>
            </tr>
            <tr>
                <td>1 kWh</td>
                <td>3,6</td>
                <td>1</td>
            </tr>
        </table>
    </aside>
    <article>
        <form method="POST">
        Twoje paliwo:
        <select id="paliwo" name="paliwo">
            <option value="pal1">Węgiel kamienny</option>
            <option value="pal2">Węgiel brunatny</option>
            <option value="pal3">Olej opałowy(litry) </option>
            <option value="pal4">Gaz ziemny</option>
            <option value="pal5">Mieszanka LPG(litry)</option>
            <option value="pal6">Drewno</option>
            <option value="pal7">Prąd</option>
        </select><br>
        <input type="text" id="ilosc" name="ilosc" placeholder="Ilość (kg, m3, l) na rok">
        <input type="text" id="cena" name="cena" placeholder="Cena za jednostkę">(WYMAGANE!)<br>
        Wydajność twojego pieca:<br>
        <input type="range" min="1" max="100" id="wyd" name="wyd1" onmousemove="setValue()">
        <input type="number" id="war1" readonly>%<br>
        Wydajność pieca z którym chcesz porównać:<br>
        <input type="range" min="1" max="100" id="wyd2" name="wyd2" onmousemove="setValue3()">
        <input type="number" id="war3" readonly>%<br>
        Kaloryczność wegla kamiennego z którym chcesz porównać:
        <input type="number" name="kalorycznosc1" min="24" max="34" placeholder="24 - 34">MJ (WYMAGANE!)<br>
        Kaloryczność węgla brunatnego z którym chcesz porównać:
        <input type="number" name="kalorycznosc2" min="7" max="21" placeholder="7 - 21">MJ (WYMAGANE!)<br>
        <input type="submit" id="przycisk" value="Oblicz">
        </form>
        <?php
        if(isset($_POST['ilosc']) && isset($_POST['cena']) && isset($_POST['paliwo']) && isset($_POST['kalorycznosc1']) && isset($_POST['kalorycznosc2']) && isset($_POST['wyd1']) && isset($_POST['wyd2'])){
            $ilosc = $_POST['ilosc'];
            $cena = $_POST['cena'];
            $paliwo = $_POST['paliwo'];
            $kalorycznosc1 = $_POST['kalorycznosc1'];
            $kalorycznosc2 = $_POST['kalorycznosc2'];
            $wyd1 = $_POST['wyd1'] / 100;
            $wyd2 = $_POST['wyd2'] / 100;
        };
        function obliczenia($ilosc,$cena,$paliwo,$kalorycznosc1,$kalorycznosc2,$wyd1,$wyd2){
            switch($paliwo){
                    case "pal1":
                        $er = $kalorycznosc1*$ilosc*$wyd1;
                        $cr = $ilosc*$cena;
                        echo"Energia na rok: ". $er;
                        echo"<br>";
                        echo"Cena na rok: ". $cr;
                        porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo);
                    break;
                    case "pal2":
                        $er = $kalorycznosc2*$ilosc*$wyd1;
                        $cr = $ilosc*$cena;
                        echo"Energia na rok: ". $er;
                        echo"<br>";
                        echo"Cena na rok: ". $cr;
                        porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo);
                    break;
                    case "pal3":
                        $er = 38.8*$ilosc*$wyd1;
                        $cr = $ilosc*$cena;
                        echo"Energia na rok: ". $er;
                        echo"<br>";
                        echo"Cena na rok: ". $cr;
                        porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo);
                    break;
                    case "pal4":
                        $er = 34.4*$ilosc*$wyd1;
                        $cr = $ilosc*$cena;
                        echo"Energia na rok: ". $er;
                        echo"<br>";
                        echo"Cena na rok: ". $cr;
                        porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo);
                    break;
                    case "pal5";
                        $er = 25.02*$ilosc*$wyd1;
                        $cr = $ilosc*$cena;
                        echo"Energia na rok: ". $er;
                        echo"<br>";
                        echo"Cena na rok: ". $cr;
                        porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo);
                    break;
                    case "pal6";
                        $er = 18*$ilosc*$wyd1;
                        $cr = $ilosc*$cena;
                        echo"Energia na rok: ". $er;
                        echo"<br>";
                        echo"Cena na rok: ". $cr;
                        porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo);
                    break;
                    case "pal7";
                        $er = 3.6*$ilosc*$wyd1;
                        $cr = $ilosc*$cena;
                        echo"Energia na rok: ". $er;
                        echo"<br>";
                        echo"Cena na rok: ". $cr;
                        echo"<br>Ilość kWh na rok: ". $c7;
                        echo"<br>Cena:". $c7;
                        porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo);
                    break;
                }
        }
        function porownanie($kalorycznosc1,$kalorycznosc2,$er,$cr,$wyd2,$paliwo){
            echo"<br><h3>Porównanie: </h3>";
            $c1 = round($er/$kalorycznosc1*$wyd2,2);
            $c2 = round($er/$kalorycznosc2*$wyd2,2);
            $c3 = round($er/38.8*$wyd2,2) ;
            $c4 = round($er/34.4*$wyd2,2);
            $c5 = round($er/25.02*$wyd2,2);
            $c6 = round($er/18*$wyd2,2);
            $c7 = round($er/3.6*$wyd2,2);
            switch($paliwo){
                case "pal1":
                    echo"<br>Ilość Węgla Brunatnego na rok: ".$c2;
                    echo"<br>Cena:". round($c2 / 0.42,2);
                    echo"<br>Ilość Oleju Opałowego na rok: ".$c3;
                    echo"<br>Cena:". round($c3 * 8.15,2);
                    echo"<br>Ilość Gazu Ziemnego na rok: ".$c4;
                    echo"<br>Cena:". round($c4 * 2.2,2);
                    echo"<br>Ilość Mieszanki LPG na rok: ". $c5;
                    echo"<br>Cena:". round($c5 * 3,2);
                    echo"<br>Ilośc drewna na rok: ". $c6;
                    echo"<br>Cena:". round($c6 * 2.81,2);
                    echo"<br>Ilość kWh na rok: ". $c7;
                    echo"<br>Cena:". $c7;
                break;
                case "pal2":
                    echo"<br>Ilość Węgla Kamiennego na rok: ".$c1;
                    echo"<br>Cena:". round($c1*2.33,2);
                    echo"<br>Ilość Oleju Opałowego na rok: ".$c3;
                    echo"<br>Cena:". round($c3 * 8.15,2);
                    echo"<br>Ilość Gazu Ziemnego na rok: ".$c4;
                    echo"<br>Cena:". round($c4 * 2.2,2);
                    echo"<br>Ilość Mieszanki LPG na rok: ". $c5;
                    echo"<br>Cena:". round($c5 * 3,2);
                    echo"<br>Ilośc drewna na rok: ". $c6;
                    echo"<br>Cena:". round($c6 * 2.81,2);
                    echo"<br>Ilość kWh na rok: ". $c7;
                    echo"<br>Cena:". $c7;
                break;
                case "pal3";
                    echo"<br>Ilość Węgla Kamiennego na rok: ".$c1;
                    echo"<br>Cena:". round($c1*2.33,2);
                    echo"<br>Ilość Węgla Brunatnego na rok: ".$c2;
                    echo"<br>Cena:". round($c2 / 0.42,2);
                    echo"<br>Ilość Gazu Ziemnego na rok: ".$c4;
                    echo"<br>Cena:". round($c4 * 2.2,2);
                    echo"<br>Ilość Mieszanki LPG na rok: ". $c5;
                    echo"<br>Cena:". round($c5 * 3,2);
                    echo"<br>Ilośc drewna na rok: ". $c6;
                    echo"<br>Cena:". round($c6 * 2.81,2);
                    echo"<br>Ilość kWh na rok: ". $c7;
                    echo"<br>Cena:". $c7;
                break;
                case "pal4":
                    echo"<br>Ilość Węgla Kamiennego na rok: ".$c1;
                    echo"<br>Cena:". round($c1*2.33,2);
                    echo"<br>Ilość Węgla Brunatnego na rok: ".$c2;
                    echo"<br>Cena:". round($c2 / 0.42,2);
                    echo"<br>Ilość Oleju Opałowego na rok: ".$c3;
                    echo"<br>Cena:". round($c3 * 8.15,2);
                    echo"<br>Ilość Mieszanki LPG na rok: ". $c5;
                    echo"<br>Cena:". round($c5 * 3,2);
                    echo"<br>Ilośc drewna na rok: ". $c6;
                    echo"<br>Cena:". round($c6 * 2.81,2);
                    echo"<br>Ilość kWh na rok: ". $c7;
                    echo"<br>Cena:". $c7;
                break;
                case "pal5":
                    echo"<br>Ilość Węgla Kamiennego na rok: ".$c1;
                    echo"<br>Cena:". round($c1*2.33,2);
                    echo"<br>Ilość Węgla Brunatnego na rok: ".$c2;
                    echo"<br>Cena:". round($c2 / 0.42,2);
                    echo"<br>Ilość Oleju Opałowego na rok: ".$c3;
                    echo"<br>Cena:". round($c3 * 8.15,2);
                    echo"<br>Ilość Gazu Ziemnego na rok: ".$c4;
                    echo"<br>Cena:". round($c4 * 2.2,2);
                    echo"<br>Ilośc drewna na rok: ". $c6;
                    echo"<br>Cena:". round($c6 * 2.81,2);
                    echo"<br>Ilość kWh na rok: ". $c7;
                    echo"<br>Cena:". $c7;
                break;
                case "pal6":
                    echo"<br>Ilość Węgla Kamiennego na rok: ".$c1;
                    echo"<br>Cena:". round($c1*2.33,2);
                    echo"<br>Ilość Węgla Brunatnego na rok: ".$c2;
                    echo"<br>Cena:". round($c2 / 0.42,2);
                    echo"<br>Ilość Oleju Opałowego na rok: ".$c3;
                    echo"<br>Cena:". round($c3 * 8.15,2);
                    echo"<br>Ilość Gazu Ziemnego na rok: ".$c4;
                    echo"<br>Cena:". round($c4 * 2.2,2);
                    echo"<br>Ilość Mieszanki LPG na rok: ". $c5;
                    echo"<br>Cena:". round($c5 * 3,2);
                    echo"<br>Ilość kWh na rok: ". $c7;
                    echo"<br>Cena:". $c7;
                break;
                case "pal7":
                    echo"<br>Ilość Węgla Kamiennego na rok: ".$c1;
                    echo"<br>Cena:". round($c1*2.33,2);
                    echo"<br>Ilość Węgla Brunatnego na rok: ".$c2;
                    echo"<br>Cena:". round($c2 / 0.42,2);
                    echo"<br>Ilość Oleju Opałowego na rok: ".$c3;
                    echo"<br>Cena:". round($c3 * 8.15,2);
                    echo"<br>Ilość Gazu Ziemnego na rok: ".$c4;
                    echo"<br>Cena:". round($c4 * 2.2,2);
                    echo"<br>Ilość Mieszanki LPG na rok: ". $c5;
                    echo"<br>Cena:". round($c5 * 3,2);
                    echo"<br>Ilośc drewna na rok: ". $c6;
                    echo"<br>Cena:". round($c6 * 2.81,2);
                break;
            }
        }
        if(!empty($_POST['ilosc']) && !empty($_POST['paliwo']) && !empty($_POST['cena']) && !empty($_POST['kalorycznosc1']) && !empty($_POST['kalorycznosc2'])){
            obliczenia($ilosc,$cena,$paliwo,$kalorycznosc1,$kalorycznosc2,$wyd1,$wyd2);
        }else echo"Nie wypełniłeś wszystkich pól.";
        ?>
    </article>
    </main>
    <footer>Autor: <a href="https://github.com/Kowaak">Filip Załęcki</a><br>Wszelkie prawa zastrzeżone</footer>
</body>
</html>