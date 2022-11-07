<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>polaczenie z baza</title>
    <link rel="stylesheet" href="pzbcss.css">
</head>
<body>
    <form method="POST">
        <label for="login">Login</label>
        <input type="name" name="login" id="login" placeholder="Login">

        <label for="password">Hasło</label>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <input type="submit" name="submit" value="Wyślij">
    </form>
    <form method="POST">
        <label for="login">Imie</label>
        <input type="name" name="imie" id="imie" placeholder="Imię">

        <label for="login">Nazwisko</label>
        <input type="name" name="nazwisko" id="nazwisko" placeholder="Nazwisko">

        <label for="login">Login</label>
        <input type="name" name="login" id="login" placeholder="Login">

        <label for="password">Hasło</label>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <input type="submit" name="submit" value="Wyślij">
    </form>
    <?php

    $hostname = 'localhost'; // Nazwa hosta
    $database = 'testowe'; // Nazwa bazy danych
    $username = 'root'; // Nazwa użtytkownika
    $password = ''; // Hasło

    $conn = new mysqli($hostname, $username, $password, $database);

    $queryLog = "SELECT * FROM login";
    $queryRej = "SELECT * FROM rejestracja";
    $resultLog = $conn->query($queryLog);
    $resultRej = $conn->query($queryRej);

    $sql = "INSERT INTO `rejestracja` (`user_id`, `imie`, `nazwisko`, `username`, `userpwd`)";
    
    if($resultRej = $conn -> query($sql)) echo "Dodano nowego użytkownika";
    else echo "Nie udało się dodać nowego użytkownika";

    while($rowLog = $resultLog->fetch_assoc()){
        echo $rowLog['user_id']. ' '. $rowLog['username']. ' '. $rowLog['userpwd']. "<br>";
    }

    while($rowRej = $resultRej->fetch_assoc()){
        echo $rowRej['user_id']. ' '. $rowRej['imie']. ' '. $rowRej['nazwisko']. ' '. $rowRej['username']. ' '. $rowRej['userpwd']. "<br>";
    }

    $resultLog -> close();
    $resultRej -> close();
    $conn -> close();


    /*
        if(isset($_POST['login'])){
            echo "Cześć " . htmlspecialchars($_POST['login']) . ". <br>";
        }else{
            echo "Cześć nieznajomy.";
        }

        if(isset($_POST['password'])){
            echo "Twoje hasło zostało zaszyfrowane: " . (sha1(htmlspecialchars($_POST['password']))) . ". <br>";
        }

        if(isset($_POST['bx'])){
            echo "zapamiętano";
        }
        else{
            echo "nie zapamiętano";
        }
    */
    ?>
</body>
</html>