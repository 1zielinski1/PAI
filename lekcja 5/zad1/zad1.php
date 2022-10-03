<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 1</title>
    <link rel="stylesheet" href="zad1.css">
</head>
<body>
    <form method="POST">
        <label for="login">Login</label>
        <input type="name" name="login" id="login" placeholder="Login">

        <label for="password">Hasło</label>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <label for="checkbox">Zapamiętaj mnie</label>
        <input type="checkbox" name="bx" id="chceckbox">

        <input type="submit" name="submit" value="Wyślij">
    </form>
    <?php
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
    ?>
</body>
</html>