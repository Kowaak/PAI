<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baza4</title>
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
    /*    // Połączenie z serwerem
        $conn = new mysqli($servername ,$username ,$password);
        // Sprawdzanie połączenia
        if($conn->connect_error){ 
            die("polaczenie z baza danych nieudane".$conn->connect_error);
        }else{
            print "polaczenie udane"; 
        }
        $conn->close();
    */
    try {
        $conn = new PDO("mysql:host=$servername;dbname=", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Connected successfully";
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
      ?>
    ?>
</body>
</html>