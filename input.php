<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("dbData.php");
        $word = $_POST['word'];
        $translation = $_POST['trans'];
        
        $mysqli = new mysqli($server, $login, $pass, $dbName);
        if(mysqli_connect_errno()){
            echo "Nie można połączyć z bazą danych. Kod błędu".mysqli_connect_error()."\n";
        }
        else{
            echo "Połączono z bazą danych...\n";
        }

        if($result = $mysqli -> query("INSERT INTO dictionary SET `word`='$word', `translation`='$translation'")){
            echo "Dodano dane!\n";
        }
        else{
            echo "Błąd! Nie dodano rekordu\n";
        }
    ?>
</body>
</html>
