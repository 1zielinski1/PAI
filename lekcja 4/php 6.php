<!DOCTYPE html>
    <head>
        <title>PAI 6</title>
        <meta charset="utf-8">
    </head>
    <body>
       <?php
              $chessboard = array(
                array('w','s','g','h','k','g','s','w'),
                array('p','p','p','p','p','p','p','p'),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array(' ',' ',' ',' ',' ',' ',' ',' '),
                array('P','P','P','P','P','P','P','P'),
                array('W','S','G','H','K','G','S','W'),
            );
            echo "<pre>";
            $chessboard[6][1]=' ';
            $chessboard[4][1]="P";
            foreach($chessboard as $row)
            {
                foreach($row as $piece)
                    echo "$piece ";
                echo "<br>";
            }
            echo "</pre>";   
        ?>
    </body>
</html>