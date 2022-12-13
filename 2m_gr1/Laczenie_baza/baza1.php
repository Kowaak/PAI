<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        define('user','root');
        define('user_password','');
        define('host','localhost');
        define('base','klasa2m');
        $connect=mysqli_connect(host,user,user_password,base);
        if(!$connect)
        die("polaczenie z baza danych nieudane");
        else{
            print "polaczenie udane";
        }
    ?>
</body>
</html>