<?php
if(isset($_POST['format']) && isset($_POST['NP']) &&  isset($_POST['EW']) && isset($_POST['NP2']) &&  isset($_POST['EW2'])){
    $format = $_POST['format'];
    $NP = $_POST['NP'];
    $EW = $_POST['EW'];
    $NP2 = $_POST['NP2'];
    $EW2 = $_POST['EW2'];
}

function obliczenia($format,$NP,$EW,$NP2,$EW2){

    if($format==1){
        $wynik = sqrt(pow($NP2-$NP,2)+pow((cos(($NP*pi())/180))*($EW2-$EW),2))*(40075.704/360);
        echo "Wynik: ".$wynik." km";
    }else if($format==2){
        $NPt = explode(".",$NP,10);
        $NPt[1] = $NPt[1]/60;
        $NPt[2] = $NPt[2]/3600;
        $NP = $NPt[0] + $NPt[1] + $NPt[2];
        
        $NP2t = explode(".",$NP2,10);
        $NP2t[1] = $NP2t[1]/60;
        $NP2t[2] = $NP2t[2]/3600;
        $NP2 = $NP2t[0] + $NP2t[1] + $NP2t[2];

        $NP3t = explode(".",$EW,10);
        $NP3t[1] = $NP3t[1]/60;
        $NP3t[2] = $NP3t[2]/3600;
        $EW = $NP3t[0] + $NP3t[1] + $NP3t[2];

        $NP4t = explode(".",$EW2,10);
        $NP4t[1] = $NP4t[1]/60;
        $NP4t[2] = $NP4t[2]/3600;
        $EW2 = $NP4t[0] + $NP4t[1] + $NP4t[2];
        //wypisanie wartości N, P, E, W
      //  print_r($NP);
      //  echo "<br>";
      //  print_r($NP2);
      //  echo "<br>";
      //  print_r($EW);
      //  echo "<br>";
      //  print_r($EW2);

        $wynik = sqrt(pow($NP2-$NP,2)+pow((cos(($NP*pi())/180))*($EW2-$EW),2))*(40075.704/360);
        echo "Wynik: ".$wynik." km";
    }else echo "Znalazłeś błąd :|";
}

if(!empty($_POST['format']) && !empty($_POST['NP']) && !empty($_POST['EW']) && !empty($_POST['NP2']) && !empty($_POST['EW2'])){
    obliczenia($format,$NP,$EW,$NP2,$EW2);
}else echo "Znalazłeś błąd :|";
?>

<!-- 51.07156949410116, 19.447694139147604 -->
<!-- 53.120965050930074, 18.017789304359425 -->