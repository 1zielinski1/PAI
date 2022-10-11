<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>sprawdzenie</title>
</head>
<body>
    <form method="POST">
        <label for="name">Imię</label>
        <input type="text" name="name" id="name" placeholder="Imię" required><br>

        <label for="last name">Nazwisko</label>
        <input type="text" name="name" id="name" placeholder="Nazwisko" required>

        <p>Podaj swoją płeć:</p>
        <input type="radio" name="Płeć" value="Kobieta">Kobieta
        <input type="radio" name="Płeć" value="Mężczyzna">Mężczyzna<br>

        <input type="submit" name="submit" value="Wyślij">
    </form>
    <?php
        if(isset($_POST['Płeć'])){
            if($_POST['Płeć'] == 'Mężczyzna') echo "Witam Pana ";
            else echo "Witam Panią ";
        }
        if(isset($_POST['name'])){
            echo "". htmlspecialchars($_POST['name']) . ". ";
        }else{
            echo"";
        }
    ?>
</body>
</html>