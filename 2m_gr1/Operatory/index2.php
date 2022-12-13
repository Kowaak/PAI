<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h3>Za pomocą formularza - własny projekt zademonstruj działania operatorów bitowych w języku php</h3>
<form method="POST" action="obliczenia.php">
    <input type="number" value="a">
    <input type="number" value="b">
    <select>
        <option>iloczyn bitowy & - AND</option>
        <option>iloraz? - OR</option>
        <option>??? - XOR</option>
        <option>negacja bitowa ~ - NOT</option>
        <option>Przesuniecie bitowe w lewo</option>
        <option>Przesuniecie bitowe w prawo</option>
    </select>
    <input type="submit" value="Oblicz">
</form>
</body>
</html>