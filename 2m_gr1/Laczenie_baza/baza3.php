<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Łączenie z bazą 3</title>
</head>
<body>
    <!-- Utwórz formularz z odpowiedznią ilością pól do połączenia z bazą i serwerem -->
    <form>
        <input type="text" name="host" placeholder="host">Wpisz nazwę hosta<br>
        <input type="text" name="user" placeholder="użytkownik">Wpisz nazwę użytkownika<br>
        <input type="text" name="pass" placeholder="hasło">Wpisz hasło<br>
        <input type="text" name="database" placeholder="Nazwa bazy">Wpisz nazwę bazy<br>
        <input type="text" name="database" placeholder="nazwa nowej bazy">Wpisz nazwę nowej bazy<br>
        <input type="submit" value="Połącz"><br>
    </form>
    <?php
        if(isset($_POST['host']) && isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['database'])){
            $db_host = $_POST['host'];
            $db_user = $_POST['user'];
            $db_pass = $_POST['pass'];
            $db_database = $_POST['database'];
        }
        if(!empty($_POST['host']) && !empty($_POST['user']) && !empty($_POST['pass']) && !empty($_POST['database'])){
            $connect=@mysqli_connect($db_host,$db_user,$db_pass); //samo połączenie z bazą
            if(!$connect)
                die("polaczenie z baza danych nieudane");
            else{
                print "polaczenie udane";
            }
            $nowa=$_POST['nowa'];
            $utworz_baze="Create Database $nowa";
            mysqli_query($connect,$utworz_baze);
        }
    ?>
</body>
</html>