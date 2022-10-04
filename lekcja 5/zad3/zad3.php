<!DOCTYPE html>
    <head>
        <title>PAI 7</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="zad3.css">
    </head>
    <body>
        <form method="post">
            
                <p>Jakie systemy operacyjne używasz na codzień (możesz wybrać kilka opcji trzymając klawisz Ctrl)?</p>
                <select name="so" multiple size="3">
                    <option selected>Windows</option>
                    <option>XOS</option>
                    <option>Linux</option>
                    <option>Inny</option>
                </select><hr>

                <p>Ile ci zajmuje ranna toaleta?</p>
                <p><input type="radio" name="wc" value="mniej niż 15">mniej niż 15 min</p><br>
                <p><input type="radio" name="wc" value="15-19">15-30 min</p><br>
                <p><input type="radio" name="wc" value="20-29">Więcej niż 30 min</p><br><hr>

                <p>Ulubiony gatunek gier:</p>
                <p><input type="checkbox" name="gry[]" value="RPG" />RPG</p>
                <p><input type="checkbox" name="gry[]" value="FPS" />FPS</p>
                <p><input type="checkbox" name="gry[]" value="Ścigałki" />Ścigałki</p>

                <br><br><br>
                <input type="submit" name="submit" value="Wyślij">
        </form>
        <?php

        if(isset($_POST['so'])){
            echo "Wybran* system* to: " . $_POST['so'] . '<br>';
        }

        if(isset($_POST['wc'])){
            if($_POST['wc'] == 'mniej niż 15 min') echo "Wybrano: Mniej niż 15 min";
            else if($_POST['wc'] == '15-30 min') echo "Wybrano: 15-30 min";
            else echo "Wybrano: Więcej niż 30 min" . '<br>';
        }
                
        if(isset($_POST['gry'])){
            for($i=0; $i<count($_POST['gry']); $i++){
                echo "Wybrano: " . $_POST['gry'][$i] . "<br />";
            }
        }else{
            echo "Nie wybrano ani jednej serii gier :(";
        }

        ?>
    </body>
</html>