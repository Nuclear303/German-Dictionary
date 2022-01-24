<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/php.css">

</head>
<body>
    <?php
        include("dbData.php");
        $word = $_POST['word'];
        $translation = $_POST['trans'];
        
        $mysqli = new mysqli($server, $login, $pass, $dbName);
        if(mysqli_connect_errno()){
            echo "Nie można połączyć z bazą danych. Kod błędu".mysqli_connect_error()."<br>";
        }
        else{
            echo "Połączono z bazą danych...<br>";
        }

        if($result = $mysqli -> query("INSERT INTO dictionary SET `word`='$word', `translation`='$translation'")){
            echo "Dodano dane!<br>
            <a href='index.html'><input type='button' value='Wróć na stronę główną'></a>
            ";
        }
        else{
            echo "Błąd! Nie dodano rekordu<br>
            <a href='index.html'><input type='button' value='Wróć na stronę główną'></a>
            ";
        }
    ?>
</body>
</html>
