<!DOCTYPE html>
    <head>
        <title>PAI 7</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form method="post">
            <label for="name">Imię i nazwisko</label>
            <input type="text" name="name" id="name" placeholder="Imię Nazwisko" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="mail@jakis.pl" required>

            <label for="message">Wiadomość</label>
            <textarea name="message" id="message" placeholder="Wpisz swoją wiadomość" required></textarea>

            <div id='wyglad'>

                <p>Podaj swoją płeć:</p>
                <input type="radio" name="Płeć" value="Kobieta">Kobieta
                <input type="radio" name="Płeć" value="Mężczyzna">Mężczyzna<hr>

                <p>Ile masz lat?</p>
                <input type="radio" name="Wiek" value="mniej niż 15">mniej niż 15<br>
                <input type="radio" name="Wiek" value="15-19">15-19<br>
                <input type="radio" name="Wiek" value="20-29">20-29<br>
                <input type="radio" name="Wiek" value="30-39">30-39<br>
                <input type="radio" name="Wiek" value="40-60">40-60<br>
                <input type="radio" name="Wiek" value="więcej niż 60">więcej niż 60<hr>

                <p>Jaką lubisz muzykę (możesz zaznaczyć więcej możliwości)?</p>
                <input type="checkbox" name="Muzyka" value="Rock">Rock<br>
                <input type="checkbox" name="Muzyka" value="Heavy Metal">Metal<br>
                <input type="checkbox" name="Muzyka" value="Pop">Hip Hop<br>
                <input type="checkbox" name="Muzyka" value="Techno">Techno<br>
                <input type="checkbox" name="Muzyka" value="Muzyka poważna">Muzyka poważna<br>
                <input type="checkbox" name="Muzyka" value="Inna">Inna (podaj jaka):
                <input name="Muzyka"><hr>

                <p>Jakiej przeglądarki internetowej używasz?</p>
                <select name="Przeglądarka">
                    <option selected>Chrome</option>
                    <option>Opera</option>
                    <option>Firefox</option>
                    <option>Edge</option>
                    <option>Brave</option>
                    <option>Inna</option>
                </select><hr>

                <p>Jakie znasz systemy operacyjne (możesz wybrać kilka opcji trzymając klawisz Ctrl)?</p>
                <select name="System operacyjny" multiple size="3">
                    <option selected>Windows</option>
                    <option>XOS</option>
                    <option>Linux</option>
                    <option>DoS</option>
                    <option>Inny</option><hr>
                </select>
                <br><br><br>
                <input type="reset" value="Wyczyść dane">
            </div>
            <input type="submit" name="submit" value="Wyślij">
        </form>
        <?php
        
        ?>
    </body>
</html>