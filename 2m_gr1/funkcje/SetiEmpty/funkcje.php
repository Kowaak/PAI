<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funkcje</title>
</head>
<body>
    <form method="POST">
    <input type="text" name="a" placeholder="Podaj a">
    <input type="text" name="b" placeholder="Podaj b">
    <input type="text" name="c" placeholder="Podaj c">
    <input type="submit" value="Oblicz">
    </form>
    <?php
    if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
        $zm1 = $_POST['a'];
        $zm2 = $_POST['b'];
        $zm3 = $_POST['c'];
    };
    function dodaj($zm1,$zm2,$zm3){
        echo " wynikiem dodawania $zm1 + $zm2 + $zm3 jest: ";
        echo $zm1+$zm2+$zm3;
        echo ".";
    };
    if(!empty($_POST['a']) && !empty($_POST['b']) && !empty($_POST['c'])){
        dodaj($zm1,$zm2,$zm3);
    }
    ?>
</body>
</html>