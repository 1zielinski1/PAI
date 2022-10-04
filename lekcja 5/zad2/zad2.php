<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zad 2</title>
    <link rel="stylesheet" href="zad2.css">
</head>
<body>
    <form method="POST">
        <label for="ps">Pseudonim</label>
        <input type="name" name="ps" id="ps" placeholder="Pseudonim">

        <label for="message">Komentarz</label>
        <textarea name="message" id="message" placeholder="Napisz komenatrz" required></textarea>

        <input type="submit" name="submit" value="Wyślij">
    </form>
    <?php
    if(isset($_POST['ps'])){
        echo "Cześć " . htmlspecialchars($_POST['ps']) . ". <br>";
    }else{
        echo "Cześć nieznajomy.";
    }

    if(isset($_POST['message'])){
        echo $_POST['message'] . "<br>";
    }

    if(isset($_POST['message'])){
        echo "<b>" . $_POST['message'] . "</b>";
    }




    ?>
</body>
</html>