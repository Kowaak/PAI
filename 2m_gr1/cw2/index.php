<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Kalkulator</title>
</head>
<body>
    <h3>Filip Załęcki</h3>
    <h2>Program nr. 1</h2>
    <form method="POST" action="obliczenia2.php">
        <fieldset id="kalk">
            <legend>
                <h3>Kalkulator</h3>
            </legend>
            <input type="text" name="a">Podaj a<br>
            <input type="text" name="b">Podaj b<br>
            <input type="text" name="c" min="1" max="4">1 - odejmowanie, 2 - dodawanie, 3 - dzielenie, 4 - mnożenie<br>
            <input type="submit" id="przycisk" value="Oblicz">
        </fieldset>
    </form>
</body>
</html>