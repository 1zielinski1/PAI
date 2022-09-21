<!DOCTYPE html>
    <head>
        <title>PAI 4</title>
        <meta charset="utf-8">
    </head>
    <body>
       <?php
              for ($i = -11; $i < 12; $i++) {
                if ($i == -5 || $i == -10) {
                  continue;
                }
                echo " $i <br>";
              }
        ?>
    </body>
</html>