<!DOCTYPE html>
    <head>
        <title>PAI</title>
        <meta charset="utf-8">
    </head>
    <body>
       <?php
            $wysokosc = 6;
            $szerokosc = 5;
            
            for($i=1;$i<=$wysokosc;$i++)
            { 
                for($x=1;$x<=$szerokosc;$x++)
                {
                    if($i == 1 || $i == 6)
                    {
                        echo "*";
                    }
                    else if($x == 1 || $x == 5)
                    {
                        echo "*";
                    }
                    else
                    {
                        echo "_";
                    }
                }
                echo "<br>";
            }
            
        ?>
    </body>
</html>